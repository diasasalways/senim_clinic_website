<?php
session_start();
require'db.php';
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Doctors</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Place favicon.ico in the root directory -->
        <link rel="icon" href="img/favicon.png">
       
	   
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
		<iframe src="header.html" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>
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
				
					<?php
					$a=$_GET['id'];
					$n=1;
					$b=1;
					if($a>$n){
					while($b<=2){
								
		$query=$link->query("SELECT * FROM doctors WHERE id='$a'");
						$row=mysqli_fetch_array($query);
					echo '<div class="row">
					<div class="col-sm-6 col-md-4">
	
						<div class="team-item">
							<div class="team-item-image">';
						if(empty($row['photo'])){
							echo'<a href="doctor-single.php?id='.$row['id'].'"><img src="doctors/def.jpg" alt="team member"  ></a>';
						}else{echo'<a href="doctor-single.php?id='.$row['id'].'"><img src='.$row['photo'].' alt="team member"  ></a>';}
								
								echo'<div class="team-item-detail">
									<h5 class="team-item-title">Whats Up!</h5>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
									
								</div>
							</div>
							<div class="team-info">
								<h4 class="team-item-name"><a href="doctor-single.php?id='.$row['id'].'">'.$row['doctor_name'].'</a></h4>
								<span class="team-item-role">'.$row['speciality'].'</span>							
							</div>
						</div>
					</div>';
						
						
						
						
						$query2=$link->query("SELECT * FROM doctors WHERE id='$a'+1");
						$row2=mysqli_fetch_array($query2);
						if(!empty($row2['doctor_name'])){
							
							
							
							
							
							
						echo ' <div class="col-sm-6 col-md-4">
						<div class="team-item">
							<div class="team-item-image">';
						if(empty($row2['photo'])){
							echo'<a href="doctor-single.php?id='.$row2['id'].'"><img src="doctors/def.jpg" alt="team member"  ></a>';
						}else{echo'<a href="doctor-single.php?id='.$row2['id'].'"><img src='.$row2['photo'].' alt="team member"  ></a>';}
								
								echo'<div class="team-item-detail">
									<h5 class="team-item-title">Whats Up!</h5>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
									
								</div>
							</div>
							<div class="team-info">
								<h4 class="team-item-name"><a href="doctor-single.php?id='.$row2['id'].'">'.$row2['doctor_name'].'</a></h4>
								<span class="team-item-role">'.$row2['speciality'].'</span>							
							</div>
						</div>
					</div>';
						
						
						
						
						
							$query3=$link->query("SELECT * FROM doctors WHERE id='$a'+2");
						$row3=mysqli_fetch_array($query3);
					echo ' <div class="col-sm-6 col-md-4">
						<div class="team-item">
							<div class="team-item-image">';
						if(empty($row3['photo'])){
							echo'<a href="doctor-single.php?id='.$row3['id'].'"><img src="doctors/def.jpg" alt="team member"  ></a>';
						}else{echo'<a href="doctor-single.php?id='.$row3['id'].'"><img src='.$row3['photo'].' alt="team member"  ></a>';}
								
								echo'<div class="team-item-detail">
									<h5 class="team-item-title">Whats Up!</h5>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
									
								</div>
							</div>
							<div class="team-info">
								<h4 class="team-item-name"><a href="doctor-single.php?id='.$row3['id'].'">'.$row3['doctor_name'].'</a></h4>
								<span class="team-item-role">'.$row3['speciality'].'</span>							
							</div>
						</div>
					</div>
					</div>';
						
					
						
						
						
						
						
						}
						
						
						
						
						else{
						echo'</div>';
						}
					
						
						$a=$a+3;
						$b++;
						
					}}
					else{
						echo'<div class="row">';
					while($n<=6){
						$query=$link->query("SELECT * FROM doctors WHERE id='$n'");
						$row=mysqli_fetch_array($query);
					echo '<div class="col-sm-6 col-md-4">
						<div class="team-item">
							<div class="team-item-image">';
								if(empty($row['photo'])){
							echo'<img src="doctors/def.jpg" alt="team member"  >';
						}else{echo'<img src='.$row['photo'].' alt="team member"  >';}
								echo'<div class="team-item-detail">
									<h5 class="team-item-title">Whats Up!</h5>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
									
								</div>
							</div>
							<div class="team-info">
								<h4 class="team-item-name"><a href="doctor-single.php?id='.$row['id'].'">'.$row['doctor_name'].'</a></h4>
								<span class="team-item-role">'.$row['speciality'].'</span>							
							</div>
						</div>
					</div>';
						$n++;
					
					
					
					}
					echo'</div>';
					}
					?>
				
				
				<center>
				<ul class="pagination">
						<li><a href="doctor.php?id=1">1</a></li>
						<li><a href="doctor.php?id=7">2</a></li>
						<li><a href="doctor.php?id=13">3</a></li>
						<li><a href="doctor.php?id=19">4</a></li>
						<li><a href="doctor.php?id=25">5</a></li>
						<li><a href="doctor.php?id=31">6</a></li>
						<li><a href="doctor.php?id=37">7</a></li>
						<li><a href="doctor.php?id=43">8</a></li>
						<li><a href="doctor.php?id=49">9</a></li>
						<li><a href="doctor.php?id=55">10</a></li>
					
					
					
					</ul></center>
			</div>
		</div>	
		<!-- team-area end -->					
		
	
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
											<i class="fa fa-home"></i><p>г. Актобе, Проспект Бейбітшілік 41,Мустафы шокая 48в к 1</p>	
										</li>
										<li>
											<i class="fa fa-envelope"></i><p><a href="#.">info@senim-clinic.kz</a></p>	
										</li>
										<li>
											<i class="fa fa-mobile"></i><p class="phone-number"><a href="tel:+7 (7132) 41 51 51">+7 (7132) 41 51 51</a></p>	
										</li>
										<li>
											<i class="fa fa-mobile"></i><p class="phone-number"><a href="tel:+7 778 0 41 51 51">+7 778 0 41 51 51</a></p>	
										</li>
									</ul>
								</div>						
							</div>					
						</div>					
						<div class="col-md-6 mb-60">
							<div class="footer-widget">							
								<h4><span>Услуги</span></h4>							
								<ul class="footer-nav list-unstyled clearfix">
									<li><a href="dlya-vzroslyh.html"><i class="fa fa-long-arrow-right"></i>АМБУЛАТОРНОЕ ЛЕЧЕНИЕ ДЛЯ ВЗРОСЛЫХ</a></li>
									<li><a href="dlya-detei.html"><i class="fa fa-long-arrow-right"></i>АМБУЛАТОРНОЕ ЛЕЧЕНИЕ ДЛЯ ДЕТЕЙ</a></li>
									<li><a href="dnevnoi.html"><i class="fa fa-long-arrow-right"></i>ДНЕВНОЙ СТАЦИОНАР</a></li>
									<li><a href="staczionar.html"><i class="fa fa-long-arrow-right"></i>СТАЦИОНАР</a></li>
									<li><a href="diagnostika.html"><i class="fa fa-long-arrow-right"></i>ДИАГНОСТИКА</a></li>
									<li><a href="lab.html"><i class="fa fa-long-arrow-right"></i>ЛАБОРАТОРИЯ</a></li>
									<li><a href="mrt.html"><i class="fa fa-long-arrow-right"></i>МРТ И КТ</a></li>
									<li><a href="fizio.html"><i class="fa fa-long-arrow-right"></i>ФИЗИОТЕРАПИЯ</a></li>
									
									<li><a href="uzi.html"><i class="fa fa-long-arrow-right"></i>УЗИ</a></li>
									
								</ul>							
							</div>						
						</div>						
						
											
					</div>
				</div>			
			</div>		
			<div class="copyright-area theme-bg">
				<div class="container">
						
				</div>
			</div>	
		</footer>	

		

		<!-- All js plugins here -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
