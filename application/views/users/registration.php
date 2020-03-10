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
					<h4>Create a New Account</h4>								
				</div>
					
				<div class="card-body">								
					<form action="" method="post">
						<div class="form-group">
							<label for="exampleInputfname">First Name (required)</label>
							<input type="text" name="first_name" class="form-control" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
							<span class="text-danger"><?php echo form_error('first_name'); ?></span>
						</div>
						<div class="form-group">
							<label for="exampleInputlname">LAST NAME (required)</label>
							<input type="text" name="last_name" class="form-control" placeholder="Last NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
							<span class="text-danger"><?php echo form_error('last_name'); ?></span>
						</div>	
						<div class="form-group">
							<label for="exampleInputemail">EMAIL (required)</label>
							<input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
							<span class="text-danger"><?php echo form_error('email'); ?></span>
						</div>	
						<div class="form-group">
							<label for="exampleInputphone">PHONE (required)</label>
							<input type="text" name="phone" class="form-control" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
							<span class="text-danger"><?php echo form_error('phone'); ?></span>						
						</div>	
						<div class="form-group">
							<label>Gender: </label>
							<?php 
							if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
								$fcheck = 'checked="checked"'; 
								$mcheck = ''; 
							}else{ 
								$mcheck = 'checked="checked"'; 
								$fcheck = ''; 
							} 
							?>
							<div class="radio">
								<label>
									<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
									Male
								</label>
								<label>
									<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
									Female
								</label>
							</div>
						</div>						
						<div class="form-group">
							<label for="exampleInputPassword1">Password (required)</label>
							<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>										
							<span class="text-danger"><?php echo form_error('password'); ?></span>
						</div>
						<input type="submit" class="btn btn-primary" name="signupSubmit" value="CREATE ACCOUNT">									
					</form>
					<br>
					<p>Already have an account? <a href="/login">Login here</a></p>								
				</div>														
			</div><!-- end card-->					
		</div>					
</div>