<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'header.php';?>

<body>

    <div id="wrapper">

        <?php require_once("nav.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-users fa-fw"></i> Últimos Inscritos
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Fecha de Nacimiento</th>
                                                    <th>Fecha de Registro</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
											//`id`, `nombre`, `email`, `fecha_nacimiento`, `info`, `fecha_registro`
											$db->orderBy('fecha_registro', 'DESC');
											$users = $db->get ("inscritos", Array (0, 10));
											
											foreach ($users as $row) {
												# code...
											
											?>

                                                <tr>
                                                    <td><?php echo $row["id"];?></td>
                                                    <td><?php echo $row["nombre"];?></td>
                                                    <td><?php echo $row["email"];?></td>
                                                    <td><?php echo $row["fecha_nacimiento"];?></td>
                                                    <td><?php echo $row["fecha_registro"];?></td>
                                                  
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>