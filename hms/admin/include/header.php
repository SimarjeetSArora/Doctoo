<?php error_reporting(0);?>
<link rel="stylesheet" href="assets/css/style1.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	
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
		<center><a href="dashboard.php"><img src="assets/images/logo.jpg" class="img-rounded" alt="Banner"></a></center>	

	<div class="w3-bar w3-teal w3-round" style="width:99.2%; margin-left:0.5%; height:39px">
    <a href="logout.php" class="w3-bar-item w3-button w3-hover-green w3-right">Logout</a>
	<a href="patient-search.php" class="w3-bar-item w3-button w3-hover-green w3-right">Patient Search</a>
	<a href="between-dates-reports.php" class="w3-bar-item w3-button w3-hover-green w3-right">Reports</a>
	<div class="w3-dropdown-hover w3-right">
      <button class="w3-button w3-hover-green">Session Logs&nbsp<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="doctor-logs.php" class="w3-bar-item w3-button">Doctor</a>
        <a href="user-logs.php" class="w3-bar-item w3-button">User</a>
      </div>
    </div>
	<div class="w3-dropdown-hover w3-right">
      <button class="w3-button w3-hover-green">Queries&nbsp<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="unread-queries.php" class="w3-bar-item w3-button">Unread Queries</a>
        <a href="read-query.php" class="w3-bar-item w3-button">Read Queries</a>
      </div>
    </div>
	<a href="appointment-history.php" class="w3-bar-item w3-button w3-hover-green w3-right">Appointment History</a>
	<div class="w3-dropdown-hover w3-right">
      <button class="w3-button w3-hover-green">Manage&nbsp<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="Manage-doctors.php" class="w3-bar-item w3-button">Doctors</a>
        <a href="manage-users.php" class="w3-bar-item w3-button">Patients</a>
        <a href="manage-patient.php" class="w3-bar-item w3-button">Users</a>
      </div>
    </div>
    <div class="w3-dropdown-hover w3-right">
      <button class="w3-button w3-hover-green">Doctors&nbsp<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="doctor-specilization.php" class="w3-bar-item w3-button">Doctor Specialisation</a>
        <a href="add-doctor.php" class="w3-bar-item w3-button">Add Doctor</a>
        <a href="Manage-doctors.php" class="w3-bar-item w3-button">Manage Doctor</a>
      </div>
    </div>
	<div class="w3-dropdown-hover w3-right">
      <button class="w3-button w3-hover-green">Admin&nbsp<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4 ">
        <a href="change-password.php" class="w3-bar-item w3-button">Change Password</a>
      </div>
    </div>
	<a href="dashboard.php" class="w3-bar-item w3-button w3-hover-green w3-right">Dashboard</a>
  </div>