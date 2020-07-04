<?php 

$result="";

if(isset($_POST['submit']))
{
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;

$fname = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone =$_POST['message'];
$email_subject = "Someone contacted you about Sfoly";
$email_body = "You have received a new contact from the user $fname <br> Mail Id - $visitor_email <br>  Message: $visitor_phone <br>" ;




//$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com";  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($visitor_phone, 'Mailer');
$mail->AddAddress('sfoly.com@gmail.com');     // Add a recipient

$mail->addReplyTo($visitor_email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email_subject;
$mail->Body    = $email_body;

if(!$mail->send()) {
     $result="Mailer Error: " . $mail->ErrorInfo;
     //$result="Something went wrong!";
     
} else {
     $result="Thanks ".$fname." for contacting us we will respond to you  soon. ";
}
 

}
    
?>  

<!DOCTYPE html>
<html amp lang="en">
<head>

     <title>SpringField Olympiads</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="springfield olympiads private limited we, at Springfield provide best olympiad solutions for students.Springfield Olympiads is one the few establishments which was founded with the aim of not only building competitive spirit but also focusing on developing healthy academic competition among children at the school level.The status-quo of Springfield Olympiads can be attributed  to driving academicians who felt a need to promote/advance science, arithmetic, computer training, English, General Knowledge, and other expert courses.Springfield Olympiads firmly believes that such Olympiads, also help the participants in gaining confidence for competition with the best around them, within the country and internationally and contribute to temperament development. Also when children experience a definite sense of accomplishment, it encourages them to try and do even higher as they advance in age.">
     <meta name="keywords" content="Olympiads, olympiad , maths olympiads , Science olympiads ,national olympiads, springfield olympiads, competitive olympiads,science, arithmetic, computer training, English, General Knowledge, and other expert courses  ">
     <meta name="author" content="nagacharan">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


<script async src="https://cdn.ampproject.org/v0.js"></script>
<link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>

     <link rel="shortcut icon" type="image/x-icon" href="images/springfield_olympiads_private_limited_651397.png" />
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/base-style.css">
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<style type="text/css">
  .card{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 40px;
      font-size: 20px;

    }
    .card-body{
      margin-left: 50px;
      margin-right: 50px;
     

    }
</style>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
  <div id="header1"></div>


  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>





 <section id="contact">
  <br/><br/><br/><br/><br/>
          <div class="container">
               <div class="row">
                <div class="col-sm-6">
 <h3 style="color: white;"><i class="fa fa-whatsapp" style="font-size: 22px; margin-top: 3px;"></i> Phone: <a style="font-size: 20px;" href="https://api.whatsapp.com/send?phone=+916230345161&text=Hi!"> &nbsp; +91-6230345161</a></h3>
                </div>
                 <div class="col-sm-6">
<h3 style="color: white;">  <i class="fa fa-envelope" style="font-size: 22px; margin-top: 3px;"></i> Email:<a style="font-size: 20px;" href="mailto:hr@sfoly.com?subject=I have a query"> &nbsp; hr@sfoly.com</a></h3>
                </div>
               </div>
               <br/><br/><br/>
               <div class="row">
                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              
                              <div class="section-title">
                                   <h2>Contact us <small>We always love hearing from you!</small></h2>
                              </div>
<h5> <?= $result; ?>  </h5>
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>

                                   <div class="g-recaptcha" data-sitekey="6LcKu_IUAAAAAOlKaWMjmCxWRSCz_UAbGlxC6G8r"></div>

                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>




  <div id="footer1"></div>

     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     <script src="backtotop.js"></script>


</body>
</html>