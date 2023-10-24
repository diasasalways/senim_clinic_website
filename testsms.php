<?php
session_start();
require 'db.php';

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Авторизация</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico in the root directory -->
        <link rel="icon" href="img/favicon.png">
       
	    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
		<!-- All css plugins here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header start -->
		<iframe src="header.html" onload="this.insertAdjacentHTML('afterend', (this.contentDocument.body||this.contentDocument).innerHTML);this.remove()"></iframe>
		<?php
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sign-in'])){
       	include_once "smsc_api.php";
        $phone = mysqli_real_escape_string($link, $_POST['phone']);
		$r = send_sms("77712305734", "ваш код",
		0, 0, 0,
		0, "senim-clinic.kz");
		if ($r[1] > 0)
		echo "Сообщение отправлено";
		else
		echo "Произошла ошибка № ", -$r[1];
	}
	
	?>
	
		<!-- header end -->
		<!-- breadcrumb area -->
		<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-100">
			<div class="container">
				<div class="basic-breadcrumb text-center">
					<h3 class="">Вход </h3>
					<ol class="breadcrumb text-xs">
						<li><a href="index.html">Главная</a></li>
						<li class="active">Вход</li>
						
					</ol>
				</div>
			</div>
		</div>	
		<!-- breadcrumb area -->		

		<!-- product-area start -->
		<div class="product-area ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<div class="account-form">
							<h4 class="text-center mb-30">Авторизация</h4>
							<form method="post" action="">
								<div class="form-group">
									<label class="sr-only">Имя пользователя</label>
									<input type="text" class="form-control input-lg" placeholder="Номер телефона" name="phone">
									<input type="submit" value="Отправить" name="sign-in">
								</div>
							</form>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product-area end -->
		
			<iframe src="footer.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>	
	
		

		<!-- All js plugins here -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script>
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
</script>
    </body>
</html>
