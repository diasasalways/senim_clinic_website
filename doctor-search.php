<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>МЕДИЦИНСКИЙ ЦЕНТР CENIM-CLINIC- СПЕЦИАЛИСТЫ</title>
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
		<div class="preloader" >
<img src="anim.gif"  style="
    display: block;
    margin: 20% auto;">
</div>




<header>
	
		
	
	
	
			<div class="menu-area ">
				<div class="container ww md-full xs-full">
					<style>
				    	.ww{ width:100%; }
					</style>
						   
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								 <style>
								   ul.hr {
									margin: 0; /* Обнуляем значение отступов */
									padding: 4px; /* Значение полей */
								   }
								   ul.hr li {
									display: inline; /* Отображать как строчный элемент */
									margin-right: 5px; /* Отступ слева */
									padding: 3px; /* Поля вокруг текста */
								   }
								  </style>
								<ul class="hr">
								<li><a href="index.html"><img src="img/logo.png" alt="" width="150" height="70"/></a>	</li>
								<li><a href="tel:+7 778 0 41 51 51"><img src="phone.gif" width="30px" height="30px" style="color:"></a></li>
										<li><span><script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
								<a href="mailto:info@senim-clinic.kz">	
									<lord-icon
										src="https://cdn.lordicon.com/tkgyrmwc.json"
										trigger="loop"
										colors="primary:#121331,secondary:#08a88a"
										style="width:30px;height:30px">
									</lord-icon>
								</a>
								<span></span> <a href="tel:+7 (7132) 41-51-51" style="color:black"></a> <a href="tel:+7 778 0 41 51 51" style="color:black"></a></li>
									</ul>
							</div>
							<!--+7 (7132) 41-51-51
							+7 (778) 041-51-51-->
						</div>
							<div class="col-md-9">
							<div class="main-menu text-right hidden-xs hidden-sm">
								<nav style="float:left;">
									<ul class="basic-menu">
										<li><a href="index.html">Главная</a></li>
										<li><a href="about.html">О нас</a></li>
										<li><a href="doctor-2.php">Специалисты</a></li>	
										<li><a href="service.html">Медицинские услуги</a></li>		
										<li><a href="http://senimclinic.kz/contact.html">Контакты</a></li>
										<li><a href="zapis.html">Запись</a></li>
										<li><a href="login.php">Вход</a></li>
										<li><a href="faq.php">Поддержка</a></li>
									</ul>
								</nav>
							</div>
							<!-- basic-mobile-menu --> 
							<div class="basic-mobile-menu visible-xs visible-sm">
								<nav id="mobile-nav">
									<ul class="basic-menu" style="border:1px solid #DFDFDF; border-radius: 25px;">
										<li><a href="index.html">Главная</a></li>
										<li><a href="about.html">О нас</a></li>
										<li><a href="doctor-2.php">Специалисты</a></li>	
										<li><a href="service.html">Медицинские услуги</a></li>		
										<li><a href="contact.html">Контакты</a></li>
										<li><a href="login.php">Вход</a></li>
										<li><a href="faq.php">Поддержка</a></li>
									</ul>
								</nav>
							</div>								
						</div>
					</div>
				</div>
			</div>
		</header>

	
		<!-- header end -->
		<!-- breadcrumb area -->
		<div class="basic-breadcrumb-area bg-opacity bg-1 ptb-100">
			<div class="container">
				<div class="basic-breadcrumb text-center">
					<h3 class="">Наши специалисты</h3>
					<ol class="breadcrumb text-xs">
						<li><a href="index.html">Главная</a></li>
					
						<li class="active">Специалисты</li>
					</ol>
				</div>
			</div>
		</div>	
		<!-- breadcrumb area -->		
		<!-- team-area start -->
		<div class="team-area pt-90 pb-60 ">
			<div class="container">
				<div class="row">
					
						<center><form method="get" action="doctor-search.php">
				<input type="text" name="search" placeholder="Поиск..." required class="form-control" style="width:60%; margin:10px;">
				<input type="submit"  value="Найти" class="form-control" style="width:30%;color:black;"><br><br>
							</form></center>
				
				<?php
				session_start();
				require 'db.php';
						$search_get = $_GET['search'];
					$select=mysqli_query($link, "SELECT * FROM `doctors` WHERE `doctor_name` LIKE '%$search_get%' OR `speciality` LIKE '%$search_get%' ");
				 if(mysqli_num_rows($select) >= 1){
   			 while($row = mysqli_fetch_assoc($select)){
								
					echo '<div class="row">
					<div class="col-sm-6 col-md-4 col-xs-12 mb-30" style="margin:0 auto;">
						<div class="doctor-box">
							<div class="doctor-img">   ';
						if(empty($row['photo'])){
							echo'<a href="doctor-single.php?id='.$row['id'].'"><img src="doctors/def.jpg" alt="team member"  ></a>';
						}else{echo'<a href="doctor-single.php?id='.$row['id'].'"><img src='.$row['photo'].' alt="team member"  ></a>';}
								
								echo'</div><div class="doctor-name">
								<h4 class="heading">'.$row['doctor_name'].'</h4>
								<span class="doctor-desig">'.$row['speciality'].'</span>
							</div>
							<hr class="hr-1">
							<div class="doctor-details">
								<p>'.$row['description'].'</p>
								<p>'.$row['time'].'</p>
							</div>
							<br>
							<div class="text-center">
								
								<a href="doctor-single.php?id='.$row['id'].'" class="btn btn-black btn-sm">Профиль</a>
							</div>
						</div>
					</div>';
				
				}
				 }
				
				
				
				
				
				
				
				?>
				
			</div>
			</div>
		</div>
		
		<!-- team-area end -->					
		
		<!-- basic-testimonial-area start -->
	
		<!-- basic-testimonial-area end -->	
		<!-- appointment-area start -->	
	
		<!-- appointment-area start -->		
		
				


		
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
		
<footer>
			
			<div class="footer-top-area gray-bg pt-90 pb-50">
				<div class="container">				
					<div class="row">	
						<div class="col-md-6 mb-50">					   
							<div class="footer-widget">						
								<h4><span>Контакты</span></h4>
							
								<div class="contact-widget">
									<ul>
										<li>
											<i class="fa fa-home"></i><p style="font-size:20px;font-weight: bold;">г. Актобе, Проспект Бейбітшілік 41,Мустафы шокая 48в к 1</p>	
										</li><br>
										<li>
											<i class="fa fa-envelope"></i><p ><a href="#." style="font-size:20px;font-weight: bold;">info@senim-clinic.kz</a></p>	
										</li><br>
										<li>
											<i class="fa fa-mobile"></i><p class="phone-number"><a style="font-size:20px;font-weight: bold;" href="tel:+7 (7132) 41 51 51">+7 (7132) 41 51 51</a></p>	
										</li>
										<li>
											<i class="fa fa-mobile"></i><p class="phone-number"><a style="font-size:20px;font-weight: bold;" href="tel:+7 778 0 41 51 51">+7 778 041 51 51</a></p>	
										</li><br>
							
									</ul>
								</div>						
							</div>					
						</div>					
						<div class="col-md-6 mb-60">
							<div class="footer-widget">							
								<h4><span >Услуги</span></h4>							
								<ul class="footer-nav list-unstyled clearfix">
									<li><a href="dlya-vzroslyh.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>АМБУЛАТОРНОЕ ЛЕЧЕНИЕ ДЛЯ ВЗРОСЛЫХ</a></li>
									<li><a href="dlya-detei.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>АМБУЛАТОРНОЕ ЛЕЧЕНИЕ ДЛЯ ДЕТЕЙ</a></li>
									<li><a href="dnevnoi.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>ДНЕВНОЙ СТАЦИОНАР</a></li>
									<li><a href="staczionar.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>СТАЦИОНАР</a></li>
									<li><a href="diagnostika.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>ДИАГНОСТИКА</a></li>
									<li><a href="lab.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>ЛАБОРАТОРИЯ</a></li>
									<li><a href="mrt.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>МРТ И КТ</a></li>
									<li><a href="fizio.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>ФИЗИОТЕРАПИЯ</a></li>
									
									<li><a href="uzi.html" style="font-size:15px;font-weight:600;"><i class="fa fa-long-arrow-right"></i>УЗИ</a></li>
									
								</ul>							
							</div>						
						</div>						
						
											
					</div>
								<div class="area-title text-center">
										<a href="https://www.instagram.com/senim.clinic/"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/></a>
										<a href="https://wa.me/77780415151"><img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>
										<a href="https://t.me/SenimClinic_Bot"><img src="https://img.icons8.com/color/48/000000/telegram-app--v1.png"/></a></div>
				</div>			
			</div>		
			<div class="copyright-area theme-bg">
				<div class="container">
						
				</div>
			</div>	
		</footer>	
</html>
