<!DOCTYPE html>
<html lang="en">
<head>

<title>HelpfulLink</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Zobir oulmaati">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.php" class="navbar-brand">HelpfulLink</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                            <li><a href="#privacy" class="smoothScroll"><strong>Privacy</strong></a></li>
                    <li><a href="#contact" class="smoothScroll"><strong>Contact</strong></a></li>
               </ul>
          </div>
     </div>
</div>
<!-- PRIVACY -->
<section id="privacy" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="privacy-info">
                         <h1> Privacy Statement:</h1></br>
                              <p>While we actively monitor the content of this Web site,
                                 we do not claim any responsibility for content outside this
                                  Web site, otherwise known as "offsite" content. Though we have
                                   made every effort to insure that offsite content is appropriate
                                    and in good taste, we have no control over the constantly changing
                                    landscape of the Internet.
                      If you see something questionable (links to inappropriate Web sites, foul language, etc.),
                       please e-mail our Webmaster and we will remove that material or link immediately.
                       Also, if you have sites you'd like to suggest that we add, please send us those links for evaluation.</p>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>Talk to us!</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form"  method="post" role="form">

                         <!-- IF MAIL SENT SUCCESSFULLY -->
                         <h6 class="text-success">Your message has been sent successfully. </h6>

                         <!-- IF MAIL SENDING UNSUCCESSFULL -->
                         <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="cf-name" name="cf-name" placeholder="Name">
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <input type="email" class="form-control" id="cf-email" name="cf-email" placeholder="Email Address">
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">
                              <textarea class="form-control" rows="5" id="cf-message" name="cf-message" placeholder="Message"></textarea>
                         </div>

                         <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                              <div class="section-btn">
                                   <button type="submit" class="form-control" id="cf-submit" name="submit"><span data-hover="Send Message">Send Message</span></button>
                              </div>
                         </div>
                    </form>
               </div>

          </div>
     </div>
</section>


<?php
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
if(isset($_POST["submit"]))
{
  $to_email = 'oulmaatizobir@gmail.com';
  $name=$_post["cf-name"];
  $from=$_post["cf-email"];
  $subject = $_post["subject"];
  $message = $_post["cf-message"];
  $message='name is '.$name.'<br>'.$message;
  $headers = 'From: '.$from;
  //check if the email address is invalid $secure_check
  $secure_check = sanitize_my_email($to_email);
  if ($secure_check == false) {
      echo "Invalid input";
  } else { //send email
      mail($to_email, $subject, $message, $headers);
      echo "This email is sent using PHP Mail";
  }

}
?>




<!-- FOOTER -->
<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="footer-info">
                    	<h2>Keep in touch </h2>
                         <p><a href="tel:+212 659-858884">+212 659-858884</a></p>
                         <p><a href="mailto:oulmaatizobir@gmail.com">oulmaatizobir@gmail.com</a></p>
                         <p><a href="https://www.google.com/maps/place/الرشيدية%E2%80%AD/@31.9350558,-4.3911618,13z/data=!3m1!4b1!4m5!3m4!1s0xd984a900c95d9db:0xe364e4f136aef8b3!8m2!3d31.927236!4d-4.4284985">Our Location</a></p>
                         <p><a href="#privacy">Privacy</a></p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-12">

                    <h2>About Us</h2>
                    <p>HelpfulLink is a web site it provides you a bunch of important short cuts.. links.
                      We are interested finding important new links that saves your time.</p>
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                         <li><a href="#" class="fa fa-github"></a></li>
                    </ul>

               </div>

               <div class="clearfix"></div>

               <div class="col-md-12 col-sm-12">
                    <div class="copyright-text">
                         <p>Copyright © 2021 HelpfulLink
                         </p>
                    </div>
               </div>

          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
