<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['update']))
{
$posttitle=$_POST['posttitle'];

$catname = $_POST['category'];

// Assuming $con is your mysqli connection object
$sql = mysqli_query($con, "SELECT id FROM tblcategory WHERE CategoryName = '$catname'");

if ($sql->num_rows > 0) {
    // Fetch the result
    $row = $sql->fetch_assoc(); // Changed $result to $sql
    $catid = $row['id'];
} else {
    echo "Category not found for $catname";
}



echo $catid;

$postdetails=$_POST['postdescription'];

// Adjust image paths in post description
$adjusted_postdetails = str_replace('src="postimages/', 'src="admin/postimages/', $_POST['postdescription']);

// Escape HTML entities for safe storage
$html_post_description = htmlspecialchars($adjusted_postdetails);

$arr = explode(" ",$posttitle);
$url=implode("-",$arr);
$status=1;
$postid=intval($_GET['pid']);

$query1=mysqli_query($con,"update tblposts set PostTitle='$posttitle',CategoryId='$catid',PostDetails='$html_post_description' where id='$postid'");

if($query1)
{
    
$msg="Post updated ";
echo $msg;
}
else{
$error="Something went wrong . Please try again.";    
} 

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Front Page">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Front Page | Add Post</title>

        <!-- Summernote css -->
        <!--<link href="../plugins/summernote/summernote.css" rel="stylesheet" />-->

        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!--<link href="assets/css/core.css" rel="stylesheet" type="text/css" />-->
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <!--<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />-->
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<!--<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">-->
  <!--      <script src="assets/js/modernizr.min.js"></script>-->

<script src="https://cdn.tiny.cloud/1/r4ac6np47zpm5z2ktpxeqydphlzxpsec7m2zz935f5sk0kle/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Post </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Posts </a>
                                        </li>
                                        <li class="active">
                                            Add Post
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>

<?php
$postid1=intval($_GET['pid']);
$query = mysqli_query($con, "SELECT 
                                p.id AS postid, 
                                p.PostImage, 
                                p.PostTitle AS title, 
                                p.PostDetails, 
                                p.CategoryId,
                                c.CategoryName AS category_name
                              FROM tblposts AS p
                              INNER JOIN tblcategory AS c ON p.CategoryId = c.id
                              WHERE p.id = '$postid1' AND p.Is_Active = 1");

while($row=mysqli_fetch_array($query))
{
?>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="addpost" method="post">
 <div class="form-group m-b-20">
     
     <input type="hidden" value="<?php echo $_GET['pid']?>" name="pid">
     
<label for="exampleInputEmail1">Post Title</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['title']);?>" name="posttitle" placeholder="Enter title" required>
</div>


<div class="form-group m-b-20">
    <label for="exampleInputEmail1">Category</label>
    <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
        <option value="<?php echo htmlentities($row['category_name']);?>"><?php echo htmlentities($row['category_name']);?></option>

        <?php
        // Fetching active categories
        $ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
        while($result=mysqli_fetch_array($ret))
        {    
            // Skip the option if its category name matches the name fetched from $row['category_name']
            if ($result['CategoryName'] === $row['category_name']) {
                continue;
            }
        ?>
            <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
        <?php } ?>
    </select> 
</div>

    

         

     <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>




<?php
// Replace admin/postimages with postimages for editing
$editor_content = str_replace('src="admin/postimages/', 'src="postimages/', $row['PostDetails']);
?>
<textarea class="summernote" name="postdescription" id="postdescription" required><?php echo htmlspecialchars_decode($editor_content); ?></textarea>


</div>
</div>
</div>

 <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Post Image</b></h4>
<img src="postimages/<?php echo htmlentities($row['PostImage']);?>" width="300"/>
<br />
<a href="change-image.php?pid=<?php echo htmlentities($row['postid']);?>">Update Image</a>
</div>
</div>
</div>

<?php } ?>

<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>

                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

           <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <!--<script src="../plugins/summernote/summernote.min.js"></script>-->
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            // jQuery(document).ready(function(){

            //     $('.summernote').summernote({
            //         height: 240,                 // set editor height
            //         minHeight: null,             // set minimum height of editor
            //         maxHeight: null,             // set maximum height of editor
            //         focus: false                 // set focus to editable area after initializing summernote
            //     });
            //     // Select2
            //     $(".select2").select2();

            //     $(".select2-limiting").select2({
            //         maximumSelectionLength: 2
            //     });
            // });
        </script>


<script>
tinymce.init({
  apiKey: 'r4ac6np47zpm5z2ktpxeqydphlzxpsec7m2zz935f5sk0kle', // ❌ Remove it

selector: 'textarea#postdescription',
  plugins: 'image toc preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
  toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | image link media template codesample | toc pagebreak | charmap emoticons | fullscreen preview save print | insertfile anchor | ltr rtl',
  menubar: 'file edit view insert format tools table help',
  height: 520,
  toolbar_mode: 'sliding',
  image_caption: true,
  image_advtab: true,
  content_css: '//www.tiny.cloud/css/codepen.min.css',
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_retention: "2m",
  toc_header: 'Table of Contents',
  toc_class: 'table-of-contents',
  toc_depth: 3,
  automatic_uploads: true,
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
  }
});
</script>

    </body>
</html>
<?php } ?>