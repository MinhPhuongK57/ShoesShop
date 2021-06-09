	<!--- start-content---->
	<?php
	    $level = "";
		include $level."DB/database.php";
		$err = [];
		if(isset($_POST['fullname']) )
		{
			$fullname = $_POST['fullname'];
			$phonenum = $_POST['phonenum'];
			$id_card = $_POST['id_card'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			if(empty($fullname))
			{
				$err['fullname'] = "Please enter your changed name";	
			}
			if(empty($phonenum))
			{
				$err['phonenum'] = "Please enter your changed phone number";	
			}
			if(empty($id_card))
			{
				$err['id_card'] = "Please enter your changed ID Card";	
			}
			if(empty($email))
			{
				$err['email'] = "Please enter your changed email";	
			
			}
			if(empty($address))
			{
				$err['address'] = "Please enter your changed address";	
			}
			if(empty($password))
			{
				$err['password'] = "Please enter your changed password";	
			}
			if(empty($cpassword))
			{
				$err['cpassword'] = "Please enter your confirm password";	
			}
			if($password != $cpassword)
			{
				$err['fullname'] = "Please check your confirm password";	
			}
			if(empty($err))
			{
				$a = "insert into customer_account value(N'$fullname','$phonenum','$id_card','$email','$address','$password', 0)";
    			$account_customer = $connect->prepare($a);
    			$account_customer -> execute();
			}

		}
		
	?>
<div class="content login-box">
		<div class="login-main">
			<div class="wrap">
				<h1>EDIT ACCOUNT INFORMATION</h1>
				<div class="register-grids">
				
					<form action="" method="post">
						<div class="register-top-grid">
							<h3>PERSONAL INFORMATION</h3>
							<div>
								<span>Full Name<label>*</label></span>
								<input type="text" name = "fullname" autocomplete = off>
								<div class = "has-error"  >
								<span style="color:red;width:450px"><?php echo (isset($err['fullname']))? $err['fullname'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Phone Number<label>*</label></span>
								<input type="text" name = "phonenum" autocomplete = off>
								<div class = "has-error"  >
								<span style="color:red;width:450px"><?php echo (isset($err['phonenum']))? $err['phonenum'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>ID Card<label>*</label></span>
								<input type="text" name = "id_card" autocomplete = off>
								<div class = "has-error"  >
								<span style="color:red;width:450px"><?php echo (isset($err['id_card']))? $err['id_card'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Email<label>*</label></span>
								<input type="text" name = "email"  autocomplete = off>
								<div class = "has-error"  >
								<span style="color:red;width:450px"><?php echo (isset($err['email']))? $err['email'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Address<label>*</label></span>
								<input type="text" name = "address" autocomplete = off>
								<div class = "has-error"  >
								<span style="color:red;width:450px"><?php echo (isset($err['address']))? $err['address'] : ''  ?></span>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div class="register-bottom-grid">
							<div>
								<span>Password<label>*</label></span>
								<input type="text" name = "password" autocomplete="off">
								<div class = "has-error"  >
								<span style="color:red;width:450px;"><?php echo (isset($err['password']))? $err['password'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Confirm Password<label>*</label></span>
								<input type="text" name = "cpassword" autocomplete = off>
								<div class = "has-error"  >
								<span style="color:red;width:450px;"><?php echo (isset($err['cpassword']))? $err['cpassword'] : ''  ?></span>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div style="display:flex;margin-left:10px;">
                            <input type="submit"  name = "submit-update" value ="UPDATE ACCOUNT">	
                            <span style="margin-left:10px;"><input type="submit"  name = "submit-lock" value ="ACCOUNT LOCK"></span> </div>	
					</form>
				</div>
			</div>
		</div>
	</div>