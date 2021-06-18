	<!--- start-content---->
	<?php
	    $level = "";
		include $level."pages/database.php";
		
	?>
<div class="content login-box">
		<div class="login-main">
			<div class="wrap">
				<h1>FORGOT PASSWORD</h1>
				<div class="register-grids">
				
					<form action="" method="post">
						<div class="register-top-grid">
							<h3>Enter your email address below</h3>
							<div>
								<span>Email<label>*</label></span>
								<input type="email" name = "email" autocomplete = off placeholder="Email..."
								style="height:40px;width:400px;padding-left:10px;border: 1px solid #EEE;
								outline-color: #E45D5D;width: 96%;" required>
							</div>
							
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<span style="display:flex;padding-left:10px;">
							<p style="margin-right:10px;">Don't have an account yet?</p>
							<a href="register.php">Register now</a>.
						</span>
						<span style="display:flex;padding-left:10px;margin-top:15px;">
							<p style="margin-right:10px;">Do you already have an account?</p>
							<a href="register.php">Register now</a>.
						</span>
						<div class="register-bottom-grid">

							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div style="display:flex;margin-left:10px;">
                            <input type="submit"  name = "submit-update" value ="SEND">		
					</form>
				</div>
			</div>
		</div>
	</div>