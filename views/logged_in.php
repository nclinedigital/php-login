	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="panel panel-default loggedin">
				  <div class="panel-heading">
				    <h3 class="panel-title clearfix">
				    	<div class="btn-group pull-right" role="group" aria-label="">
				    		<?php echo (ALLOW_ADMIN_TO_REGISTER_NEW_USER && $_SESSION['user_access_level'] == 255 ? '<a href="?register" class="btn btn-default">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>' : ''); ?>
				    		<a href="?edit" class="btn btn-default"><?php echo WORDING_EDIT_USER_DATA; ?></a>
				    		<a href="?logout" type="button" class="btn btn-default"><?php echo WORDING_LOGOUT; ?></a>
				    	</div>
				    	<?php echo WORDING_YOU_ARE_LOGGED_IN_AS . ':&nbsp;' . $_SESSION['user_name']; ?></h3>
				  </div>
				  <div class="panel-body">
				  	<div class="row">
				  		<div class="col-lg-6">
				  			<p>$_SESSION['user_id'] = <?php echo $_SESSION['user_id']; ?></p>
							<p>$_SESSION['user_name'] = <?php echo $_SESSION['user_name']; ?></p>
							<p>$_SESSION['user_email'] = <?php echo $_SESSION['user_email']; ?></p>
				  		</div>
				  		<div class="col-lg-6">
				  			<p>$_SESSION['user_access_level'] = <?php echo $_SESSION['user_access_level']; ?></p>
							<p>$_SESSION['user_logged_in'] = <?php echo $_SESSION['user_logged_in']; ?></p><hr/>
							<p><?php echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->getGravatarImageUrl() ; ?>" /></p>
				  		</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
