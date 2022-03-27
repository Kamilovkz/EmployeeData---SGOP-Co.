<?php
    ob_start();
	include("../inc/header.php");

	
	if(isset($_POST['changeusername'])){

		$newusername = mysqli_real_escape_string($db_connect, $_POST['username']);
		$password = mysqli_real_escape_string($db_connect, $_POST['password']);
		
		$newpassword = md5(md5($password).md5($newusername));

		$checkpass = mysqli_query($db_connect, "SELECT password FROM users WHERE username = '$username' ");
		$checkpasscount = mysqli_num_rows($checkpass);

		$checkuser = mysqli_query($db_connect, "SELECT user_id FROM users WHERE username = '$newusername' ");
		$checkusercount = mysqli_num_rows($checkuser);
		
			
		ob_end_clean();

		if($checkusercount < 1 ){

			if($checkpasscount){
				if($fetchpass = mysqli_fetch_assoc($checkpass)){
					$oldpassword = $fetchpass['password'];
				}

				$oldpassword1 = md5(md5($password).md5($username));
			}

			if($oldpassword1 == $oldpassword){

				$sql = mysqli_query($db_connect, "UPDATE `users` SET `username` = '$newusername', `password` = '$newpassword' WHERE `user_id` = '$id'");
				
				if($sql){
					echo json_encode(array("status"=>"success"));
					$_SESSION["username"] = $newusername;
					exit();
				} else {
					echo json_encode(array("status"=>"failed"));
					exit();
				}

			} else {
					echo json_encode(array("status"=>"passfailed"));
					exit();
			}
		} else {
			echo json_encode(array("status"=>"userfailed"));
			exit();
		}

	}


	if(isset($_POST['changepassword'])){

		$newpassword = mysqli_real_escape_string($db_connect, $_POST['newpass']);
		$Oldpassword = mysqli_real_escape_string($db_connect, $_POST['oldpass']);
		
		$Oldpassword = md5(md5($Oldpassword).md5($username));

		$checkpass = mysqli_query($db_connect, "SELECT password FROM users WHERE password = '$Oldpassword' ");
		$checkpasscount = mysqli_num_rows($checkpass);
		
			
		ob_end_clean();

		if($checkpasscount){

			$newpassword = md5(md5($newpassword).md5($username));

			$sql = mysqli_query($db_connect, "UPDATE `users` SET `password` = '$newpassword' WHERE `user_id` = '$id'");
			
			if($sql){
				echo json_encode(array("status"=>"success"));
				exit();
			} else {
				echo json_encode(array("status"=>"failed"));
				exit();
			}
		} else {
			echo json_encode(array("status"=>"incorrect"));
			exit();
		}

	}

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
			</div>			
			<p>REMOTE SGOP EMPLOYEES</p>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>Main page</a></li>
			<li class="nav-item current"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Exit</a></li>
		</ul>
	</section>
	<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<div class="container">
			<div class="wrapper add_employee settings clearfix">
				<div class="section_title">Settings</div>
				<form id="changeusernameForm" class="clearfix" method="" action="">
					<div class="section_subtitle">Change nickname</div>
					<div class="input-box input-small left">
						<label for="username">Nickname</label><br>
						<input type="text" class="inputField username" name="username">
						<div class="error usernameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="password">Password (if you change nickname)</label><br>
						<input type="password" class="inputField password" name="password">
						<div class="error passworderror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Save</button>
					</div>
				</form>
			</div>
			<div class="wrapper add_employee settings clearfix">
				<form id="changepasswordForm" class="clearfix" method="" action="">
					<div class="section_subtitle">Change password </div>
					<div class="input-box input-small left">
						<label for="password">Current password</label><br>
						<input type="password" class="inputField oldpass" name="password">
						<div class="error oldpasserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="confirmpassword">New password</label><br>
						<input type="password" class="inputField newpass" name="confirmpassword">
						<div class="error newpasserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="confirmpassword">Retype password</label><br>
						<input type="password" class="inputField cpassword" name="confirmpassword">
						<div class="error cpasserror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Save</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>