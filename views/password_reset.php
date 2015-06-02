	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<?php
				// show potential errors / feedback (from login object)
				if (isset($login)) {
					foreach ($login->errors as $error) {
						echo "<div class='alert alert-danger alert-message'>$error</div>";
					}
					foreach ($login->messages as $message) {
						echo "<div class='alert alert-info alert-message'>$message</div>";
					}
				}
				?>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></h3>
				  </div>
				  <div class="panel-body">
				  	<form method="post" action="?password_reset">
				  		<input type='hidden' name='user_name' value='<?php echo $_REQUEST['user_name']; ?>' />
				  		<input type='hidden' name='verification_code' value='<?php echo $_REQUEST['verification_code']; ?>' />
				  		
				  		<div class="form-group">
							<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
							<input id="user_password_new" type="password" class="form-control" name="user_password_new" pattern=".{6,}" required autocomplete="off" autofocus/>
						</div>
						<div class="form-group">
							<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
							<input id="user_password_repeat" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
						</div>
						<input type="submit" name="submit_new_password" class="btn btn-default btn-block" value="<?php echo WORDING_SUBMIT_NEW_PASSWORD; ?>" />
					</form>
				  </div>
				</div>

				<p class="text-center"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a></p>
			</div>
		</div>
	</div>