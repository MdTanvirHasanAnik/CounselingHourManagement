<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="shortcut icon" type="image/x-icon" href="faculty/img/favicon.ico">
  <!-- Google Fonts
      ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/bootstrap.min.css">
  <!-- Bootstrap CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/font-awesome.min.css">
  <!-- owl.carousel CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/owl.carousel.css">
  <link rel="stylesheet" href="faculty/css/owl.theme.css">
  <link rel="stylesheet" href="faculty/css/owl.transitions.css">
  <!-- animate CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/animate.css">
  <!-- normalize CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/normalize.css">
  <!-- meanmenu icon CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/meanmenu.min.css">
  <!-- main CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/main.css">
  <!-- educate icon CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/educate-custon-icon.css">
  <!-- morrisjs CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="faculty/css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="faculty/css/calendar/fullcalendar.print.min.css">
  <!-- forms CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/form/all-type-forms.css">
  <!-- style CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/style.css">
  <!-- responsive CSS
      ============================================ -->
  <link rel="stylesheet" href="faculty/css/responsive.css">
  <!-- modernizr JS
      ============================================ -->
  <script src="faculty/js/vendor/modernizr-2.8.3.min.js"></script>

  <style>
    .modal {
      position: absolute;
      margin: auto;
      z-index: 10040;
      overflow: auto;
      overflow-y: auto;
    }
  </style>

  <style>
  /*   .input-icons i {
      position: absolute;
    } */

    .input-icons {
      width: 100%;
      margin-bottom: 10px;
    }

    .icon {
      padding: 10px;
      color: green;
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      text-align: center;
    }

    h2 {
      color: green;
    }
  </style>


</head>

<body>



  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
      <div class="sidebar-header">
        <a href="faculty/index.html"><img class="main-logo" src="faculty/img/logo/logo.png" alt="" /></a>
        <strong><a href="faculty/index.html"><img src="faculty/img/logo/logosn.png" alt="" /></a></strong>
      </div>
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
            <li>
              <a class="has-arrow" href="faculty/index.html">
                <span class="educate-icon educate-home icon-wrap"></span>
                <span class="mini-click-non">Education</span>
              </a>
              <ul class="submenu-angle" aria-expanded="true">
                <li><a title="Dashboard v.1" href="faculty/index.html"><span class="mini-sub-pro">Dashboard
                      v.1</span></a></li>
                <li><a title="Dashboard v.2" href="faculty/index-1.html"><span class="mini-sub-pro">Dashboard
                      v.2</span></a></li>
                <li><a title="Dashboard v.3" href="faculty/index-2.html"><span class="mini-sub-pro">Dashboard
                      v.3</span></a></li>
                <li><a title="Analytics" href="faculty/analytics.html"><span class="mini-sub-pro">Analytics</span></a>
                </li>
                <li><a title="Widgets" href="faculty/widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
              </ul>
            </li>
            <li>
              <a title="Landing Page" href="faculty/events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
            </li>
            <li>
              <a class="has-arrow" href="faculty/all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="All Professors" href="faculty/all-professors.html"><span class="mini-sub-pro">All
                      Professors</span></a></li>
                <li><a title="Add Professor" href="faculty/add-professor.html"><span class="mini-sub-pro">Add
                      Professor</span></a></li>
                <li><a title="Edit Professor" href="faculty/edit-professor.html"><span class="mini-sub-pro">Edit
                      Professor</span></a></li>
                <li><a title="Professor Profile" href="faculty/professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li>
              </ul>
            </li>
            <li class="active">
              <a class="has-arrow" href="faculty/all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="All Students" href="faculty/all-students.html"><span class="mini-sub-pro">All
                      Students</span></a></li>
                <li><a title="Add Students" href="faculty/add-student.html"><span class="mini-sub-pro">Add
                      Student</span></a></li>
                <li><a title="Edit Students" href="faculty/edit-student.html"><span class="mini-sub-pro">Edit
                      Student</span></a></li>
                <li><a title="Students Profile" href="faculty/student-profile.html"><span class="mini-sub-pro">Student
                      Profile</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="All Courses" href="faculty/all-courses.html"><span class="mini-sub-pro">All
                      Courses</span></a></li>
                <li><a title="Add Courses" href="faculty/add-course.html"><span class="mini-sub-pro">Add
                      Course</span></a></li>
                <li><a title="Edit Courses" href="faculty/edit-course.html"><span class="mini-sub-pro">Edit
                      Course</span></a></li>
                <li><a title="Courses Profile" href="faculty/course-info.html"><span class="mini-sub-pro">Courses
                      Info</span></a></li>
                <li><a title="Course Payment" href="faculty/course-payment.html"><span class="mini-sub-pro">Courses
                      Payment</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="All Library" href="faculty/library-assets.html"><span class="mini-sub-pro">Library
                      Assets</span></a></li>
                <li><a title="Add Library" href="faculty/add-library-assets.html"><span class="mini-sub-pro">Add Library
                      Asset</span></a></li>
                <li><a title="Edit Library" href="faculty/edit-library-assets.html"><span class="mini-sub-pro">Edit
                      Library Asset</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="Departments List" href="faculty/departments.html"><span class="mini-sub-pro">Departments
                      List</span></a></li>
                <li><a title="Add Departments" href="faculty/add-department.html"><span class="mini-sub-pro">Add
                      Departments</span></a></li>
                <li><a title="Edit Departments" href="faculty/edit-department.html"><span class="mini-sub-pro">Edit
                      Departments</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="Inbox" href="faculty/mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                <li><a title="View Mail" href="faculty/mailbox-view.html"><span class="mini-sub-pro">View
                      Mail</span></a></li>
                <li><a title="Compose Mail" href="faculty/mailbox-compose.html"><span class="mini-sub-pro">Compose
                      Mail</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/mailbox.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
              <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                <li><a title="Google Map" href="faculty/google-map.html"><span class="mini-sub-pro">Google
                      Map</span></a></li>
                <li><a title="Data Maps" href="faculty/data-maps.html"><span class="mini-sub-pro">Data Maps</span></a>
                </li>
                <li><a title="Pdf Viewer" href="faculty/pdf-viewer.html"><span class="mini-sub-pro">Pdf
                      Viewer</span></a></li>
                <li><a title="X-Editable" href="faculty/x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                <li><a title="Code Editor" href="faculty/code-editor.html"><span class="mini-sub-pro">Code
                      Editor</span></a></li>
                <li><a title="Tree View" href="faculty/tree-view.html"><span class="mini-sub-pro">Tree View</span></a>
                </li>
                <li><a title="Preloader" href="faculty/preloader.html"><span class="mini-sub-pro">Preloader</span></a>
                </li>
                <li><a title="Images Cropper" href="faculty/images-cropper.html"><span class="mini-sub-pro">Images
                      Cropper</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
              <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                <li><a title="Bar Charts" href="faculty/bar-charts.html"><span class="mini-sub-pro">Bar
                      Charts</span></a></li>
                <li><a title="Line Charts" href="faculty/line-charts.html"><span class="mini-sub-pro">Line
                      Charts</span></a></li>
                <li><a title="Area Charts" href="faculty/area-charts.html"><span class="mini-sub-pro">Area
                      Charts</span></a></li>
                <li><a title="Rounded Charts" href="faculty/rounded-chart.html"><span class="mini-sub-pro">Rounded
                      Charts</span></a></li>
                <li><a title="C3 Charts" href="faculty/c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                <li><a title="Sparkline Charts" href="faculty/sparkline.html"><span class="mini-sub-pro">Sparkline
                      Charts</span></a></li>
                <li><a title="Peity Charts" href="faculty/peity.html"><span class="mini-sub-pro">Peity Charts</span></a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data
                  Tables</span></a>
              <ul class="submenu-angle" aria-expanded="false">
                <li><a title="Peity Charts" href="faculty/static-table.html"><span class="mini-sub-pro">Static
                      Table</span></a></li>
                <li><a title="Data Table" href="faculty/data-table.html"><span class="mini-sub-pro">Data
                      Table</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms
                  Elements</span></a>
              <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                <li><a title="Basic Form Elements" href="faculty/basic-form-element.html"><span class="mini-sub-pro">Bc
                      Form Elements</span></a></li>
                <li><a title="Advance Form Elements" href="faculty/advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                <li><a title="Password Meter" href="faculty/password-meter.html"><span class="mini-sub-pro">Password
                      Meter</span></a></li>
                <li><a title="Multi Upload" href="faculty/multi-upload.html"><span class="mini-sub-pro">Multi
                      Upload</span></a></li>
                <li><a title="Text Editor" href="faculty/tinymc.html"><span class="mini-sub-pro">Text Editor</span></a>
                </li>
                <li><a title="Dual List Box" href="faculty/dual-list-box.html"><span class="mini-sub-pro">Dual List
                      Box</span></a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="faculty/mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
              <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                <li><a title="Notifications" href="faculty/notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                <li><a title="Alerts" href="faculty/alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                <li><a title="Modals" href="faculty/modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                <li><a title="Buttons" href="faculty/buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                <li><a title="Tabs" href="faculty/tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                <li><a title="Accordion" href="faculty/accordion.html"><span class="mini-sub-pro">Accordion</span></a>
                </li>
              </ul>
            </li>
            <li id="removable">
              <a class="has-arrow" href="faculty/#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
              <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                <li><a title="Login" href="faculty/login.html"><span class="mini-sub-pro">Login</span></a></li>
                <li><a title="Register" href="faculty/register.html"><span class="mini-sub-pro">Register</span></a></li>
                <li><a title="Lock" href="faculty/lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                <li><a title="Password Recovery" href="faculty/password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                <li><a title="404 Page" href="faculty/404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                <li><a title="500 Page" href="faculty/500.html"><span class="mini-sub-pro">500 Page</span></a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </nav>
  </div>
  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="faculty/index.html"><img class="main-logo" src="faculty/img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-advance-area">
      <div class="header-top-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="header-top-wraper">
                <div class="row">
                  <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                    <div class="menu-switcher-pro">
                      <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="educate-icon educate-nav"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                      <ul class="nav navbar-nav mai-top-nav">
                        <li class="nav-item"><a href="faculty/#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item"><a href="faculty/#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item"><a href="faculty/#" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item dropdown res-dis-nn">
                          <a href="faculty/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                          <div role="menu" class="dropdown-menu animated zoomIn">
                            <a href="faculty/#" class="dropdown-item">Documentation</a>
                            <a href="faculty/#" class="dropdown-item">Expert Backend</a>
                            <a href="faculty/#" class="dropdown-item">Expert FrontEnd</a>
                            <a href="faculty/#" class="dropdown-item">Contact Support</a>
                          </div>
                        </li>
                        <li class="nav-item"><a href="faculty/#" class="nav-link">Support</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item dropdown">
                          <a href="faculty/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                          <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                            <div class="message-single-top">
                              <h1>Message</h1>
                            </div>
                            <ul class="message-menu">
                              <li>
                                <a href="faculty/#">
                                  <div class="message-img">
                                    <img src="faculty/img/contact/1.jpg" alt="">
                                  </div>
                                  <div class="message-content">
                                    <span class="message-date">16 Sept</span>
                                    <h2>Advanda Cro</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="faculty/#">
                                  <div class="message-img">
                                    <img src="faculty/img/contact/4.jpg" alt="">
                                  </div>
                                  <div class="message-content">
                                    <span class="message-date">16 Sept</span>
                                    <h2>Sulaiman din</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="faculty/#">
                                  <div class="message-img">
                                    <img src="faculty/img/contact/3.jpg" alt="">
                                  </div>
                                  <div class="message-content">
                                    <span class="message-date">16 Sept</span>
                                    <h2>Victor Jara</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="faculty/#">
                                  <div class="message-img">
                                    <img src="faculty/img/contact/2.jpg" alt="">
                                  </div>
                                  <div class="message-content">
                                    <span class="message-date">16 Sept</span>
                                    <h2>Victor Jara</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                            </ul>
                            <div class="message-view">
                              <a href="faculty/#">View All Messages</a>
                            </div>
                          </div>
                        </li>
                        <li class="nav-item"><a href="faculty/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                          <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                            <div class="notification-single-top">
                              <h1>Notifications</h1>
                            </div>
                            <ul class="notification-menu">
                              <li>
                                <a href="faculty/#">
                                  <div class="notification-icon">
                                    <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                  </div>
                                  <div class="notification-content">
                                    <span class="notification-date">16 Sept</span>
                                    <h2>Advanda Cro</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="faculty/#">
                                  <div class="notification-icon">
                                    <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                  </div>
                                  <div class="notification-content">
                                    <span class="notification-date">16 Sept</span>
                                    <h2>Sulaiman din</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="faculty/#">
                                  <div class="notification-icon">
                                    <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                  </div>
                                  <div class="notification-content">
                                    <span class="notification-date">16 Sept</span>
                                    <h2>Victor Jara</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="faculty/#">
                                  <div class="notification-icon">
                                    <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                  </div>
                                  <div class="notification-content">
                                    <span class="notification-date">16 Sept</span>
                                    <h2>Victor Jara</h2>
                                    <p>Please done this project as soon possible.</p>
                                  </div>
                                </a>
                              </li>
                            </ul>
                            <div class="notification-view">
                              <a href="faculty/#">View All Notification</a>
                            </div>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a href="faculty/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <img src="faculty/img/product/pro4.jpg" alt="" />
                            <span class="admin-name">Prof.Anderson</span>
                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                          </a>
                          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                            <li><a href="faculty/#"><span class="edu-icon edu-home-admin author-log-ic"></span>My
                                Account</a>
                            </li>
                            <li><a href="faculty/#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My
                                Profile</a>
                            </li>
                            <li><a href="faculty/#"><span class="edu-icon edu-money author-log-ic"></span>User
                                Billing</a>
                            </li>
                            <li><a href="faculty/#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                            </li>
                            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item nav-setting-open"><a href="faculty/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                          <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                            <ul class="nav nav-tabs custon-set-tab">
                              <li class="active"><a data-toggle="tab" href="faculty/#Notes">Notes</a>
                              </li>
                              <li><a data-toggle="tab" href="faculty/#Projects">Projects</a>
                              </li>
                              <li><a data-toggle="tab" href="faculty/#Settings">Settings</a>
                              </li>
                            </ul>

                            <div class="tab-content custom-bdr-nt">
                              <div id="Notes" class="tab-pane fade in active">
                                <div class="notes-area-wrap">
                                  <div class="note-heading-indicate">
                                    <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                    <p>You have 10 new message.</p>
                                  </div>
                                  <div class="notes-list-area notes-menu-scrollbar">
                                    <ul class="notes-menu-list">
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/4.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/1.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/2.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/3.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/4.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/1.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/2.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/1.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/2.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="notes-list-flow">
                                            <div class="notes-img">
                                              <img src="faculty/img/contact/3.jpg" alt="" />
                                            </div>
                                            <div class="notes-content">
                                              <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                              </p>
                                              <span>Yesterday 2:45 pm</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div id="Projects" class="tab-pane fade">
                                <div class="projects-settings-wrap">
                                  <div class="note-heading-indicate">
                                    <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                    <p> You have 20 projects. 5 not completed.</p>
                                  </div>
                                  <div class="project-st-list-area project-st-menu-scrollbar">
                                    <ul class="projects-st-menu-list">
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Web Development</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">1 hours ago</span>
                                            </div>
                                            <div class="projects-st-content">
                                              <p>Completion with: 28%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Software Development</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">2 hours ago</span>
                                            </div>
                                            <div class="projects-st-content project-rating-cl">
                                              <p>Completion with: 68%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Graphic Design</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">3 hours ago</span>
                                            </div>
                                            <div class="projects-st-content">
                                              <p>Completion with: 78%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Web Design</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">4 hours ago</span>
                                            </div>
                                            <div class="projects-st-content project-rating-cl2">
                                              <p>Completion with: 38%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Business Card</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">5 hours ago</span>
                                            </div>
                                            <div class="projects-st-content">
                                              <p>Completion with: 28%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Ecommerce Business</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">6 hours ago</span>
                                            </div>
                                            <div class="projects-st-content project-rating-cl">
                                              <p>Completion with: 68%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Woocommerce Plugin</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">7 hours ago</span>
                                            </div>
                                            <div class="projects-st-content">
                                              <p>Completion with: 78%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 78%;" class="progress-bar"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="faculty/#">
                                          <div class="project-list-flow">
                                            <div class="projects-st-heading">
                                              <h2>Wordpress Theme</h2>
                                              <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                              </p>
                                              <span class="project-st-time">9 hours ago</span>
                                            </div>
                                            <div class="projects-st-content project-rating-cl2">
                                              <p>Completion with: 38%</p>
                                              <div class="progress progress-mini">
                                                <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                              </div>
                                              <p>Project end: 4:00 pm - 12.06.2014</p>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div id="Settings" class="tab-pane fade">
                                <div class="setting-panel-area">
                                  <div class="note-heading-indicate">
                                    <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                    <p> You have 20 Settings. 5 not completed.</p>
                                  </div>
                                  <ul class="setting-panel-list">
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Show notifications</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                              <label class="onoffswitch-label" for="example">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Disable Chat</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                              <label class="onoffswitch-label" for="example3">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Enable history</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                              <label class="onoffswitch-label" for="example4">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Show charts</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                              <label class="onoffswitch-label" for="example7">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Update everyday</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                              <label class="onoffswitch-label" for="example2">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Global search</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                              <label class="onoffswitch-label" for="example6">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-setting-pro">
                                        <div class="checkbox-title-pro">
                                          <h2>Offline users</h2>
                                          <div class="ts-custom-check">
                                            <div class="onoffswitch">
                                              <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                              <label class="onoffswitch-label" for="example5">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>

                                </div>
                              </div>
                            </div>
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
      </div>
      <!-- Mobile Menu start -->
      <div class="mobile-menu-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="mobile-menu">
                <nav id="dropdown">
                  <ul class="mobile-menu-nav">
                    <li><a data-toggle="collapse" data-target="#Charts" href="faculty/#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul class="collapse dropdown-header-top">
                        <li><a href="faculty/index.html">Dashboard v.1</a></li>
                        <li><a href="faculty/index-1.html">Dashboard v.2</a></li>
                        <li><a href="faculty/index-3.html">Dashboard v.3</a></li>
                        <li><a href="faculty/analytics.html">Analytics</a></li>
                        <li><a href="faculty/widgets.html">Widgets</a></li>
                      </ul>
                    </li>
                    <li><a href="faculty/events.html">Event</a></li>
                    <li><a data-toggle="collapse" data-target="#demoevent" href="faculty/#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="demoevent" class="collapse dropdown-header-top">
                        <li><a href="faculty/all-professors.html">All Professors</a>
                        </li>
                        <li><a href="faculty/add-professor.html">Add Professor</a>
                        </li>
                        <li><a href="faculty/edit-professor.html">Edit Professor</a>
                        </li>
                        <li><a href="faculty/professor-profile.html">Professor Profile</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#demopro" href="faculty/#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="demopro" class="collapse dropdown-header-top">
                        <li><a href="faculty/all-students.html">All Students</a>
                        </li>
                        <li><a href="faculty/add-student.html">Add Student</a>
                        </li>
                        <li><a href="faculty/edit-student.html">Edit Student</a>
                        </li>
                        <li><a href="faculty/student-profile.html">Student Profile</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#democrou" href="faculty/#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="democrou" class="collapse dropdown-header-top">
                        <li><a href="faculty/all-courses.html">All Courses</a>
                        </li>
                        <li><a href="faculty/add-course.html">Add Course</a>
                        </li>
                        <li><a href="faculty/edit-course.html">Edit Course</a>
                        </li>
                        <li><a href="faculty/course-profile.html">Courses Info</a>
                        </li>
                        <li><a href="faculty/course-payment.html">Courses Payment</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#demolibra" href="faculty/#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="demolibra" class="collapse dropdown-header-top">
                        <li><a href="faculty/library-assets.html">Library Assets</a>
                        </li>
                        <li><a href="faculty/add-library-assets.html">Add Library Asset</a>
                        </li>
                        <li><a href="faculty/edit-library-assets.html">Edit Library Asset</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#demodepart" href="faculty/#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="demodepart" class="collapse dropdown-header-top">
                        <li><a href="faculty/departments.html">Departments List</a>
                        </li>
                        <li><a href="faculty/add-department.html">Add Departments</a>
                        </li>
                        <li><a href="faculty/edit-department.html">Edit Departments</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#demo" href="faculty/#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="demo" class="collapse dropdown-header-top">
                        <li><a href="faculty/mailbox.html">Inbox</a>
                        </li>
                        <li><a href="faculty/mailbox-view.html">View Mail</a>
                        </li>
                        <li><a href="faculty/mailbox-compose.html">Compose Mail</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="faculty/#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                        <li><a href="faculty/google-map.html">Google Map</a>
                        </li>
                        <li><a href="faculty/data-maps.html">Data Maps</a>
                        </li>
                        <li><a href="faculty/pdf-viewer.html">Pdf Viewer</a>
                        </li>
                        <li><a href="faculty/x-editable.html">X-Editable</a>
                        </li>
                        <li><a href="faculty/code-editor.html">Code Editor</a>
                        </li>
                        <li><a href="faculty/tree-view.html">Tree View</a>
                        </li>
                        <li><a href="faculty/preloader.html">Preloader</a>
                        </li>
                        <li><a href="faculty/images-cropper.html">Images Cropper</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="faculty/#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="Chartsmob" class="collapse dropdown-header-top">
                        <li><a href="faculty/bar-charts.html">Bar Charts</a>
                        </li>
                        <li><a href="faculty/line-charts.html">Line Charts</a>
                        </li>
                        <li><a href="faculty/area-charts.html">Area Charts</a>
                        </li>
                        <li><a href="faculty/rounded-chart.html">Rounded Charts</a>
                        </li>
                        <li><a href="faculty/c3.html">C3 Charts</a>
                        </li>
                        <li><a href="faculty/sparkline.html">Sparkline Charts</a>
                        </li>
                        <li><a href="faculty/peity.html">Peity Charts</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="faculty/#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="Tablesmob" class="collapse dropdown-header-top">
                        <li><a href="faculty/static-table.html">Static Table</a>
                        </li>
                        <li><a href="faculty/data-table.html">Data Table</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#formsmob" href="faculty/#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="formsmob" class="collapse dropdown-header-top">
                        <li><a href="faculty/basic-form-element.html">Basic Form Elements</a>
                        </li>
                        <li><a href="faculty/advance-form-element.html">Advanced Form Elements</a>
                        </li>
                        <li><a href="faculty/password-meter.html">Password Meter</a>
                        </li>
                        <li><a href="faculty/multi-upload.html">Multi Upload</a>
                        </li>
                        <li><a href="faculty/tinymc.html">Text Editor</a>
                        </li>
                        <li><a href="faculty/dual-list-box.html">Dual List Box</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="faculty/#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="Appviewsmob" class="collapse dropdown-header-top">
                        <li><a href="faculty/basic-form-element.html">Basic Form Elements</a>
                        </li>
                        <li><a href="faculty/advance-form-element.html">Advanced Form Elements</a>
                        </li>
                        <li><a href="faculty/password-meter.html">Password Meter</a>
                        </li>
                        <li><a href="faculty/multi-upload.html">Multi Upload</a>
                        </li>
                        <li><a href="faculty/tinymc.html">Text Editor</a>
                        </li>
                        <li><a href="faculty/dual-list-box.html">Dual List Box</a>
                        </li>
                      </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target="#Pagemob" href="faculty/#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                      <ul id="Pagemob" class="collapse dropdown-header-top">
                        <li><a href="faculty/login.html">Login</a>
                        </li>
                        <li><a href="faculty/register.html">Register</a>
                        </li>
                        <li><a href="faculty/lock.html">Lock</a>
                        </li>
                        <li><a href="faculty/password-recovery.html">Password Recovery</a>
                        </li>
                        <li><a href="faculty/404.html">404 Page</a></li>
                        <li><a href="faculty/500.html">500 Page</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile Menu end -->
      <div class="breadcome-area">
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcome-list single-page-breadcome">
                <div class="row">

                  <center>
                    <form action="{{route('getcounseling')}}" method="get">
                      <h2>Apply for Counseling</h2>

                      <div class="col-md-3">
                        <div class="input-icons">
                          <i class="fa fa-search icon">
                          </i>
                          <input class="input-field" type="text" id="search" placeholder="Faculty Name">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="input-icons">
                          <i class="fa fa-envelope icon">
                          </i>
                          <input class="input-field" type="text" placeholder="Email" id="email" name="email">
                        </div>
                      </div>
                      <div class="col-md-3">

                        <div class="input-icons">
                          <i class="fa fa-key icon">
                          </i>
                          <input class="input-field" type="text" placeholder="ID" id="id" name="uid">
                        </div>
                      </div>

                      <div class="col-md-1" style="margin-top: 35px">
                      
                        <button type="submit" class="btn btn-info"> Get Counseling List </button>
                        
                      </div>

                    </form>
                    
                  </center>
                </div>
                @if(session('notfound'))
                    <div class="row text-center text-danger">
                      <p>{{session('notfound')}} </p>
                    </div>
                    @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single pro tab review Start-->
      <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="profile-info-inner">
                <div class="profile-img">
                  <img src="faculty/img/profile/1.jpg" alt="" />
                </div>
                <div class="profile-details-hr">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                      <div class="address-hr">
                        <p><b>Name</b><br /> Fly Zend</p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                      <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                        <p><b>Department</b><br /> CSE</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                      <div class="address-hr">
                        <p><b>Email ID</b><br /> fly@gmail.com</p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                      <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                        <p><b>Phone</b><br /> +01962067309</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="address-hr">
                        <p><b>Address</b><br /> E104, catn-2, Chandlodia Ahmedabad Gujarat, UK.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <div class="address-hr">
                        <a href="faculty/#"><i class="fa fa-facebook"></i></a>
                        <h3>500</h3>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <div class="address-hr">
                        <a href="faculty/#"><i class="fa fa-twitter"></i></a>
                        <h3>900</h3>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <div class="address-hr">
                        <a href="faculty/#"><i class="fa fa-google-plus"></i></a>
                        <h3>600</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                <ul id="myTabedu1" class="tab-review-design">
                  <li class="active"><a href="faculty/#description">Activity</a></li>
                  <li><a href="faculty/#reviews"> Biography</a></li>
                  <li><a href="faculty/#INFORMATION">Update Details</a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                  <div class="product-tab-list tab-pane fade active in" id="description">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                          <div class="row">


                            <h1 style="color: #999999;
font-family: arial, sans-serif;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;"> Request List</h1>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Faculty Name</th>
                                  <th scope="col">Expected Time</th>
                                  <th scope="col">Counseling Time</th>

                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <div class="row mg-b-15">
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="skill-title">
                                    <h2>Skill Set</h2>
                                    <hr />
                                  </div>
                                </div>
                              </div>
                              <div class="progress-skill">
                                <h2>Java</h2>
                                <div class="progress progress-mini">
                                  <div style="width: 90%;" class="progress-bar progress-yellow"></div>
                                </div>
                              </div>
                              <div class="progress-skill">
                                <h2>Php</h2>
                                <div class="progress progress-mini">
                                  <div style="width: 80%;" class="progress-bar progress-green"></div>
                                </div>
                              </div>
                              <div class="progress-skill">
                                <h2>Apps</h2>
                                <div class="progress progress-mini">
                                  <div style="width: 70%;" class="progress-bar progress-blue"></div>
                                </div>
                              </div>
                              <div class="progress-skill">
                                <h2>C#</h2>
                                <div class="progress progress-mini">
                                  <div style="width: 60%;" class="progress-bar progress-red"></div>
                                </div>
                              </div>
                            </div>
                          </div>





                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-tab-list tab-pane fade" id="reviews">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                          <div class="chat-discussion" style="height: auto">
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/1.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Michael Smith </a>
                                <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                  sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </span>
                                <div class="m-t-md mg-t-10">
                                  <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                  <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                </div>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/2.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Karl Jordan </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                  default model text, and a search for 'lorem ipsum' will uncover.
                                </span>
                                <div class="m-t-md mg-t-10">
                                  <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                  <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                  <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                </div>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/3.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Michael Smith </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  There are many variations of passages of Lorem Ipsum available, but the majority have
                                  suffered alteration.
                                </span>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/4.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Alice Jordan </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                  necessary, making this the first true generator on the Internet.
                                  It uses a dictionary of over 200 Latin words.
                                </span>
                                <div class="m-t-md mg-t-10">
                                  <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                  <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Nudge</a>
                                </div>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/1.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Mark Smith </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                  necessary, making this the first true generator on the Internet.
                                  It uses a dictionary of over 200 Latin words.
                                </span>
                                <div class="m-t-md mg-t-10">
                                  <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                  <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                </div>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/2.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Karl Jordan </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                  default model text, and a search for 'lorem ipsum' will uncover.
                                </span>
                                <div class="m-t-md mg-t-10">
                                  <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                  <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                  <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                </div>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/3.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Michael Smith </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  There are many variations of passages of Lorem Ipsum available, but the majority have
                                  suffered alteration.
                                </span>
                              </div>
                            </div>
                            <div class="chat-message">
                              <div class="profile-hdtc">
                                <img class="message-avatar" src="faculty/img/contact/4.jpg" alt="">
                              </div>
                              <div class="message">
                                <a class="message-author" href="faculty/#"> Alice Jordan </a>
                                <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                <span class="message-content">
                                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                  necessary, making this the first true generator on the Internet.
                                  It uses a dictionary of over 200 Latin words.
                                </span>
                                <div class="m-t-md mg-t-10">
                                  <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                  <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-tab-list tab-pane fade" id="INFORMATION">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <input name="number" type="text" class="form-control" placeholder="First Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Date of Birth">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Department">
                              </div>
                              <div class="form-group">
                                <input type="number" class="form-control" placeholder="Pincode">
                              </div>
                              <div class="file-upload-inner ts-forms">
                                <div class="input prepend-big-btn">
                                  <label class="icon-right" for="prepend-big-btn">
                                    <i class="fa fa-download"></i>
                                  </label>
                                  <div class="file-button">
                                    Browse
                                    <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                  </div>
                                  <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                <input type="text" class="form-control" placeholder="Description">
                              </div>
                              <div class="form-group">
                                <select class="form-control">
                                  <option>Select Gender</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control">
                                  <option>Select country</option>
                                  <option>India</option>
                                  <option>Pakistan</option>
                                  <option>Amerika</option>
                                  <option>China</option>
                                  <option>Dubai</option>
                                  <option>Nepal</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control">
                                  <option>Select state</option>
                                  <option>Gujarat</option>
                                  <option>Maharastra</option>
                                  <option>Rajastan</option>
                                  <option>Maharastra</option>
                                  <option>Rajastan</option>
                                  <option>Gujarat</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control">
                                  <option>Select city</option>
                                  <option>Surat</option>
                                  <option>Baroda</option>
                                  <option>Navsari</option>
                                  <option>Baroda</option>
                                  <option>Surat</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Website URL">
                              </div>
                              <input type="number" class="form-control" placeholder="Mobile no.">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="payment-adress mg-t-15">
                                <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer-copy-right">
                <p>Copyright © 2018. All rights reserved. Template by <a href="faculty/https://colorlib.com/wp/templates/">Colorlib</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






    <!-- bootstrap JS
		============================================ -->
    <script src="faculty/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="faculty/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="faculty/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="faculty/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="faculty/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="faculty/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="faculty/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="faculty/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="faculty/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="faculty/js/metisMenu/metisMenu.min.js"></script>
    <script src="faculty/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="faculty/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="faculty/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="faculty/js/calendar/moment.min.js"></script>
    <script src="faculty/js/calendar/fullcalendar.min.js"></script>
    <script src="faculty/js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="faculty/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="faculty/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="faculty/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="faculty/js/tawk-chat.js"></script>



    <script type="text/javascript">
      $(document).ready(function() {
        $("#search").autocomplete({

          source: function(request, response) {
            $.getJSON({
              url: "{{url('/facultyautocomplete')}}",
              data: {
                term: request.term
              },
              dataType: "json",
              success: function(data) {
                var resp = $.map(data, function(row) {
                  //console.log(obj.city_name);
                  return {
                    value: row.name,
                    label: row.name,
                    email: row.email,
                    id: row.uid,

                  }
                });

                response($.ui.autocomplete.filter(resp, request.term));
              }
            });
          },
          minLength: 1,
          select: function(event, ui) {
            $('#email').val(ui.item.email),
              $('#id').val(ui.item.id)

          }

        });
      });
    </script>


</body>

</html>