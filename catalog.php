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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
    
<link href="assets/plugins/form-fseditor/fseditor.css" type="text/css" rel="stylesheet">                      		<!-- FullScreen Editor -->

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
                    <img src="assets/img/propic/p1.jpg" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username">Lefa Mashele</span>
					
                    <span class="useremail">lefakie@gmail.com</span>
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
		<li><a  class="withripple" href="#"><span class="icon">
		<i class="material-icons">format_align_justify</i></span><span>News Feed</span></a></li>
		
		<li><a  class="withripple" href="#"><span class="icon">
		<i class="material-icons">home</i></span><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
		
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
                            <div class="container-fluid">
                                 
<div data-widget-group="group1">
	<div class="row">
		
		<div class="col-md-12 pl-n pr-n">
			<ul class="nav nav-tabs material-nav-tabs mb-lg">
				
			</ul>
		</div>
		
       <div class="col-md-12">
	   <div class="card card-weather card-moviecard" style="visibility: visible; ">
            
            <div class="weather-heading">
                <div class="weather-heading-top">
                    <h4 class="pull-left m-n">Interesting People: <span style="font-style: italic">connect with your favorites</span></h4>
                     
					 
					
					
					
                </div><!-- weather-heading-top -->
               
                   
                    <div class="tabular-cell movie-info" style="background-color:#00bcd4;">
                       
                        
                        <div class="row pb-md" style="height:50px">
                            <div class="col-md-12" >
                                
                                <ul class="list-unstyled list-inline avatar">
                                    <li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
									<li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
                                    <li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/aeon-flux.jpg" alt=""></a></li>
                                    <li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/amanda-bynes.jpg" alt=""></a></li>
                                    <li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/dina-alexander.jpg" alt=""></a></li>
                                   <li><a href="#"><img style="height:64px; width: 64px; border: 2px solid rgba(255, 255, 255, 0.87)" src="http://www.radfaces.com/images/avatars/little-pete-wrigley.jpg" alt=""></a></li>
								   
                                </ul>
                            </div>
                           
                        </div>
                        
                    </div>
                
            
            </div><!-- weather-heading -->
        </div><!-- widget-weather -->
        
    </div>
   
		

		<div class="col-md-9">
			<div class="tab-content">
				<div class="panel-profile">
					<div class="tab-content">
						<div class="tab-pane p-md" id="tab-8-1">
							<div class="about-area">
									<blockquote>
										<p><strong>About Me</strong></p>
									</blockquote>
				
					
									<p>Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p> 
									<p>Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
									<p>Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
							</div>
							<div class="about-area">
								<blockquote>
										<p><strong>Role Experience</strong></p>
									</blockquote>
								<div class="table-responsive">
								  <table class="table">
									<tbody>
									  <tr>
										<th>C#</th>
										<td><a href="#">4-6 Years</a></td>
									  </tr>
									  <tr>
										<th>Php</th>
										<td><a href="#">2-3 Years</a></td>
									  </tr>
									  <tr>
										<th>Delphi</th>
										<td><a href="#">1-2 Years</a></td>
									  </tr>
									  <tr>
										<th>C++</th>
										<td><a href="#">0-1 Years</a></td>
									  </tr>
									  <tr>
										<th>Cobal</th>
										<td><a href="#">10-12 Years</a></td>
									  </tr>
									 
									
									 
									 
									</tbody>
								  </table>
								</div>
							</div>
							<div class="about-area">
								<blockquote>
										<p><strong>Skills</strong></p>
									</blockquote>
								
								<button class="btn btn-info btn-raised btn-sm">Software Design</button>
								<button class="btn btn-info btn-raised btn-sm">Object Oriented Design</button>
								<button class="btn btn-info btn-raised btn-sm">System Design</button>
								<button class="btn btn-info btn-raised btn-sm">JEE2</button>
								<button class="btn btn-info btn-raised btn-sm">GIT</button>
								<button class="btn btn-info btn-raised btn-sm">Software Engineering</button>
								<button class="btn btn-info btn-raised btn-sm">Legacy Systems</button>
								<button class="btn btn-info btn-raised btn-sm">Transaction Sytems Architect</button>
								<button class="btn btn-info btn-raised btn-sm">Bank Systems</button>
								<button class="btn btn-info btn-raised btn-sm">Data Strusctures</button>
								<button class="btn btn-info btn-raised btn-sm">Trees</button>
								<button class="btn btn-info btn-raised btn-sm">Design Patterns</button>
								<button class="btn btn-info btn-raised btn-sm">Game Development</button>
								<button class="btn btn-info btn-raised btn-sm">Agile Design</button>
								<button class="btn btn-info btn-raised btn-sm">Java Network Development</button>
								<button class="btn btn-info btn-raised btn-sm">Delphi 7</button>
							</div>
						</div>
						<div class="tab-pane active" id="tab-8-2">								
							
							<div class="panel profile-tab like-comment">
							
							
       
   
								<div class="media">
								 
            <div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
           
           
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t2.jpg" height="400px" width="400px" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md" >
										<h5 class="media-heading">Marry Jones</h5>
										5 min ago
									</div>
									
									
								</div>
								
							</div>
							
							<div class="panel profile-tab like-comment">
								<div class="media">
								 <div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t1.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Sibusiso Khoza</h5>
										18 min ago
									</div>
									<div class="pb-md pt-md media-desc">
										Too busy to mow the lawn? I provide a professional horticultural service for residential, schools, business and commercial properties. Whether it be lawn mowing,irrigation,tree felling, garden makeovers, compost and lawn dressing, pruning or straight forward garden care,we will formulate a service to meet your needs. Our staff are screened,operators are certified and the company is registered with all required authorities.
									</div>
								</div>
								<div class="col-md-12 pt-sm pb-md">
									<img class="img-responsive" src="assets/img/timeline/t1.jpg" alt="" />
								</div>
								<div class="like-info">
									<a class="btn btn-xs btn-info btn-label ml-md" href="#">
										<i class="material-icons">favorite</i>
										Like
									</a>
									<p class="m-n like-amount"><a href="">232 others</a> like this</p>
								</div>
								<input class="form-control" type="text" placeholder="What's on your mind...">
							</div>
							<div class="panel profile-tab like-comment">
								<div class="media">
								<div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t3.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Michael Real</h5>
										35 min ago
									</div>
									<div class="pb-md pt-md media-desc">
										Our style is natural, timeless and classy, capturing spontaneous moments and not making a film set out of your wedding day with a big crew. We are unobtrusive as we capture natural moments as they happen throughout the day.
									</div>
								</div>
								<div class="col-md-12 pt-sm pb-md">
									<video width= "100%" height="400px" controls autoplay muted>
									  <source src="assets/img/timeline/t3.mp4" type="video/mp4">
									  
									  Your browser does not support the video tag.
									</video>
								</div>
								<div class="like-info">
									<a class="btn btn-xs btn-info btn-label ml-md" href="#">
										<i class="material-icons">favorite</i>
										Like
									</a>
									<p class="m-n like-amount"><a href="">985 others</a> like this</p>
								</div>
								<input class="form-control" type="text" placeholder="What's on your mind...">
							</div>
							<div class="panel profile-tab like-comment">
								<div class="media">
								<div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t4.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Lesedi Selai</h5>
										1 Hour ago
									</div>
									<div class="pb-md pt-md media-desc">
										Each client is treated as a unique masterpiece in our boutique salon. We keep up with the latest hair trends, expert cutting techniques and colour technology, specialising in colour correction.
									</div>
								</div>
								<div class="col-md-12 pt-sm pb-md">
									<img class="img-responsive" src="assets/img/timeline/t4.jpg" alt="" />
								</div>
								<div class="like-info">
									<a class="btn btn-xs btn-info btn-label ml-md" href="#">
										<i class="material-icons">favorite</i>
										Like
									</a>
									<p class="m-n like-amount"><a href="">45 others</a> like this</p>
								</div>
								<input class="form-control" type="text" placeholder="What's on your mind...">
							</div>
							
							<div class="profile-tab">
							<img src="assets/img/ad3.jpg" height="100%" width="100%"/>
							</div>
							
							<div class="panel profile-tab like-comment">
								<div class="media">
								<div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
									<a class="media-left" href="freelancerprofile.php">
										<img class="media-object" src="assets/img/propic/t5.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Sankofa Future</h5>
										1 Hour ago
									</div>
									
									<div class="pb-md pt-md media-desc">
										Yo Yo guys!!! Listen to my music!!! #STAYFRESH
									</div>
								</div>
								<div class="col-md-12 pt-sm pb-md">
									<iframe width="100%" height="450" scrolling="no" frameborder="yes" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/248956309&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
								</div>
								<div class="like-info">
									<a class="btn btn-xs btn-info btn-label ml-md" href="#">
										<i class="material-icons">favorite</i>
										Like
									</a>
									<p class="m-n like-amount"><a href="">455 others</a> like this</p>
								</div>
								<div class="media m-n pl-xl comment-profile">
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/c5.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Gee Ross</h5>
										30 min ago
									</div>
									<div class="pb-md pt-md media-desc">
										Good music my man...keep it up!!! 
									</div>
								</div>
								<input class="form-control" type="text" placeholder="What's on your mind...">
							</div>
							<div class="panel profile-tab like-comment">
								<div class="media">
								<div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t6.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Nelson Dube</h5>
										2 Hour ago
									</div>
									<div class="pb-md pt-md media-desc">
										Atchaar or chakalaka, chips, polony, cheese, vienna, russian, egg & secret sauce. Add. R43.90. 
									</div>
								</div>
								<div class="col-md-12 pt-sm pb-md">
									<img class="img-responsive" src="assets/img/timeline/t6.jpg" alt="" />
								</div>
								<div class="like-info">
									<a class="btn btn-xs btn-info btn-label ml-md" href="#">
										<i class="material-icons">favorite</i>
										Like
									</a>
									<p class="m-n like-amount"><a href="">Juan Flower</a><a href="">,Negab Rose </a> and <a href="">111 others</a> like this</p>
								</div>
								<input class="form-control" type="text" placeholder="What's on your mind..."/>
							</div>	
							<div class="panel profile-tab like-comment">
								<div class="media">
								<div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Request Quote</a></li>
					<li class="divider"></li>
                    <li><a href="">Request Service</a></li>
					 <li class="divider"></li>
                    <li><a href="">Chat</a></li>
                    <li class="divider"></li>
                    <li><a href="">Report</a></li>
                </ul>
            </div>
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t7.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Graig Hall</h5>
										3 Hour ago
									</div>
									<div class="pb-md pt-md media-desc">
										Improve your marks in Maths with our Result Driven Passionate Maths Tutors. Our math tutors teach in the comfort of your own home or on campus.
									</div>
								</div>
								<div class="like-info">
									<a class="btn btn-xs btn-info btn-label ml-md" href="#">
										<i class="material-icons">done</i>
										Liked
									</a>
									<p class="m-n like-amount"><a href="">17 others</a> like this</p>
								</div>
								<div class="media m-n pl-xl comment-profile">
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/c7.jpeg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">John San</h5>
										18 min ago
									</div>
									<div class="pb-md pt-md media-desc">
										Seems very interesting...How much is it?
									</div>
								</div>
								<div class="media m-n pl-xl comment-profile">
									<a class="media-left" href="#">
										<img class="media-object" src="assets/img/propic/t7.jpg" alt="Generic placeholder image">
									</a>
									<div class="media-body pb-md">
										<h5 class="media-heading">Graig Hall</h5>
										19 min ago
									</div>
									<div class="pb-md pt-md media-desc">
										Let's talk via Chat;)
									</div>
								</div>
								<input class="form-control" type="text" placeholder="What's on your mind..."/>
							</div>	
								
						</div>
						<div class="tab-pane p-md" id="tab-8-3">
							<div class="table-responsive">
								<table class="table m-n">
									<thead>
										  <tr>
											<th>#</th>
											<th>Project Title</th>
											<th>Description</th>
											<th>Progress</th>
										  </tr>
									</thead>
									<tbody>
										  <tr>
											<th scope="row">1.</th>
											<td><strong>Paper</strong></td>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
											<td class="vam">
												<div class="progress m-n">
												  <div class="progress-bar progress-bar-success" style="width: 20%"></div>
												</div>
											</td>
										  </tr>
										  <tr>
											<th scope="row">2.</th>
											<td><strong>Phoenix</strong></td>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
											<td class="vam">
												<div class="progress m-n">
												  <div class="progress-bar progress-bar-success" style="width: 50%"></div>
												</div>
											</td>
										  </tr>
										  <tr>
											<th scope="row">3.</th>
											<td><strong>Arvin</strong></td>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
											<td class="vam">
												<div class="progress m-n">
												  <div class="progress-bar progress-bar-success" style="width: 10%"></div>
												</div>
											</td>
										  </tr>
										  <tr>
											<th scope="row">4.</th>
											<td><strong>Flip3</strong></td>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
											<td class="vam">
												<div class="progress m-n">
												  <div class="progress-bar progress-bar-success" style="width: 75%"></div>
												</div>
											</td>
										  </tr>
										  <tr>
											<th scope="row">5.</th>
											<td><strong>Appboom</strong></td>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
											<td class="vam">
												<div class="progress m-n">
												  <div class="progress-bar progress-bar-success" style="width: 25%"></div>
												</div>
											</td>
										  </tr>
										  <tr>
											<th scope="row">6.</th>
											<td><strong>Xavant</strong></td>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
											<td class="vam">
												<div class="progress m-n">
												  <div class="progress-bar progress-bar-success" style="width: 15%"></div>
												</div>
											</td>
										  </tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane p-md" id="tab-8-4">
							<div class="panel-body profile-photos">
								<div class="row">
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_01.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_02.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_03.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_04.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_01.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_02.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_03.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
									<div class="col-md-3">
										<img src="assets/demo/stockphoto/blog_04.jpg" alt="" class="img-thumbnail img-responsive mb-xl">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane p-md" id="tab-8-5">
							<div class="row">
								<div class="col-md-12">
									<form class="form-horizontal tabular-form">
										<div class="form-group">
											<label for="form-name" class="col-sm-2 control-label">Name</label>
											<div class="col-sm-8 tabular-border">
												<input type="text" class="form-control" id="form-name" placeholder="Full Name">
											</div>
										</div>
										<div class="form-group">
											<label for="form-website" class="col-sm-2 control-label">Website</label>
											<div class="col-sm-8 tabular-border">
												<input type="text" class="form-control" id="form-website" placeholder="http://">
											</div>
										</div>
										<div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Gender</label>
											<div class="col-sm-8 tabular-border">
												<div class="radio"><label><input type="radio" name="gender"> Male</label></div>
												<div class="radio"><label><input type="radio" name="gender"> Female</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="form-password" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-8 tabular-border">
												<input type="password" class="form-control" id="form-password" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<label for="form-confirmpass" class="col-sm-2 control-label">Confrim Password</label>
											<div class="col-sm-8 tabular-border">
												<input type="password" class="form-control" id="form-confirmpass" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Country</label>
											<div class="col-sm-8 tabular-border"><select name="selector1" id="selector1" class="form-control">
												<option value="Afghanistan">Afghanistan</option>
												<option value="Åland_Islands">Åland Islands</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="American_Samoa">American Samoa</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Antarctica">Antarctica</option>
												<option value="Antigua_And_Barbuda">Antigua and Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Aruba">Aruba</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia_And_Herzegovina">Bosnia and Herzegovina</option>
												<option value="Botswana">Botswana</option>
												<option value="Bouvet_Island">Bouvet Island</option>
												<option value="Brazil">Brazil</option>
												<option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
												<option value="Brunei_Darussalam">Brunei Darussalam</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina_Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Canada">Canada</option>
												<option value="Cape_Verde">Cape Verde</option>
												<option value="Cayman_Islands">Cayman Islands</option>
												<option value="Central_African_Republic">Central African Republic</option>
												<option value="Chad">Chad</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Christmas_Island">Christmas Island</option>
												<option value="Cocos_(Keeling)_Islands">Cocos (Keeling) Islands</option>
												<option value="Colombia">Colombia</option>
												<option value="Comoros">Comoros</option>
												<option value="Congo">Congo</option>
												<option value="Congo,_The_Democratic_Republic_Of_The">Congo, The Democratic Republic of The</option>
												<option value="Cook_Islands">Cook Islands</option>
												<option value="Costa_Rica">Costa Rica</option>
												<option value="Cote_D'ivoire">Cote D'ivoire</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuba">Cuba</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Czech_Republic">Czech Republic</option>
												<option value="Denmark">Denmark</option>
												<option value="Djibouti">Djibouti</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominican_Republic">Dominican Republic</option>
												<option value="Ecuador">Ecuador</option>
												<option value="Egypt">Egypt</option>
												<option value="El_Salvador">El Salvador</option>
												<option value="Equatorial_Guinea">Equatorial Guinea</option>
												<option value="Eritrea">Eritrea</option>
												<option value="Estonia">Estonia</option>
												<option value="Ethiopia">Ethiopia</option>
												<option value="Falkland_Islands_(Malvinas)">Falkland Islands (Malvinas)</option>
												<option value="Faroe_Islands">Faroe Islands</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="French_Guiana">French Guiana</option>
												<option value="French_Polynesia">French Polynesia</option>
												<option value="French_Southern_Territories">French Southern Territories</option>
												<option value="Gabon">Gabon</option>
												<option value="Gambia">Gambia</option>
												<option value="Georgia">Georgia</option>
												<option value="Germany">Germany</option>
												<option value="Ghana">Ghana</option>
												<option value="Gibraltar">Gibraltar</option>
												<option value="Greece">Greece</option>
												<option value="Greenland">Greenland</option>
												<option value="Grenada">Grenada</option>
												<option value="Guadeloupe">Guadeloupe</option>
												<option value="Guam">Guam</option>
												<option value="Guatemala">Guatemala</option>
												<option value="Guernsey">Guernsey</option>
												<option value="Guinea">Guinea</option>
												<option value="Guinea-bissau">Guinea-bissau</option>
												<option value="Guyana">Guyana</option>
												<option value="Haiti">Haiti</option>
												<option value="Heard_Island_And_Mcdonald_Islands">Heard Island and Mcdonald Islands</option>
												<option value="Holy_See_(Vatican_City_State)">Holy See (Vatican City State)</option>
												<option value="Honduras">Honduras</option>
												<option value="Hong_Kong">Hong Kong</option>
												<option value="Hungary">Hungary</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Indonesia">Indonesia</option>
												<option value="Iran,_Islamic_Republic_Of">Iran, Islamic Republic of</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Isle_Of_Man">Isle of Man</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jersey">Jersey</option>
												<option value="Jordan">Jordan</option>
												<option value="Kazakhstan">Kazakhstan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kiribati">Kiribati</option>
												<option value="Korea,_Democratic_People's_Republic_Of">Korea, Democratic People's Republic of</option>
												<option value="Korea,_Republic_Of">Korea, Republic of</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kyrgyzstan">Kyrgyzstan</option>
												<option value="Lao_People's_Democratic_Republic">Lao People's Democratic Republic</option>
												<option value="Latvia">Latvia</option>
												<option value="Lebanon">Lebanon</option>
												<option value="Lesotho">Lesotho</option>
												<option value="Liberia">Liberia</option>
												<option value="Libyan_Arab_Jamahiriya">Libyan Arab Jamahiriya</option>
												<option value="Liechtenstein">Liechtenstein</option>
												<option value="Lithuania">Lithuania</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Macao">Macao</option>
												<option value="Macedonia,_The_Former_Yugoslav_Republic_Of">Macedonia, The Former Yugoslav Republic of</option>
												<option value="Madagascar">Madagascar</option>
												<option value="Malawi">Malawi</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Maldives">Maldives</option>
												<option value="Mali">Mali</option>
												<option value="Malta">Malta</option>
												<option value="Marshall_Islands">Marshall Islands</option>
												<option value="Martinique">Martinique</option>
												<option value="Mauritania">Mauritania</option>
												<option value="Mauritius">Mauritius</option>
												<option value="Mayotte">Mayotte</option>
												<option value="Mexico">Mexico</option>
												<option value="Micronesia,_Federated_States_Of">Micronesia, Federated States of</option>
												<option value="Moldova,_Republic_Of">Moldova, Republic of</option>
												<option value="Monaco">Monaco</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Montenegro">Montenegro</option>
												<option value="Montserrat">Montserrat</option>
												<option value="Morocco">Morocco</option>
												<option value="Mozambique">Mozambique</option>
												<option value="Myanmar">Myanmar</option>
												<option value="Namibia">Namibia</option>
												<option value="Nauru">Nauru</option>
												<option value="Nepal">Nepal</option>
												<option value="Netherlands">Netherlands</option>
												<option value="Netherlands_Antilles">Netherlands Antilles</option>
												<option value="New_Caledonia">New Caledonia</option>
												<option value="New_Zealand">New Zealand</option>
												<option value="Nicaragua">Nicaragua</option>
												<option value="Niger">Niger</option>
												<option value="Nigeria">Nigeria</option>
												<option value="Niue">Niue</option>
												<option value="Norfolk_Island">Norfolk Island</option>
												<option value="Northern_Mariana_Islands">Northern Mariana Islands</option>
												<option value="Norway">Norway</option>
												<option value="Oman">Oman</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Palau">Palau</option>
												<option value="Palestinian_Territory,_Occupied">Palestinian Territory, Occupied</option>
												<option value="Panama">Panama</option>
												<option value="Papua_New_Guinea">Papua New Guinea</option>
												<option value="Paraguay">Paraguay</option>
												<option value="Peru">Peru</option>
												<option value="Philippines">Philippines</option>
												<option value="Pitcairn">Pitcairn</option>
												<option value="Poland">Poland</option>
												<option value="Portugal">Portugal</option>
												<option value="Puerto_Rico">Puerto Rico</option>
												<option value="Qatar">Qatar</option>
												<option value="Reunion">Reunion</option>
												<option value="Romania">Romania</option>
												<option value="Russian_Federation">Russian Federation</option>
												<option value="Rwanda">Rwanda</option>
												<option value="Saint_Helena">Saint Helena</option>
												<option value="Saint_Kitts_And_Nevis">Saint Kitts and Nevis</option>
												<option value="Saint_Lucia">Saint Lucia</option>
												<option value="Saint_Pierre_And_Miquelon">Saint Pierre and Miquelon</option>
												<option value="Saint_Vincent_And_The_Grenadines">Saint Vincent and The Grenadines</option>
												<option value="Samoa">Samoa</option>
												<option value="San_Marino">San Marino</option>
												<option value="Sao_Tome_And_Principe">Sao Tome and Principe</option>
												<option value="Saudi_Arabia">Saudi Arabia</option>
												<option value="Senegal">Senegal</option>
												<option value="Serbia">Serbia</option>
												<option value="Seychelles">Seychelles</option>
												<option value="Sierra_Leone">Sierra Leone</option>
												<option value="Singapore">Singapore</option>
												<option value="Slovakia">Slovakia</option>
												<option value="Slovenia">Slovenia</option>
												<option value="Solomon_Islands">Solomon Islands</option>
												<option value="Somalia">Somalia</option>
												<option value="South_Africa">South Africa</option>
												<option value="South_Georgia_And_The_South_Sandwich_Islands">South Georgia and The South Sandwich Islands</option>
												<option value="Spain">Spain</option>
												<option value="Sri_Lanka">Sri Lanka</option>
												<option value="Sudan">Sudan</option>
												<option value="Suriname">Suriname</option>
												<option value="Svalbard_And_Jan_Mayen">Svalbard and Jan Mayen</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Syrian_Arab_Republic">Syrian Arab Republic</option>
												<option value="Taiwan,_Province_Of_China">Taiwan, Province of China</option>
												<option value="Tajikistan">Tajikistan</option>
												<option value="Tanzania,_United_Republic_Of">Tanzania, United Republic of</option>
												<option value="Thailand">Thailand</option>
												<option value="Timor-leste">Timor-leste</option>
												<option value="Togo">Togo</option>
												<option value="Tokelau">Tokelau</option>
												<option value="Tonga">Tonga</option>
												<option value="Trinidad_And_Tobago">Trinidad and Tobago</option>
												<option value="Tunisia">Tunisia</option>
												<option value="Turkey">Turkey</option>
												<option value="Turkmenistan">Turkmenistan</option>
												<option value="Turks_And_Caicos_Islands">Turks and Caicos Islands</option>
												<option value="Tuvalu">Tuvalu</option>
												<option value="Uganda">Uganda</option>
												<option value="Ukraine">Ukraine</option>
												<option value="United_Arab_Emirates">United Arab Emirates</option>
												<option value="United_Kingdom">United Kingdom</option>

												<option value="United_States" selected="selected">United States</option>
												<option value="United_States_Minor_Outlying_Islands">United States Minor Outlying Islands</option>
												<option value="Uruguay">Uruguay</option>
												<option value="Uzbekistan">Uzbekistan</option>
												<option value="Vanuatu">Vanuatu</option>
												<option value="Venezuela">Venezuela</option>
												<option value="Viet_Nam">Viet Nam</option>
												<option value="Virgin_Islands,_British">Virgin Islands, British</option>
												<option value="Virgin_Islands,_U.S.">Virgin Islands, U.S.</option>
												<option value="Wallis_And_Futuna">Wallis and Futuna</option>
												<option value="Western_Sahara">Western Sahara</option>
												<option value="Yemen">Yemen</option>
												<option value="Zambia">Zambia</option>
												<option value="Zimbabwe">Zimbabwe</option>
											</select></div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Bio</label>
											<div class="col-sm-8">
												<textarea class="form-control fullscreen"></textarea>
											</div>
										</div>
										
									</form>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .tab-content -->
		</div><!-- col-sm-8 -->
		
			
			
			<div class="col-md-3">
<div class="profile-tab panel">
<div class="widget">
<div class="panel-controls dropdown">
                <button class="btn btn-icon-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons inverted">more_vert</span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="">Recommended Freelancers</a></li>
					<li class="divider"></li>
                    <li><a href="">Top Ranked Freelancers</a></li>
					 <li class="divider"></li>
                    <li><a href="">Random Freelancers</a></li>
                  
                </ul>
            </div>
                <div class="widget-heading" style="text-align:center; font-size: 15px; margin-top: 10px"><strong>Recommended Freelancers</strong></div>
                <div class="widget-body">
                    <ul class="media-list contacts">
                        <li class="media notification-message">
                            <div class="media-left">
                                <a href="#" ><img class="img-circle avatar" src="assets/img/propic/r1.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Lindi Dassie</span>
                                <span class="contact-status text-success">Song Writter</span>
                            </div>
                        </li>
						<li class="media notification-message">
                            <div class="media-left">
                               <a href="#" ><img class="img-circle avatar" src="assets/img/propic/r2.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Pindie Maseko</span>
                                <span class="contact-status text-success">Nail Stylist</span>
                            </div>
                        </li>
						<li class="media notification-message">
                            <div class="media-left">
                                <a href="#" ><img class="img-circle avatar" src="assets/img/propic/r3.jpeg" alt=""></a>
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Allen Rashel</span>
                                <span class="contact-status text-success">Math Tutor</span>
                            </div>
                        </li>
						<li class="media notification-message">
                            <div class="media-left">
                                <a href="#"><img class="img-circle avatar" src="assets/img/propic/r4.jpeg" alt=""></a>
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Hamen Sal</span>
                                <span class="contact-status text-success">PC Technician</span>
                            </div>
                        </li>
						<li class="media notification-message">
                            <div class="media-left">
                                  <a href="#"><img class="img-circle avatar" src="assets/img/propic/r5.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Khothatso Walala</span>
                                <span class="contact-status text-success">Nail Polisher</span>
                            </div>
                        </li>
						<li class="media notification-message">
                            <div class="media-left">
                                  <a href="#"><img class="img-circle avatar" src="assets/img/propic/r6.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Rae Rails</span>
                                <span class="contact-status text-success">Concert Singer</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <a href="#"><img class="img-circle avatar" src="assets/img/propic/r7.jpeg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Jessica More</span>
                                <span class="contact-status text-success">Dentist</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                 <a href="#"><img class="img-circle avatar" src="assets/img/propic/r8.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Nina Bee</span>
                                <span class="contact-status text-success">Graphic Designer</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_04.png" alt="">
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Grady Hines</span>
                                <span class="contact-status text-success">Machanic</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_06.png" alt="">
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Adrian Barton</span>
                                <span class="contact-status text-success">PC Technician</span>
                            </div>
                        </li>
                    </ul>                                
                </div>
            </div>
			</div>
			</div>
			
			<div class="col-md-3">
<div class="profile-tab panel">
<div class="widget" >
                <div class="widget-heading" style="text-align:center; font-size: 15px; margin-top: 10px"><strong>Recent Activities</strong></div>
                <div class="widget-body">
                    <ul class="timeline" style="padding:10px 15px 10px 15px">
                        <li class="timeline-purplehh">
                            <div class="timeline-icon">  <img class="img-circle avatar" src="assets/img/propic/t1.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Sibusiso Khoza updated his <a href = "#" >profile description</a></span>
                                    <span class="date">10 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-primaryyy">
                            <div class="timeline-icon">  <img class="img-circle avatar" src="assets/img/propic/t3.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Michael Real added more <a href = "#" >skills</a></span>
                                    <span class="date">6 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-greennnn">
                            <div class="timeline-icon"> <img class="img-circle avatar" src="assets/img/propic/t4.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Lesedi Selai commented on a <a href = "#" >post</a> you liked</span>
                                    <span class="date">15 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-dangerrr">
                            <div class="timeline-icon"> <img class="img-circle avatar" src="assets/img/propic/t5.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Sankofa Future commented on a <a href = "#" >post</a> you liked</span>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-purpleeee">
                            <div class="timeline-icon">  <img class="img-circle avatar" src="assets/img/propic/t1.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Sibusiso Khoza posted a <a href = "#" >post</a></span>
                                    <span class="date">7 hours ago</span>
                                </div>
                            </div>
                        </li>
						<li class="timeline-dangerrrr">
                            <div class="timeline-icon"> <img class="img-circle avatar" src="assets/img/user.png" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Lake wile commented on a <a href = "#" >post</a></span>
                                    <span class="date">7 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-skyyyy">
                            <div class="timeline-icon">  <img class="img-circle avatar" src="assets/img/propic/t1.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Sibusiso Khoza sent you a <a href = "#" >message</a></span>
                                    <span class="date">9 hours ago</span>
                                </div>
                            </div>
                        </li>
						 <li class="timeline-dangerrrr">
                            <div class="timeline-icon"> <img class="img-circle avatar" src="assets/img/propic/t5.jpg" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Sankofa Future posted an <a href = "#" >audio post</a></span>
                                    <span class="date">16 hours ago</span>
                                </div>
                            </div>
                        </li>
                       <li class="timeline-dangerrrr">
                            <div class="timeline-icon"> <img class="img-circle avatar" src="assets/img/user.png" alt=""></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Jason Lee commented on a <a href = "#" >post</a></span>
                                    <span class="date">18 hours ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
			</div>
			</div>
			
			<div class="col-md-3">
<div class="profile-tab">
<img src="assets/img/ad2.jpg" height="100%" width="100%"/>
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
<script src="assets/demo/demo-cards.js"></script> 

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script src="assets/plugins/form-fseditor/jquery.fseditor-min.js"></script>            			<!-- Fullscreen Editor -->
<script src="assets/plugins/bootbox/bootbox.js"></script> 	<!-- Bootbox -->

<script src="assets/demo/demo-profile.js"></script>

    <!-- End loading page level scripts-->

    </body>
</html>