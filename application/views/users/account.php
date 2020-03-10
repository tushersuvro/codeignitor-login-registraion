    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
			
						<div class="row">
								<div class="col-xl-12">
										<div class="breadcrumb-holder">
												<h1 class="main-title float-left">Welcome <?php echo $user['first_name']; ?>!</h1>
												<ol class="breadcrumb float-right">
													<li class="breadcrumb-item">&nbsp;</li>
												</ol>
												<div class="clearfix"></div>
										</div>
								</div>
						</div>
						<!-- end row -->

						
						
						<div class="row">
						
								<div class="col-lg-12">						
									<div class="card mb-3">
										<div class="card-header">
											<b>Name: </b><?php echo $user['first_name'].' '.$user['last_name']; ?>
										</div>
											
										<div class="card-body">
											
											<p><b>Email: </b><?php echo $user['email']; ?></p>
											<p><b>Phone: </b><?php echo $user['phone']; ?></p>
											<p><b>Gender: </b><?php echo $user['gender']; ?></p>
											
										</div>														
									</div><!-- end card-->					
								</div>
								

						</div>		


            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
