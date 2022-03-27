<?php
	include("../inc/header.php");
										    
	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
			</div>			
			<p>REMOTE SGOP EMPLOYEES</p>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>SGOP DB</a></li>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Exit</a></li>
		</ul>
	</section>
	<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<div class="container">
			<div class="wrapper add_employee clearfix">
				<div class="section_title">ADD info in SGOP DB</div>
				<form id="addemployee" class="clearfix" method="" action="">
					<div class="section_subtitle">Personal information</div>
					<div class="input-box input-small left">
						<label for="employee_id">ID (employee)</label><br>
						<input type="text" class="inputField emp_id" name="employee_id">
						<div class="error empiderror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="firstname">Name (employee)</label><br>
						<input type="text" class="inputField firstname" name="firstname">
						<div class="error firstnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="middlename">Surname (employee)</label><br>
						<input type="text" class="inputField middlename" name="middlename">
						<div class="error middlenameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="lastname">Middle name (employee)</label><br>
						<input type="text" class="inputField lastname" name="lastname">
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="phone">Mobile phone (employee)</label><br>
						<input type="text" class="inputField phone" name="phone">
						<div class="error phoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="jobtype">Nickname (employee)</label><br>
						<input type="text" class="inputField jobtype" name="jobtype">
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="dateemployed">Date of acceptance</label><br>
						<input type="text" id="datepicker" class="inputField dateemployed" name="dateemployed">
						<div class="error dateemployederror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">Status</label><br>
						<select class="inputField empstatus" name="empstatus">
							<option value="">-- Choose a status --</option>
							<option value="former">Inactive</option>
							<option value="employee">Active</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="resaddress">Address (employee)</label><br>
						<input type="text" class="inputField resaddress" name="resaddress">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-textarea right clearfix">
						<label for="resdirection">Additional information</label><br>
						<textarea class="inputField resdirection" placeholder="Optional" name="resdirection"></textarea>
						<div class="error resdirectionerror"></div>
					</div>
					<div class="section_subtitle left">Add photo</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="passport_photo" class="uploadField passport_photo">
								<div class="uploadfile passportPhoto_file">Add photo (JPG&PNG)</div>
								<div class="filebtn passport-btn">Load</div>
								<div class="filebtn passport-disbtn">Load</div>
							</div>
						</div>
						<div class="error photoerror"></div>
						<div class="passport_file"></div>
					</div>
					<div class="section_subtitle left">Add other documents</div>
					<div class="input-box input-small left">
						<label for="idnumber">Number of ID</label><br>
						<input type="text" class="inputField idnumber" name="idnumber">
						<div class="error IDnumbererror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="idtype">ID type</label><br>
						<select class="inputField idtype" name="idtype">
							<option value="">-- Choose type of ID --</option>
							<option value="Passport">Passport</option>
							<option value="Drive card">Drive card</option>
							<option value="Gov license">Gov license</option>
							<option value="Another">Another</option>
						</select>
						<div class="error idtypeerror"></div>
					</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="nationalID" class="uploadField nationalID">
								<div class="uploadfile nationalID_file">Load document</div>
								<div class="filebtn nationID-btn">Load</div>
								<div class="filebtn nationID-disbtn">Load</div>
							</div>
						</div>
						<div class="error nationalIDerror"></div>
						<div class="selected_nationalID_file"></div>
					</div>
					<div class="section_subtitle left">Referral information</div>
					<div class="input-box input-small left">
						<label for="fullname">Full name</label><br>
						<input type="text" class="inputField fullname" name="fullname">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="relationship">Position</label><br>
						<input type="text" class="inputField relationship" name="relationship">
						<div class="error relationshiperror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="kinphone">Mobile phone</label><br>
						<input type="text" class="inputField kinphone" name="kinphone">
						<div class="error kinphoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="kinresaddress">Number of room</label><br>
						<input type="text" class="inputField kinresaddress" name="kinresaddress">
						<div class="error kinresaddresserror"></div>
					</div>
					<div class="input-box input-textarea left clearfix">
						<label for="kinresdirection">Additional information</label><br>
						<textarea class="inputField kinresdirection" placeholder="Optional" name="kinresdirection"></textarea>
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Add information to DB SGOP</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>