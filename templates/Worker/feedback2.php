<?php session_start();

$uname=$_SESSION['user_id'];
include_once('../shares/mydatabase.inc');
//$nam=$_POST['name'];

	//echo $nam;
$query=mysql_query("SELECT sadmn from parreg where pemail='$uname'");
    while ($row = mysql_fetch_array($query)) {
        
        $a=$row['sadmn'];
		
    }  
$query=mysql_query("SELECT name,dept from studreg where admno='$a'");
    while ($row = mysql_fetch_array($query)) {
        
        $department=$row['dept'];
		 $name=$row['name'];
		
		
    }  
	
	//echo $department;
	//echo $name;
?>
<html lang="en">
<!-- Mirrored from agmstudio.io/themes/material-style/2.4.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 15:46:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Naipunnya</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon30f4.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.light-blue-500.min.css">
    <link rel="stylesheet" href="assets/css/width-boxed.min.css" id="ms-boxed" disabled="">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--<a href="javascript:void(0)" class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand"><i class="fa fa-gears"></i></a> -->
   
    
    <div class="ms-site-container">
      <!-- Modal -->
      
      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="index-2.html">
              <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5">N</span>
              <h1 class="animated fadeInRight animation-delay-6"><span>Naipunnya &nbsp;&nbsp;School&nbsp;&nbsp;of&nbsp;&nbsp;Management</span></h1>
            </a>
          </div>
          
        </div>
      </header>
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index-2.html">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
              <span class="ms-logo ms-logo-sm">N</span>
              <span class="ms-title">Naipunnya <strong>School of Management</strong></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
			<li class="nav-item dropdown active"><a class="nav-link dropdown-toggle animated fadeIn animation-delay-7" href="index.php">Home</a></li>

              <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">View
 <i class="zmdi zmdi-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-item has_children">About us </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a class="dropdown-item" href="page-about.html">About us</a></li>
					  <li><a class="dropdown-item" href="assets/media/Naipunnya.in_brochures.pdf">Brochure</a></li>
					  <li><a class="dropdown-item" href="rules.php">Rules and Regulations </a></li>
					  <li><a class="dropdown-item" href="rules1.php">Attendance & Punctality</a></li>

                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
				   <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Facilities</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a class="dropdown-item" href="page-profile.html">College Facilities</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Prayer</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="page-about2.html">College Prayer</a></li>
                     
                    </ul>
                  </li>
                 
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">College Anthem</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a class="dropdown-item" href="page-about3.html">Anthem</a></li>
                     
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children dropdown-item">Description</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a class="dropdown-item" href="page-about4.html">About</a></li>
                   
                    </ul>
                  </li>
                  
                 
                  
                  
                  
                 
                </ul>
              </li>
              
              <li class="nav-item dropdown dropdown-megamenu-container">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Functions<i class="zmdi zmdi-chevron-down"></i></a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li class="container">
                    <div class="row">
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title"><i class="fa fa-list-alt"></i></h3>
                          <ul class="megamenu-block-list">
                           
<li>
                              <a class="withripple" href="viewleave.php"><i class="zmdi zmdi-view-agenda"></i>Leave Taken</a>
                            </li>
                           <li>
                              <a class="withripple" href="viewattendance.php"><i class="zmdi zmdi-view-agenda"></i>View Attendance</a>
                            </li>
                           
                          </ul>
                        </div>
                       </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title"><i class="fa fa-list-alt"></i></h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="viewinternal.php">
                                <i class="zmdi zmdi-tag"></i> Internal Marks</a>
                            </li>
                            <li>
                              <a class="withripple" href="viewexternal.php">
                                <i class="zmdi zmdi-tag"></i> University Marks</a>
                            </li>
                             <li>
                              <a class="withripple" href="feedback1.php">
                                <i class="zmdi zmdi-info"></i> Feedback About Teachers</a>
                            </li>
                           
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title"><i class="fa fa-list-alt"></i> </h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="events.php">
                                <i class="zmdi zmdi-n-6-square"></i> Upcoming Events</a>
                            </li>
                            <li>
                              <a class="withripple" href="viewtimetable.php">
                                <i class="zmdi zmdi-notifications-active"></i>Time Table</a>
                            </li>
                            <li>
                              <a class="withripple" href="feedback2.php">
                                <i class="zmdi zmdi-info"></i> Feedback About student</a>
                            </li>
                          </ul>
                        </div>
                       
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title"><i class="fa fa-list-alt"></i></h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="depcordinators.php">
                                <i class="zmdi zmdi-play-circle"></i> Department Cell Co-ordinators </a>
                            </li>
                            <li>
                              <a class="withripple" href="viewsubteach.php">
                                <i class="zmdi zmdi-view-dashboard"></i> Subject Teachers</a>
                            </li>
                            
                          </ul>
                        </div>

                      </div>
                    </div>
                  </li>
                </ul>
              </li>
             
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Gallery <i class="zmdi zmdi-chevron-down"></i></a>
                <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="portfolio-filters_sidebar_fluid.html"><i class="zmdi zmdi-view-compact"></i> Filtered Pictures</a></li>
                   <li><a class="dropdown-item with-badge" href="portfolio-gallery.html"><i class="zmdi zmdi-apps"></i> Picture Gallery <span class="badge badge-success text-right">1.5</span></a></li>
                      </ul>
              </li>
			   <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Suggestion <i class="zmdi zmdi-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="suggestion.php"><i class="zmdi zmdi-view-compact"></i> To Hod</a></li>
                  <li><a class="dropdown-item" href="suggestion1.php"><i class="zmdi zmdi-view-compact"></i> To Principal</a></li>
              </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">Notifications <i class="zmdi zmdi-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="college.php">College Notification</a></li>
                  <li><a class="dropdown-item" href="university.php">University Notification</a></li>
                  <li><a class="dropdown-item" href="department.php">Department Notification</a></li>
                  </ul>
              </li>
			  			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle animated fadeIn animation-delay-7" href="../common/index.php">Log Out</a></li>

            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="zmdi zmdi-menu"></i></a>
        </div> <!-- container -->
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-7">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Feedback Form about Child</h2>
              </div>
              <div class="card-body">
                <form class="form-horizontal"action="feedbacks2.php" method="post">
                  <fieldset class="container">
                    <div class="form-group row">
                      <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Id</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputName" name="admno" value="<?php echo $a;?>" readonly>
                      </div>
                    </div>
					                    <div class="row form-group">
                      <label for="inputName" class="col-md-2 control-label">Department</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputName" name="department" value="<?php echo $department;?>" readonly>
                      </div>
                    </div>
                     <div class="row form-group">
                      <label for="inputName" class="col-md-2 control-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputName" name="name" value="<?php echo $name;?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="textArea" class="col-lg-2 control-label">Feedback</label>
                      <div class="col-lg-9">
                        <textarea class="form-control" rows="3" id="textArea" name="suggestion" placeholder="Enter feedback..."></textarea>
                      </div>
                    </div>
                    <div class="form-group row justify-content-end">
                      <div class="col-lg-10">
                        <button type="submit" name="submit" class="btn btn-raised btn-primary">Send Message</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-body">
                <div class="text-center mb-2">
                  <span class="ms-logo ms-logo-sm mr-1">N</span>
                  <h3 class="no-m ms-site-title">Naipunnya<span>School of  Managenment</span></h3>
                </div>
                <address class="no-mb">
                  <p><i class="color-danger-light zmdi zmdi-pin mr-1"></i> NAIPUNNYA SCHOOL OF MANAGEMENT  </p>
                  <p><i class="color-warning-light zmdi zmdi-map mr-1"></i> Cherthala, Alappuzha, Kerala – 688 524</p>
                  <p><i class="color-info-light zmdi zmdi-email mr-1"></i> <a href="mailto:info@naipunnya.in">info@naipunnya.in</a></p>
                  <p><i class="color-royal-light zmdi zmdi-phone mr-1"></i>0478 - 2817476 </p>
                  <p><i class="color-success-light fa fa-fax mr-1"></i>0478 - 2817478 </p>
                </address>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title"><i class="zmdi zmdi-map"></i>Map</h3>
              </div>
              <iframe width="100%" height="340" src="https://maps.google.com/maps?q=naipunnya%20school%20of%20management%20cherthala&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
          </div>
        </div>
      </div> <!-- container -->
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Material Style 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i class="zmdi zmdi-long-arrow-up"></i></a>
      </div>
    </div> <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple"><i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple"><i class="zmdi zmdi-account-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar"><i class="zmdi zmdi-search"></i></label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">M</span>
              <h3>Material<span>Style</span></h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="card" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="zmdi zmdi-home"></i> Home </a>
            <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1" data-parent="#slidebar-menu">
              <li><a href="index-2.html">Default Home</a></li>
              <li><a href="home-generic-2.html">Home Black Slider</a></li>
              <li><a href="home-landing.html">Home Landing Intro</a></li>
              <li><a href="home-landing3.html">Home Landing Video</a></li>
              <li><a href="home-shop.html">Home Shop 1</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="zmdi zmdi-desktop-mac"></i> Pages </a>
            <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">
              <li><a href="page-about.html">About US</a></li>
              <li><a href="page-team.html">Our Team</a></li>
              <li><a href="page-product.html">Products</a></li>
              <li><a href="page-services.html">Services</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-timeline_left.html">Timeline</a></li>
              <li><a href="page-contact.html">Contact Option</a></li>
              <li><a href="page-login.html">Login</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-coming.html">Coming Soon</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-edit"></i> Blog </a>
            <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
              <li><a href="blog-sidebar.html">Blog Sidebar 1</a></li>
              <li><a href="blog-sidebar2.html">Blog Sidebar 2</a></li>
              <li><a href="blog-masonry.html">Blog Masonry 1</a></li>
              <li><a href="blog-masonry2.html">Blog Masonry 2</a></li>
              <li><a href="blog-full.html">Blog Full Page 1</a></li>
              <li><a href="blog-full2.html">Blog Full Page 2</a></li>
              <li><a href="blog-post.html">Blog Post 1</a></li>
              <li><a href="blog-post2.html">Blog Post 2</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="zmdi zmdi-shopping-basket"></i> E-Commerce </a>
            <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5" data-parent="#slidebar-menu">
              <li><a href="ecommerce-filters.html">E-Commerce Sidebar</a></li>
              <li><a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a></li>
              <li><a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a></li>
              <li><a href="ecommerce-item.html">E-Commerce Item</a></li>
              <li><a href="ecommerce-cart.html">E-Commerce Cart</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="zmdi zmdi-collection-image-o"></i> Portfolio </a>
            <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
              <li><a href="portfolio-filters_sidebar.html">Portfolio Sidebar Filters</a></li>
              <li><a href="portfolio-filters_topbar.html">Portfolio Topbar Filters</a></li>
              <li><a href="portfolio-filters_sidebar_fluid.html">Portfolio Sidebar Fluid</a></li>
              <li><a href="portfolio-filters_topbar_fluid.html">Portfolio Topbar Fluid</a></li>
              <li><a href="portfolio-cards.html">Porfolio Cards</a></li>
              <li><a href="portfolio-masonry.html">Porfolio Masonry</a></li>
              <li><a href="portfolio-item.html">Portfolio Item 1</a></li>
              <li><a href="portfolio-item2.html">Portfolio Item 2</a></li>
            </ul>
          </li>
          <li>
            <a class="link" href="component-typography.html"><i class="zmdi zmdi-view-compact"></i> UI Elements</a>
          </li>
          <li>
            <a class="link" href="page-all.html"><i class="zmdi zmdi-link"></i> All Pages</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook"><i class="zmdi zmdi-facebook"></i> <span class="badge-pill badge-pill-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter"><i class="zmdi zmdi-twitter"></i> <span class="badge-pill badge-pill-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google"><i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram"><i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/configurator.min.js"></script>
    <script>
      (function(i, s, o, g, r, a, m)
      {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-90917746-2', 'auto');
      ga('send', 'pageview');
    </script>
  </body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.4.2/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 15:51:55 GMT -->
</html>