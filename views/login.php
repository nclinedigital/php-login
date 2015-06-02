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
				    <h3 class="panel-title text-center"><?php echo WORDING_LOGIN; ?></h3>
				  </div>
				  <div class="panel-body">
				  	<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
						<div class="form-group">
							<label for="user_name"><?php echo WORDING_USERNAME; ?></label>
							<input id="user_name" type="text" name="user_name" class="form-control" autocomplete="off" required />
						</div>
						<div class="form-group">
							<label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
							<input id="user_password" type="password" class="form-control" name="user_password" autocomplete="off" required />
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" /> <?php echo WORDING_REMEMBER_ME; ?>
							</label>
						</div>
						<input type="submit" name="login" class="btn btn-default btn-block" value="<?php echo WORDING_LOGIN; ?>" />
					</form>
				  </div>
				</div>

				<p class="text-center"><?php echo (ALLOW_USER_REGISTRATION ? '<a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>&nbsp;&nbsp;|&nbsp;&nbsp;' : ''); ?>
				<a href="?password_reset"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a></p>
			</div>
		</div>
	</div>