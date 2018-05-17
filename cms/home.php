<?php include 'inc/dbconnection.php' ?>
<?php 
if(!isset($_SESSION)){
    session_start();
    session_regenerate_id();
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DOMICA | CMS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <style type="text/css">
    .image-tn{
        height: 300px;
    }
</style>
</head>

<body>

    <div id="wrapper">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welkom Beheerder</span>
                    </li>                
                    <li>
                        <a href="inc/logout.php">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
    <div class="content wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Markers</h5>

                        <div class="ibox-tools">
                            <a class=" ">
                                <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning btn-xs">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Toevoegen
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table id="usertable" class="table table-striped table-bordered table-hover dataTables-example usertable" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Naam</th>
                                        <th>Adres</th>
                                        <th>Status</th>
                                        <th>Edit</th>                                            
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, 'SELECT * FROM markers');


                                    if (mysqli_num_rows($sql) > 0) {
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            ?>
                                            <tr class="gradeX">
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['naam']; ?></td>
                                                <td><?php echo $row['adres']; ?></td>
                                                <td><?php echo $row['huurstatus']; ?></td>
                                                <td><button type="button" rel="tooltip" title="Bijwerken" id='<?php echo $row['id'] ?>' data-toggle="modal" data-target="#update_data_Modal" class="btn btn-success btn-simple btn-xs update">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Verwijderen"  id='<?php echo $row['id'] ?>' class="btn btn-danger btn-simple btn-xs delete">
                                                    <i class="fa fa-times"></i>
                                                </button></td>
                                            </tr>   
                                            <?php
                                        }
                                    }

                                    ?>                 
                                </tbody>
                                <tfoot>
                                    <tr>
                                       <th>#</th>
                                       <th>Naam</th>
                                       <th>Adres</th>
                                       <th>Status</th>
                                       <th>Edit</th> 
                                   </tr>
                               </tfoot>
                           </table>
                       </div>

                   </div>
               </div>
           </div>
       </div>
       <div class="footer">
        <div class="pull-right">

        </div>
        <div>
            Copyright © <?php echo date('Y'); ?> | Domica | All Rights Reserved
        </div>
    </div>

</div>
</div>

<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Marker Toevoegen</h4>
            </div>
            <div class="modal-body">
                <form  method="POST" id="insert_form" action="inc/insert_marker.php"  enctype="multipart/form-data" >
                    <label>Naam</label>
                    <input type="text" name="naam"  id="naam" class="form-control " required="true"/>
                    <br/>
                    <label>Adres</label>
                    <input type="text" name="adres" id="adres"  class="form-control " required="true"/>
                    <br/>
                    <label>Over Woning</label>
                    <textarea name="over" id="over"  class="form-control " required="true"></textarea>
                    <br/>
                    <label>Latitude</label>
                    <input type="text" name="latitude" id="latitude"  class="form-control " required="true"/>
                    <br/>
                    <label>Longtitude</label>
                    <input type="text" name="longtitude" id="longtitude"  class="form-control " required="true"/>
                    <br/>
                    <label>Status</label>
                    <div>
                        <select class="" name="huurstatus" id="huurstatus" data-style="btn-warning"  required="true">
                            <option value="Te Huur">Te Huur</option>
                            <option value="Verhuurd">Verhuurd</option>                                      
                        </select>
                    </div>
                </br>
                <label id="lblhuurprijs">Huurprijs</label>
                <input type="text" name="huurprijs" id="huurprijs"  class="form-control "/>
                <br/>
                <label id="lblhuurperiode">Huurperiode</label>
                <input type="text" name="huurperiode" id="huurperiode" class="form-control "/>    <label>Foto</label>
                <input type="file" name="image" id="image"  class="form-control" required="true"/>
                <br/>                            
                <br>
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
            </form>
        </div>
    </div>
</div>
</div>

<div id="update_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Marker bewerken</h4>
            </div>
            <div class="modal-body">
                <form  method="POST" id="update_form" action="inc/update_marker.php" enctype="multipart/form-data">
                    <center><img src="" alt="" class="center img-thumbnail image-tn"></center>
                    <br/>
                    <label>Naam</label>
                    <input type="text" name="naam" data-msg-required="Vul uw naam in!" id="naam" class="form-control naam" required="true"/>
                    <br/>
                    <label>Adres</label>
                    <input type="text" name="adres" id="adres" data-msg-required="Vul uw familienaam in!" class="form-control adres" required="true"/>
                    <br/>
                    <label>Over Woning</label>
                    <textarea name="over" id="over"  class="form-control over" required="true"></textarea>
                    <br/>
                    <label>Latitude</label>
                    <input type="text" name="latitude" id="latitude" data-msg-required="Vul uw gebruikersnaam in!" class="form-control latitude" required="true"/>
                    <br/>
                    <label>Longtitude</label>
                    <input type="text" name="longtitude" id="longtitude" data-msg-required="Vul uw wachtwoord in!" class="form-control longtitude" required="true"/>
                    <br/>
                    <label>Status</label>
                    <div>
                        <select class="status" name="status" id="status" data-style="btn-warning"  required="true">
                            <option value="Te Huur">Te Huur</option>
                            <option value="Verhuurd">Verhuurd</option>                                      
                        </select>
                    </div>
                    <br/>
                    <label>Huurprijs</label>
                    <input type="text" name="prijs" id="prijs" data-msg-required="Vul uw wachtwoord in!" class="form-control prijs"/>
                    <br/>
                    <label>Huurperiode</label>
                    <input type="text" name="periode" id="periode" data-msg-required="Vul uw wachtwoord in!" class="form-control periode" />
                    <br/>
                    <input type="file" name="image" id="image"  class="form-control" required="true"/>
                    <br/> 
                    <div>
                        <input hidden type="text" name="id" id="id" class="id" />
                    </div>                               
                    <br>
                    <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<script src="js/plugins/dataTables/datatables.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="inc/marker.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
        $("#huurprijs,#lblhuurprijs").show();
        $("#huurperiode,#lblhuurperiode").hide();
    });

    $('#huurstatus').on('change', function() {
     if ( this.value == 'Te Huur')
     {
       $("#huurprijs,#lblhuurprijs").show();
       $("#huurperiode,#lblhuurperiode").hide();
   }
   else if( this.value == 'Verhuurd')
   {
      $("#huurprijs,#lblhuurprijs").hide();
      $("#huurperiode,#lblhuurperiode").show();
  }
});



</script>
</body>

</html>
