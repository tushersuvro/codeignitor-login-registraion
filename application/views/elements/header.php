<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php echo config_item('site_title'); ?></title>
	<meta name="description" content="<?php echo config_item('site_title'); ?> | MD Mahfoozur Rahman">
	<meta name="author" content="Md Mahfoozur Rahman - https://tushersuvro.com">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />		
	<!-- Font Awesome CSS -->
	<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />		
	<!-- Custom CSS -->
	<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />   
	<!-- daterangepicker -->	
    <link rel="stylesheet" type="text/css" href="/assets/css/daterangepicker.css" />     	
    
    <script src="/assets/js/modernizr.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>    
    					
</head>
<body class="adminbody">
<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="/" class="logo"><?php echo config_item('site_title'); ?></a>
        </div>

        <nav class="navbar-custom">
			<ul class="list-inline float-right mb-0">
				<li class="list-inline-item dropdown notif">
					<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<?php echo $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'] ?> <small><i class="fa fa-caret-down bigfonts" aria-hidden="true"></i></small>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown">
						<!-- item-->
						<a href="/logout" class="dropdown-item notify-item">
							<i class="fa fa-power-off"></i> <span>Logout</span>
						</a>
					</div>
				</li>
			</ul>
        </nav>
	</div>
	<!-- End Navigation -->
	
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->