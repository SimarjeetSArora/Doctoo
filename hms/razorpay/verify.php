<html>
<head>
        <link rel="stylesheet" href="../assets/css/style1.css">
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
    </head>
    <ul id="seconav">
		<li id="secnav"><a href="#translate" data-toggle="collapse" data-target="#translate">|&nbspTranslate&nbsp|</a>
	  
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
	  </ul>
	<body>
		<center><a href="../dashboard.php"><img src="../assets/images/logo.jpg" class="img-rounded" alt="Banner"></a></center>	
		<ul id="topnav">
			
			<li id="mainav"><a href="../logout.php">Logout</a></li>
			<li id="mainav"><a href="../manage-medhistory.php">Medical History</a></li>
			<li id="mainav"><a class="active" href="../book-appointment.php">Book Appointments</a></li>
			<li id="mainav"><a href="../appointment-history.php">My Appointments</a></li>
			<li id="mainav"><a href="../edit-profile.php">My Profile</a></li>
			<li id="mainav"><a href="../dashboard.php">Dashboard</a></li>
		</ul>
	<br>
    <br>
    <br>
    <center>

<?php

require('config.php');

session_start();


//error_reporting(0);
include('../include/config.php');
include('../include/checklogin.php');
check_login();




require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

            
             $specilization=$_SESSION['specilization'];
             $doctorid=$_SESSION['doctorid'];
             $userid=$_SESSION['id'];
             $fees=$_SESSION['fees'];
             $appdate=$_SESSION['appdate'];
             $time=$_SESSION['time'];
             $userstatus=1;
             $docstatus=1;
             $query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
                 if($query)
                 {
                     echo "<script>alert('Your appointment successfully booked');</script>";
                 }
             
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<br><br><br>
</center>
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
</html>