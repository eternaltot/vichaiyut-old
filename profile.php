<?php 
require_once 'config/dbconfig.php';

if(!isset($_GET['id'])){
    header("Location : index.php");
}
$id = base64_decode($_GET['id']);
if(isset($_GET['doctor'])){
	$doctor = $_GET['doctor'];
}
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
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
      .header-logo{
      	margin: 0px;
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
									<li><a class="menu active" href="index.php#home" >Home</a></li>
									<li><a class="menu" href="index.php#about">About Us</a></li>
									<li><a class="menu" href="index.php#service">Patient Service</a></li>
									<li><a class="menu" href="index.php#team">Our Clinic</a></li>
									<li><a class="menu" href="index.php#package">Package & Promotion</a></li>
									<li><a class="menu" href="index.php#contact"> contact us</a></li>
								</ul>
							</div><!-- /navbar-collapse -->
						</div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<!-- team section -->
	<section class="team bg-pattern-blue" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2 style="margin-top:140px;">profile</h2>
					<h3>Health Care and Medical Clinic</h3>
				</div>
				<!-- Begin Doctor List -->
				<div class="container">
					<div class="list-group">
						<!-- <a href="#" class="list-group-item" data-toggle="collapse" data-target="#nichaya-chun">
							<h4 class="list-group-item-heading">Dr. Nichaya Chunhamaneewat</h4>
							<div id="nichaya-chun" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/nichaya.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Family Medicine</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine, Chiang Mai University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>BMA Medical College and Vajira Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Family Medicine</li>
</ul>
	
<h4>Certificate</h4>
<ul>
<li>Graduate Diploma in Clinical Medical Sciences (Family Medicine)</li>
</ul>

								</div>
							</div>
						</a> -->
						<?php 
							try
                            { 

                                $stmt = $db_con->prepare("SELECT * FROM clinic WHERE clinic = $id ORDER BY ID");
                                $stmt->execute();
                                $row = $stmt->fetchAll();
                                foreach ($row as $result) {
						?>
						<a href="#" class="list-group-item" data-toggle="collapse" data-target="#doctor<?=$result["ID"]?>">
							<h4 class="list-group-item-heading"><?= $result["name"]?></h4>
							<div id="doctor<?=$result["ID"]?>" class="collapse profile-doctor <?= isset($doctor) && $result["ID"] == $doctor ? "in": "" ?>">
								<div class="profile-thumb col-md-3">
									<img src="<?=$result["path_img"]?>" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<?php
	$split_specialty = explode("-", $result["specialty"]);
	foreach ($split_specialty as $key => $value) {
		echo "<li>".$value."</li>";
	}
?>
</ul>
	
<h4>Language spoken</h4>
<ul>
<?php
	$split_language_spoken = explode("-", $result["language_spoken"]);
	foreach ($split_language_spoken as $key => $value) {
		echo "<li>".$value."</li>";
	}
?>
</ul>
	
<h4>Medical school</h4>
<ul>
<?php
	$split_medical_school = explode("-", $result["medical_school"]);
	foreach ($split_medical_school as $key => $value) {
		echo "<li>".$value."</li>";
	}
?>
</ul>
	
<h4>Residencies</h4>
<ul>
<?php
	$split_residencies = explode("-", $result["residencies"]);
	foreach ($split_residencies as $key => $value) {
		echo "<li>".$value."</li>";
	}
?>
</ul>
	
<h4>Fellowship</h4>
<ul>
<?php
	$split_fellowship = explode("-", $result["fellowship"]);
	foreach ($split_fellowship as $key => $value) {
		echo "<li>".$value."</li>";
	}
?>
</ul>
	
<h4>Certifications</h4>
<ul>
<!-- <li>Internal Medicine</li>
<li>Cardiology</li> -->
<?php
	$split_certificate = explode("-", $result["certificate"]);
	foreach ($split_certificate as $key => $value) {
		echo "<li>".$value."</li>";
	}
?>
</ul>

								</div>
							</div>
						</a>
						<?php
							}
                            }
                            catch(PDOException $e){
                                echo $e->getMessage();
                                // echo "No records";
                            }
						?>
						<!-- <a href="#" class="list-group-item" data-toggle="collapse" data-target="#bunjerd-poomsai">
							<h4 class="list-group-item-heading">Dr. Bunjerd Poomsai</h4>
							<div id="bunjerd-poomsai" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/bunjurd.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Internal Medicine </li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Pramongkutklao College of Medicine, Mahidol University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Internal Medicine, Pramongkutklao Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Internal Medicine, Pramongkutklao Hospital</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Thai Board of Internal Medicine</li>
</ul>

								</div>
							</div>
						</a>
						<a href="#" class="list-group-item" data-toggle="collapse" data-target="#arunsri-kit">
							<h4 class="list-group-item-heading">Dr. Arunsri Kitwattana</h4>
							<div id="arunsri-kit" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/arunsri.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Internal Medicine</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine, Prince of Songkhla University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Internal Medicine, King Chulalongkorn Memorial Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Internal Medicine, King Chulalongkorn Memorial Hospital</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Internal Medicine</li>
<li>Certificate of Basic Occupational Medicine</li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#chanin-pee">
								<h4 class="list-group-item-heading">Dr. Chanin Peerabool</h4>
								<div id="chanin-pee" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/chanin.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Cardiology</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine, Chulalongkorn University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Srinagarind Hospital, Khon Kaen University</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Cardiology, Chulalongkorn University</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Diploma of the Thai Board of Internal Medicine</li>
<li>Diploma of the Thai Board of Cardiovascular Medicine</li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#suwanee-jid">
								<h4 class="list-group-item-heading">Dr. Suwanee Jidpugdeebodin</h4>
								<div id="suwanee-jid" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/suwanee.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Infectious Disease</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine Siriraj Hospital, Mahidol University </li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Songklanagarind Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Infectious Disease</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Certificate of Post Doctoral Training in Internal Medicine</li>
<li>Thai Board of Internal Medicine</li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#weerapong-sat">
								<h4 class="list-group-item-heading">Dr. Weerapong Sateanpanich</h4>
								<div id="weerapong-sat" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/weerapong.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Internal Medicine</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine, Chulalongkorn University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Faculty of Medicine, Chiang Mai University </li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Internal Medicine, Faculty of Medicine, Chiang Mai University</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Thai Board of Internal Medicine</li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#pannawadee-upp">
								<h4 class="list-group-item-heading">Dr. Pannawadee Uppathamnarakron</h4>
								<div id="pannawadee-upp" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/pannawadee.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Infectious Disease</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine, Chulalongkorn University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Internal Medicine, King Chulalongkorn Memorial Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Infectious Disease, King Chulalongkorn Memorial Hospital</li>
<li>Ambulatory Medicine, King Chulalongkorn Memorial Hospital</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Internal Medicine</li>
<li>Infectious Disease</li>
<li>Ambulatory Medicine</li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#yaowaluk-chu">
								<h4 class="list-group-item-heading">Dr. Yaowaluk Chuapai</h4>
								<div id="yaowaluk-chu" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/yaowaluk.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Cardiology</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine Ramathibodi Hospital, Mahidol University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Ramathibodi Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Cardiology, Ramathibodi Hospital</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Internal Medicine</li>
<li>Cardiology</li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#suwit-chu">
								<h4 class="list-group-item-heading">Dr. Suwit Chunhamaneewat</h4>
								<div id="suwit-chu" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/suwit.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Infectious Disease</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine Siriraj Hospital, Mahidol University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Department of Medical Services, Ministry of Public Health</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Infectious Disease</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Bachelor of Science Program in Medical Sciences, Mahidol University</li>
<li>Higher Graduate Diploma in Clinical Medical Sciences, Mahidol University</li>
<li>Thai Board of General Practice </li>
<li>Thai Board of Family Medicine  </li>
</ul>

								</div>
							</div>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#supannika-cha">
								<h4 class="list-group-item-heading">Dr. Supannika Charoen</h4>
								<div id="supannika-cha" class="collapse profile-doctor">
								<div class="profile-thumb col-md-3">
									<img src="img/supannika.jpg" class="pic-profile">
								</div>
								<div class="profile-detail col-md-9">
<h4>Specialty</h4>
<ul>
<li>Endocrinology</li>
</ul>
	
<h4>Language spoken</h4>
<ul>
<li>Thai, English</li>
</ul>
	
<h4>Medical school</h4>
<ul>
<li>Faculty of Medicine, Srinakharinwirot University</li>
</ul>
	
<h4>Residencies</h4>
<ul>
<li>Vachira Hospital</li>
</ul>
	
<h4>Fellowship</h4>
<ul>
<li>Endocrinology, King Chulalongkorn Memorial Hospital</li>
</ul>
	
<h4>Certifications</h4>
<ul>
<li>Internal Medicine</li>
<li>Endocrinology</li>
</ul> -->

								</div>
							</div>
							</a>
						</div>
					</div>
					<!-- End Doctor List-->
				</div>
				<div class="row" style="display:none;">
					<div class="team-heading text-center">
						<h3>Dental Clinic</h3>
					</div>
					<!-- Begin Doctor List -->
					<div class="container">
						<div class="list-group">
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#rungruk-sar">
								<h4 class="list-group-item-heading">Dr. Rungruk Sarikavanita</h4>
								<ul id="rungruk-sar" class="collapse">
									<li>Specialty : Endodontology</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry, Chulalongkorn University</li>
									<li>Fellowship : Endodontology</li>
									<li>Certifications :</li>
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#darawan-hom">
								<h4 class="list-group-item-heading">Dr. Darawan Homrossukhon</h4>
								<ul id="darawan-hom" class="collapse">			 	
									<li>Specialty : Pediatric Dentistry</li>
									<li>Language spoken : Thai, English</li> 
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University, Henry M. Goldman School of Dental Medicine, Boston University,  U.S.A.</li>
									<li>Fellowship : Pediatric Dentistry, Children's Medical Center of Dallas,  U.S.A.</li>
									<li>Certifications : American Board of Pediatric Dentistry</li>
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#paninee-pud">
								<h4 class="list-group-item-heading">Dr. Paninee Puddhikarant</h4>
								<ul id="paninee-pud" class="collapse">
									<li>Specialty : Pediatric Dentistry</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry,  Mahidol University, School of Dental Medicine, University of Pittsburgh, U.S.A.</li>
									<li>Fellowship : Assistant Professor, School of Dental Medicine, University of Pittsburgh, U.S.A.</li>
									<li>Certifications :</li>
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#charuphan-oon">
								<h4 class="list-group-item-heading">Dr. Charuphan Oonsombat</h4>
								<ul id="charuphan-oon" class="collapse">
									<li>Specialty : Operative Dentistry</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University</li>
									<li>Fellowship : Operative Dentistry, The University of Iowa, U.S.A.</li>
									<li>Certifications : Operative Dentistry, The University of Iowa, U.S.A., American Board of Operative Dentistry, Thai Board of Operative Dentistry</li>
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#chutakorn-suk">
								<h4 class="list-group-item-heading">Dr. Chutakorn Sukriket</h4>
								<ul id="chutakorn-suk" class="collapse">
									<li>Specialty : Prosthodontics</li>
									<li>Language spoken : Thai</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University</li>
									<li>Fellowship : Postgraduate Certificate in Prosthodontics</li>
									<li>Certifications :</li>
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#nartvipa-ter">
								<h4 class="list-group-item-heading">Dr. Nartvipa Terbsiri</h4>
								<ul id="nartvipa-ter" class="collapse">
									<li>Specialty : General Dentistry</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University</li>
									<li>Fellowship : General Dentistry</li>
									<li>Certifications :</li> 
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#mayuree-nga">
								<h4 class="list-group-item-heading">Dr. Mayuree Ngarmukos</h4>
								<ul id="mayuree-nga" class="collapse">
									<li>Specialty : General Dentistry</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University, New York university College of Dentistry, New York, U.S.A.</li>
									<li>Fellowship : General Practice Resident, University of Medicine and  Dentistry of New Jersey, U.S.A.</li>
									<li>Certifications :</li> 
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#weerapong-cha">
								<h4 class="list-group-item-heading">Dr. Weerapong Chatameteewong</h4>
								<ul id="weerapong-cha" class="collapse">
									<li>Specialty : General Dentistry</li>
									<li>Language spoken : Thai</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University</li>	
									<li>Fellowship : Periodontology</li>	
									<li>Certifications :</li> 
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#sompong-tri">
								<h4 class="list-group-item-heading">Dr. Sompong Trivichitslip</h4>
								<ul id="sompong-tri" class="collapse">
									<li>Specialty : General Dentistry</li>
									<li>Language spoken : Thai</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University</li>
									<li>Fellowship : Endodontology</li>
									<li>Certifications :</li> 
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#surapol-ple">
								<h4 class="list-group-item-heading">Dr. Surapol Ple-plakorn</h4>
								<ul id="surapol-ple" class="collapse">
									<li>Specialty : General Dentistry</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry,  Chulalongkorn University</li>
									<li>Fellowship :</li> 
									<li>Certifications :</li> 
								</ul>
							</a>
							<a href="#" class="list-group-item" data-toggle="collapse" data-target="#hattaya-sir">
								<h4 class="list-group-item-heading">Dr. Hattaya Sirisuay</h4>
								<ul id="hattaya-sir" class="collapse">
									<li>Specialty : Oral and Maxillofacial Surgery</li>
									<li>Language spoken : Thai, English</li>
									<li>Dental school : Faculty of Dentistry,  Mahidol University, Resident training in Oral and Maxillofacial Surgery, Chonburi Hospital</li>
									<li>Fellowship : Oral and Maxillofacial Surgery</li>
									<li>Certifications : Thai Board of Oral and Maxillofacial Surgery</li>
								</ul>
							</a>
						</div>
					</div>
					<!-- End Doctor List-->
				</div>
			</div>
		</section><!-- end of team section -->

		<div class="col-md-12 map" id="map" style="display:none;"></div>

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
	<script src="js/smoothscroll-custom.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>