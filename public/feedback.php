<?php
$result="";


require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;

$fname = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_msg =$_POST['message'];
$email_subject = "Feedback about Sfoly";
$email_body = "You have received a new message from the user: $fname \n mail: $visitor_email \n and the message is : $visitor_msg  " ;




// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('hr@sfoly.com', 'Mailer');
$mail->addAddress('hr@sfoly.com');     // Add a recipient

$mail->addReplyTo($visitor_email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email_subject;
$mail->Body    = $email_body;

if(!$mail->send()) {
    $result= "Message could not be sent.";
} else {
     $result="Thanks ".$fname." for your valuable feedback. ";
}
 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
     <link rel="shortcut icon" type="image/x-icon" href="images/springfield_olympiads_private_limited_651397.png" />
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <script async src="https://cdn.ampproject.org/v0.js"></script>
     <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
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
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/base-style.css">
          <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

        <!-- MENU -->
       <div id="header1"></div>
<br/><br/><br/><br/>
<section id="feedback">
          <div class="container" >
               <div class="row">

                    <div class="col-md-8 col-sm-12">
                         <form id="feedback-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Feedback <small>Good feedback is the best gift for a good Interaction</small></h2>
                                   <h5> <?= $result; ?>  </h5>
                              </div>

                              <div class="col-md-12 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="" id="name">

                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="" id="email">

                                   <textarea class="form-control" rows="6" placeholder="Feedback" name="message" required="" id="message"></textarea>

                                   <div class="g-recaptcha" data-sitekey="6LcKu_IUAAAAAOlKaWMjmCxWRSCz_UAbGlxC6G8r"></div>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send" id="submission">
                              </div>

                         </form>
                    </div>
               </div>
               
          </div>
     </section>
     <br/><br/><br/><br/><br/><br/><br/>
    <div id="footer1"></div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

     <script src="backtotop.js"></script>
     <script>
                   $(document).ready(function() {
                        
                         $('#submission').click(function(e){
                              e.preventDefault();
                              var name = $('#name').val();
                              
                              var email = $('#email').val();

                              var message = $('#message').val();
                                   $.ajax
                                   ({
                                   type: "POST",
                                   url: "feedback.php",
                                   data: "name="+name+"&email="+email+"&message="+message,
                                   beforeSend: function() {
                                        console.log("Sending");
                                   },      
                                   success: function(data)
                                   {
                                        console.log("Done!");
                                   },
                                  
                                   });
                         });

                         });

     </script>
</body>
</html>
