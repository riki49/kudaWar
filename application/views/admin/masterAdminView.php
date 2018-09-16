<?php 
$cetak = $_SESSION['cetak'];
$nama = $_SESSION['nama'];
$today = new DateTime('today');
$CI =& get_instance();
$CI->load->library('hitungUmur');
$total =0;
$today = new DateTime();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Master Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
 
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  
  <!-- Daterange picker -->
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>FD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KUDAWAR</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nama; ?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-center">
                  <a href="<?php echo base_url()?>login/doLogout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" 
              class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama ?></p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <!--  -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cc"></i> <span>Urutkan Data Warga</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url("kelolaCetak/sortingAge") ?>"><i class="fa fa-circle-o"></i>Berdasar Umur</a></li>
                <li><a href="<?php echo base_url("kelolaCetak/sortingName") ?>"><i class="fa fa-circle-o"></i>Berdasar nama</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-clone"></i> <span>Kelompokan data Warga</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url()?>kelolaCetak/kelompokMuda"><i class="fa fa-circle-o"></i> Anak dan Remaja</a></li>
                <li ><a href="<?php echo base_url()?>kelolaCetak/kelompokDewasa"><i class="fa fa-circle-o"></i> Dewasa</a></li>
              </ul>
            </li>
        </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
        <a href="<?php echo base_url()?>admin/create"><button 
        type="button" class="btn bg-olive btn-flat margin">
        tambah warga</button></a>
        <a href="<?php echo base_url()?>admin/create"><button 
        type="button" class="btn bg-olive btn-flat margin">
        data warga tetap</button></a>
        <a href="<?php echo base_url()?>admin/tetap"><button 
        type="button" class="btn bg-olive btn-flat margin">
        data warga pindahan</button></a>
        <a href="<?php echo base_url()?>admin/create"><button 
        type="button" class="btn bg-olive btn-flat margin">
        data warga meninggal</button></a>
        <a href="<?php echo base_url()?>admin/cetak/<?php echo $cetak;?>"><button 
        type="button" class="btn bg-olive btn-flat margin">
        cetak</button></a>
                
          <!-- /.box -->

          <div class="box">
            <div class="box-header">

            <!-- /.box-header -->
            <!-- <div class="box-body"> -->
              <table style="border: 1px solid black;" >
                <thead style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;" class="col-md-1">NIK</th>
                    <th style="border: 1px solid black;" class="col-md-1">Nama</th>
                    <th style="border: 1px solid black;" class="col-md-1">kelamin</th>
                    <th style="border: 1px solid black;" class="col-md-1">TTL</th>
                    <th style="border: 1px solid black;" class="col-md-1">alamat</th>
                    <th style="border: 1px solid black;" class="col-md-1">RT/RW</th>
                    <th style="border: 1px solid black;" class="col-md-1">umur</th>
                    <th style="border: 1px solid black;" class="col-md-1">status</th>
                    <th style="border: 1px solid black;" class="col-md-1">Pekerjaan</th>
                    <th style="border: 1px solid black;" class="col-md-1">Agama</th>
                    <th class="col-md-1">pilihan</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($dataWarga as $dataWarga) : 
                ?>
                <?php $biday = new DateTime($dataWarga->tanggal); $diff = $today->diff($biday); ?>
                    <tr>
                        <td style="border: 1px solid black;"><?=$dataWarga->nik?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->nama?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->kelamin?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->tempat.",".date('d/m/Y', strtotime($dataWarga->tanggal))?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->alamat?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->rt."/".$dataWarga->rw?></td>
                        <td style="border: 1px solid black;"><?=$diff->y; ?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->status?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->pekerjaan?></td>
                        <td style="border: 1px solid black;"><?=$dataWarga->agama?></td>
                        <td>
                          <?php $total = $total + 1; ?>

                            <a href="<?php echo base_url()?>admin/update/<?php echo $dataWarga->nik;?>">update</a>
                            <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='<?php echo base_url()?>admin/delete/<?php echo $dataWarga->nik;?>'}" >Hapus</a>
                        </td>
                    </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
              <div align="right" style="font-size: 30; font-weight: bold; padding-right: 40%"><?php echo "jumlah warga : ".$total; ?></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->

<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
