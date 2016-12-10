<?php
session_start();
if(!isset($_SESSION['user_session']))
{
 header("Location: login.php");
}

require_once 'config/dbconfig.php';
$user = $_SESSION['user_session'];

try
{ 

$stmt = $db_con->prepare("SELECT * FROM homepage WHERE ID=1");
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
    <!-- DATETIME PICKER -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.css">
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
                        <h1 class="page-head-line">Homepage</h1>

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
                       Edit Homepage
                    </div>
                    <div class="panel-body">
                        <form id="homepage-form" role="form" method="post" enctype="multipart/form-data" action="process/edit-homepageprocess.php">
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <input name="about_us" class="form-control" type="text" value="<?=$row['about_us']?>">
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">About Vichaiyut Hospital Image</label>
                                    <div class="">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 500px; height: 200px;">
                                                    <img src="../<?=$row['about_img_path'] ?> ">
                                                </div>
                                                <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="file" name="about_img" type="file"></span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Hospital Vision and Mission Image</label>
                                    <div class="">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 500px; height: 200px;">
                                                    <img src="../<?= $row['vision_img_path'] ?> ">
                                                </div>
                                                <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="file" name="vision_img" type="file"></span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Management Team Image</label>
                                    <div class="">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 500px; height: 200px;">
                                                    <img src="../<?= $row['management_img_path'] ?> ">
                                                </div>
                                                <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="file" name="managementteam_img" type="file"></span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
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

</body>
</html>
