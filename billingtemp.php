<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Paper - Material Admin Theme</title>
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

    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link href="assets/plugins/form-select2/select2.css" type="text/css" rel="stylesheet">                        <!-- Select2 -->
<link href="assets/plugins/form-fseditor/fseditor.css" type="text/css" rel="stylesheet">                      <!-- FullScreen Editor -->
<link href="assets/plugins/bootstrap-tokenfield/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">   <!-- Tokenfield -->

<link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" type="text/css" rel="stylesheet"> <!-- Touchspin -->

<link href="assets/plugins/card/lib/css/card.css" type="text/css" rel="stylesheet"> 						 <!-- Card -->


    </head>

    <body class="animated-content infobar-overlay">
        
        
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
	        	<i class="material-icons">fullscreen</i>
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
                <div class="static-sidebar-wrapper sidebar-blue">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<div class="widget" id="widget-profileinfo">
        <div class="widget-body">
            <div class="userinfo ">
                <div class="avatar pull-left">
                    <img src="assets/demo/avatar/avatar_15.png" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username">Jonathan Smith</span>
                    <span class="useremail">jon@paperadmin.com</span>
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
		<li><a  class="withripple" href="index.html"><span class="icon">
		<i class="material-icons">home</i></span><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
		<li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Angular (coming soon!)</span></a></li>
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">flash_on</i></span><span>Layout</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="layout-grids.html">Grid Scaffolding</a></li>
				<li><a  class="withripple" href="layout-static-leftbar.html">Static Sidebar</a></li>
				<li><a  class="withripple" href="layout-sidebar-scroll.html">Scroll Sidebar</a></li>
				<li><a  class="withripple" href="layout-horizontal.html">Horizontal Nav V1</a></li>
				<li><a  class="withripple" href="layout-horizontal-large.html">Horizontal Nav V2</a></li>
				<li><a  class="withripple" href="layout-boxed.html">Boxed</a></li>
			</ul>
		</li>

		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">settings</i></span><span>UI Kit</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="ui-typography.html">Typography</a></li>
				<li><a  class="withripple" href="ui-buttons.html">Buttons</a></li>
				<li><a  class="withripple" href="ui-modals.html">Modal</a></li>
                <li><a  class="withripple" href="ui-progress.html">Progress</a></li>
				<li><a  class="withripple" href="ui-paginations.html">Paginations</a></li>
				<li><a  class="withripple" href="ui-breadcrumbs.html">Breadcrumbs</a></li>
				<li><a  class="withripple" href="ui-labelsbadges.html">Labels &amp; Badges</a></li>
                <li><a  class="withripple" href="ui-alerts.html">Alerts</a></li>
                <li><a  class="withripple" href="ui-tabs.html">Tabs</a></li>
                <li><a  class="withripple" href="ui-wells.html">Wells</a></li>
                <li><a  class="withripple" href="ui-icons-material.html">Material Icons</a></li>
                <li><a  class="withripple" href="ui-icons-fontawesome.html">FontAwesome Icons</a></li>
                <li><a  class="withripple" href="ui-color.html">Material Colors</a></li>
				<li><a  class="withripple" href="ui-helpers.html">Helpers</a></li>
        		<li><a  class="withripple" href="ui-imagecarousel.html">Images &amp; Carousel</a></li>
			</ul>
		</li>

        <li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">shuffle</i></span><span>Components</span></a>
        	<ul class="acc-menu">
        		<li><a  class="withripple" href="cards.html">Cards</a></li>
				<li><a  class="withripple" href="ui-panels.html">Panels</a></li>
        		<li><a  class="withripple" href="ui-tiles.html">Tiles</a></li>
        		<li><a  class="withripple" href="custom-skylo.html">Page Progress</a></li>
        		<li><a  class="withripple" href="custom-bootbox.html">Bootbox</a></li>
        		<li><a  class="withripple" href="custom-pines.html">Notification</a></li>
        		<li><a  class="withripple" href="custom-pulsate.html">Pulsate</a></li>
				<li><a  class="withripple" href="custom-knob.html">jQuery Knob</a></li>
				<li><a  class="withripple" href="custom-slider.html">Slider</a></li>
				<li><a  class="withripple" href="custom-list.html">Lists</a></li>

        	</ul>
        </li>
		
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">create</i></span><span>Forms</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="ui-forms.html">Form Layout</a></li>
				<li><a  class="withripple" href="form-components.html">Form Components</a></li>
				<li><a  class="withripple" href="form-pickers.html">Pickers</a></li>
				<li><a  class="withripple" href="form-wizard.html">Form Wizard</a></li>
				<li><a  class="withripple" href="form-validation.html">Form Validation</a></li>
				<li><a  class="withripple" href="form-masks.html">Form Masks</a></li>
				<li><a  class="withripple" href="form-dropzone.html">Dropzone Uploader</a></li>
				<li><a  class="withripple" href="form-summernote.html">Summernote</a></li>
				<li><a  class="withripple" href="form-markdown.html">Markdown Editor</a></li>
				<li><a  class="withripple" href="form-xeditable.html">Inline Editor</a></li>
				<li><a  class="withripple" href="form-gridforms.html">Grid Forms</a></li>
			</ul>
		</li>

		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">apps</i></span><span>Tables</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="ui-tables.html">Basic Tables</a></li>
				<li><a  class="withripple" href="tables-responsive.html">Responsive Tables</a></li>
				<li><a  class="withripple" href="tables-editable.html">Editable Tables</a></li>
				<li><a  class="withripple" href="tables-data.html">Data Tables</a></li>
				<li><a  class="withripple" href="tables-fixedheader.html">Fixed Header Tables</a></li>
			</ul>
		</li>
		
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">show_chart</i></span><span>Analytics</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="charts-flot.html">Flot</a></li>
				<li><a  class="withripple" href="charts-sparklines.html">Sparklines</a></li>
				<li><a  class="withripple" href="charts-chartist.html">Chartist</a></li>
				<li><a  class="withripple" href="charts-nvd3.html">NVD3</a></li>
				<li><a  class="withripple" href="charts-easypiechart.html">Easy Pie Chart</a></li>
			</ul>
		</li>

		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">map</i></span><span>Maps</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="maps-google.html">Google Maps</a></li>
				<li><a  class="withripple" href="maps-jvectormap.html">jVector Maps</a></li>
				<li><a  class="withripple" href="maps-mapael.html">Mapael</a></li>
			</ul>
		</li>

		<li class="nav-separator"><span>Extras</span></li>

		<li><a  class="withripple" href="extras-calendar.html"><span class="icon"><i class="material-icons">event_note</i></span><span>Calendar</span></a></li>
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">pages</i></span><span>Pages</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="extras-profile.html">Profile</a></li>
				<li><a  class="withripple" href="extras-invoice.html">Invoice</a></li>
				<li><a  class="withripple" href="coming-soon.html">Coming Soon</a></li>
				<li><a  class="withripple" href="extras-login.html">Login</a></li>
				<li><a  class="withripple" href="extras-forgotpassword.html">Password Recovery</a></li>
				<li><a  class="withripple" href="extras-registration.html">Registration</a></li>
				<li><a  class="withripple" href="extras-forgotpassword.html">Password Reset</a></li>
			</ul>
		</li>
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">email</i></span><span>Inbox</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="app-inbox.html">All</a></li>
				<li><a  class="withripple" href="app-inbox-read.html">Read</a></li>
				<li><a  class="withripple" href="app-inbox-compose.html">Compose</a></li>
			</ul>
		</li>
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">folder</i></span><span>Sub Menu</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="javascript:;"><span>Aliquam</span></a>
					<ul class="acc-menu">
						<li><a href="#" class="withripple" href="">Integer</a></li>
						<li><a href="#" class="withripple" href="">Ut Aliqum</a></li>
						<li><a href="#" class="withripple" href="">Cras Isculis</a></li>
					</ul>
				</li>
				<li><a href="#" class="withripple" href="javascript:;">Vestibulum</a></li>
				<li><a href="#" class="withripple" href="javascript:;">Praesent</a></li>
			</ul>
		</li>
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
<li><a href="#">Advanced Forms</a></li>
<li class="active"><a href="ui-forms.html">Form Components</a></li>

                            </ol>
                            <div class="page-heading">
                               <h1>Form Components</h1>
                           </div>
                            <div class="container-fluid">
                                

<div data-widget-group="group1">

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2>Basic Form Elements</h2>
			<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<form action="" class="form-horizontal row-border">
				<div class="form-group">
					<label class="col-sm-2 control-label">Simplest Input</label>
					<div class="col-sm-8">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Password Field</label>
					<div class="col-sm-8">
						<input type="password" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Input with Placeholder</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Disabled Input</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" placeholder="Disabled Input" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Read only field</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" readonly="readonly" value="Read only text goes here">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">With pre-defined value</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="http://">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">With max length</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Popover Input</label>
					<div class="col-sm-8">
						<input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Tooltip Input</label>
					<div class="col-sm-8">
						<input type="text" class="form-control tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Select Box</label>
					<div class="col-sm-8">
						<select class="form-control" id="source">
							<optgroup label="Alaskan/Hawaiian Time Zone">
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
							</optgroup>
							<optgroup label="Pacific Time Zone">
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
								<option value="OR">Oregon</option>
								<option value="WA">Washington</option>
							</optgroup>
							<optgroup label="Mountain Time Zone">
								<option value="AZ">Arizona</option>
								<option value="CO">Colorado</option>
								<option value="ID">Idaho</option>
								<option value="MT">Montana</option><option value="NE">Nebraska</option>
								<option value="NM">New Mexico</option>
								<option value="ND">North Dakota</option>
								<option value="UT">Utah</option>
								<option value="WY">Wyoming</option>
							</optgroup>
							<optgroup label="Central Time Zone">
								<option value="AL">Alabama</option>
								<option value="AR">Arkansas</option>
								<option value="IL">Illinois</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="OK">Oklahoma</option>
								<option value="SD">South Dakota</option>
								<option value="TX">Texas</option>
								<option value="TN">Tennessee</option>
								<option value="WI">Wisconsin</option>
							</optgroup>
							<optgroup label="Eastern Time Zone">
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="IN">Indiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="OH">Ohio</option>
								<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
								<option value="VT">Vermont</option><option value="VA">Virginia</option>
								<option value="WV">West Virginia</option>
							</optgroup>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Styled Select Box</label>
					<div class="col-sm-8">
						<select class="select form-control" placeholder="This is a placeholder">
							<option selected>First option</option>
							<option>Second option</option>
							<option>And another one</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Disabled Dropdown</label>
					<div class="col-sm-8">
						<select class="form-control" disabled placeholder="Disabled Dropdown">
							<option>Alaska</option>
							<option>Lorem ipsum dolor.</option>
							<option>Amet, impedit aperiam?</option>
							<option>Nemo, alias, quasi?</option>
							<option>Inventore, expedita.</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Multi-select Box</label>
					<div class="col-sm-8">
						<select class="form-control" multiple>
							<option>Lorem ipsum dolor.</option>
							<option>Amet, impedit aperiam?</option>
							<option>Nemo, alias, quasi?</option>
							<option>Inventore, expedita.</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Inline Radio</label>
					<div class="col-sm-8">
						<div class="radio radio-inline radio-primary">
							<label>
								<input type="radio" name="optionsRadios1" checked="">
								Option 1
							</label>
						</div>
						<div class="radio radio-inline radio-primary">
							<label>
								<input type="radio" name="optionsRadios1">
								Option 2
							</label>
						</div>
						<div class="radio radio-inline radio-primary">
							<label>
								<input type="radio" name="optionsRadios1">
								Option 3
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Radio</label>
					<div class="col-sm-8">
						<div class="radio radio-primary">
							<label>
								<input type="radio" name="optionsRadios1" checked="">
								Option one is this and that
							</label>
						</div>
						<div class="radio radio-primary">
							<label>
								<input type="radio" name="optionsRadios1">
								Option two can be something else
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Inline Checkbox</label>
					<div class="col-sm-8">
						<div class="checkbox checkbox-inline checkbox-primary">
							<label>
								<input type="checkbox" name="checkboxs1" checked="">
								Option 1
							</label>
						</div>
						<div class="checkbox checkbox-inline checkbox-primary">
							<label>
								<input type="checkbox" name="checkboxs1">
								Option 2
							</label>
						</div>
						<div class="checkbox checkbox-inline checkbox-primary">
							<label>
								<input type="checkbox" name="checkboxs1">
								Option 3
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Checkbox</label>
					<div class="col-sm-8">
						<div class="checkbox checkbox-primary">
							<label>
								<input type="checkbox" name="optionscheckboxs1" checked="">
								Option one is this and that
							</label>
						</div>
						<div class="checkbox checkbox-primary">
							<label>
								<input type="checkbox" name="optionsRadios1">
								Option two can be something else
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Textarea</label>
					<div class="col-sm-8">
						<textarea class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Autogrow Textarea</label>
					<div class="col-sm-8">
						<textarea class="form-control autosize"></textarea>
					</div>
					<div class="col-sm-2"><p class="help-block">Textbox auto grows as you type!</p></div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Fullscreen Textarea</label>
					<div class="col-sm-8">
						<textarea class="form-control fullscreen"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="disabledInput">Disabled input</label>
					<div class="col-sm-8">
						<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
					</div>
				</div>

				<div class="form-group has-warning">
					<label class="col-sm-2 control-label" for="inputWarning">Input warning</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="inputWarning">
					</div>
				</div>

				<div class="form-group has-error">
					<label class="col-sm-2 control-label" for="inputError">Input error</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="inputError">
					</div>
				</div>

				<div class="form-group has-success">
					<label class="col-sm-2 control-label" for="inputSuccess">Input success</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="inputSuccess">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputLarge">Large input</label>
					<div class="col-sm-8">
						<input class="form-control input-lg" type="text" id="inputLarge">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="inputSmall">Small input</label>
					<div class="col-sm-8">
						<input class="form-control input-sm" type="text" id="inputSmall">
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-2 control-label" for="addon1">Default label with input addons</label>
					<div class="col-sm-8 input-group">
						<span class="input-group-addon">$</span>
						<input type="text" id="addon1" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default btn-raised" type="button">Button</button>
						</span>
					</div>
				</div>

				<div class="form-group ">
					<label class="col-sm-2 control-label" for="addon3a">Floating label with 2 addons</label>
					<div class="col-sm-8 input-group">
						<span class="input-group-addon">$</span>
						<input type="text" id="addon3a" class="form-control">
						<p class="help-block">The label is inside the <code>input-group</code> so that it is positioned properly as a placeholder.</p>
						<span class="input-group-btn">
							<button type="button" class="btn btn-fab btn-fab-mini">
								<i class="material-icons">send</i>
							</button>
						</span>
					</div>
				</div>

				<div class="form-group ">
					<label class="col-sm-2 control-label" for="addon2">Floating label with right addon</label>
					<div class="col-sm-8 input-group">
						<input type="text" id="addon2" class="form-control">
						<span class="input-group-btn">
							<button type="button" class="btn btn-fab btn-fab-mini">
								<i class="material-icons">functions</i>
							</button>
						</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="addon3">File Upload</label>
					<input type="file" id="inputFile4" multiple="">
					<div class="col-sm-8 input-group">
						<input type="text" readonly="" id="addon3" class="form-control" placeholder="Placeholder with file chooser...">
						<span class="input-group-btn input-group-sm">
							<button type="button" class="btn btn-fab btn-fab-mini">
								<i class="material-icons">attach_file</i>
							</button>
						</span>
					</div>
				</div>
			</form>
			
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn-raised btn-primary btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default demo-icheck" data-widget='{"draggable": "false"}'>
		<div class="panel-heading"><h2>Material Components</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<form class="form-horizontal">
				<fieldset>
					<div class="form-group" style="margin-top: 0;"> <!-- inline style is just to demo custom css to put checkbox below input above -->
						<label class="col-md-2 control-label">Checkbox</label>
						<div class="col-md-5">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked=""> Checkbox
								</label>
							</div><br>
							<div class="checkbox checkbox-danger">
								<label>
									<input type="checkbox" checked=""> Checkbox with <code>.checkbox-danger</code>
								</label>
							</div><br>
							<div class="checkbox checkbox-warning">
								<label>
									<input type="checkbox" checked=""> Checkbox with <code>.checkbox-warning</code>
								</label>
							</div><br>
							<div class="checkbox checkbox-success">
								<label>
									<input type="checkbox" checked=""> Checkbox with <code>.checkbox-success</code>
								</label>
							</div><br>
							<div class="checkbox checkbox-info">
								<label>
									<input type="checkbox" checked=""> Checkbox with <code>.checkbox-info</code>
								</label>
							</div>
						</div>
						<div class="col-md-5">
							<div class="checkbox">
								<label>
									<input type="checkbox" disabled=""> Disabled Checkbox
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Toggle</label>
						<div class="col-md-5">
							<div class="togglebutton">
								<label>
									<input type="checkbox" checked=""> Toggle button
								</label>
							</div><br>
							<div class="togglebutton toggle-danger">
								<label>
									<input type="checkbox" checked=""> Toggle button with <code>.toggle-danger</code>
								</label>
							</div><br>
							<div class="togglebutton toggle-warning">
								<label>
									<input type="checkbox" checked=""> Toggle button with <code>.toggle-warning</code>
								</label>
							</div><br>
							<div class="togglebutton toggle-success">
								<label>
									<input type="checkbox" checked=""> Toggle button with <code>.toggle-success</code>
								</label>
							</div><br>
							<div class="togglebutton toggle-info">
								<label>
									<input type="checkbox" checked=""> Toggle button with <code>.toggle-info</code>
								</label>
							</div>
						</div>
						<div class="col-md-5">
							<div class="togglebutton">
								<label>
									<input type="checkbox" checked="" disabled> Toggle button disabled
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Radios</label>

						<div class="col-md-5">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="optionsRadios" checked="">
									Radio Option
								</label>
							</div><br>
							<div class="radio radio-danger">
								<label>
									<input type="radio" name="optionsRadios">
									Radio Option with <code>.radio-danger</code>
								</label>
							</div><br>
							<div class="radio radio-warning">
								<label>
									<input type="radio" name="optionsRadios">
									Radio Option with <code>.radio-warning</code>
								</label>
							</div><br>
							<div class="radio radio-success">
								<label>
									<input type="radio" name="optionsRadios">
									Radio Option with <code>.radio-success</code>
								</label>
							</div><br>
							<div class="radio radio-info">
								<label>
									<input type="radio" name="optionsRadios">
									Radio Option with <code>.radio-info</code>
								</label>
							</div>
						</div>
						<div class="col-md-5">
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="optionsRadios" disabled>
									Disabled radio option
								</label>
							</div>
						</div>
					</div>

				</fieldset>
			</form>

		</div>
	</div>

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2>Input Groups</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<form action="" class="form-horizontal row-border">

				<div class="form-group">
					<label class="col-sm-2 control-label">Before Text Field</label>
					<div class="col-sm-8">
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="text" class="form-control" placeholder="Username">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">After Text Field</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-addon">.00</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Both</label>
					<div class="col-sm-8">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control">
							<span class="input-group-addon">.00</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Checkbox</label>
					<div class="col-sm-8">
						<div class="input-group">
							<span class="input-group-addon">
							<div class="checkbox">
								<label>
									<input type="checkbox">
								</label>
							</div>
							</span>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Radio</label>
					<div class="col-sm-8">
						<div class="input-group">
							<span class="input-group-addon">
								<div class="radio radio-primary">
									<label>
										<input type="radio" value="option1" checked="">
									</label>
								</div>
							</span>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Buttons instead of text</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-info btn-raised">Go!</button>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Buttons with Dropdowns</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-info btn-raised dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu pull-right">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Segmentded Dropdown</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-info btn-raised">Action</button>
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu pull-right">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2>Autocomplete</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<div class="col-12">
				<p>A fast, full-featured, autocomplete library can prefet data, search that data on the client, and then falling back to the server. Powered by Twitter Typeahead.</p>
			</div>
			<form action="" class="form-horizontal row-border">
				<div class="form-group">
					<label class="col-sm-2 control-label">Autocomplete</label>
					<div class="col-sm-8">
						<input type="text" class="form-control typeahead example-countries" placeholder="Enter name of a country...">
						<p class="help-block">Type in a name of a state!</p>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2>Advanced Select Boxes</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<form action="" class="form-horizontal row-border">

				<div class="form-group">
					<label class="col-sm-2 control-label">Dropdown with Search</label>
					<div class="col-sm-8">
						<select id="e1" style="width:100% !important" class="populate"></select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Select with Multiple</label>
					<div class="col-sm-8">
						<select id="e2" multiple style="width:100% !important" class="populate"></select>
						<p class="help-block">Select2 also supports multi-value select boxes. The <code>select</code> above is declared with the <code>multiple</code> attribute. Select2 automatially picks up on this</p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Minimum Input</label>
					<div class="col-sm-8">
						<select id="e3" style="width:100% !important" class="populate"></select>
						<p class="help-block">Supports a minimum input setting which is useful for large remote datasets where short search terms are not very useful</p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Infinite Scroll with Remote Data</label>
					<div class="col-sm-8">
						<input type="hidden" id="e7" style="width:100% !important"/>
						<p class="help-block">The selectbox has AJAX/JSONP support built in. In this example we will search for a movie using Rotten Tomatoes API. When result-list is scrolled to an end, more results are lazy-appended</p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Tagging Support</label>
					<div class="col-sm-8">
						<input type="hidden" id="e12" style="width:100% !important" value="brown, red, green"/>
						<p class="help-block">Quickly set up fields for tagging</p>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading ">
			<h2>Tokenfield</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<p>Advanced tagging/tokenizing plugin for input fields with a focus on keyboard and copy-paste support.</p>
			<form action="" class="form-horizontal row-border">

				<div class="form-group">
					<label class="col-sm-2 control-label">Using Twitter Typeahead</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="tokenfield-typeahead" value="red,green,blue" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Parse Emails</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control" id="tokenfield-email" value="one@email.com,not an email, another@email.com" />
							<span class="input-group-addon"><i class="material-icons">mail_outline</i></span>
						</div>

					</div>
				</div>

			</form>
		</div>
	</div>

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2>Card</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<div class="alert alert-info">
				<h4>Card <small>A better credit card form</small></h4>
				<p>Card will take any credit card form and make it the best part of the checkout process (without you changing anything). Everything is created with pure CSS, HTML, and Javascript — no images required.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<form action="" class="form-horizontal cardy">
						<div class="form-group">
							<label for="#" class="col-sm-4 control-label">Card Number</label>	
							<div class="col-sm-8">
								<input placeholder="Card number" type="text" name="number" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="#" class="col-sm-4 control-label">Full Name</label>	
							<div class="col-sm-8">
								<input placeholder="Full name" type="text" name="name" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="#" class="col-sm-4 control-label">Expiry</label>	
							<div class="col-sm-8">
								<input placeholder="MM/YY" type="text" name="expiry" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="#" class="col-sm-4 control-label">CVC</label>	
							<div class="col-sm-8">
								<input placeholder="CVC" type="text" name="cvc" class="form-control">
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6">
					<div class="card-wrapper"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2>File Input</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<form action="" class="form-horizontal row-border">

				<div class="form-group">
					<label class="col-sm-2 control-label">File input group</label>
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<div class="input-group">
								<div class="form-control uneditable-input" data-trigger="fileinput">
									<i class="fa fa-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span>
								</div>
								<span class="input-group-btn">
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
									<span class="btn btn-default btn-file">
										<span class="fileinput-new">Select file</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="...">
									</span>
									
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">File input button</label>
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<span class="btn btn-default btn-file">
								<span class="fileinput-new">Select file</span>
								<span class="fileinput-exists">Change</span>
								<input type="file" name="...">
							</span>
							<span class="fileinput-filename"></span>
							<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Image Upload Widgets</label>
					<div class="col-sm-5">
						<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
							<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
							<div>
								<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="alert alert-info">Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</div>
					</div>
				</div>

			</form>
		</div>
	</div>

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		<div class="panel-heading"><h2>Touchspin</h2>
				<div class="panel-ctrls"
					data-actions-container="" 
					data-action-collapse='{"target": ".panel-body"}'
				>
				</div>
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<div class="alert alert-info">A mobile and touch friendly input spinner component for Paper. It supports the mousewheel and the up/down keys. </div>
			<form action="" class="form-horizontal row-border">
				<div class="form-group">
					<label for="" class="control-label col-sm-2">With Postfix</label>
					<div class="col-sm-8">
						<input id="touchspin1" value="4.20">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">With Prefix</label>
					<div class="col-sm-8">
						<input id="touchspin2" value="34234">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">Vertical Buttons Alignment</label>
					<div class="col-sm-8">
						<input id="touchspin3" value="54">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">Vertical Buttons (Custom Icons)</label>
					<div class="col-sm-8">
						<input id="touchspin4" value="872">
					</div>
				</div>
			</form>
		</div>
	</div>


</div>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2016 KaijuThemes</h6></li>
        </ul>
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
    
<script src="assets/plugins/quicksearch/jquery.quicksearch.min.js"></script>           			<!-- Quicksearch to go with Multisearch Plugin -->
<script src="assets/plugins/form-typeahead/typeahead.bundle.min.js"></script>                 	<!-- Typeahead for Autocomplete -->
<script src="assets/plugins/form-select2/select2.min.js"></script>                     			<!-- Advanced Select Boxes -->
<script src="assets/plugins/form-autosize/jquery.autosize-min.js"></script>            			<!-- Autogrow Text Area -->
<script src="assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js"></script> 			<!-- Color Picker -->

<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>      <!-- Touchspin -->

<script src="assets/plugins/form-fseditor/jquery.fseditor-min.js"></script>            			<!-- Fullscreen Editor -->
<script src="assets/plugins/form-jasnyupload/fileinput.min.js"></script>               			<!-- File Input -->
<script src="assets/plugins/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>     		<!-- Tokenfield -->

<script src="assets/plugins/card/lib/js/card.js"></script> 										<!-- Card -->

<script src="assets/plugins/jquery-chained/jquery.chained.min.js"></script> 						<!-- Chained Select Boxes -->

<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> <!-- MouseWheel Support -->

<script src="assets/demo/demo-formcomponents.js"></script>

    <!-- End loading page level scripts-->

    </body>
</html>