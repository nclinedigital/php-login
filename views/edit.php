	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h3 class="text-center"><?php echo WORDING_EDIT_USER_DATA; ?></h3>
				<h4><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h4>
				<p class="text-center"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a></p>
				<hr>
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
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center"><?php echo WORDING_EDIT_USER_DATA; ?></h3>
				  </div>
				  <div class="panel-body">
				  	<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
					<form method="post" action="?edit">
						<div class="form-group">
							<label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
							<input id="user_name" type="text" name="user_name" class="form-control" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)
						</div>
						<input type="submit" name="user_edit_submit_name" class="btn btn-default btn-block" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
					</form>
				  </div>
				</div>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center"><?php echo WORDING_EDIT_USER_DATA; ?></h3>
				  </div>
				  <div class="panel-body">
				  	<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
					<form method="post" action="?edit">
						<div class="form-group">
							<label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
							<input id="user_email" type="email" class="form-control" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)
						</div>
						<input type="submit" name="user_edit_submit_email" class="btn btn-default btn-block" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
					</form>
				  </div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center"><?php echo WORDING_EDIT_USER_DATA; ?></h3>
				  </div>
				  <div class="panel-body">
					<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
					<form method="post" action="?edit">
						<div class="form-group">
							<label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
							<input id="user_password_old" type="password" class="form-control" name="user_password_old" pattern=".{6,}" required autocomplete="off" />
						</div>
						<div class="form-group">
							<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
							<input id="user_password_new" type="password" class="form-control" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
						</div>
						<div class="form-group">
							<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
							<input id="user_password_repeat" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
						</div>
						<input type="submit" name="user_edit_submit_password" class="btn btn-default btn-block" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
					</form>
				  </div>
			    </div>
			</div>
		</div>
	</div>