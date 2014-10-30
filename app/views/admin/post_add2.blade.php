<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Form Components</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="http://localhost/laravel/public/packages/admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="http://localhost/laravel/public/packages/admin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="http://localhost/laravel/public/packages/admin/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="http://localhost/laravel/public/packages/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="http://localhost/laravel/public/packages/admin/css/style.css" rel="stylesheet" />
   <link href="http://localhost/laravel/public/packages/admin/css/style_responsive.css" rel="stylesheet" />
   <link href="http://localhost/laravel/public/packages/admin/css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="http://localhost/laravel/public/packages/admin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/jquery-tags-input/jquery.tagsinput.css" />    
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="http://localhost/laravel/public/packages/admin/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="http://localhost/laravel/public/packages/admin/assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="http://localhost/laravel/public/packages/admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="img/logo.png" alt="Admin Lab" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
                               <i class="icon-cog"></i>
                           </a>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Mosaddek Hossain</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                               <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                               <li class="divider"></li>
                               <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="index.html">Dashboard 1</a></li>
                      <li><a class="" href="index_2.html">Dashboard 2</a></li>

                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> UI Elements
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="ui_elements_general.html">General</a></li>
                      <li><a class="" href="ui_elements_buttons.html">Buttons</a></li>

                      <li><a class="" href="ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
                      <li><a class="" href="ui_elements_typography.html">Typography</a></li>
                      <li><a class="" href="tree_view.html">Tree View</a></li>
                      <li><a class="" href="nestable.html">Nestable List</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-cogs"></i></span> Components
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="calendar.html">Calendar</a></li>
                      <li><a class="" href="data_table.html">Data Table</a></li>
                      <li><a class="" href="grids.html">Grids</a></li>
                      <li><a class="" href="charts.html">Visual Charts</a></li>
                      <li><a class="" href="messengers.html">Conversations</a></li>
                      <li><a class="" href="gallery.html"> Gallery</a></li>
                  </ul>
              </li>
              <li class="has-sub active">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-tasks"></i></span> Form Stuff
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="form_layout.html">Form Layouts</a></li>
                      <li class="active"><a class="" href="form_component.html">Form Components</a></li>
                      <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                      <li><a class="" href="form_validation.html">Form Validation</a></li>
                      <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-fire"></i></span> Icons
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                      <li><a class="" href="glyphicons.html">Glyphicons</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-map-marker"></i></span> Maps
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="maps_google.html"> Google Maps</a></li>
                      <li><a class="" href="maps_vector.html"> Vector Maps</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="blank.html">Blank Page</a></li>
                      <li><a class="" href="sidebar_closed.html">Sidebar Closed Page</a></li>
                      <li><a class="" href="coming_soon.html">Coming Soon</a></li>
                      <li><a class="" href="blog.html">Blog</a></li>
                      <li><a class="" href="about_us.html">About Us</a></li>
                      <li><a class="" href="contact_us.html">Contact Us</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-glass"></i></span> Extra
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="lock.html">Lock Screen</a></li>
                      <li><a class="" href="profile.html">Profile</a></li>
                      <li><a class="" href="invoice.html">Invoice</a></li>
                      <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                      <li><a class="" href="faq.html">FAQ</a></li>
                      <li><a class="" href="404.html">404 Error</a></li>
                      <li><a class="" href="500.html">500 Error</a></li>
                  </ul>
              </li>
              <li><a class="" href="login.html"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <h3 class="page-title">
                     Form Components
                     <small>form components and widgets</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Form Components</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM widget-->   
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Sample Form</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                           <div class="control-group">
                              <label class="control-label">Input</label>
                              <div class="controls">
                                 <input type="text" class="span6 " />
                                 <span class="help-inline">Some hint here</span>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Disabled Input</label>
                              <div class="controls">
                                 <input class="span6 " type="text" placeholder="Disabled input here..." disabled />
                                 <span class="help-inline">Some hint here</span>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Readonly Input</label>
                              <div class="controls">
                                 <input class="span6 " type="text" placeholder="Readonly input here..." disabled />
                                 <span class="help-inline">Some hint here</span>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Input with Popover</label>
                              <div class="controls">
                                 <input type="text" class="span6  popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Input with Tooltip</label>
                              <div class="controls">
                                 <input type="text" class="span6  tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here." />                       
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Auto Complete</label>
                              <div class="controls">
                                 <input type="text" class="span6 " style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
                                 <p class="help-block">Start typing to auto complete!. E.g: Florida</p>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Email Address Input</label>
                              <div class="controls">
                                 <div class="input-prepend">
                                    <span class="add-on">@</span><input class=" " type="text" placeholder="Email Address" />
                                 </div>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Email Address Input</label>
                              <div class="controls">
                                 <div class="input-icon left">
                                    <i class="icon-envelope"></i>
                                    <input class=" " type="text" placeholder="Email Address" />    
                                 </div>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Currency Input</label>
                              <div class="controls">
                                 <div class="input-prepend input-append">
                                    <span class="add-on">$</span><input class=" " type="text" /><span class="add-on">.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Default Dropdown</label>
                              <div class="controls">
                                 <select class="span6 " data-placeholder="Choose a Category" tabindex="1">
                                    <option value="">Select...</option>
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Default Dropdown(Multiple)</label>
                              <div class="controls">
                                 <select class="span6 " multiple="multiple" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                    <option value="Category 3">Category 6</option>
                                    <option value="Category 4">Category 7</option>
                                    <option value="Category 3">Category 8</option>
                                    <option value="Category 4">Category 9</option>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Custom Dropdown</label>
                              <div class="controls">
                                 <select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
                                    <option value=""></option>
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Grouped Custom Dropdown</label>
                              <div class="controls">
                                 <select data-placeholder="Your Favorite Team" class="chosen span6" tabindex="-1" id="selS0V">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                       <option>Dallas Cowboys</option>
                                       <option>New York Giants</option>
                                       <option>Philadelphia Eagles</option>
                                       <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                       <option>Chicago Bears</option>
                                       <option>Detroit Lions</option>
                                       <option>Green Bay Packers</option>
                                       <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                       <option>Atlanta Falcons</option>
                                       <option>Carolina Panthers</option>
                                       <option>New Orleans Saints</option>
                                       <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                       <option>Arizona Cardinals</option>
                                       <option>St. Louis Rams</option>
                                       <option>San Francisco 49ers</option>
                                       <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                       <option>Buffalo Bills</option>
                                       <option>Miami Dolphins</option>
                                       <option>New England Patriots</option>
                                       <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                       <option>Baltimore Ravens</option>
                                       <option>Cincinnati Bengals</option>
                                       <option>Cleveland Browns</option>
                                       <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                       <option>Houston Texans</option>
                                       <option>Indianapolis Colts</option>
                                       <option>Jacksonville Jaguars</option>
                                       <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                       <option>Denver Broncos</option>
                                       <option>Kansas City Chiefs</option>
                                       <option>Oakland Raiders</option>
                                       <option>San Diego Chargers</option>
                                    </optgroup>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Custom Dropdown Multiple Select</label>
                              <div class="controls">
                                 <select data-placeholder="Your Favorite Teams" class="chosen span6" multiple="multiple" tabindex="6">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                       <option>Dallas Cowboys</option>
                                       <option>New York Giants</option>
                                       <option>Philadelphia Eagles</option>
                                       <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                       <option selected>Chicago Bears</option>
                                       <option>Detroit Lions</option>
                                       <option>Green Bay Packers</option>
                                       <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                       <option>Atlanta Falcons</option>
                                       <option selected>Carolina Panthers</option>
                                       <option>New Orleans Saints</option>
                                       <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                       <option>Arizona Cardinals</option>
                                       <option>St. Louis Rams</option>
                                       <option>San Francisco 49ers</option>
                                       <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                       <option>Buffalo Bills</option>
                                       <option>Miami Dolphins</option>
                                       <option>New England Patriots</option>
                                       <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                       <option>Baltimore Ravens</option>
                                       <option>Cincinnati Bengals</option>
                                       <option>Cleveland Browns</option>
                                       <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                       <option>Houston Texans</option>
                                       <option>Indianapolis Colts</option>
                                       <option>Jacksonville Jaguars</option>
                                       <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                       <option>Denver Broncos</option>
                                       <option>Kansas City Chiefs</option>
                                       <option>Oakland Raiders</option>
                                       <option>San Diego Chargers</option>
                                    </optgroup>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Custom Dropdown Diselect</label>
                              <div class="controls">
                                 <select data-placeholder="Your Favorite Type of Bear" class="chosen-with-diselect span6" tabindex="-1" id="selCSI">
                                    <option value=""></option>
                                    <option>American Black Bear</option>
                                    <option>Asiatic Black Bear</option>
                                    <option>Brown Bear</option>
                                    <option>Giant Panda</option>
                                    <option selected="">Sloth Bear</option>
                                    <option>Sun Bear</option>
                                    <option>Polar Bear</option>
                                    <option>Spectacled Bear</option>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Radio Buttons</label>
                              <div class="controls">
                                 <label class="radio">
                                 <input type="radio" name="optionsRadios1" value="option1" />
                                 Option 1
                                 </label>
                                 <label class="radio">
                                 <input type="radio" name="optionsRadios1" value="option2" checked />
                                 Option 2
                                 </label>  
                                 <label class="radio">
                                 <input type="radio" name="optionsRadios1" value="option2" />
                                 Option 3
                                 </label>  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Radio Buttons</label>
                              <div class="controls">
                                 <label class="radio line">
                                 <input type="radio" name="optionsRadios2" value="option1" />
                                 Option 1
                                 </label>
                                 <label class="radio line">
                                 <input type="radio" name="optionsRadios2" value="option2" checked />
                                 Option 2
                                 </label>  
                                 <label class="radio line">
                                 <input type="radio" name="optionsRadios2" value="option2" />
                                 Option 3
                                 </label>  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Checkbox</label>
                              <div class="controls">
                                 <label class="checkbox">
                                 <input type="checkbox" value="" /> Checkbox 1
                                 </label>
                                 <label class="checkbox">
                                 <input type="checkbox" value="" /> Checkbox 2
                                 </label>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Checkbox</label>
                              <div class="controls">
                                 <label class="checkbox line">
                                 <input type="checkbox" value="" /> Checkbox 1
                                 </label>
                                 <label class="checkbox line">
                                 <input type="checkbox" value="" /> Checkbox 2
                                 </label>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Textarea</label>
                              <div class="controls">
                                 <textarea class="span6 " rows="3"></textarea>
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" class="btn btn-success">Submit</button>
                              <button type="button" class="btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM widget-->
               </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Masked inputs
                            </h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" action="#">
                                <div class="control-group">
                                    <label class="control-label">ISBN 1</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="999-99-999-9999-9" placeholder="">
                                        <span class="help-inline">999-99-999-9999-9</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ISBN 2</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="999 99 999 9999 9" placeholder="">
                                        <span class="help-inline">999 99 999 9999 9</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ISBN 3</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="999/99/999/9999/9" placeholder="">
                                        <span class="help-inline">999/99/999/9999/9</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">IPV4</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="999.999.999.9999" placeholder="">
                                        <span class="help-inline">192.168.110.310</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">IPV6</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="9999:9999:9999:9:999:9999:9999:9999" placeholder="">
                                        <span class="help-inline">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tax ID</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="99-9999999" placeholder="">
                                        <span class="help-inline">99-9999999</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="(999) 999-9999" placeholder="">
                                        <span class="help-inline">(999) 999-9999</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Currency</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="$ 999,999,999.99" placeholder="">
                                        <span class="help-inline">$ 999,999,999.99</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Date</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="99/99/9999" placeholder="">
                                        <span class="help-inline">dd/mm/yyyy</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Date 2</label>
                                    <div class="controls">
                                        <input class="span5" type="text" data-mask="99-99-9999" placeholder="">
                                        <span class="help-inline">dd-mm-yyyy</span>
                                    </div>
                                </div>

                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                </div>
            </div>
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN widget-->   
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Tags Input</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                     </div>
                     <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                           <div class="control-group">
                              <label class="control-label">Default</label>
                              <div class="controls">
                                 <input id="tags_1" type="text" class="m-wra tags" value="foo,bar,baz,roffle" />
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Fixed Width</label>
                              <div class="controls">
                                 <input id="tags_2" type="text" class="m-wra tags medium" value="tag1,tag2" />
                              </div>
                           </div>
                        </form>
                        <!-- END FORM-->  
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Color Pickers</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default</label>
                                    <div class="controls">
                                        <input type="text" class="colorpicker-default " value="#8fff00" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">RGBA</label>
                                    <div class="controls">
                                        <input type="text" class="colorpicker-rgba " value="rgb(0,194,255,0.78)" data-color-format="rgba" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">As Component</label>
                                    <div class="controls">
                                        <div class="input-append color colorpicker-default" data-color="#87BB33" data-color-format="rgba">
                                            <input type="text" class="" value="#87BB33" readonly />
                                            <span class="add-on"><i style="background-color: #87BB33;"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Time Pickers</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default Timepicker</label>
                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker-component">
                                            <input class=" m-ctrl-small timepicker-default" type="text" />
                                            <span class="add-on"><i class="icon-time"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">24hr Timepicker</label>
                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker-component">
                                            <input class=" m-ctrl-small timepicker-24" type="text" />
                                            <span class="add-on"><i class="icon-time"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Clockface Time Pickers
                            </h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                        </div>
                        <div class="widget-body form">
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Input</label>
                                    <div class="controls">
                                        <input type="text" id="clockface_1" value="2:30 PM" data-format="hh:mm A" class=" small" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Button</label>
                                    <div class="controls">
                                        <div class="input-append">
                                            <input type="text" id="clockface_2" value="14:30" class=" small" readonly="" />
                                            <button class="btn" type="button" id="clockface_2_toggle-btn">
                                                <i class="icon-time"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Inline</label>
                                    <div class="controls">
                                        <div id="clockface_3" class="well" style="padding: 0; float: left"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Date Pickers</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default datepicker</label>
                                    <div class="controls">
                                        <input class=" m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Starts with years view</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input class=" m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Limit the view mode to months</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                            <input class=" m-ctrl-medium date-picker" size="16" type="text" value="02/2012" /><span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Date Range Pickers</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default Date Ranges</label>
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon-calendar"></i></span><input type="text" class=" m-ctrl-medium date-range" />
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Advance Date Ranges</label>
                                    <div class="controls">
                                        <div id="form-date-range" class="btn">
                                            <i class="icon-calendar"></i>
                                            &nbsp;<span></span>
                                            <b class="caret"></b>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                </div>
                <div class="span6">
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>File Upload</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default</label>
                                    <div class="controls">
                                        <input type="file" class="default" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Advanced</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                       <span class="btn btn-file">
                                       <span class="fileupload-new">Select file</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="default" />
                                       </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Without input</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" />
                                    </span>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image Upload</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="default" /></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-important">NOTE!</span>
                                 <span>
                                 Attached image thumbnail is
                                 supported in Latest Firefox, Chrome, Opera,
                                 Safari and Internet Explorer 10 only
                                 </span>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Switch Buttons
                            </h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form switch-form">
                            <div class="widget-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Right Action Input</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input class=" medium" type="text" />
                                                <div class="btn-group">
                                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
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
                                    <div class="control-group">
                                        <label class="control-label">Left Action Input</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <div class="btn-group">
                                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <input class=" medium" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Basic Toggle Button</label>
                                        <div class="controls">
                                            <div class="basic-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Toggle Buttons with Text</label>
                                        <div class="controls">
                                            <div class="text-toggle-button">
                                                <input type="checkbox" class="toggle" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Not Animated</label>
                                        <div class="controls">
                                            <div class="not-animated-toggle-button">
                                                <input type="checkbox" class="toggle" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Transition Speed</label>
                                        <div class="controls">
                                            <div class="transition-value-toggle-button">
                                                <input type="checkbox" class="toggle" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Styled Toggle Button</label>
                                        <div class="controls">
                                            <div class="danger-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                            <div class="info-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                            <div class="success-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                            <div class="warning-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Height Toggle Button</label>
                                        <div class="controls">
                                            <div class="height-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="space20"></div>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <!-- END widget-->

                </div>
            </div>

            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN  widget-->
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>WYSIWYG Editor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                           <div class="control-group">
                              <label class="control-label">WYSIWYG Editor</label>
                              <div class="controls">
                                 <textarea class="span12 wysihtml5" rows="6"></textarea>
                              </div>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END EXTRAS widget-->
               </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN  widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>CKEditor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">CKEditor</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="http://localhost/laravel/public/packages/admin/js/jquery-1.8.2.min.js"></script>    
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/ckeditor/ckeditor.js"></script>
   <script src="http://localhost/laravel/public/packages/admin/assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="http://localhost/laravel/public/packages/admin/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>   
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="http://localhost/laravel/public/packages/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="http://localhost/laravel/public/packages/admin/assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="http://localhost/laravel/public/packages/admin/js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>