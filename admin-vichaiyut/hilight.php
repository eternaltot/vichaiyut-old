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
    <title>Admin Vichaiyut</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- DATA TABLE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <!-- DATETIME PICKER -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.css">
    <!-- BOOTSTRAP SWITCH -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-switch.css">
    
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
                        <h1 class="page-head-line">Hilight</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">

                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <a href="add-hilight.php" class="btn btn-lg btn-info" style="background-color: #00CA79;"><i class="fa fa-plus"></i> Add</a>
                    <div style="height: 10px;"></div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hilight
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Link</th>
                                            <th>Publish Date</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            try
                                            { 

                                                $stmt = $db_con->prepare("SELECT * FROM hilight ORDER BY ID");
                                                $stmt->execute();
                                                $row = $stmt->fetchAll();
                                                foreach ($row as $result) {
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" class="my-checkbox" name="my-checkbox" value="<?=$result['ID']?>" <?= $result['isOnOff'] == "1" ? "checked" : "" ?>></td>
                                            <td><img src="../<?=$result['path_img']?>" width="100" /></td>
                                            <td><?=$result['link']?></td>
                                            <td><?=$result['publish_date']?></td>
                                            <td><a href="edit-hilight.php?id=<?= base64_encode($result['ID'])?>"><i class="fa fa-pencil-square-o fa-3"></i></a> / <a data-toggle="modal" data-target="#myModal" data-whatever="<?= base64_encode($result['ID'])?>"><i class="fa fa-trash fa-3"></i></a></td>
                                        </tr>
                                        <?php 
                                            }
                                            }
                                            catch(PDOException $e){
                                                echo $e->getMessage();
                                                // echo "No records";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-danger">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Delete</h4>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to delete this item?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="" class="btn btn-danger delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MODAL -->
    <script type="text/javascript">
        $('#myModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget); // Button that triggered the modal
          var recipient = button.data('whatever'); // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this);
          $(".delete").attr("href","process/delete-managementprocess.php?id="+recipient);
        })
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- DATA TABLE -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <!-- DATETIME PICKER -->
    <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <!-- BOOTSTRAP SWITCH -->
    <script type="text/javascript" src="assets/js/bootstrap-switch.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
            $(".my-checkbox").bootstrapSwitch();
            $('.my-checkbox').on('switchChange.bootstrapSwitch',function(event, state) {
                var $this = $(this);
                console.log(state);
                var $ischeck = (state == true ? 1:0);
                var $checklist_id = $this.val();
                // $this will contain a reference to the checkbox   
                
                var dataString = "id=" + $checklist_id + "&ischeck=" + $ischeck;
                $.ajax({  
                    type: "POST",  
                    url: "process/updateHilightOnOffprocess.php",  
                    data: dataString,
                    beforeSend: function() 
                    {
                    },  
                    success: function(response)
                    {
                        console.log(response);
                    }
                });
            });
            $('#myModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget); // Button that triggered the modal
              var recipient = button.data('whatever'); // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this);
              $(".delete").attr("href","process/delete-hilightprocess.php?id="+recipient);
            });
        });
    </script>
</body>
</html>
