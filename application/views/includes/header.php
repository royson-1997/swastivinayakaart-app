<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Favicons -->
    <link href="https://img.icons8.com/fluency/48/000000/triangle-stroked.png" rel="icon">
    <link href="https://img.icons8.com/fluency/48/000000/triangle-stroked.png" rel="apple-touch-icon">

    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

  </head>
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">A C</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Swasti Vinayaka</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>admin/loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>admin/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php $getHeader = $this->data['header']; ?>
          <ul class="sidebar-menu">

            <?php if($role == ROLE_ADMIN || $role == ROLE_MANAGER){ ?>

            <li class="treeview <?php if($getHeader == 'Dashboard'){ echo 'active'; } ?>">
              <a href="<?php echo base_url(); ?>admin/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>

            <?php } if($role == ROLE_ADMIN) { ?>

            <li class="treeview <?php if($getHeader == 'Reports'){ echo 'active'; } ?>">
              <a href="#">
                <i class="fa fa-list"></i> <span>Reports</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>admin/report-document-type"><i class="fa fa-circle-o"></i> Document Type</a></li>
                <li><a href="<?php echo base_url(); ?>admin/report-document-upload"><i class="fa fa-circle-o"></i> Upload Document</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($getHeader == 'Management Team'){ echo 'active'; } ?>">
              <a href="#">
                <i class="fa fa-list"></i> <span>Management Team</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>admin/team-document-type"><i class="fa fa-circle-o"></i> Document Type</a></li>
                <li><a href="<?php echo base_url(); ?>admin/team-document-upload"><i class="fa fa-circle-o"></i> Insert Data</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($getHeader == 'Announcements'){ echo 'active'; } ?>">
              <a href="#">
                <i class="fa fa-list"></i> <span>Announcements</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>admin/announcements-document-type"><i class="fa fa-circle-o"></i> Document Type</a></li>
                <li><a href="<?php echo base_url(); ?>admin/announcements-document-upload"><i class="fa fa-circle-o"></i> Upload Document</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($getHeader == 'Company Policies'){ echo 'active'; } ?>">
              <a href="#">
                <i class="fa fa-list"></i> <span>Company Policies</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="<?php echo base_url(); ?>admin/policy-document-type"><i class="fa fa-circle-o"></i> Document Type</a></li> -->
                <li><a href="<?php echo base_url(); ?>admin/policy-document-upload"><i class="fa fa-circle-o"></i> Upload Document</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($getHeader == 'Download'){ echo 'active'; } ?>">
              <a href="#">
                <i class="fa fa-list"></i> <span>Download</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="<?php echo base_url(); ?>admin/download-document-type"><i class="fa fa-circle-o"></i> Document Type</a></li> -->
                <li><a href="<?php echo base_url(); ?>admin/download-document-upload"><i class="fa fa-circle-o"></i> Upload Document</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($getHeader == 'Contact'){ echo 'active'; } ?>">
              <a href="#">
                <i class="fa fa-list"></i> <span>Contact</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>admin/contact-document-upload"><i class="fa fa-circle-o"></i> Insert Data</a></li>
              </ul>
            </li>

            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
