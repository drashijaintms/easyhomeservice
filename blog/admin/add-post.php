<?php 
session_start();
include('includes/config.php');

// Show errors during development (remove/adjust on prod)
ini_set('display_errors', '0');
error_reporting(0);

if (empty($_SESSION['login'])) { 
    header('location:index.php');
    exit;
}

function slugify($text) {
    $text = trim($text);
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9\-]+/i', '-', $text);
    $text = preg_replace('/-+/', '-', $text);
    $text = trim($text, '-');
    return $text ?: 'post';
}

/**
 * Ensure slug uniqueness by appending -2, -3, ...
 */
function unique_slug(mysqli $con, $base_slug) {
    $slug = $base_slug;
    $i = 2;

    $check = mysqli_prepare($con, "SELECT 1 FROM tblposts WHERE slug = ? LIMIT 1");
    if (!$check) return $slug; // fallback

    while (true) {
        mysqli_stmt_bind_param($check, "s", $slug);
        mysqli_stmt_execute($check);
        mysqli_stmt_store_result($check);
        if (mysqli_stmt_num_rows($check) === 0) {
            mysqli_stmt_close($check);
            return $slug;
        }
        // exists — try with suffix
        $slug = $base_slug . '-' . $i;
        $i++;
        // continue loop
    }
}

$msg = '';
$error = '';

/**
 * Shared handler to insert the post
 */
function handle_post_submit(mysqli $con, $is_publish, &$msg, &$error) {
    // Required inputs
    $posttitle           = isset($_POST['posttitle']) ? trim($_POST['posttitle']) : '';
    $catid               = isset($_POST['category']) ? (int)$_POST['category'] : 0;
    $postdetails         = isset($_POST['postdescription']) ? $_POST['postdescription'] : '';
    $postmetatitle       = isset($_POST['postmetatitle']) ? trim($_POST['postmetatitle']) : '';
    $postmetadescription = isset($_POST['postmetadescription']) ? trim($_POST['postmetadescription']) : '';
    $postkeywords        = isset($_POST['postkeywords']) ? trim($_POST['postkeywords']) : '';
    $author              = isset($_POST['author']) ? trim($_POST['author']) : '';
    $customSlug          = isset($_POST['slug']) ? trim($_POST['slug']) : '';
     $featurealt          = isset($_POST['featurealt']) ? trim($_POST['featurealt']) : '';
    

    // Basic validation
    if ($posttitle === '' || $catid <= 0 || $postmetatitle === '' || $postmetadescription === '' || $postkeywords === '' || $author === '' || $featurealt === '') {
        $error = "Please fill in all required fields.";
        return;
    }

    // Rewrite editor image paths
    $postdetails = str_replace('src="postimages/', 'src="admin/postimages/', $postdetails);
    $html_post_description = htmlspecialchars($postdetails, ENT_QUOTES, 'UTF-8');

    // Slug + URL
    $base_slug = ($customSlug !== '') ? slugify($customSlug) : slugify($posttitle);
    $slug = unique_slug($con, $base_slug);
    $url  = $slug;

    // Image handling (required)
    if (empty($_FILES['postimage']['name'])) {
        $error = "Feature image is required.";
        return;
    }

    $imgfile = $_FILES['postimage']['name'];
    $ext = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
    $basename = pathinfo($imgfile, PATHINFO_FILENAME); // original filename without extension
    $allowed_extensions = array("jpg","jpeg","png","gif");

    if (!in_array($ext, $allowed_extensions)) {
        $error = "Invalid image format. Only jpg / jpeg / png / gif allowed.";
        return;
    }

    // Keep original filename, add hyphen + random number
    $randomNumber = rand(1000, 9999);
    $imgnewfile = $basename . '-' . $randomNumber . '.' . $ext;

    $uploadDir = "postimages/";
    if (!is_dir($uploadDir)) {
        @mkdir($uploadDir, 0755, true);
    }

    if (!move_uploaded_file($_FILES["postimage"]["tmp_name"], $uploadDir . $imgnewfile)) {
        $error = "Failed to upload the image.";
        return;
    }

    $status = $is_publish ? 1 : 0;

    // Prepared statement insert
    $sql = "INSERT INTO tblposts
        (PostTitle, CategoryId, PostDetails, PostUrl, Is_Active, PostImage, metatitle, metadescription, keywords, author, slug, featurealt)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);
    if (!$stmt) {
        $error = "Prepare failed: " . mysqli_error($con);
        return;
    }

    mysqli_stmt_bind_param(
        $stmt,
        "sississsssss",
        $posttitle,
        $catid,
        $html_post_description,
        $url,
        $status,
        $imgnewfile,
        $postmetatitle,
        $postmetadescription,
        $postkeywords,
        $author,
        $slug,
        $featurealt
    );

    $execOk = mysqli_stmt_execute($stmt);

    if ($execOk) {
        $msg = $is_publish ? "Post successfully published." : "Draft saved successfully.";
    } else {
        $error = "Database error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}


// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        handle_post_submit($con, true, $msg, $error);
    } elseif (isset($_POST['save-drafts'])) {
        handle_post_submit($con, false, $msg, $error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Frontpage">

        <!-- App favicon -->
        <link rel="icon" type="image/x-icon" href="https://petadot.com/assets/images/fevicon.png" />
        <!-- App title -->
        <title>EasyHomeService | Add Post</title>

        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 

        <!-- jQuery + Datatables -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 

        <!-- TinyMCE -->
        <script src="https://cdn.tiny.cloud/1/r4ac6np47zpm5z2ktpxeqydphlzxpsec7m2zz935f5sk0kle/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
        function getSubCat(val) {
          $.ajax({
            type: "POST",
            url: "get_subcategory.php",
            data: 'catid=' + val,
            success: function(data){
              $("#subcategory").html(data);
            }
          });
        }
        </script>
    </head>

    <body class="fixed-left">
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php');?>

            <div class="content-page">
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Post </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><a href="#">Post</a></li>
                                        <li><a href="#">Add Post </a></li>
                                        <li class="active">Add Post</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-10 col-sm-offset-1">  
                            <?php if(!empty($msg)){ ?>
                              <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                              </div>
                            <?php } ?>

                            <?php if(!empty($error)){ ?>
                              <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                              </div>
                            <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                      <form name="addpost" method="post" enctype="multipart/form-data">
                                        <div class="form-group m-b-20">
                                          <label for="posttitle">Post Title</label>
                                          <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
                                        </div>

                                        <div class="row">
                                          <div class="col-sm-12 mb-2">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Custom Slug (Optional)</b></h4>
                                              <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter custom slug (optional)">
                                              <small class="text-muted">If left blank, it will be auto-generated from the post title. Duplicates will get a numeric suffix automatically.</small>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                          <label for="category">Category</label>
                                          <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
                                            <option value="">Select Category</option>
                                            <?php
                                            // Fetch active categories
                                            $ret = mysqli_query($con,"SELECT id, CategoryName FROM tblcategory WHERE Is_Active=1");
                                            while ($result = mysqli_fetch_assoc($ret)) {
                                                echo '<option value="'.(int)$result['id'].'">'.htmlentities($result['CategoryName']).'</option>';
                                            }
                                            ?>
                                          </select>
                                        </div>

                                        <!--
                                        <div class="form-group m-b-20">
                                          <label for="subcategory">Sub Category</label>
                                          <select class="form-control" name="subcategory" id="subcategory"></select>
                                        </div>
                                        -->

                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Post Meta Title</b></h4>
                                              <input type="text" class="form-control" id="postmetatitle" name="postmetatitle" placeholder="Enter Post meta title" required>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Post Meta Description</b></h4>
                                              <input type="text" class="form-control" id="postmetadescription" name="postmetadescription" placeholder="Enter Post meta Description" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Post Keywords</b></h4>
                                              <input type="text" class="form-control" id="postkeywords" name="postkeywords" placeholder="Enter Post Keywords" required>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Author</b></h4>
                                              <input type="text" class="form-control" id="author" name="author" placeholder="Enter Author" required>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
                                              <textarea id="editor" name="postdescription"></textarea>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Feature Img Alt Tag</b></h4>
                                              <input type="text" class="form-control" id="featurealt" name="featurealt" placeholder="Enter Feature Img Alt Tag" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="card-box">
                                              <h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
                                              <input type="file" class="form-control" id="postimage" name="postimage" required>
                                            </div>
                                          </div>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
                                        <button type="submit" name="save-drafts" class="btn btn-primary waves-effect waves-light">Save as Draft</button>
                                        <button type="reset" class="btn btn-danger waves-effect waves-light">Discard</button>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->
                </div> <!-- content -->

                <?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- Core JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>

        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
        tinymce.init({
          selector: 'textarea#editor',
          height: 520,
          plugins: 'image toc preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons code',
          toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | image link media template codesample | toc pagebreak | charmap emoticons | fullscreen preview save print | insertfile anchor | ltr rtl | accordionInsert | ctaInsert | doYouKnowInsert | code',
          toolbar_mode: 'sliding',
          menubar: 'file edit view insert format tools table help',
          content_css: '//www.tiny.cloud/css/codepen.min.css',
          autosave_ask_before_unload: true,
          autosave_interval: '30s',
          autosave_retention: '2m',
          relative_urls: false,       // keep URLs absolute
          remove_script_host: false,  // keep domain in the URL
          convert_urls: true,
          image_caption: true,
          image_advtab: true,
          automatic_uploads: true,
          link_default_rel: 'nofollow',
          images_upload_url: 'upload_image.php',
          file_picker_types: 'image',
          file_picker_callback: function (callback, value, meta) {
            if (meta.filetype === 'image') {
              const input = document.createElement('input');
              input.setAttribute('type', 'file');
              input.setAttribute('accept', 'image/*');
              input.onchange = function () {
                const file = this.files[0];
                const formData = new FormData();
                formData.append('file', file);

                fetch('upload_image.php', {
                  method: 'POST',
                  body: formData
                })
                  .then(response => response.json())
                  .then(data => {
                    if (data.location) {
                      callback(data.location, { alt: file.name });
                    } else {
                      alert(data.error || 'Image upload failed.');
                    }
                  })
                  .catch(() => {
                    alert('Image upload failed.');
                  });
              };
              input.click();
            }
          },

          setup: function (editor) {
            editor.ui.registry.addButton('accordionInsert', {
              text: 'Add Accordion',
              onAction: function () {
                editor.windowManager.open({
                  title: 'Insert Accordion Item',
                  body: {
                    type: 'panel',
                    items: [
                      { type: 'input', name: 'question', label: 'Question' },
                      { type: 'textarea', name: 'answer', label: 'Answer' }
                    ]
                  },
                  buttons: [
                    { type: 'cancel', text: 'Cancel' },
                    { type: 'submit', text: 'Insert', primary: true }
                  ],
                  onSubmit: function (api) {
                    const data = api.getData();
                    const html = `
<p></p><div class="accordion">
  <div class="accordion-item">
    <button class="accordion-header">
      <span class="icon">+</span>
      ${data.question}
    </button>
    <div class="accordion-body" style="display: none;">
      <p>${data.answer}</p>
    </div>
  </div>
</div><p></p>`;
                    editor.execCommand('mceInsertContent', false, html);
                    api.close();
                  }
                });
              }
            });
            editor.ui.registry.addButton('ctaInsert', {
    text: 'Add CTA',
    onAction: function () {

        editor.windowManager.open({
            title: 'Insert CTA',
            body: {
                type: 'panel',
                items: [
                    {
                        type: 'input',
                        name: 'heading',
                        label: 'Heading'
                    },
                    {
                        type: 'textarea',
                        name: 'description',
                        label: 'Description'
                    },
                    {
                        type: 'input',
                        name: 'buttonText',
                        label: 'Button Text'
                    },
                    {
                        type: 'input',
                        name: 'buttonLink',
                        label: 'Button URL'
                    }
                ]
            },
            buttons: [
                {
                    type: 'cancel',
                    text: 'Cancel'
                },
                {
                    type: 'submit',
                   	text: 'Insert',
                    primary: true
                }
            ],

            onSubmit: function (api) {

                const data = api.getData();

                const html = `
<div class="container my-4 px-0">
    <div class="p-4 rounded shadow-sm" style="border-left:5px solid #04d36f;background:#f8f9fa;transition:transform .3s ease;">

        <div class="mb-3 fw-bold" style="font-size:1.3rem;color:#04d36f;text-align:center;">
            ${data.heading}
        </div>

        <p class="mb-3" style="font-size:1rem;color:#333;text-align:center;white-space:pre-line;">
            ${data.description}
        </p>

        <div style="display:flex;justify-content:center;align-items:center;">
            <a href="${data.buttonLink}"
               target="_blank"
               rel="noopener"
               style="
                    display:block;
                    height:48px;
                    width:175px;
                    background:#04d36f;
                    color:#fff;
                    text-align:center;
                    font-weight:bold;
                    font-size:17px;
                    line-height:48px;
                    font-family:Poppins,sans-serif;
                    border-radius:5px;
                    text-decoration:none;
                    transition:transform .3s,background-color .3s;
                    margin-top:16px;">
                ${data.buttonText}
            </a>
        </div>

    </div>
</div>

<p></p>
`;

                editor.insertContent(html);
                api.close();
            }
        });

    }
});
            editor.ui.registry.addButton('doYouKnowInsert', {
    text: 'Do You Know?',

    onAction: function () {

        editor.windowManager.open({
            title: 'Insert Do You Know Box',

            body: {
                type: 'panel',
                items: [
                    {
                        type: 'textarea',
                        name: 'content',
                        label: 'Content'
                    }
                ]
            },

            buttons: [
                {
                    type: 'cancel',
                    text: 'Cancel'
                },
                {
                    type: 'submit',
                    text: 'Insert',
                    primary: true
                }
            ],

            onSubmit: function (api) {

                const data = api.getData();

                const html = `
<div class="p-4 rounded shadow-sm mb-4" style="background-color:#fff9e6;border-left:5px solid #ffc107;">
    <p id="heading-6" class="h3 mb-3" style="font-size:1.4rem;color:#ffc107;">
        Do You Know?
    </p>

    <p style="font-size:1.05rem;color:#444;white-space:pre-line;">
        ${data.content}
    </p>
</div>

<p></p>
`;

                editor.insertContent(html);
                api.close();
            }
        });

    }
});
          }
          
        });
        
        </script>
        
    </body>
</html>
