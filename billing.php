<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FreeLancer Hub</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Paper - Material Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link rel="shortcut icon" href="assets/img/logo-icon-dark.png">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    <!-- DateRangePicker -->
<link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet">                   <!-- FullCalendar -->
<link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" type="text/css" rel="stylesheet">
<link href="assets/less/card.less" type="text/css" rel="stylesheet"> 

<link href="assets/plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet"> <!-- chartist -->
<link href="assets/plugins/card/lib/css/card.css" type="text/css" rel="stylesheet"> 
    </head>

    <body class="animated-content sidebar-scroll infobar-overlay">
        
        
<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<!-- <div id="page-progress-loader" class="show"></div> -->

	<div class="logo-area">
		<a class="navbar-brand navbar-brand-primary" href="index.html">
			<img class="show-on-collapse img-logo-white" alt="Paper" src="assets/img/logo-icon-white.png">
			<img class="show-on-collapse img-logo-dark" alt="Paper" src="assets/img/logo-icon-dark.png">
			<img class="img-white" alt="Paper" src="assets/img/logo-white.png">
			<img class="img-dark" alt="Paper" src="assets/img/logo-dark.png">
		</a>

		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">menu</i>
				</span>
			</a>
		</span>
		<span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">search</i>
				</span>
			</a>
		</span>
		<div id="search-box">
			<input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
		</div>
	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
	        <a class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">close</i>
	        </span></i></a>
	    </li>
		<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
	        <a href="#" class="toggle-fullscreen"><span class="icon-bg">
	        	
	        </span></i></a>
	    </li>

   		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">notifications</i></span><span class="badge badge-info"></span></a>
			<div class="dropdown-menu animated notifications">
				<div class="topnav-dropdown-header">
					<span>3 new notifications</span>
					
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-success">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">lock</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Privacy settings have been changed.</h4>
									<span class="notification-time">8 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-info">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">shopping_cart</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">A new order has been placed.</h4>
									<span class="notification-time">24 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-teal">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">perm_contact_calendar</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">New event started!</h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-indigo">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">settings</i></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">New app settings updated.</h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-danger">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">comment</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Jessi commented your post.</h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all notifications</a>
				</div>
			</div>
		</li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">mail</i></span><span
			class="badge badge-info"></span></a>
			<div class="dropdown-menu animated notifications">
				<div class="topnav-dropdown-header">
					<span>2 new messages</span>
					
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_01.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Amy Green</strong> <span class="text-gray">‒ Integer vitae libero ac risus egestas placerat.</span></h4>
									<span class="notification-time">2 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_09.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Daniel Andrews</strong> <span class="text-gray">‒ Vestibulum commodo felis quis tortor</span></h4>
									<span class="notification-time">40 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_02.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Jane Simpson</strong> <span class="text-gray">‒ Fusce lobortis lorem at ipsum semper sagittis.</span></h4>
									<span class="notification-time">6 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_03.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Harold Hawkins</strong> <span class="text-gray">‒ Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span></h4>
									<span class="notification-time">8 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_04.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Brian Fisher</strong> <span class="text-gray">‒ Praesent dapibus, neque id cursus faucibus.</span></h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_05.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Dylan Black</strong> <span class="text-gray">‒ Pellentesque fermentum dolor. </span></h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="assets/demo/avatar/avatar_06.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Bobby Harper</strong> <span class="text-gray">‒ Sed adipiscing ornare risus. Morbi est est.</span></h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all messages</a>
				</div>
			</div>
		</li>

		<li class="toolbar-icon-bg" id="trigger-infobar">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">more_vert</i>
				</span>
			</a>
		</li>
		
	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-cyan">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<div class="widget" id="widget-profileinfo">
        <div class="widget-body">
            <div class="userinfo ">
                <div class="avatar pull-left">
                    <img src="assets/img/propic/t5.jpg" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username">Sankofa Future</span>
					
                    <span class="useremail">kofa@gmail.com</span>
                </div>

                <div class="acct-dropdown clearfix dropdown">
                    <span class="pull-left"><span class="online-status online"></span>Online</span>
                    <!-- <span class="pull-right dropdown-toggle" data-toggle="dropdown"><a href="javascript:void(0)" class="btn btn-fab-caret btn-xs btn-fab"><i class="material-icons">arrow_drop_down</i><div class="ripple-container"></div></a></span>
                    <ul class="dropdown-menu">
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navigation</span></li>
		<li><a  class="withripple" href="myfreelancerprofile.php"><span class="icon">
		<i class="material-icons">home</i></span><span>My Profile</span></a></li>
		
		<li><a  class="withripple" href="statistics.php"><span class="icon">
		<i class="material-icons">show_chart</i></span><span>Statistics</span></a></li>
		
		<li><a  class="withripple" href="billing.php"><span class="icon">
		<i class="material-icons">attach_money</i></span><span>Billing</span></a></li>
		
		<li class="hasChild"><a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">style</i></span><span>My Apps</span><div class="ripple-container"></div></a>
			<ul class="acc-menu" style="display: block;">
				<li class="active"><a class="withripple" href="notes.php">Note Keeper</a></li>
				
				<li><a class="withripple" href="form-pickers.html">Calendar</a></li>
				<li><a class="withripple" href="form-wizard.html">To-do List</a></li>
				<li><a class="withripple" href="form-validation.html">Weather</a></li>
				
			</ul>
		</li>
		
		<li><a  class="withripple" href="login.php"><span class="icon">
		<i class="material-icons">settings</i></span><span>Settings</span></a></li>
		
		<li><a  class="withripple" href="login.php"><span class="icon">
		<i class="material-icons">subdirectory_arrow_left</i></span><span>Log Out</span></a></li>
		

	</ul>
</nav>
    </div>
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="myfreelancerprofile.php">Profile</a></li>
<li class="active"><a href="#">Billing</a></li>

                            </ol>
                            <div class="page-heading">            
                               <h1>Billing<small>My Account Billing</small></h1>
                               <div class="options">
   <!--  <div class="btn-toolbar">
        <form action="" class="form-horizontal row-border" style="display: inline-block;">
            <div class="form-group hidden-xs">
                <div class="col-sm-8">
                    <button class="btn btn-default" id="daterangepicker-d">
                        <i class="fa fa-calendar"></i> 
                        <span><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
                    </button>
                </div>
            </div>
        </form>
        <a href="#" class="btn btn-default" style="vertical-align: top;">Settings</a>
    </div> -->
</div>
                           </div>
                            <div class="container-fluid">
                                

<div data-widget-group="group1">
    <div class="col-md-12">
		<div class="panel panel-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			<div class="panel-heading">
				<h2>Tabs in Panels</h2>
				<div class="options">
					<ul class="nav nav-tabs">
					<li class="dropdown pull-right tabdrop"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> </a><ul class="dropdown-menu"></ul></li>
						<li class="active"><a href="#tab-4-1" data-toggle="tab" aria-expanded="false">Dashboard<div class="ripple-container"></div></a></li>
						
						<li class=""><a href="#tab-4-3" data-toggle="tab" aria-expanded="false">Account History<div class="ripple-container"></div></a></li>
						<li class=""><a href="#tab-4-4" data-toggle="tab" aria-expanded="true">Settle Payment<div class="ripple-container"></div></a></li>
						
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<div class="tab-content">
					<div class="tab-pane" id="tab-4-1">
					<div class="alert alert-dismissable alert-danger" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>Oh Snap! Your account is in arrears!</h4> 

						<p>We would greatly appreciate you fixing up this outstanding amount within 5 working days.  You can do this by cash deposit and paying by credit card.</p>
						<br>
						<p><a class="btn btn-raised btn-warning" href="#tab-4-4">Pay Now</a></p>
					</div>
						<div class="panel-body">
                   <div class="pb-md">
                        <h4 class="mb-n">BILLING STATISTICS<small>Monthly account billing stats</small></h4>
                        
                    </div>
                    <div id="fullChart" style="height: 325px " class="centered"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="142.1818181818182" x2="142.1818181818182" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="234.36363636363637" x2="234.36363636363637" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="326.54545454545456" x2="326.54545454545456" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="418.72727272727275" x2="418.72727272727275" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="510.90909090909093" x2="510.90909090909093" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="603.0909090909091" x2="603.0909090909091" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="695.2727272727273" x2="695.2727272727273" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="787.4545454545455" x2="787.4545454545455" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="879.6363636363637" x2="879.6363636363637" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="971.8181818181819" x2="971.8181818181819" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line x1="1064" x2="1064" y1="15" y2="290" class="ct-grid ct-horizontal"></line><line y1="290" y2="290" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="255.625" y2="255.625" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="221.25" y2="221.25" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="186.875" y2="186.875" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="152.5" y2="152.5" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="118.125" y2="118.125" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="83.75" y2="83.75" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="49.375" y2="49.375" x1="50" x2="1064" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="1064" class="ct-grid ct-vertical"></line></g><g><g series-name="series-1" class="ct-series ct-series-a"><path d="M50,290L50,221.25C65.364,212.083,111.455,170.833,142.182,166.25C172.909,161.667,203.636,191.458,234.364,193.75C265.091,196.042,295.818,175.417,326.545,180C357.273,184.583,388,209.792,418.727,221.25C449.455,232.708,480.182,248.75,510.909,248.75C541.636,248.75,572.364,223.542,603.091,221.25C633.818,218.958,664.545,235,695.273,235C726,235,756.727,232.708,787.455,221.25C818.182,209.792,848.909,170.833,879.636,166.25C910.364,161.667,941.091,191.458,971.818,193.75C1002.545,196.042,1048.636,182.292,1064,180L1064,290Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path><path d="M50,221.25C65.364,212.083,111.455,170.833,142.182,166.25C172.909,161.667,203.636,191.458,234.364,193.75C265.091,196.042,295.818,175.417,326.545,180C357.273,184.583,388,209.792,418.727,221.25C449.455,232.708,480.182,248.75,510.909,248.75C541.636,248.75,572.364,223.542,603.091,221.25C633.818,218.958,664.545,235,695.273,235C726,235,756.727,232.708,787.455,221.25C818.182,209.792,848.909,170.833,879.636,166.25C910.364,161.667,941.091,191.458,971.818,193.75C1002.545,196.042,1048.636,182.292,1064,180" class="ct-line"></path></g><g series-name="series-2" class="ct-series ct-series-b"><path d="M50,290L50,138.75C65.364,131.875,111.455,97.5,142.182,97.5C172.909,97.5,203.636,150.208,234.364,138.75C265.091,127.292,295.818,37.917,326.545,28.75C357.273,19.583,388,67.708,418.727,83.75C449.455,99.792,480.182,122.708,510.909,125C541.636,127.292,572.364,111.25,603.091,97.5C633.818,83.75,664.545,35.625,695.273,42.5C726,49.375,756.727,120.417,787.455,138.75C818.182,157.083,848.909,157.083,879.636,152.5C910.364,147.917,941.091,122.708,971.818,111.25C1002.545,99.792,1048.636,88.333,1064,83.75L1064,290Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path><path d="M50,138.75C65.364,131.875,111.455,97.5,142.182,97.5C172.909,97.5,203.636,150.208,234.364,138.75C265.091,127.292,295.818,37.917,326.545,28.75C357.273,19.583,388,67.708,418.727,83.75C449.455,99.792,480.182,122.708,510.909,125C541.636,127.292,572.364,111.25,603.091,97.5C633.818,83.75,664.545,35.625,695.273,42.5C726,49.375,756.727,120.417,787.455,138.75C818.182,157.083,848.909,157.083,879.636,152.5C910.364,147.917,941.091,122.708,971.818,111.25C1002.545,99.792,1048.636,88.333,1064,83.75" class="ct-line"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="295" width="92.18181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">JAN</span></foreignObject><foreignObject style="overflow: visible;" x="142.1818181818182" y="295" width="92.18181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">FEB</span></foreignObject><foreignObject style="overflow: visible;" x="234.36363636363637" y="295" width="92.18181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">MAR</span></foreignObject><foreignObject style="overflow: visible;" x="326.54545454545456" y="295" width="92.18181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">APR</span></foreignObject><foreignObject style="overflow: visible;" x="418.72727272727275" y="295" width="92.18181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">MAY</span></foreignObject><foreignObject style="overflow: visible;" x="510.90909090909093" y="295" width="92.18181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">JUN</span></foreignObject><foreignObject style="overflow: visible;" x="603.0909090909091" y="295" width="92.18181818181813" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">JUL</span></foreignObject><foreignObject style="overflow: visible;" x="695.2727272727273" y="295" width="92.18181818181824" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">AUG</span></foreignObject><foreignObject style="overflow: visible;" x="787.4545454545455" y="295" width="92.18181818181824" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">SEP</span></foreignObject><foreignObject style="overflow: visible;" x="879.6363636363637" y="295" width="92.18181818181813" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">OCT</span></foreignObject><foreignObject style="overflow: visible;" x="971.8181818181819" y="295" width="92.18181818181813" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 92px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">NOV</span></foreignObject><foreignObject style="overflow: visible;" x="1064" y="295" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">DEC</span></foreignObject><foreignObject style="overflow: visible;" y="255.625" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$0k</span></foreignObject><foreignObject style="overflow: visible;" y="221.25" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$2.5k</span></foreignObject><foreignObject style="overflow: visible;" y="186.875" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$5k</span></foreignObject><foreignObject style="overflow: visible;" y="152.5" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$7.5k</span></foreignObject><foreignObject style="overflow: visible;" y="118.125" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$10k</span></foreignObject><foreignObject style="overflow: visible;" y="83.75" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$12.5k</span></foreignObject><foreignObject style="overflow: visible;" y="49.375" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$15k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="34.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 34px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$17.5k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">$20k</span></foreignObject></g></svg></div>
                </div>
					</div>
					<div class="tab-pane active" id="tab-4-3">
						<div class="panel-body">
					<div class="alert alert-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				<h4>Invoices</h4>
				<p>All account invoice from the day your account was created. Click on the <b>View</b> column to Download your invoce.</p>
				
				
			</div>
					<table class="table table-bordered m-n" cellspacing="0">
						<thead>
							<tr>
								<th>Invoice Number</th>
								<th>Invoice Date</th>
								<th>Invoice Amount</th>
								<th>View</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>IN12413677</td>
								<td>2017-01-01</td>
								<td>R155.00</td>
								<td><a href="#">Download</a></td>
							</tr>
							<tr>
								<td>IN12413566</td>
								<td>2017-02-01</td>
								<td>R255.00</td>
								<td><a href="#">Download</a></td>
							</tr>
							<tr>
								<td>IN12419876</td>
								<td>2017-03-01</td>
								<td>R455.00</td>
								<td><a href="#">Download</a></td>
							</tr>
							<tr>
								<td>IN12499999</td>
								<td>2017-04-01</td>
								<td>R99.00</td>
								<td><a href="#">Download</a></td>
							</tr>
						</tbody>
					</table>
				</div>
					</div>
					<div class="tab-pane" id="tab-4-4">
						<div class="panel-body">
			<div class="alert alert-info" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				<h4>Settle Payment</h4>
				<p>1.) For direct deposit, please deposit into our <b>FNB</b> account. The account number is <b>3636 7897 6743</b>.  Please email your Proof Of Payment to <b>accounts@myfreelancerhub.co.za</b>. </p>
				
				<p>2.) For credit card transfer, please fill in the form below. </p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<form action="" class="form-horizontal cardy">
						<div class="form-group is-empty">
							<label for="#" class="col-sm-4 control-label">Card Number</label>	
							<div class="col-sm-8">
								<input placeholder="Card number" type="text" name="number" class="form-control">
							</div>
						<span class="material-input"></span></div>
						<div class="form-group is-empty">
							<label for="#" class="col-sm-4 control-label">Full Name</label>	
							<div class="col-sm-8">
								<input placeholder="Full name" type="text" name="name" class="form-control">
							</div>
						<span class="material-input"></span></div>
						<div class="form-group is-empty">
							<label for="#" class="col-sm-4 control-label">Expiry</label>	
							<div class="col-sm-8">
								<input placeholder="MM/YY" type="text" name="expiry" class="form-control">
							</div>
						<span class="material-input"></span></div>
						<div class="form-group is-empty">
							<label for="#" class="col-sm-4 control-label">CVC</label>	
							<div class="col-sm-8">
								<input placeholder="CVC" type="text" name="cvc" class="form-control">
							</div>
						<span class="material-input"></span></div>
					</form>
				</div>
				<div class="col-sm-6">
					<div class="card-wrapper"><div class="card-container">
    <div class="card" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
        <div class="front">
                <div class="logo visa">visa</div>
                <div class="logo mastercard">MasterCard</div>
                <div class="logo amex"></div>
                <div class="logo discover">discover</div>
            <div class="lower">
                <div class="shiny"></div>
                <div class="cvc display">••••</div>
                <div class="number display">•••• •••• ••••&nbsp;••••</div>
                <div class="name display">Full name</div>
                <div class="expiry display">••/••</div>
            </div>
        </div>
        <div class="back">
            <div class="bar"></div>
            <div class="cvc display">•••</div>
            <div class="shiny"></div>
        </div>
    </div>
</div></div>
				</div>
			</div>
		</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
   
</footer>

                </div>
            </div>
        </div>

        <div class="infobar-wrapper scroll-pane">
            <div class="infobar scroll-content">

    
        <ul class="nav nav-tabs material-nav-tabs stretch-tabs icon-tabs">
            <li ><a href="#tab-7-1" data-toggle="tab">
                <i class="material-icons">settings</i>
            </a></li>
            <li class="active "><a href="#tab-7-2" data-toggle="tab"><span class="step size-64">
                  <i class="material-icons">textsms</i>
                </span></a>
            </li>
        </ul>
    

    <div class="tab-content">
        <div class="tab-pane" id="tab-7-1">

            <table class="table table-settings">
                <tbdody>
                    <tr>
                        <td>
                            <h5>Alerts</h5>
                            <p>Sets alerts to get notified when changes occur to get new alerming items</p>
                        </td>
                        <td><span class="togglebutton toggle-info"><label><input type="checkbox"> </label></span></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Notifications</h5>
                            <p>You will receive notification email for any notifications if you set notification</p>
                        </td>
                        <td><span class="togglebutton toggle-primary"><label><input type="checkbox" class="toggle"  checked=""> </label></span></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Messages</h5>
                            <p>You will receive notification on email after setting messages notifications</p>                            
                        </td>
                        <td>
                            <span class="togglebutton toggle-danger"><label><input type="checkbox" > </label></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Warnings</h5>
                            <p>You will get warnning only some specific setttings or alert system</p>
                        </td>
                        <td>
                            <span class="togglebutton toggle-warning"><label><input type="checkbox" checked=""> </label></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Sidebar</h5>
                            <p>You can hide/show use with sidebar collapsw settings</p>
                        </td>
                        <td><span class="togglebutton toggle-success"><label><input type="checkbox" checked=""> </label></span></td>
                    </tr>
                </tbdody>
            </table>

        </div>
        <div class="tab-pane active" id="tab-7-2">

            <div class="widget">
                <div class="widget-heading">Recent Activities</div>
                <div class="widget-body">
                    <ul class="timeline">
                        <li class="timeline-purple">
                            <div class="timeline-icon"><i class="material-icons">add</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Jana Pena is now Follwing you</span>
                                    <span class="date">2 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-primary">
                            <div class="timeline-icon"><i class="material-icons">textsms</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Percy liaye Like your picture</span>
                                    <span class="date">6 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-green">
                            <div class="timeline-icon"><i class="material-icons">done</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Leon miles make your presentation for new project</span>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-danger">
                            <div class="timeline-icon"><i class="material-icons">favorite</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Lake wile like your comment</span>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-sky">
                            <div class="timeline-icon"><i class="material-icons">attach_money</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">The Mountain Ambience paid your payment</span>
                                    <span class="date">9 hours ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="widget">
                <div class="widget-heading">Contacts</div>
                <div class="widget-body">
                    <ul class="media-list contacts">
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_01.png" alt="" />
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Jon Owens</span>
                                <span class="contact-status text-success">Online</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_02.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Nina Huges</span>
                                <span class="contact-status text-muted">Offline</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_03.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Austin Lee</span>
                                <span class="contact-status text-danger">Busy</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_04.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Grady Hines</span>
                                <span class="contact-status text-warning">Away</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_06.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Adrian Barton</span>
                                <span class="contact-status text-success">Online</span>
                            </div>
                        </li>
                    </ul>                                
                </div>
            </div>


            </div>
        </div>

    </div>

</div>
        </div>

    
    <!-- Das FAB -->
<button class="btn btn-primary btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Click for Settings"><i class="material-icons">settings</i></button>

<!-- Switcher -->
    <div class="demo-options">
        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Fixed Header</div>
                    <div class="tabular-cell demo-switches text-right">
                        <div class="togglebutton checkbox-primary">
                            <label>
                                <input type="checkbox" name="demo-fixedheader" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Boxed Layout</div>
                    <div class="tabular-cell demo-switches text-right">
                            <div class="togglebutton toggle-primary">
                                <label>
                                    <input type="checkbox" name="demo-layoutboxed">
                                </label>
                            </div>
                        </div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Collapse Leftbar</div>
                    <div class="tabular-cell demo-switches text-right">
                            <div class="togglebutton toggle-primary">
                                <label>
                                    <input type="checkbox" name="demo-collapseleftbar">
                                </label>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="demo-body">
            <div class="option-title">Brand</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span data-addclass="navbar-brand-default" class="brand-switcher demo-default"></span></li>
                <li><span data-addclass="navbar-brand-primary" class="brand-switcher demo-primary"></span></li>
                <li><span data-addclass="navbar-brand-success" class="brand-switcher demo-success"></span></li> 
                <li><span data-addclass="navbar-brand-danger" class="brand-switcher demo-danger"></span></li>
                <li><span data-addclass="navbar-brand-warning" class="brand-switcher demo-warning"></span></li>
                <li><span data-addclass="navbar-brand-info" class="brand-switcher demo-info"></span></li> 
                <li><span data-addclass="navbar-brand-inverse" class="brand-switcher demo-inverse"></span></li> 
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Topnav</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span data-addclass="navbar-cyan" class="topnav-switcher demo-cyan"></span></li>
                <li><span data-addclass="navbar-light-blue" class="topnav-switcher demo-light-blue"></span></li>
                <li><span data-addclass="navbar-blue" class="topnav-switcher demo-blue"></span></li>
                <li><span data-addclass="navbar-indigo" class="topnav-switcher demo-indigo"></span></li>
                <li><span data-addclass="navbar-deep-purple" class="topnav-switcher demo-deep-purple"></span></li> 
                <li><span data-addclass="navbar-purple" class="topnav-switcher demo-purple"></span></li> 
                <li><span data-addclass="navbar-pink" class="topnav-switcher demo-pink"></span></li> 
                <li><span data-addclass="navbar-red" class="topnav-switcher demo-red"></span></li>
                <li><span data-addclass="navbar-teal" class="topnav-switcher demo-teal"></span></li>
                <li><span data-addclass="navbar-green" class="topnav-switcher demo-green"></span></li>
                <li><span data-addclass="navbar-light-green" class="topnav-switcher demo-light-green"></span></li>
                <li><span data-addclass="navbar-orange" class="topnav-switcher demo-orange"></span></li>               
                <li><span data-addclass="navbar-deep-orange" class="topnav-switcher demo-deep-orange"></span></li>
                
                <li><span data-addclass="navbar-bluegray" class="topnav-switcher demo-bluegray"></span></li>
                
                
                <li><span data-addclass="navbar-gray" class="topnav-switcher demo-gray"></span></li> 
                
                <li><span data-addclass="navbar-default" class="topnav-switcher demo-default"></span></li>
                <li><span data-addclass="navbar-bleachedcedar" class="topnav-switcher demo-bleachedcedar"></span></li>
                <li><span data-addclass="navbar-brown" class="topnav-switcher demo-brown"></span></li>
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Sidebar</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span data-addclass="sidebar-cyan" class="leftbar-switcher demo-cyan"></span></li>
                <li><span data-addclass="sidebar-light-blue" class="leftbar-switcher demo-light-blue"></span></li>
                <li><span data-addclass="sidebar-blue" class="leftbar-switcher demo-blue"></span></li>
                <li><span data-addclass="sidebar-indigo" class="leftbar-switcher demo-indigo"></span></li>
                <li><span data-addclass="sidebar-deep-purple" class="leftbar-switcher demo-deep-purple"></span></li> 
                <li><span data-addclass="sidebar-purple" class="leftbar-switcher demo-purple"></span></li> 
                <li><span data-addclass="sidebar-pink" class="leftbar-switcher demo-pink"></span></li> 
                <li><span data-addclass="sidebar-red" class="leftbar-switcher demo-red"></span></li>
                <li><span data-addclass="sidebar-teal" class="leftbar-switcher demo-teal"></span></li>
                <li><span data-addclass="sidebar-green" class="leftbar-switcher demo-green"></span></li>
                <li><span data-addclass="sidebar-light-green" class="leftbar-switcher demo-light-green"></span></li>
                <li><span data-addclass="sidebar-orange" class="leftbar-switcher demo-orange"></span></li>               
                <li><span data-addclass="sidebar-deep-orange" class="leftbar-switcher demo-deep-orange"></span></li>
                
                <li><span data-addclass="sidebar-bluegray" class="leftbar-switcher demo-bluegray"></span></li>
                
                
                <li><span data-addclass="sidebar-gray" class="leftbar-switcher demo-gray"></span></li> 
                
                <li><span data-addclass="sidebar-default" class="leftbar-switcher demo-default"></span></li>
                <li><span data-addclass="sidebar-bleachedcedar" class="leftbar-switcher demo-bleachedcedar"></span></li>
                <li><span data-addclass="sidebar-brown" class="leftbar-switcher demo-brown"></span></li>
            </ul>
        </div>



    </div>
<!-- /Switcher -->
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->
<script src="assets/plugins/card/lib/js/card.js"></script> 	
<script src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="assets/js/application.js"></script>
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    <script src="assets/plugins/card/lib/js/card.js"></script> 	
    <!-- Load page level scripts-->
    
<!-- Charts -->
<script src="assets/plugins/charts-flot/jquery.flot.min.js"></script>                 <!-- Flot Main File -->
<script src="assets/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
<script src="assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>           <!-- Flot Stacked Charts Plugin -->
<script src="assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
<script src="assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script>         <!-- Flot Tooltips -->
<script src="assets/plugins/charts-flot/jquery.flot.spline.js"></script>              <!-- Flot Curved Lines -->
<script src="assets/plugins/easypiechart/jquery.easypiechart.min.js"></script>        <!-- EasyPieChart-->
<script src="assets/plugins/curvedLines-master/curvedLines.js"></script>              <!-- marvinsplines -->

<script src="assets/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->

                 <!-- Date Range Picker -->
<script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>               <!-- Datepicker -->
<!-- <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->

<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
<script src="assets/plugins/chartist/dist/chartist.min.js"></script> <!-- chartist -->
<script src="assets/demo/demo-index.js"></script>                                     <!-- Initialize scripts for this page-->
<script src="assets/plugins/card/lib/js/card.js"></script> 	
    <!-- End loading page level scripts-->

    </body>
</html>