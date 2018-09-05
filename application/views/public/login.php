<!DOCTYPE HTML>
<html>
<head>
<title>husnudzon food</title>
<!--css-->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!DOCTYPE HTML>
<html>
<head>
<title>husnudzon food</title>
<!--css-->
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
 <!--mycart-->
<script type="text/javascript" src="assets/js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="assets/js/simpleCart.min.js"></script>
<!-- cart -->
  <!--start-rate-->
<script src="assets/js/jstarbox.js"></script>
	<link rel="stylesheet" href="assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		
<!--//End-rate-->
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
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
		<!--header-->

		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="<?php echo base_url('') ?>">Home</a> / <span>Login</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Login To Husnudzon Shop</h3>
						<form action="<?php echo base_url('login/doLogin') ?>" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
				</div>
			</div>
				<!--login-->
		</div>
		<!--content-->
		<?php 
    		$this->load->view('public/footer')
   		?>
					
</body>
</html>