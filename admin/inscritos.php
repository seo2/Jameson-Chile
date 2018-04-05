<?php require_once 'header.php';?>

<body>

    <div id="wrapper">

        <?php require_once("nav.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inscritos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de Inscritos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<div class="col-md-4" style="margin-bottom: 15px;">
                        		Configuración de paginación:<br> <select name="pagination-setting" onChange="changePagination(this.value);" class="pagination-setting" id="pagination-setting">
                        		<option value="all-links">Mostrar todos los enlaces</option>
                        		<option value="prev-next">Mostrar Anterior Siguiente</option>
                        		</select>
                        	</div>
                        	<form action="exportar.php">
                        	<div class="col-md-4">
                        		
                        	</div>
                        	<div class="col-md-3">
                        	
                        		<div class="pull-right">
                        		
                        			
                        			<button type="submit" class="btn btn-success">Exportar XLS</button>
                        		
                        		
                        		</div>
                        	</div>	
							</form>	

                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                                <thead>
                                    <tr>
                                        
                                        <th>Id Registro</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Fecha De Nacimiento</th>
                                        <th>Desea Recibir Información</th>
                                        <th>Fecha registro</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody id="pagination-result">
                                    <input type="hidden" name="rowcount" id="rowcount" />
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div id="paginator" class="dataTables_paginate paging_simple_numbers"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
       /* $('#example').DataTable({
            responsive: true,
            "ajax": 'ajax/declaraciones.php'
        });*/
        

    });

    getresult("ajax/inscripciones.php");

        function getresult(url) {
        	$.ajax({
        		url: url,
        		type: "GET",
        		data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val()},
        		beforeSend: function(){$("#overlay").show();},
        		success: function(data){
        			//console.log(data);
        			var obj = $.parseJSON( data );
        		$("#pagination-result").html(obj.datos);
        		$("#paginator").html(obj.paginador);
        		setInterval(function() {$("#overlay").hide(); },500);
        		},
        		error: function() 
        		{} 	        
           });
        }
        function changePagination(option) {
        	if(option!= "") {
        		getresult("ajax/inscripciones.php");
        	}
        }

    </script>

</body>

</html>
