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
				  		<div class="form-group">
							<label for="user_name"><?php echo WORDING_REQUEST_PASSWORD_RESET; ?></label>
							<input id="user_name" type="text" class="form-control" name="user_name" required autofocus />
						</div>
						<input type="submit" name="request_password_reset" class="btn btn-default btn-block" value="<?php echo WORDING_RESET_PASSWORD; ?>" />
					</form>
				  </div>
				</div>

				<p class="text-center"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a></p>
			</div>
		</div>
	</div>