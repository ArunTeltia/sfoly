<?php
$result="";

if(isset($_POST['submit'])){

$firstname = $conn->real_escape_string($_POST['first_name']);
$lastname = $conn->real_escape_string($_POST['last_name']);
$birthday = $conn->real_escape_string($_POST['birthday']);
$gender = $conn->real_escape_string($_POST['gender']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);



$sql="INSERT INTO admintable (firstname,lastname,birthday,gender,email,phone) VALUES ('".$firstname."','".$lastname."','".$birthday."','".$gender."', '".$email."', '".$phone."')";

if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else{
    $result=" ".$firstname." You have successfully registered  ";
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
        <link rel="shortcut icon" type="image/x-icon" href="images/springfield_olympiads_private_limited_651397.png" />
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap.css">
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
<script src='https://www.google.com/recaptcha/api.js'></script>

     <!-- Main CSS-->
    <link rel="stylesheet" href="css/base-style.css">
    <link href="css/main.css" rel="stylesheet" media="all">
         <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>

</head>

<body >

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

       <div id="header1"></div>
       <br/><br/><br/>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
		    <h1> Join as Coordinator</h1>
                    <h2 class="title" style="color: black;">Coordinator Registration Form</h2>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row row-space">
                            <p><?= $result;  ?></p>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black; font-size: 18px; font-weight: normal;">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" id="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black; font-size: 18px; font-weight: normal;">last name</label>
                                    <input class="input--style-4" type="text" id="last_name" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black; font-size: 18px; font-weight: normal;">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" id="birthday" name="birthday">
                                        <i class=" input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black; font-size: 18px; font-weight: normal;">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45" style="color: black; font-size: 18px; font-weight: normal;">Male
                                            <input type="radio" id="male" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container" style="color: black; font-size: 18px; font-weight: normal;">Female
                                            <input type="radio" id="female" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black; font-size: 18px; font-weight: normal;">Email</label>
                                    <input class="input--style-4" type="email" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black; font-size: 18px; font-weight: normal;">Phone Number</label>
                                    <input class="input--style-4" type="text" id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                                <label class="label" style="color: black; font-size: 18px; font-weight: normal;">How can You help us?</label>
                                <textarea id="feedback" name="feedback" cols="30" rows="3"></textarea>
                        </div>
			<div class="g-recaptcha" data-sitekey="6LcKu_IUAAAAAOlKaWMjmCxWRSCz_UAbGlxC6G8r"></div>

                        <div class="p-t-15">
                            <button id="submission" class="btn btn--radius-2 btn--blue" type="submit" style="color: black; font-size: 18px; font-weight: normal;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
       <div id="footer1"></div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

    <script src="backtotop.js"></script>
    <script>
        $(document).ready(function(){
            console.log("Exec");
            $('#submission').click(function(e){
                e.preventDefault();
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var birthday = $('#birthday').val();
                
                var email = $('#email').val();
                var phone = $('#phone').val();
                var feedback = $('#feedback').val();
                if($('#male').is(":checked"))
                {
                    var gender = "male";
                }
                else
                {
                    var gender = "female";
                }
                              
            });
        });

        $.ajax
                                   ({
                                   type: "POST",
                                   url: "becordinate.php",
                                   data: "first_name="+firstname+"&last_name="+last_name+"&birthday="+birthday+"&email="+email+"&feedback="+feedback+"&gender="+gender+"&phone="+phone,
                                   beforeSend: function() {
                                        console.log("Submitting");
                                   },      
                                   success: function(data)
                                   {
                                        console.log("Done!");
                                        

                                   },
                                 
                                   });
    </script>
</body>

</html>
