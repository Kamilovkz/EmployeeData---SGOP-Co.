<?php
	include("../inc/header.php");

    include('../phpclasses/pagination.php');

	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }

?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Settings - Add admins</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
    	<link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/jquery.mask.js"></script>
    </head>
<body>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
			</div>			
			<p>REMOTE SGOP EMPLOYEES</p>
			</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>Main page</a></li>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Exit</a></li>
		</ul>
	</section>
	<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<div class="container">
			<div class="wrapper add_employee clearfix">
				<div class="section_title">Add users of DB</div>
				<form id="adduser" class="clearfix" method="" action="">
					<div class="input-box input-small left">
						<label for="idtype">Type of account</label><br>
						<select class="inputField usertype" name="idtype">
							<option value="">-- Change role of admins --</option>
							<option value="Admin">Admin</option>
							<option value="Employee">User</option>
						</select>
						<div class="error usertypeerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="firstname">Name</label><br>
						<input type="text" class="inputField firstname" name="firstname">
						<div class="error firstnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="lastname">Surname</label><br>
						<input type="text" class="inputField lastname" name="lastname">
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="username">Login</label><br>
						<input type="text" class="inputField username" name="username">
						<div class="error usernameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="password">Password</label><br>
						<input type="password" class="inputField password" name="password">
						<div class="error passworderror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="confirmpassword">Retype password</label><br>
						<input type="password" class="inputField confirmpassword" name="confirmpassword">
						<div class="error confirmpassworderror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Add user</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>