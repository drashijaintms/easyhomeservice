<!-- Modal -->
<div class="quote-modal" id="quoteModal">
  <div class="quote-modal-content">
    <span class="quote-close">&times;</span>
    <div id="quoteFormHolder"></div>
  </div>
</div>

<!-- Sticky Contact Bar -->
<div class="mobile-ai-bar">
  <div class="ai-actions">

    <a class="ai-btn" id="call_btn">
      <span class="ai-inner">
        <i class="fas fa-phone"></i> Call
      </span>
    </a>

    <a class="ai-btn open-quote-modal">
      <span class="ai-inner">
        <i class="fas fa-comment"></i> Text
      </span>
    </a>

<a class="ai-btn" id="email_btn"  href="mailto:service@easyhomeservice.com?subject=Service Inquiry">
  <span class="ai-inner">
    <i class="fas fa-envelope"></i> Email
  </span>
</a>
  </div>
</div>


<style>

.ai-btn {
    color:white!important;
    background: #0047e7;
}

/* Sticky Bar */

.mobile-ai-bar{
position:fixed;
bottom:6px;
right:9px;
width:285px;
border-radius:10px;
overflow:hidden;
z-index:9999;
box-shadow:0 -4px 12px rgba(0,0,0,0.15);
font-family:Arial;
}

.ai-actions{
display:flex;
}

.ai-btn{
flex:1;
padding:10px 4px;
text-align:center;
font-size:17px;
color:#fff;
background:#000073;
border-right:1px solid rgba(255,255,255,0.3);
display:flex;
align-items:center;
justify-content:center;
cursor:pointer;
text-decoration:none;
}

.ai-btn:last-child{
border-right:none;
}

.ai-inner{
display:flex;
align-items:center;
animation:btnPulse 1.6s infinite;
pointer-events:none;
}

.ai-inner i{
margin-right:4px;
font-size:15px;
}

/* animation */

@keyframes btnPulse{
0%{transform:scale(1);}
50%{transform:scale(1.05);}
100%{transform:scale(1);}
}


/* Modal */

.quote-modal{
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.6);
z-index:100000;
}

.quote-modal-content{
background:#fff;
width:35%;
max-width:500px;
margin:auto;
padding:20px;
border-radius:10px;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
}

.quote-close{
position:absolute;
top:-12px;
right:-12px;
background:#0e225a;
color:#fff;
width:32px;
height:32px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:20px;
cursor:pointer;
}


.ai-btn:hover{
    background:#04d36f;
}

/* Mobile */

@media(max-width:767px){

.mobile-ai-bar{
left:0;
right:0;
bottom:0;
width:100%;
border-radius:0;
}

.ai-btn{
background:#0047e7;
}



.quote-modal-content{
width:92%;
}

}

</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

/* OPEN MODAL */

$(".open-quote-modal").click(function(){

$("#quoteFormHolder").html("");

let form = $(".quote-form-card").first();

if(form.length){
$("#quoteFormHolder").append(form.clone());
}

$("#quoteModal").fadeIn();
$("body").css("overflow","hidden");

});


/* CLOSE MODAL */

$(".quote-close").click(function(){

$("#quoteModal").fadeOut();
$("body").css("overflow","");
$("#quoteFormHolder").html("");

});


/* CLOSE OUTSIDE CLICK */

$("#quoteModal").click(function(e){

if(e.target.id==="quoteModal"){

$("#quoteModal").fadeOut();
$("body").css("overflow","");
$("#quoteFormHolder").html("");

}

});


/* CALL BUTTON */

setTimeout(function(){

let headerPhone=$("#header_call").attr("href");
let defaultPhone="tel:+18333809800";

if(headerPhone && headerPhone.trim()!==""){
$("#call_btn").attr("href",headerPhone);
}
else{
$("#call_btn").attr("href",defaultPhone);
}

},100);


/* EMAIL BUTTON */

$(document).on("click","#email_btn",function(e){

    e.preventDefault();

    var email = "service@easyhomeservice.com";
    var subject = "Service Inquiry";

    var mailtoLink = "mailto:"+email+"?subject="+encodeURIComponent(subject);

    // try opening default mail app
    window.location.href = mailtoLink;

    // fallback to Gmail after short delay
    setTimeout(function(){

        window.open(
            "https://mail.google.com/mail/?view=cm&fs=1&to="+email+"&su="+encodeURIComponent(subject),
            "_blank"
        );

    },800);

});
});

</script>