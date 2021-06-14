	<!--- start-content---->
	<?php
	    $level = "";
		include $level."database.php";
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
				$err['fullname'] = "Please enter your name";	
			}
			if(empty($phonenum))
			{
				$err['phonenum'] = "Please enter your phone number";	
			}
			if(empty($id_card))
			{
				$err['id_card'] = "Please enter your ID Card";	
			}
			if(empty($email))
			{
				$err['email'] = "Please enter your email";	
			
			}
			if(empty($address))
			{
				$err['address'] = "Please enter your address";	
			}
			if(empty($password))
			{
				$err['password'] = "Please enter your password";	
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
				<h1>CREATE AN ACCOUNT</h1>
				<div class="register-grids">
				
					<form action="" method="post">
						<div class="register-top-grid">
							<h3>PERSONAL INFORMATION</h3>
							<div>
								<span>Full Name<label>*</label></span>
								<input type="text" name = "fullname">
								<div class = "has-error"  >
								<span style="color:red;"><?php echo (isset($err['fullname']))? $err['fullname'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Phone Number<label>*</label></span>
								<input type="text" name = "phonenum">
								<div class = "has-error"  >
								<span style="color:red;"><?php echo (isset($err['phonenum']))? $err['phonenum'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>ID Card<label>*</label></span>
								<input type="text" name = "id_card">
								<div class = "has-error"  >
								<span style="color:red;"><?php echo (isset($err['id_card']))? $err['id_card'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Email<label>*</label></span>
								<input type="text" name = "email" >
								<div class = "has-error"  >
								<span style="color:red;"><?php echo (isset($err['email']))? $err['email'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Address<label>*</label></span>
								<input type="text" name = "address">
								<div class = "has-error"  >
								<span style="color:red;"><?php echo (isset($err['address']))? $err['address'] : ''  ?></span>
								</div>
							</div>
							<div class="clear"> </div>
							<a class="news-letter" href="#">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign
									Up for Newsletter</label>
							</a>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div class="register-bottom-grid">
							<h3>LOGIN INFORMATION</h3>
							<div>
								<span>Password<label>*</label></span>
								<input type="text" name = "password">
								<div class = "has-error"  >
								<span style="color:red;"><?php echo (isset($err['password']))? $err['password'] : ''  ?></span>
								</div>
							</div>
							<div>
								<span>Confirm Password<label>*</label></span>
								<input type="text" name = "cpassword">
								<div class = "has-error"  >
								<span style="color:red;width:450px;"><?php echo (isset($err['cpassword']))? $err['cpassword'] : ''  ?></span>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<input type="submit"  name = "submit" >			
					</form>
				</div>
			</div>
		</div>
	</div>