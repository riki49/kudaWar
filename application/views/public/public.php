<!DOCTYPE HTML>
<html>
<head>
  <title>kumpulan data warga</title>

  <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
<!--css-->
<?php
        foreach($data as $data){
            $merk[] = $data->merk;
            $stok[] = (float) $data->stok;
        }
        // $kalender = $_SESSION['kalender'];
?>

<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="assets/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
    <script src="assets/js/main.js"></script>
<!--search jQuery-->
<script src="assets/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 100,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="assets/js/bootstrap-3.1.1.min.js"></script>

 <!--start-rate-->
<script src="assets/js/jstarbox.js"></script>

<link rel="stylesheet" href="assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<!-- donut -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
                  google.charts.load('current', {'packages':['corechart']});
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                      ['wilayah', 'Luas'],
                      ['RW 1', 45.5],
                      ['RW 2', 30],
                      ['RW 3', 20],
                      ['RW 4', 28.8],
                      ['RW 5', 32.4]
                    ]);

                    var options = {
                      title: 'data wilayah dalam hektar'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                  }
 </script>
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstraassets/p WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<!-- End-rate-->
        <div class="header">
            <div class="header-top">
        </div>
            </div>
            <div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav-left">
                            <h1><a>kudawar<span>kumpulan data warga</span></a></h1>
                        </div>
                    </div>
    <div class="header-right2">
                        <div class="cart box_1">
                            <p><a href="<?php echo base_url('login') ?>" class="simpleCart_empty">Login</a></p>
                        </div>  
                    </div>
                
                </div>
            </div>
        </div>

<header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
        <div class="logo-nav">       
    </nav>
  </header>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
    
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Jumlah Warga Perwilayah</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Wilayah Desa</a>
              </li>
              <li class="pull-left header"><i class="fa fa-inbox">Statistik Desa</i></li>
            </ul>
            <div class="tab-content no-padding">

              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                <canvas id="canvas" width="1000" height="280"></canvas>

    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($merk);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
    </script>
              </div>

              <!-- donut -->
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <div id="piechart" style="width: 888px; height: 300px;"></div>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">visi</h3>
            </div>
            <div>Terbangunnya Tata Kelola Pemerintah Desa yang Baik dan Bersih guna Mewujudkan Pemerintahan Desa yang Adil, Makmur dan Sejahtera.</div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">misi</h3>
            </div>
            <div>Melakukan Reformasi sistem kinerja Aparatur Pemerintahn Desa guna Meningkatkan kualitas Pelayanan Masyarakat;
Menyelenggarakan Pemerintahan yang Bersih, terbebas dari Korupsi serta bentuk-bentuk Penyelenggaraan Lainnya;
Menyelenggarakan Urusan Pemerintah Desa secara terbuka dan bertanggungjawaban sesuai dengan Peraturan Perundang-undangan;
Meningkatkan Perekonomian Masyarakat melalui Penciptaan Lapangan Kerja seluas-luasnya dengan berbasis pada Potensi Asli Desa;
Memberdayakan Pemerintahan , Dusun RT dan RW secara Profesional da Proposional;
Meningkatkan Mutu Kesejahteraan Masyarakat untuk mencapai taraf kehidupan yang lebih baik dan layak.</div>
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">kegiatan terkini</h3>
            </div>
            <div>Ds.Sukamenak Kec.Margahayu Kab.Bandung 2018,

Kegiatan Penghijauan Desa

Sumber Anggaran Raksa Desa 2018

Lokasi :  Desa Sukamenak</div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <h3 class="box-title">
                Stap Desa
              </h3>
            </div>
            <div class="box-body">

              <div id="world-map" style="height: 300px; width: 100%;"> 
                <!--banner-->
                <div class="banner-w3">
                    <div class="demo-1">            
                        <div id="example1" class="core-slider core-slider__carousel example_1">
                            <div class="core-slider_viewport">
                                <div class="core-slider_list">
                                    <div class="core-slider_item">
                                        <img src="assets/images/1.jpg" class="img-responsive" alt="">
                                    </div>
                                     <div class="core-slider_item">
                                         <img src="assets/images/3.jpg" class="img-responsive" alt="">
                                     </div>
                                    <div class="core-slider_item">
                                          <img src="assets/images/2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="core-slider_item">
                                          <img src="assets/images/4.jpg" class="img-responsive" alt="">
                                    </div>
                                 </div>
                            </div>
                            <div class="core-slider_nav">
                                <div class="core-slider_arrow core-slider_arrow__right"></div>
                                <div class="core-slider_arrow core-slider_arrow__left"></div>
                            </div>
                            <div class="core-slider_control-nav"></div>
                        </div>
                    </div>
                    <link href="assets/css/coreSlider.css" rel="stylesheet" type="text/css">
                    <script src="assets/js/coreSlider.js"></script>
                    <script>
                    $('#example1').coreSlider({
                      pauseOnHover: false,
                      interval: 3000,
                      controlNavEnabled: true
                    });

                    </script>
                </div>  
              </div>
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <h3 class="box-title">Sales Graph</h3>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
             
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header" style="padding-left: 35%">
              <h3 class="box-title">Calendar</h3>
               <?php 
                if(isset($kalender)){
                    echo $kalender;
                }
                 ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <div class="control-sidebar-bg"></div>
</div>
<!--content-->




<h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var lokasi_saya= {lat: -6.591778, lng: 106.805965};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: lokasi_saya

        });
        var marker = new google.maps.Marker({
          position: lokasi_saya,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://www.google.com/maps/place/Sukamenak,+Margahayu,+Bandung,+West+Java,+Indonesia/@-6.970998,107.584687,12732m/data=!3m1!1e3!4m5!3m4!1s0x2e68e928182fa055:0x4336b4144186c7af!8m2!3d-6.971678!4d107.5845418?hl=en-US">
    </script>

<!-- footer -->
<?php 
	$this->load->view('public/footer')
?>
</body>
</html>