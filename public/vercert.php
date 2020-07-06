<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
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
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/cv.css" type="text/css" />
	<script type="text/javascript">
        function show() { document.getElementById('area').style.display = 'block'; }
        function hide() { document.getElementById('area').style.display = 'none'; }
      </script>
     <link rel="stylesheet" href="css/base-style.css" type="text/css">
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <!-- MENU -->
    <div id="header1"></div>

<br/><br/><br/>
     <section id="verification">
               <div class="container" >
                    <div class="row">

                         <div class="col-md-8 col-sm-12">
                              <form id="verification-form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                   <div class="section-title">
                                        <h2>Certificate Verification</h2>
                                   </div>

                                   <div class="col-md-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Enter Certificate number" name="number" required="">

                                   </div>

                                   <div class="col-md-4 col-sm-12">
                                        <input type="submit" class="form-control" name="submit" >
                                   </div>

                              </form>
                         </div>
                    </div>
               </div>
          </section>
          <?php
          require_once("config.php");
          $num='';
          
          if(isset($_POST['submit'])){
          $num= isset($_POST['number']) ? test_input($_REQUEST['number']):'';
          $res=mysqli_query($conn,"SELECT * FROM `certificateverification` WHERE certinumber='$num'");
          if((mysqli_num_rows($res) > 0))
          {
                echo "<div id='display'>";
                echo "<table><tbody>";
                $row=mysqli_fetch_array($res);
                echo "<tr><td>Certificate Number</td><td>$row[0]</td></tr>";
                echo "<tr><td>Issued to</td><td> $row[1]</td></tr>";
                echo "<tr><td>Issued on</td><td> $row[2]<td></tr><br/>";
                echo "</tbody></table></div>";
           }
           else {
            echo "<h3>Invalid Certificate number</h3>";
           }
         }
          ?> 
	<a class="links" href="#">^</a>



    <script src="validator.js"></script>
	<script>
		var validator = new FormValidator({"events" : ['blur', 'input', 'change']}, document.forms[0]);



		document.forms[0].onsubmit = function(e){
			var submit = true,
				validatorResult = validator.checkAll(this);

			console.log(validatorResult);
			return !!validatorResult.valid;
		};



        document.forms[0].onreset = function(e){
            validator.reset();
        };


		$('.toggleValidationTooltips').change(function(){
			validator.settings.alerts = !this.checked;

			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);

	</script>
  <div id="footer1"></div>

	 <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
