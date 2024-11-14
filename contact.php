<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<meta charset="utf-8" />
<title>Contact Us | Doctoo</title>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<ul id="seconav">
		<li id="secnav"><a href="#translate" data-toggle="collapse" data-target="#translate">&nbsp&nbsp|&nbspTranslate&nbsp|</a>
	  
			<div id="translate" class="collapse">
		  <div id="google_translate_element"></div>
	  
	  <script type="text/javascript">
	  function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
	  }
	  </script>
	  
	  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	  
	  </div>
	  
		</li>
		<li id="secnav" style="float:right"><a href="hms/admin">Admin Login&nbsp&nbsp&nbsp&nbsp</a></li>
	  </ul>

	<center><a href="index.html"><img src="images/logo.jpg" class="img-rounded" alt="Banner"></a></center>

</head>
		<body>
		<ul id="topnav">
			<li id="mainav"><a href="hms/user-login.php">Patient's Login</a></li>
			<li id="mainav"><a href="hms/doctor/">Doctor's Login</a></li>
			<li id="mainav"><a class="active" href="contact.php">Contact Us</a></li>
			<li id="mainav"><a href="index.html">Home</a></li>
		</ul>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>Sanctum Santorum,</p>
						   		<p>177A Bleecker Street, New York, NY 10012-1406</p>
						   		<p>USA</p>
				   		<p>Phone:(+1) 212-970-4133</p>
				 	 	<p>Email: <span>stephen@strange.com</span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
		<div id="footer">
			<div>
				<div>
					<center>
					<h3>Contact Us:</h3>
					<ul>
						<li>+91 7566262222</li>
						<li>simarjeetsingharora15@gmail.com</li>
						<li>Govt.Polytechnic College</li>
						<li>Ujjain-456010</li>
						<li>Madhya Pradesh</li>
						<li>India</li>
					</ul>
					</center>
				</div>
			</div>
			<div>
				<p>&copy Doctoo 2022. All rights reserved</p>
			</div>
		</div>
	</body>
</html>

