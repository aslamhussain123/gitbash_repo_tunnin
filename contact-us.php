<?php
$title = "Contact Us";
include 'header.php';
?>

<!-- <script>
    function myFunction() {
      var name = document.getElementById("txtname");
      var message = document.getElementById('namemessage');
      if (name.value =="") {
        message.innerHTML = '<div class="alert alert-danger">Please fill the rquired field</div>';
        document.getElementById('namemessage').style.color="red"; 
    }
     else
        {
            message.innerHTML ='';
        }
    } 
</script> -->
<div class="wrapper common-sty" id="contact-us-page">
    <!-- ==================header-banner==================== -->
    <section class="header-banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 common-padding-col-banner uni-col-desc text-left my-auto">
                        <h2 class="title-ExtraBold contact-heading">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= header-banner END ===================== -->

    <!-- ================= content ================= -->
    <section class="connect-with-us-sect mt-5 pt-3 pb-3 bg-1">
        <div class="container">
            <div class="row contact-us-form">
                <div class="col-md-12">
                    <h3 class="mb-2">CONNECT WITH US</h3>
                    <p>Have questions? Contact us and have your questions answered.</p>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <form method="POST" name="contactform">
                                <div class="row form-group mb-4">
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="txtname" name="Name" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" class="form-control margin-top-field" name="EMail" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="SUbject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Description" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-md-12">
                                        <button type="submit" onclick="myFunction()" class="btn contact-sendbtn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- =================content END================= -->


</div>
<!-- ======wrapperEnd//====== -->

<?php
include 'footer.php';
?>

<!-- form validation -->
<!-- <script type = "text/javascript">

    function myFunction() {

     if( document.contactform.Name.value == "" ) {
        alert( "Please provide your name!" );
        document.Name.focus() ;
        return false;
    }
    if( document.contactform.EMail.value == "" ) {
        alert( "Please provide your Email!" );
        document.EMail.focus() ;
        return false;
    }
    
    if( document.contactform.SUbject.value == "" ) {
        alert( "Please provide your country!" );
        return false;
    }
    return( true );
}
</script> -->