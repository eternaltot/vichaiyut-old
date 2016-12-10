<?php
session_start();
if(!isset($_SESSION['user_session']))
{
 header("Location: login.php");
}

require_once 'config/dbconfig.php';
$user = $_SESSION['user_session'];
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
                        <h1 class="page-head-line">Management Team</h1>

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
                       Add Management Profile
                    </div>
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label col-lg-4">Is a doctor</label>
                            <select id="cmbDoctor" class="form-control ">
                                <option>No</option>
                                <option>Yes</option>
                                <option>All Profile</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="height: 25px;">
                        
                    </div>
                        <form id="management-form-no-doctor" role="form" method="post" enctype="multipart/form-data" action="process/add-managementprocess.php">
                                    <div class="form-group">
                                    <label class="control-label col-lg-4">Image Upload</label>
                                    <div class="">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input id="file" name="file" type="file"></span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input name="name" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input name="position" class="form-control" type="text">
                                    </div>
                                    <div id="no_doctor">
                                        
                                        <div class="form-group">
                                            <label>Education</label>
                                            <textarea name="education" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Work Experience</label>
                                            <textarea name="experience" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Honours And Awards</label>
                                            <textarea name="award" class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div id="doctor">
                                        <div class="form-group">
                                            <label>Specialty</label>
                                            <textarea name="specialty" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Langauge Spoken</label>
                                            <textarea name="language" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Medical School</label>
                                            <textarea name="medical_school" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Residencies</label>
                                            <textarea name="residencies" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Fellowship</label>
                                            <textarea name="fellowship" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Certificate</label>
                                            <textarea name="certificate" class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" id="is_doctor" name="is_doctor" value="0"></input>
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
    <!-- <script type="text/javascript" src="process/js/add-management.js" ></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#doctor").hide();
            $("#cmbDoctor").change(function(){
                var isdoctor = $(this).val();
                if(isdoctor=="Yes"){
                    $("#is_doctor").val(1);
                    $("#doctor").show();
                    $("#no_doctor").hide();
                }else if(isdoctor=="No"){
                    $("#is_doctor").val(0);
                    $("#doctor").hide();
                    $("#no_doctor").show();
                }else if(isdoctor=="All Profile"){
                    $("#is_doctor").val(2);
                    $("#doctor").show();
                    $("#no_doctor").show();
                }
            });

        });
    </script>

</body>
</html>
