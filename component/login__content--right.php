<?php 
include "pages/customer.php";
$err = [];	
$action=!empty($_GET['action'])? $_GET['action'] : "";
if($action=='false')
{
	$err['error'] = "Please Check Your Account Again!";
}
if($action=='locked')
{
	$err['error'] = "Account Is Locked. Please Check Again!";
}
?>
<div class="login-right">
	<h3>LOGIN CUSTOMERS</h3>
	<p>If you have an account with us, please log in.</p>
	<div class="has-error">
		<span style="color:red;"><?php echo (isset($err['error'])) ? $err['error'] : ''  ?></span>
	</div>
	<form action="pages/customer.php" method="post">
		<div>
			<span>Email Address<label>*</label></span>
			<input type="text" name="emailcus" />
		</div>
		<div>
			<span>Password<label>*</label></span>
			<input type="text" name="passwordcus" />
		</div>
		<a class="forgot" href="#">Forgot Your Password?</a>
		<input type="submit" value="Login" name="login" />

	</form>

</div>
<div class="clear"> </div>
</div>
</div>
</div>