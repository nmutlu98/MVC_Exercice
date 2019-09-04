
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dönem 2</title>

    <!-- Bootstrap -->
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/hacettepe_system2/application/views/admin_main/pages_build/css/custom.min.css" rel="stylesheet">
  </head>
  <?php include 'header.php';  ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Komiteler</h2>
                    <br><strong>
                    <?php if(!empty($message)){
                        echo $message;
                    } ?> </strong>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Komite Adı</th>
                           <th>Komite Konusu</th>
                           <th>İşlemler</th>
                        </tr>
                      </thead>
            <?php foreach ($commitees as $commitee) { ?>
                <tbody>
                   
                        <tr>
                          <td><?php echo $commitee['commitee_name'] ?></td>
                           <td><?php echo $commitee['commitee_subject'] ?></td>
                           <td><a href="<?php echo site_url('commitee/update_commitee/'.$commitee['commitee_slug']) ?>"><button align="center" class="btn btn-danger ">Düzenle</button> </a><a href="<?php echo site_url('commitee/commitee_page/'.$commitee['commitee_slug']) ?>"><button align="center" class="btn btn-success ">Aç</button> </a></td>
                        </tr>
                           
                         <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

         
 
                      
            
             <?php include 'footer.php';  ?>
    <!-- jQuery -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_pages_vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/jszip/dist/jszip.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="http://localhost/hacettepe_system2/application/views/admin_main/pages_build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>



