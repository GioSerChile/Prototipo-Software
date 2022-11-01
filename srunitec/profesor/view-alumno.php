<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    $ni=$_POST['ni'];
    $ns=$_POST['ns'];
    $nanual=$_POST['nanual'];
    $pronmo=$_POST['promno'];
   $infacad=$_POST['infacad'];
   
 
      $query.=mysqli_query($con, "insert   tblacademichistory(AlumnoID,NotaInicial,NotaSemestral,NotaAnual,PromedioNotas,Infacad)value('$vid','$ni','$ns','$nonual','$promno','$infacad')");
    if ($query) {
    echo '<script>alert("Historial Academico has been added.")</script>';
    echo "<script>window.location.href ='manage-alumno.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Profesor | Administrar Alumnos</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Profesor | Administrar Alumnos</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Profesor</span>
</li>
<li class="active">
<span>Administrar Alumnos</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Administrar <span class="text-bold">Alumnos</span></h5>
<?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblalumno where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Informacion Alumno</td></tr>

    <tr>
    <th scope>Nombre Alumno</th>
    <td><?php  echo $row['AlumnoName'];?></td>
    <th scope>Email Alumno</th>
    <td><?php  echo $row['AlumnoEmail'];?></td>
  </tr>
  <tr>
    <th scope>Numero Telefono Alumno</th>
    <td><?php  echo $row['AlumnoContno'];?></td>
    <th>Direccion Alumno</th>
    <td><?php  echo $row['AlumnoAdd'];?></td>
  </tr>
    <tr>
    <th>Genero Alumno</th>
    <td><?php  echo $row['AlumnoGender'];?></td>
    <th>Edad Alumno</th>
    <td><?php  echo $row['AlumnoAge'];?></td>
  </tr>
  <tr>
    
    <th>Historial Academico Alumno (Si existe)</th>
    <td><?php  echo $row['InfAcadAlumno'];?></td>
     <th>Fecha Reg Alumno</th>
    <td><?php  echo $row['CreationDate'];?></td>
  </tr>
 
<?php }?>
</table>
<?php  

$ret=mysqli_query($con,"select * from tblacademichistory  where AlumnoID='$vid'");



 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="8" >Historial Academico</th> 
  </tr>
  <tr>
    <th>#</th>
<th>Nota Inicial</th>
<th>Nota Semestral</th>
<th>Nota Anual</th>
<th>Promedio Notas</th>
<th>Informacion Academica</th>
<th>Fecha promocion</th>
</tr>
<?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row['NotaInicial'];?></td>
 <td><?php  echo $row['NotaSemestral'];?></td>
 <td><?php  echo $row['NotaAnual'];?></td> 
  <td><?php  echo $row['PromedioNotas'];?></td>
  <td><?php  echo $row['InfAcad'];?></td>
  <td><?php  echo $row['CreationDate'];?></td> 
</tr>
<?php $cnt=$cnt+1;} ?>
</table>

<p align="center">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Agregar Historial Academico</button></p>  

<?php  ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Historial Academico</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                 <form method="post" name="submit">

      <tr>
    <th>Nota Inicial :</th>
    <td>
    <input name="ni" placeholder="Nota Inicial" class="form-control wd-450" required="true"></td>
  </tr>                          
     <tr>
    <th>Nota Semestral :</th>
    <td>
    <input name="ns" placeholder="Nota Semestral" class="form-control wd-450" required="true"></td>
  </tr> 
  <tr>
    <th>Nota Anual :</th>
    <td>
    <input name="Nanual" placeholder="Nota Anual" class="form-control wd-450" required="true"></td>
  </tr>
  <tr>
    <th>Promedio Notas :</th>
    <td>
    <input name="promno" placeholder="Promedio Notas" class="form-control wd-450" required="true"></td>
  </tr>
                         
     <tr>
    <th>Informacion :</th>
    <td>
    <textarea name="infacad" placeholder="Informacion Academica" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>  
   
</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
 <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
  
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
