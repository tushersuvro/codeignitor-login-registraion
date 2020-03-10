<div class="row" style="margin: 0px -20px 20px -20px;padding: 13px 25px 0 25px;">
</div>
<!-- end row -->
<div class="row">			
		<div class="offset-md-2 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">	

			<!-- Status message -->
			<?php  
				if(!empty($success_msg)){ 
					echo '<p class="alert alert-success">'.$success_msg.'</p>'; 
				}elseif(!empty($error_msg)){ 
					echo '<p class="alert alert-danger">'.$error_msg.'</p>'; 
				} 
			?>						
			<div class="card mb-3">
				<div class="card-header">
					<h4>Login</h4>								
				</div>
					
				<div class="card-body">								
					<form action="" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Email (required)</label>
							<input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" id="exampleInputEmail1" placeholder="Enter email" required>
							<span class="text-danger"><?php echo form_error('email'); ?></span>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password (required)</label>
							<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>										
							<span class="text-danger"><?php echo form_error('password'); ?></span>
						</div>
						<input type="submit" class="btn btn-primary" name="loginSubmit" value="LOGIN">									
					</form>
					<br>
					<p>Don't have an account? <a href="/register">Register</a></p>								
				</div>														
			</div><!-- end card-->					
		</div>					
</div>