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
				    <h3 class="panel-title text-center"><?php echo WORDING_REGISTER; ?></h3>
				  </div>
				  <div class="panel-body">
				  	<form method="post" action="?register">
						<div class="form-group">
							<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
							<input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" class="form-control" value="<?php echo (isset($_POST['user_name']) ? $_POST['user_name'] : ''); ?>" required autofocus />
						</div>
						<div class="form-group">
							<label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
							<input id="user_email" type="email" name="user_email" class="form-control" value="<?php echo (isset($_POST['user_email']) ? $_POST['user_email'] : ''); ?>" required />
						</div>
						<div class="form-group">
							<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
							<input id="user_password_new" type="password" name="user_password_new" class="form-control" pattern=".{6,}" required autocomplete="off" />
						</div>
						<div class="form-group">
							<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
							<input id="user_password_repeat" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
						</div>
						<img src="tools/showCaptcha.php" alt="captcha" />
						<div class="form-group">
							<label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
							<input type="text" name="captcha" class="form-control" required autocomplete="off" />
						</div>
						<input type="submit" name="register" class="btn btn-default btn-block" value="<?php echo WORDING_REGISTER; ?>" />
					</form>
				  </div>
				</div>

				<p class="text-center"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a></p>
			</div>
		</div>
	</div>