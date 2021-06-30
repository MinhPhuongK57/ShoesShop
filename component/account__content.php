<?php 
include "pages/update_account.php";

$err = [];	
$action=!empty($_GET['action'])? $_GET['action'] : "";
if($action=='fullname')
{
	$err['fullname'] = "Please enter your changed name";
}
else if($action=='phonenum')
{
	$err['phonenum'] = "Please enter your changed phone number";
}
else if($action=='email')
{
	$err['email'] = "Please enter your changed name";
}
else if($action=='address')
{
	$err['address'] = "Please enter your changed phone number";
}
else if($action=='true')
{
	$err['true'] = "Success!";
}
?>
	<div class="content login-box">
		<div class="login-main">
			<div class="wrap">
				<h1>EDIT ACCOUNT INFORMATION</h1>
				<div class="has-error">
						<span style="color:green;width:450px;font-size:40px;"><?php echo (isset($err['true'])) ? $err['true'] : ''  ?></span>
				</div>
				<div class="register-grids">

					<form action="pages/update_account.php" method="post">
							<?php foreach ($list__customerupdate_rowsdata as $accountinfo) : ?>
						<div class="register-top-grid">
							<h3>PERSONAL INFORMATION</h3>
							<div>
								<span>Full Name<label>*</label></span>
								<input type="text" name="fullname" placeholder="<?php echo $accountinfo['username'] ?>" autocomplete=off>
									<div class="has-error">
										<span style="color:red;width:450px"><?php echo (isset($err['fullname'])) ? $err['fullname'] : ''  ?></span>
									</div>
							</div>
							<div>
								<span>Phone Number<label>*</label></span>
								<input type="text" name="phonenum" placeholder="<?php echo $accountinfo['phonenum'] ?>" autocomplete=off>
								<div class="has-error">
									<span style="color:red;width:450px"><?php echo (isset($err['phonenum'])) ? $err['phonenum'] : ''  ?></span>
								</div>
							</div>

							<div>
								<span>Email<label>*</label></span>
								<input type="text" name="email" placeholder="<?php echo $accountinfo['email'] ?>" autocomplete=off>
								<div class="has-error">
									<span style="color:red;width:450px"><?php echo (isset($err['email'])) ? $err['email'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Address<label>*</label></span>
								<input type="text" name="address" placeholder="<?php echo $accountinfo['address'] ?>" autocomplete=off>
								<div class="has-error">
									<span style="color:red;width:450px"><?php echo (isset($err['address'])) ? $err['address'] : ''  ?></span>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div class="register-bottom-grid">

							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div style="display:flex;margin-left:10px;">
							<input type="submit" name="submit-update" value="UPDATE ACCOUNT">
							<?php endforeach 	?>
					</form>
				</div>
			</div>
		</div>
	</div>