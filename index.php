<?php 
require_once 'config/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>VICHAIYUT HOSPITAL</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
      .header-logo{
      	margin: 0px;
      }
      #termandcondition ol li {
      	list-style:inherit;
       }
      </style>
  </head>
  <body>

	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-3 header-logo">
					<br>
					<a href="index.php"><img src="images/logosmall_vichaiyut_hospital.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-xs-6 col-md-9">
					<nav class="navbar navbar-default">
						<div class="container-fluid nav-bar">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

								<ul class="nav navbar-nav navbar-right">
									<li><a class="menu active" href="#home" >Home</a></li>
									<li><a class="menu" href="#about">About Us</a></li>
									<li><a class="menu" href="#service">Patient Service</a></li>
									<li><a class="menu" href="#team">Our Clinic</a></li>
									<li><a class="menu" href="#package">Package & Promotion</a></li>
									<li><a class="menu" href="#contact"> contact us</a></li>
								</ul>
							</div><!-- /navbar-collapse -->
						</div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
				<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					<?php
						try
                        { 

                            $stmt_patient = $db_con->prepare("SELECT * FROM hilight WHERE isOnOff=1 AND publish_date <= now() ORDER BY ID");
                            $stmt_patient->execute();
                            $row_patient = $stmt_patient->fetchAll();
                            foreach ($row_patient as $key=>$result) {
					?>
						<!-- <div class="item active">
							<img src="images/slide_doctorteam.jpg" alt="">
							<div class="carousel-caption">
								<h1></h1>
								<p></p>
								<button style="display:none;">learn more</button>
							</div>
						</div>
						<div class="item">
							<img src="images/sslide_vichaiyut_building.jpg" alt="">
							<div class="carousel-caption">
								<h1></h1>
								<p></p>
								<button style="display:none;">learn more</button>
							</div>
						</div>
						<div class="item">
							<img src="images/campaign.jpg" alt="">
							<div class="carousel-caption">
								<h1></h1>
								<p></p>
								<button style="display:none;">learn more</button>
							</div>
						</div> -->

						<div class="item <?=$key == 0 ?"active":""?>">
							<a href="<?= $result["link"]?>" target="_blank">
							<img src="<?=$result["path_img"]?>" alt="">
							<div class="carousel-caption">
								<h1></h1>
								<p></p>
								<button style="display:none;">learn more</button>
							</div>
							</a>
						</div>
						<?php
							}
							}
							catch(PDOException $e){
								echo $e->getMessage();
							}
						?>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
			<?php
				try
				{ 
					$stmt_homepage = $db_con->prepare("SELECT * FROM homepage WHERE ID=1");
					$stmt_homepage->execute();
					$row_homepage = $stmt_homepage->fetch(PDO::FETCH_ASSOC);
				}
				catch(PDOException $e){
					echo $e->getMessage();
				}
			?>
				<h2>about us</h2>
				<h4><?= $row_homepage["about_us"]?></h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="<?= $row_homepage["about_img_path"]?>" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>A</h1>
							</div>
							<h3>About Vichaiyut Hospital</h3>
							<?php
								try
								{ 
									$stmt_about = $db_con->prepare("SELECT * FROM about WHERE ID=1");
									$stmt_about->execute();
									$row_about = $stmt_about->fetch(PDO::FETCH_ASSOC);
								}
								catch(PDOException $e){
									echo $e->getMessage();
								}
							?>
							<div id="demo" class="collapse">
								<!-- <p>Vichaiyut Hospital was established on June 9, 1969 with the land and funding supported by Mr. Somporn Punyagupta and was named as “Vichaiyut Clinic” honoring the landowner  “Lt. Gen. Phra Vichaiyut Dechakanee”.</p>
								<p>The hospital was jointly founded by Dr. Sermsakdi Phenjati, Dr. Boonket Laovanich, Dr. Asawin Thepakam, Dr. Sompone Punyagupta, Dr. Pradit Chareonthaitawee, Dr. Chaowalit Preeyasombat, Dr. Thamrongrat Keokarn and Mr. Rangsi Rattanaprakarn</p>
								<p>At the early period after establishment, the hospital had 5 examination rooms, 1 operating room,  1 delivery room,  1 nursing room and 10 inpatient beds.</p>
								<p>The second, third and North Tower buildings were later added in 1979, 1989 and 1996 respectively increasing the capacity to 350 inpatient beds.</p>
								<p>In 2004, Vichaiyut Hospital Medical Center was constructed, aiming to provide specialty services including 75 outpatient examination rooms, 464 inpatient beds and the conference room with 1,000 people capacity. Currently the total capacity of all buildings is 149 examination rooms and 347 inpatient beds.</p> -->
								<?= $row_about["about"]?>
							</div>
							<button style="display:block;clear:both;display:none;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Read More</button>
							<a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-angle-down" style="font-size:24px"></i><i class="fa fa-angle-up" style="font-size:24px"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?= $row_homepage["vision_img_path"]?>" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>V</h1>
							</div>

							<h3>Hospital Vision and Mission</h3>
							<div id="demo2" class="collapse">
							<?php
								try
								{ 
									$stmt_vision = $db_con->prepare("SELECT * FROM vision WHERE ID=1");
									$stmt_vision->execute();
									$row_vision = $stmt_vision->fetch(PDO::FETCH_ASSOC);
								}
								catch(PDOException $e){
									echo $e->getMessage();
								}
							?>
								<!-- <p>Vichaiyut hospital has continued to adhere to the high professional standard and quality medical services.</p>
								<p>Annually, we have hosted the medical conferences for physicians and nurses sanctioned by the Medical Council of Thailand and Thailand Nursing Council providing Continuing Medical Education (CME) and Nursing Continuing Education to medical personnel nationwide.</p>
								<p>Committing to international professional standard, we have more than 400 physicians and 1,720 hospital staffs serving the patients’ needs. Based on a long standing professional ethics and morality, Vichaiyut hospital was granted Royal Warrant of Appointment allowing us to display the royal Garuda emblem on May 24, 2004. The first private hospital that has been granted this appointment.</p> -->
								<?= $row_vision["vision"]?>
							</div>
							<a href="#" data-toggle="collapse" data-target="#demo2"><i class="fa fa-angle-down" style="font-size:24px"></i><i class="fa fa-angle-up" style="font-size:24px"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?= $row_homepage["management_img_path"]?>" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Management Team</h3>
							<div id="demo3" class="collapse">
								<a class="profile-button" href="managementteam.php">View Profile</a>
							</div>
							<a href="#" data-toggle="collapse" data-target="#demo3"><i class="fa fa-angle-down" style="font-size:24px"></i><i class="fa fa-angle-up" style="font-size:24px"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>Patient Services</h2>
				<h4></h4>
				<div class="col-md-4">
					
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<a href="#" data-toggle="collapse" data-target="#patientrooms"><h3 class="service-mobile">Patient Rooms</h3></a>
						<a href="#" data-toggle="tab" data-target="#patientrooms-tab"><h3 class="service-desktop">Patient Rooms</h3></a>
						<div id="patientrooms" class="collapse room-img-mobile">
							<p>Vichaiyut hospital offers a wide range of patient rooms which have been designed for patients’ comfort and safety, starting from four-bed rooms to Suite and ICU room.</p>
							<!-- <ul>
								<li>Four-bed and two-bed rooms</li>
							</ul>
							<ul>
								<li><a href="#" data-toggle="collapse" data-target="#private-room">Private room</a></li>
							</ul>
							<div id="private-room" class="collapse">
								<p><img src="images/north_building_private1.jpg"><img src="images/north_building_private2.jpg"><img src="images/north_building_private3.jpg"></p>
								<p><img src="images/medical_center_private1.jpg"><img src="images/medical_center_private2.jpg"></p>
							</div>
							<ul>
								<li><a href="#" data-toggle="collapse" data-target="#deluxevip-room">Deluxe room (VIP)</a></li>
							</ul>
							<div id="deluxevip-room" class="collapse">
								<p><img src="images/north_building_vip1.jpg"><img src="images/north_building_vip2.jpg"><img src="images/north_building_vip3.jpg"></p>
								<p><img src="images/medical_center_vip1.jpg"><img src="images/medical_center_vip2.jpg"><img src="images/medical_center_vip3.jpg"></p>
							</div>
							<ul>
								<li><a href="#" data-toggle="collapse" data-target="#suite-room">Suite room (Executive Suite/President Suite/Vichaiyut Suite)</a></li>
							</ul>
							<div id="suite-room" class="collapse">
								<h3>Executive Suite</h3>
								<p><img src="images/executive_suite1.jpg"><img src="images/executive_suite2.jpg"><img src="images/executive_suite3.jpg"></p>
								<h3>President Suite</h3>
								<p><img src="images/presidential_suite1.jpg"><img src="images/presidential_suite2.jpg"><img src="images/presidential_suite3.jpg"></p>
								<h3>Vichaiyut Suite</h3>
								<p><img src="images/vichaiyut_suite1.jpg"><img src="images/vichaiyut_suite2.jpg"><img src="images/vichaiyut_suite3.jpg"></p>
							</div>
							<ul>
								<li><a href="#" data-toggle="collapse" data-target="#pediatricward-room">Pediatric Ward (VIP)</a></li>
							</ul>
							<div id="pediatricward-room" class="collapse">
								<h3>Pediatric Ward (VIP)</h3>
								<p><img src="images/pediatricward1.jpg"><img src="images/pediatricward2.jpg"><img src="images/pediatricward3.jpg"></p>
							</div>
							<ul>
								<li>ICU room</li>
							</ul> -->
							<?php
									try
                                    { 

                                        $stmt_patient = $db_con->prepare("SELECT * FROM patient_room ORDER BY ID");
                                        $stmt_patient->execute();
                                        $row_patient = $stmt_patient->fetchAll();
                                        foreach ($row_patient as $result) {
								?>
								<ul>
									<li><a href="#" data-toggle="collapse" data-target="#room-mobile<?=$result["ID"]?>"><?=$result["name"]?></a></li>
								</ul>
								<div id="room-mobile<?= $result["ID"]?>" class="collapse">
								<p>
								<?php
									$stmt_patient_gallery = $db_con->prepare("SELECT * FROM patient_room_gallery WHERE patient_ID = $result[ID]");
                                        $stmt_patient_gallery->execute();
                                        $row_patient_gallery = $stmt_patient_gallery->fetchAll();
                                        foreach ($row_patient_gallery as $result_gallery) {
								?>
									
									<img src="<?=$result_gallery["path_img"]?>">
								
								<?php
										}
								?>
								</p>
								</div>
								<?php
									}
									}
                                    catch(PDOException $e){
                                        echo $e->getMessage();
                                        // echo "No records";
                                    }
								?>
						</div>
					</div>
				</div>
				<div class="col-md-4 service-column">

					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<a href="#" data-toggle="collapse" data-target="#vichaiyuthomecare"><h3 class="service-mobile">Vichaiyut Home Care</h3></a>
						<a href="#" data-toggle="tab" data-target="#vichaiyuthomecare-tab"><h3 class="service-desktop">Vichaiyut Home Care</h3></a>
						<?php
							try
							{ 

							$stmt_homecare = $db_con->prepare("SELECT * FROM home_care");
							$stmt_homecare->execute();
							$row_homecare = $stmt_homecare->fetch(PDO::FETCH_ASSOC);

							}
							catch(PDOException $e){
							echo $e->getMessage();
							}
						?>
						<div id="vichaiyuthomecare" class="collapse">
							<!-- <p>Vichaiyut Home Care is the home medical service for patients by sending the medical professionals to provide services at the patient’s home e.g., Blood Drawing, Injection, Urinary catheterization and Physical Therapy.  These should be supportive for your other hospital care. The nurse will constantly coordinate and report to your physician-in-charge. Our existing patients can directly apply for the service while the new ones have to see our physician for evaluation before registering.</p>
							<ul>
								<li>Opening Hours:  Everyday 7.00 am. - 3.00 pm.</li>
								<li>Make an Appointment: Tel (+66) 2-265-7777</li>
							</ul> -->
							<?=$row_homecare["home_care"]?>
						</div>
					</div>

				</div>
				<div class="col-md-4 service-column">

					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<a href="#" data-toggle="collapse" data-target="#restaurantsandshops"><h3 class="service-mobile">Restaurants and Shops</h3></a>
						<a href="#" data-toggle="tab" data-target="#restaurantsandshops-tab"><h3 class="service-desktop">Restaurants and Shops</h3></a>
						<?php
							try
							{ 

							$stmt_restaurant = $db_con->prepare("SELECT * FROM restaurant_and_shop");
							$stmt_restaurant->execute();
							$row_restaurant = $stmt_restaurant->fetch(PDO::FETCH_ASSOC);

							}
							catch(PDOException $e){
							echo $e->getMessage();
							}
						?>
						<div id="restaurantsandshops" class="collapse">
							<h4>Restaurants</h4>
							<!-- <ul>
								<li>Au Bon Pain: Fresh coffee and patisseries<br/>Location: 1st and 10th Floor, Vichaiyut Hospital Medical Center</li>

								<li>Hom Nil: Food and Beverage with cafeteria<br/>Location: 4th Floor, Vichaiyut Hospital North Building</li>

								<li>Magarite Coffee Shop : Food, snack and beverage and souvenirs for patient, 
									<br/>Location :  1st floor, Vichaiyut Hospital North Building</li>
								</ul> -->
								<?=$row_restaurant["restaurant"]?>
								<h4>Shops</h4>
								<!-- <ul class="shops">
									<li><span class="head-shop">Family Mart</span> <br/>Location : 13th Floor, Vichaiyut Hospital Medical Center</li>

									<li><span class="head-shop">For Eyes eyewear shop</span> <br/>Location : 2nd Floor, Vichaiyut Hospital North Building <br/>11th Floor, Vichaiyut Hospital Medical Center</li>

									<li><span class="head-shop">Bookstore</span> <br/>Location :  3rd Floor, Vichaiyut Hospital North Building <br/>11th Floor, Vichaiyut Hospital Medical Center</li>

									<li><span class="head-shop">Circlife shop</span> <br/> Medical supplies, medical equipment and medical electronics
										<br/>Location : 2nd Floor, Vichaiyut Hospital North Building</li>
									</ul> -->
									<?=$row_restaurant["shop"]?>
								</div>
							</div>
						</div>
						<div class="tab-content service-desktop room-img-desktop" style="clear:both;">
							<div id="patientrooms-tab" class="tab-pane fade in">
								<h3>Patient Rooms</h3>
								<p>Vichaiyut hospital offers a wide range of patient rooms which have been designed for patients’ comfort and safety, starting from four-bed rooms to Suite and ICU room.</p>
								<!-- <ul>
									<li>Four-bed and two-bed rooms</li>
								</ul>
								<ul>
									<li><a href="#" data-toggle="collapse" data-target="#private-room-desktop">Private room</a></li>
								</ul>
								<div id="private-room-desktop" class="collapse">
									<p><img src="images/north_building_private1.jpg"><img src="images/north_building_private2.jpg"><img src="images/north_building_private3.jpg"></p>
									<p><img src="images/medical_center_private1.jpg"><img src="images/medical_center_private2.jpg"></p>
								</div>
								<ul>
									<li><a href="#" data-toggle="collapse" data-target="#deluxevip-room-desktop">Deluxe room (VIP)</a></li>
								</ul>
								<div id="deluxevip-room-desktop" class="collapse">
									<p><img src="images/north_building_vip1.jpg"><img src="images/north_building_vip2.jpg"><img src="images/north_building_vip3.jpg"></p>
									<p><img src="images/medical_center_vip1.jpg"><img src="images/medical_center_vip2.jpg"><img src="images/medical_center_vip3.jpg"></p>
								</div>
								<ul>
									<li><a href="#" data-toggle="collapse" data-target="#suite-room-desktop">Suite room (Executive Suite/President Suite/Vichaiyut Suite)</a></li>
								</ul>
								<div id="suite-room-desktop" class="collapse">
									<h3>Executive Suite</h3>
									<p><img src="images/executive_suite1.jpg"><img src="images/executive_suite2.jpg"><img src="images/executive_suite3.jpg"></p>
									<h3>President Suite</h3>
									<p><img src="images/presidential_suite1.jpg"><img src="images/presidential_suite2.jpg"><img src="images/presidential_suite3.jpg"></p>
									<h3>Vichaiyut Suite</h3>
									<p><img src="images/vichaiyut_suite1.jpg"><img src="images/vichaiyut_suite2.jpg"><img src="images/vichaiyut_suite3.jpg"></p>
								</div>
								<ul>
									<li><a href="#" data-toggle="collapse" data-target="#pediatricward-room-desktop">Pediatric Ward (VIP)</a></li>
								</ul>
								<div id="pediatricward-room-desktop" class="collapse">
									<h3>Padiatric Ward (VIP)</h3>
									<p><img src="images/pediatricward1.jpg"><img src="images/pediatricward2.jpg"><img src="images/pediatricward3.jpg"></p>
								</div>
								<ul>
									<li>ICU room</li>
								</ul> -->
								<?php
									try
                                    { 

                                        $stmt_patient = $db_con->prepare("SELECT * FROM patient_room ORDER BY ID");
                                        $stmt_patient->execute();
                                        $row_patient = $stmt_patient->fetchAll();
                                        foreach ($row_patient as $result) {
								?>
								<ul>
									<li><a href="#" data-toggle="collapse" data-target="#room-desktop<?=$result["ID"]?>"><?=$result["name"]?></a></li>
								</ul>
								<div id="room-desktop<?= $result["ID"]?>" class="collapse">
								<p>
								<?php
									$stmt_patient_gallery = $db_con->prepare("SELECT * FROM patient_room_gallery WHERE patient_ID = $result[ID]");
                                        $stmt_patient_gallery->execute();
                                        $row_patient_gallery = $stmt_patient_gallery->fetchAll();
                                        foreach ($row_patient_gallery as $result_gallery) {
								?>
									
									<img src="<?=$result_gallery["path_img"]?>">
								
								<?php
										}
								?>
								</p>
								</div>
								<?php
									}
									}
                                    catch(PDOException $e){
                                        echo $e->getMessage();
                                        // echo "No records";
                                    }
								?>
							</div>
							<div id="vichaiyuthomecare-tab" class="tab-pane fade">
								<h3>Vichaiyut Home Care</h3>
								<!-- <p>Vichaiyut Home Care is the home medical service for patients by sending the medical professionals to provide services at the patient’s home e.g., Blood Drawing, Injection, Urinary catheterization and Physical Therapy.  These should be supportive for your other hospital care. The nurse will constantly coordinate and report to your physician-in-charge. Our existing patients can directly apply for the service while the new ones have to see our physician for evaluation before registering.</p>
								<ul>
									<li>Opening Hours:  Everyday 7.00 am. - 3.00 pm.</li>
									<li>Make an Appointment: Tel (+66) 2-265-7777</li>
								</ul> -->
								<?=$row_homecare["home_care"]?>
							</div>
							<div id="restaurantsandshops-tab" class="tab-pane fade">
								<h3>Restaurants and Shops</h3>
								<h4>Restaurants</h4>
								<!-- <ul>
									<li>Au Bon Pain: Fresh coffee and patisseries<br/>Location: 1st and 10th Floor, Vichaiyut Hospital Medical Center</li>

									<li>Hom Nil: Food and Beverage with cafeteria<br/>Location: 4th Floor, Vichaiyut Hospital North Building</li>

									<li>Magarite Coffee Shop : Food, snack and beverage and souvenirs for patient, 
										<br/>Location :  1st floor, Vichaiyut Hospital North Building</li>
									</ul> -->
									<?=$row_restaurant["restaurant"]?>
									<h4>Shops</h4>
									<!-- <ul class="shops">
										<li><span class="head-shop">Family Mart</span> <br/>Location : 13th Floor, Vichaiyut Hospital Medical Center</li>

										<li><span class="head-shop">For Eyes eyewear shop</span> <br/>Location : 2nd Floor, Vichaiyut Hospital North Building <br/>11th Floor, Vichaiyut Hospital Medical Center</li>

										<li><span class="head-shop">Bookstore</span> <br/>Location :  3rd Floor, Vichaiyut Hospital North Building <br/>11th Floor, Vichaiyut Hospital Medical Center</li>

										<li><span class="head-shop">Circlife shop</span> <br/>Medical supplies, medical equipment and medical electronics
											<br/>Location : 2nd Floor, Vichaiyut Hospital North Building</li>
										</ul> -->
										<?=$row_restaurant["shop"]?>
									</div>
								</div>
							</div>
						</div>
					</section><!-- end of service section -->


					<!-- team section -->
					<section class="team" id="team">
						<div class="container">
							<div class="row">
								<div class="team-heading text-center">
									<h2>our Clinics</h2>
									<?php
										try
										{ 

										$stmt_clinic = $db_con->prepare("SELECT * FROM clinic_category ORDER BY ID Limit 1");
										$stmt_clinic->execute();
										$row_clinic = $stmt_clinic->fetch(PDO::FETCH_ASSOC);

										}
										catch(PDOException $e){
										echo $e->getMessage();
										}
									?>
									<!-- <h4>Health Care and Medical Clinic</h4>
									<div class="col-md-6 ourclinic-columnleft"><p>Vichaiyut Health Care and Medical Clinic offer various types of unique check-up packages and Internal Medicine treatment service to suit a wide range of patient requirements. We also have the specialists in Cardiovascular system, Infectious Disease, Endocrine system diseases and Diabetes.</p></div>

									<div class="col-md-6 ourclinic-columnright"><ul>
										<li>Opening Hours : 	Monday – Friday 7.00 am. –  8.00 pm.<br/>Saturday – Sunday 7.00 am. –  5.00 pm.</li>

										<li>Venue : Health Care and Medical Clinic, 10th Floor, Vichaiyut Hospital Medical Center</li>

										<li>Make an Appointment : Appointment Center tel. (+66) 2-265-7555</li>
									</ul></div> -->
									<h4><?=$row_clinic["name"]?></h4>
									<div class="col-md-6 ourclinic-columnleft"><p><?=$row_clinic["detail"] ?></p></div>
									<div class="col-md-6 ourclinic-columnright">
										<ul>
											<li>
												Opening Hours : <?= $row_clinic["open_hours"]?>
											</li>
											<li>
												Venue : <?= $row_clinic["venue"]?>
											</li>
											<li>Make an Appointment : <?=$row_clinic["appointment"]?></li>
										</ul>
									</div>
								</div>
								<?php
									try
                                    { 
                                    	$row_id = $row_clinic["ID"];
                                        $stmt_clinic_profile = $db_con->prepare("SELECT * FROM clinic WHERE clinic = $row_id ORDER BY ID LIMIT 11");
                                        $stmt_clinic_profile->execute();
                                        $row_clinic_profile = $stmt_clinic_profile->fetchAll();
                                        foreach ($row_clinic_profile as $key=>$result) {
                                        	if($key%2!==0){
								?>
								<div class="col-md-2 single-member col-sm-4">
									<div class="person">
										<img class="img-responsive" src="<?=$result["path_img"]?>" alt="member-1">
									</div>
									<a href="profile.php?id=<?= base64_encode($row_clinic["ID"])?>&doctor=<?=$result["ID"]?>">
										<div class="person-detail">
											<div class="arrow-bottom"></div>
											<h3><?=$result["name"]?></h3>
											<p></p>
										</div>
									</a>
								</div>
								<?php
									}else{
								?>
								<div class="col-md-2 single-member col-sm-4">
									<a href="profile.php?id=<?= base64_encode($row_clinic["ID"])?>&doctor=<?=$result["ID"]?>">
										<div class="person-detail">
											<div class="arrow-top"></div>
											<h3><?=$result["name"]?></h3>
											<p></p>
										</div>
									</a>
									<div class="person">
										<img class="img-responsive" src="<?=$result["path_img"]?>" alt="member-1">
									</div>
								</div>
								<?php
									}
									}
									}
                                    catch(PDOException $e){
                                        echo $e->getMessage();
                                        // echo "No records";
                                    }
								?>
								<!-- <div class="col-md-2 single-member col-sm-4">
									<a href="profile.html">
										<div class="person-detail">
											<div class="arrow-top"></div>
											<h3>Dr. Bunjurd Poomsai</h3>
											<p></p>
										</div>
									</a>
									<div class="person">
										<img class="img-responsive" src="img/bunjurd.jpg" alt="member-2">
									</div>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<div class="person">
										<img class="img-responsive" src="img/chanin.jpg" alt="member-3">
									</div>
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-bottom"></div>
										<h3>Dr. Chanin Peerabool</h3>
										<p></p>
									</div></a>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-top"></div>
										<h3>Dr. Nichaya Chunhamaneewat</h3>
										<p></p>
									</div></a>
									<div class="person">
										<img class="img-responsive" src="img/nichaya.jpg" alt="member-4">
									</div>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<div class="person">
										<img class="img-responsive" src="img/pannawadee.jpg" alt="member-5">
									</div>
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-bottom"></div>
										<h3>Dr. Pannawadee Uppathamnarakron</h3>
										<p></p>
									</div></a>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-top"></div>
										<h3>Dr. Supannika Charoen</h3>
										<p></p>
									</div></a>
									<div class="person">
										<img class="img-responsive" src="img/supannika.jpg" alt="member-5">
									</div>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<div class="person">
										<img class="img-responsive" src="img/suwanee.jpg" alt="member-5">
									</div>
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-bottom"></div>
										<h3>Dr. Suwanee Jidpugdeebodin</h3>
										<p></p>
									</div></a>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-top"></div>
										<h3>Dr. Suwit Chunhamaneewat</h3>
										<p></p>
									</div></a>
									<div class="person">
										<img class="img-responsive" src="img/suwit.jpg" alt="member-5">
									</div>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<div class="person">
										<img class="img-responsive" src="img/thongchan.jpg" alt="member-5">
									</div>
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-bottom"></div>
										<h3>Dr. Thongchan Nillhate</h3>
										<p></p>
									</div></a>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-top"></div>
										<h3>Dr. Weerapong Sateanpanich</h3>
										<p></p>
									</div></a>
									<div class="person">
										<img class="img-responsive" src="img/weerapong.jpg" alt="member-5">
									</div>
								</div>
								<div class="col-md-2 single-member col-sm-4">
									<div class="person">
										<img class="img-responsive" src="img/yaowaluk.jpg" alt="member-5">
									</div>
									<a href="profile.html"><div class="person-detail">
										<div class="arrow-bottom"></div>
										<h3>Dr. Yaowaluk Chuapai</h3>
										<p></p>
									</div></a>
								</div> -->
								<div class="col-md-2 single-member col-sm-4 button-doctor-profile"><a href="profile.php?id=<?= base64_encode($row_clinic["ID"])?>">All Profile</a></div>
								<!--Step 2-->
							</div>
						</div>
					</section><!-- end of team section -->

					<!-- package section -->
					<section class="about text-center" id="package">
						<div class="container">
							<div class="row">
								<h2>PACKAGE & PROMOTION</h2>
								<h4>Scandinavian Health Check-Up Package</h4>
								<?php
									try
									{ 

									$stmt_package = $db_con->prepare("SELECT * FROM package_promotion");
									$stmt_package->execute();
									$row_package = $stmt_package->fetch(PDO::FETCH_ASSOC);

									}
									catch(PDOException $e){
									echo $e->getMessage();
									}
								?>
								<p style="overflow:hidden;margin-bottom:30px;"><img class="img-responsive" src="<?=$row_package["path_img"]?>"></p>
								<h4 class="condition"><a href="#" data-toggle="collapse" data-target="#termandcondition">*Terms and Conditions Apply</a><h4>

									<div id="termandcondition" class="collapse">
										<!-- <ul>
											<li>1. This package prices are valid until 31 December 2016.</li>
											<li>2. Reserves the right to purchase this program for the patients coming from Sweden, Norway, Denmark, Finland and Iceland only.</li>
											<li>3. Patients are requested to present the passport at the registration before beginning the program.</li>
											<li>4. This program is available only at Health Care and Medical Clinic, 10th floor, Vichaiyut Hospital Medical Center.</li>
											<li>5. Do not eat or drink anything, except drinking water, at least 6-8 hours prior to check up.</li>
											<li>6. Do not eat or drink anything, except drinking water, at least 6-8 hours prior to check up.</li>
											<li>7. There is no discount of any kind of promotions may be applied to package prices.</li>
											<li>8. There is no health insurance or others may be applied to package prices. Patients are required for pre-payment before beginning the program.</li>
											<li>9. All prices are subject to change without prior notice.</li>
											<li>10. Prices are inclusive doctor and OPD's fee (participating doctors only)</li>
											<li>11. Please check terms and other conditions at Point of Services</li>

											For more information & Book Now: info@vichaiyut.com
										</ul> -->
										<?=$row_package["term"]?>
									</div>
									<h4 class="condition">** The package price in  THB is fixed.</h4>
<h4 class="condition" style="margin-bottom:45px;">*** Approximate package price in USD is subject to change without prior notice.</h4>
								</div>
							</div>
						</section><!-- end of package section -->

						<!-- map section -->
						<div class="api-map" id="contact">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12 map" id="map"></div>
								</div>
							</div>
						</div><!-- end of map section -->

						<!-- contact section starts here -->
						<section class="contact">
							<div class="container">
								<div class="row">
									<div class="contact-caption clearfix">
										<div class="contact-heading text-center">
											<h2>contact us</h2>
										</div>
										<div class="col-md-5 contact-info text-left">
											<h3>contact information</h3>
											<div class="info-detail">
												<!-- <ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 53 Setsiri Road, Phayathai, Bangkok  10400, THAILAND</li></ul>
												<ul><li><i class="fa fa-phone"></i><span>Telephone:</span> (+66) 2-265-7777, (+66) 2-618-6200-20</li></ul>
												<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (+66) 2-265-7888, (+66) 2-265-7788</li></ul>
												<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@vichaiyut.com</li></ul>
												<ul><li><i></i><span>Website:</span> www.vichaiyut.com</li></ul>
												<ul><li><i></i><span>Facebook:</span> www.facebook.com/vichaiyutpage</li></ul> -->
												<?php
													try
													{ 
														$stmt_contact_info = $db_con->prepare("SELECT * FROM contact_information WHERE ID=1");
														$stmt_contact_info->execute();
														$row_contact_info = $stmt_contact_info->fetch(PDO::FETCH_ASSOC);
													}
													catch(PDOException $e){
														echo $e->getMessage();
													}
													if(isset($row_contact_info["address"]) && $row_contact_info["address"]<>""){
														echo "<ul><li><i class=\"fa fa-map-marker\"></i><span>Address:</span> ".$row_contact_info["address"]."</li></ul>";
													}
													if(isset($row_contact_info["tel"]) && $row_contact_info["tel"]<>""){
														echo "<ul><li><i class=\"fa fa-phone\"></i><span>Telephone:</span> ".$row_contact_info["tel"]."</li></ul>";
													}
													if(isset($row_contact_info["fax"]) && $row_contact_info["fax"]<>""){
														echo "<ul><li><i class=\"fa fa-fax\"></i><span>Fax:</span> ".$row_contact_info["fax"]."</li></ul>";
													}
													if(isset($row_contact_info["email"]) && $row_contact_info["email"]<>""){
														echo "<ul><li><i class=\"fa fa-envelope\"></i><span>Email:</span> ".$row_contact_info["email"]."</li></ul>";
													}
													if(isset($row_contact_info["website"]) && $row_contact_info["website"]<>""){
														echo "<ul><li><i></i><span>Website:</span>".$row_contact_info["website"]."</li></ul>";
													}
													if(isset($row_contact_info["facebook"]) && $row_contact_info["facebook"]<>""){
														echo "<ul><li><i></i><span>Facebook:</span>".$row_contact_info["facebook"]."</li></ul>";
													}
													if(isset($row_contact_info["instagram"]) && $row_contact_info["instagram"]<>""){
														echo "<ul><li><i></i><span>Instagram:</span>".$row_contact_info["instagram"]."</li></ul>";
													}
													if(isset($row_contact_info["twitter"]) && $row_contact_info["twitter"]<>""){
														echo "<ul><li><i></i><span>Twitter:</span>".$row_contact_info["twitter"]."</li></ul>";
													}
												?>
												
											</div>
										</div>
										<div class="col-md-6 col-md-offset-1 contact-form">
											<h3>leave us a message</h3>
											<div id="error">
												
											</div>
											<form id="contact-form" role="form" class="form">
												<input class="name" type="text" name="name" placeholder="Name">
												<input class="email" type="email" name="email" placeholder="Email">
												<input class="phone" type="text" name="phone" placeholder="Phone No:">
												<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
												
											</form>
											<button id="submit-btn" name="submit-btn" class="btn submit-btn" >SUBMIT</button>
										</div>
									</div>
								</div>
							</div>
						</section><!-- end of contact section -->

						<section class="contact-more">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<h3>Transportations</h3>
<h4>BTS Sky train</h4>
<ul>
<li>Ari  station and take the taxi to hospital (10 minutes)</li>
<li>Mo Chit station and take the taxi to hospital (20 minutes)</li>
</ul>

<h4>MRT Metro</h4>
<ul>
<li>Kamphaeng Phet  station and take the taxi to hospital (20 minutes)</li>
</ul>

<h4>Airports</h4>
<ul>
<li>Don Muang international Airport and take the taxi  to hospital (25 minutes)</li>
<li>Suvarnabhumi Airport and take the taxi  to hospital  (30 minutes)</li>
</ul>

									</div>
									<div class="col-md-4">
										<h3>Hotels</h3>
<h4>Centara Grand at Central Plaza Ladprao Bangkok </h4>
<ul>
<li>Car/Taxi – 15 minutes</li>
</ul>

<h4>JW Marriott Hotel Bangkok </h4>
<ul>
<li>Car/Taxi  – 20 minutes</li>
</ul>

<h4>Siam Kempinski Hotel Bangkok </h4>
<ul>
<li>Car/Taxi  – 20 minutes</li>
</ul>

<h4>Centara Grand and Bangkok Convention Centre at CentralWorld </h4>
<ul>
<li>Car/Taxi  – 30 minutes</li>
</ul>

									</div>
									<div class="col-md-4">
										<h3>Shopping centers</h3>
<h4>CentralPlaza Ladprao </h4>
<ul>
<li>MRT Metro Pholyothin station :  5 minutes</li>
<li>Car/Taxi : 15 minutes</li>
</ul>

<h4>Mahboonkrong center </h4>
<ul>
<li>BTS Sky train National Stadium station : 10 minutes</li>
<li>Car/Taxi : 20 minutes</li>
</ul>

<h4>Siam Paragon, Siam Center, Siam Discovery and Siam Square </h4>
<ul>
<li>BTS Sky train Siam station : 10 minutes</li>
<li>Car/Taxi : 20 minutes</li>
</ul>

<h4>CentralWorld</h4>
<ul>
<li>BTS Sky train Chitlom station : 15 minutes</li>
<li>Car/Taxi : 30 minutes</li>
</ul>

									</div>
								</div>
							</div>
						</section>
						<!-- footer starts here -->
						<footer class="footer clearfix">
							<div class="container">
								<div class="row">
									<div class="col-xs-6 footer-para">
										<p>&copy;All right reserved</p>
									</div>
									<div class="col-xs-6 text-right">
										<a href="https://www.facebook.com/vichaiyutpage"><i class="fa fa-facebook"></i></a>
									</div>
								</div>
							</div>
						</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('document').ready(function()
		{ 
			$(".submit-btn").click(function(){
				var data = $("#contact-form").serialize();
		    	console.log("test");
				   $.ajax({
				   type : 'POST',
				   url  : 'add-contact.php',
				   data : data,
				   beforeSend: function()
				   { 
				    $("#error").fadeOut();
				   },
				   success :  function(response)
				      {      
				     if(response=="ok"){
				         
				      // setTimeout(' window.location.href = "index.php#contact"; ',1000);
				      swal("Thank you.", "We've received your contact information.", "success");
				     }
				     else{
				         
				      $("#error").fadeIn(1000, function(){      
				    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
				           
				         });
				     }
				     }
				   });
				});
		});
	</script>
</body>
</html>