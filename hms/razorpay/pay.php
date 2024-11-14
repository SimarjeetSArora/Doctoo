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
require('razorpay-php/Razorpay.php');
session_start();
//error_reporting(0);
include('../include/config.php');
include('../include/checklogin.php');
check_login();
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];


$_SESSION['specilization']=$specilization;
$_SESSION['doctorid']=$doctorid;
$_SESSION['userid']=$userid;
$_SESSION['fees']=$fees;
$_SESSION['appdate']=$appdate;
$_SESSION['time']=$time;
$userstatus=1;
$docstatus=1;


use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);
$orderData = [
    'receipt'         => 3456,
    'amount'          => $_POST['fees'] * 100,
    'currency'        => "INR",
    'payment_capture' => 1
];
$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $_POST['doctor'],
    "description"       => $_POST['Doctorspecialization'],
    "notes"             => [
    "address"           => "Anonymous Clinic, Nowhere",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


require("checkout/manual.php");
?>


<?php
/*  
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.
$_SESSION['name'] = $_POST['user_name'];
  
$_SESSION['email_address']
        = $_POST['user_email_address'];
  
$_SESSION['mobile_number']
        = $_POST['user_mobile_number'];
*/           
?>
</center>

<br>
    <br>
    <br>
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

</html>