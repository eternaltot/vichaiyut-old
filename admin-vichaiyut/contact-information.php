<?php
session_start();
if(!isset($_SESSION['user_session']))
{
 header("Location: login.php");
}

// if(!isset($_GET['id'])){
//     header("Location : contact-information.php");
// }

require_once 'config/dbconfig.php';
$user = $_SESSION['user_session'];

try
{ 

$stmt = $db_con->prepare("SELECT * FROM contact_information");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vichaiyut Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!-- FILE UPLOAD -->
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- BOOTSTRAP SELECT -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
</head>
<body>
    <div id="wrapper">
        <?php
            include("menu.php");
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Contact Information</h1>

                    </div>
                </div>
                <div class="row">
                    <div id="error"></div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                    <div class="panel-heading">
                       Edit Contact Information
                    </div>
                    <div class="panel-body">
                        <form id="contact-form" role="form" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" class="form-control" type="text" value="<?= $row['address']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input name="tel" class="form-control" type="text" value="<?= $row['tel']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input name="fax" class="form-control" type="text" value="<?= $row['fax']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" class="form-control" type="text" value="<?= $row['email']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input name="website" class="form-control" type="text" value="<?= $row['website']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input name="facebook" class="form-control" type="text" value="<?= $row['facebook']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input name="instagram" class="form-control" type="text" value="<?= $row['instagram']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input name="twitter" class="form-control" type="text" value="<?= $row['twitter']?>">
                                    </div>
                                    <button id="btn-save" name="btn-save" type="submit" class="btn btn-info">Save </button>
                                </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; Vichaiyut Admin 2016 
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- BOOTSTRAP FILE UPLOAD -->
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CKEDITOR CDN -->
    <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
    <!-- JQUERY VALIDATION -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="process/js/edit-contact-information.js" ></script>
</body>
</html>
