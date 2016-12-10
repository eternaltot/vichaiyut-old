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

$stmt = $db_con->prepare("SELECT * FROM restaurant_and_shop");
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
                        <h1 class="page-head-line">Restaurants and Shops</h1>

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
                            Restaurants and Shops
                        </div>
                        <div class="panel-body">
                            <form role="form" id="restaurant-form" method="post">
                                <div class="form-group">
                                    <label>Restaurants</label>
                                    <textarea name="restaurant" id="restaurant" class="form-control" rows="3"><?=$row['restaurant']?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Shops</label>
                                    <textarea name="shop" id="shop" class="form-control" rows="3"><?=$row['shop']?></textarea>
                                </div>
                                <button type="submit" id="btn-save" name="btn-save" class="btn btn-info">Save </button>
                            </form>
                        </div>
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
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- CKEDITOR CDN -->
    <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
    <!-- JQUERY VALIDATION -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="process/js/edit-restaurant-and-shop.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace("restaurant");
        CKEDITOR.replace("shop");
    </script>
    

</body>
</html>
