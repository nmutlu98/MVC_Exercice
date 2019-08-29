<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Yeni Komite</title>

  <!-- Bootstrap -->
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
 <link rel="stylesheet" href="http://localhost/hacettepe_system2/application/views/admin_main/features/font-awesome-4.5.0/css/font-awesome.min.css">  
  <!-- NProgress -->
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Ck Editör -->
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>


  <!-- Custom Theme Style -->
  <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
         
          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">

          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3></h3>
              <ul class="nav side-menu">

                <li><a href="<?php echo site_url('admin/main_screen') ?>"><i class="f015"></i> Anasayfa </a></li>
                 <li><a href="<?php echo site_url('operation/add_commitee') ?>"><i class="f015"></i> Komite Ekle </a></li>
                   <li><a href="<?php echo site_url('operation/add_document') ?>"><i class="f015"></i> Döküman Ekle </a></li>
                    <li><a href="<?php echo site_url('operation/add_authorized_person') ?>"><i class="f015"></i> Yetkili Kişi Ekle </a></li>
                     <li><a href="<?php echo site_url('operation/give_permissions') ?>"><i class="f015"></i> Komite Grubu Üye İşlemleri </a></li>
               </ul>
             </li>

           </ul>
         </div>



       </div>
       <!-- /sidebar menu -->

       <!-- /menu footer buttons -->
       <div class="sidebar-footer hidden-small">
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>

  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>

        <ul class="nav navbar-nav navbar-right">
        

          <li role="presentation" class="dropdown">

            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
              <li>
                <a>
                </a>
              </li>
              <li>
                <a>
                </a>
              </li>
              <li>
                <a>
                </a>
              </li>
              <li>
                <div class="text-center">
                  <a>
                  </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
        <!-- /top navigation -->