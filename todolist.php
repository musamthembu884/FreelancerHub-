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
    
<link href="assets/plugins/summernote/dist/summernote.css" type="text/css" rel="stylesheet"> <!-- Summernote -->

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
				<li><a class="withripple" href="notes.php">Note Keeper</a></li>
				
				<li><a class="withripple" href="form-pickers.html">Calendar</a></li>
				<li class="active"><a class="withripple" href="form-wizard.html">To-do List</a></li>
				<li><a class="withripple" href="form-validation.html">Weather</a></li>
				
			</ul>
		</li>
		
		<li><a  class="withripple" href="freelancer_settings.php"><span class="icon">
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
                                
<li><a href="index.html">Home</a></li>
<li><a href="#">Apps</a></li>
<li class="active"><a href="form-summernote.html">To-do List</a></li>

                            </ol>
                            <div class="page-heading">
                               <h1>To-do List</h1>
                           </div>
                            <div class="container-fluid">
                                
<div data-widget-group="group1">
	<div class="row">
	
	<div class="col-md-12">
	
                            <div class="panel bs-component">
							 <div style="background-color:#00bcd4" class="panel-heading">
					<h2 style="color:white; text-align:center">To-do List</h2>
					<div style="margin-top:-10px" class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Create New Item</a></li>
					<li class="divider"></li>
                    <li><a href="">Delete All Items</a></li>
					
                    
                </ul>
            </div>
				</div>
                                <div class="list-group">
                                    <div class="list-group-item">
                                       <div style="margin-left:10px" class="row-action-primary checkbox text-center">
                                            <label>
												<input type="checkbox">
												<span class="checkbox-material">
													
												</span>
												
												
											</label>
                                        </div>
                                        <div class="row-content">
										
                                            <div class="action-secondary"><button class="btn btn-warning btn-raised btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-raised btn-xs"><i class="fa fa-close"></i></button></div>
                                            <h4 class="list-group-item-heading">Tile with an icon</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
									<div class="list-group-item">
                                       <div style="margin-left:10px" class="row-action-primary checkbox text-center">
                                            <label>
												<input type="checkbox">
												<span class="checkbox-material">
													
												</span>
												
												
											</label>
                                        </div>
                                        <div class="row-content">
										
                                            <div class="action-secondary"><button class="btn btn-warning btn-raised btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-raised btn-xs"><i class="fa fa-close"></i></button></div>
                                            <h4 class="list-group-item-heading">Tile with an icon</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
									<div class="list-group-item">
                                       <div style="margin-left:10px" class="row-action-primary checkbox text-center">
                                            <label>
												<input type="checkbox">
												<span class="checkbox-material">
													
												</span>
												
												
											</label>
                                        </div>
                                        <div class="row-content">
										
                                            <div class="action-secondary"><button class="btn btn-warning btn-raised btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-raised btn-xs"><i class="fa fa-close"></i></button></div>
                                            <h4 class="list-group-item-heading">Tile with an icon</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
									
                                   <div class="list-group-item">
                                       <div style="margin-left:10px" class="row-action-primary checkbox text-center">
                                            <label>
												<input type="checkbox">
												<span class="checkbox-material">
													
												</span>
												
												
											</label>
                                        </div>
                                        <div class="row-content">
										
                                            <div class="action-secondary"><button class="btn btn-warning btn-raised btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-raised btn-xs"><i class="fa fa-close"></i></button></div>
                                            <h4 class="list-group-item-heading">Tile with an icon</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                       <div style="margin-left:10px" class="row-action-primary checkbox text-center">
                                            <label>
												<input type="checkbox">
												<span class="checkbox-material">
													
												</span>
												
												
											</label>
                                        </div>
                                        <div class="row-content">
										
                                            <div class="action-secondary"><button class="btn btn-warning btn-raised btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-raised btn-xs"><i class="fa fa-close"></i></button></div>
                                            <h4 class="list-group-item-heading">Tile with an icon</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
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
    <div class="clearfix">
        
    </div>
</footer>

                </div>
                <div class="extrabar-underlay"></div>
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
    
    <!-- Load page level scripts-->
    
<script src="assets/plugins/summernote/dist/summernote.js"></script>  	<!-- Summernote -->

<script>
	$(document).ready(function() {
		$('.summernote').summernote({
			height: 200
		});

		$('.airmode').summernote({
		  airMode: true
		});
	});
</script>

    <!-- End loading page level scripts-->

    </body>
</html>