<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	$eid=$_GET['editid'];
	$alumname=$_POST['alumname'];
$alumcontact=$_POST['alumcontact'];
$alumemail=$_POST['alumemail'];
$gender=$_POST['gender'];
$alumaddress=$_POST['alumaddress'];
$alumage=$_POST['alumage'];
$infacad=$_POST['infacad'];
$sql=mysqli_query($con,"update tblalumno set AlumnoName='$alumname',AlumnoContno='$alumcontact',AlumnoEmail='$alumemail',AlumnoGender='$gender',AlumnoAdd='$alumaddress',AlumnoAge='$alumage',AlumnoInfAcad='$infacad' where ID='$eid'");
if($sql)
{
echo "<script>alert('Info Alumno updated Successfully');</script>";
header('location:manage-alumno.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Profesor | Agregar Alumno</title>
		
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
<h1 class="mainTitle">Profesor | Agregar Alumno</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Alumno</span>
</li>
<li class="active">
<span>Agregar Alumno</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Agregar Alumno</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblalumno where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="form-group">
<label for="profesorname">
Nombre Alumno
</label>
<input type="text" name="alumname" class="form-control"  value="<?php  echo $row['AlumnoName'];?>" required="true">
</div>
<div class="form-group">
<label for="fess">
 No. Contacto Alumno
</label>
<input type="text" name="alumcontact" class="form-control"  value="<?php  echo $row['AlumnoContno'];?>" required="true" maxlength="10" pattern="[0-9]+">
</div>
<div class="form-group">
<label for="fess">
Email Alumno
</label>
<input type="email" id="alumemail" name="alumemail" class="form-control"  value="<?php  echo $row['AlumnoEmail'];?>" readonly='true'>
<span id="email-availability-status"></span>
</div>
<div class="form-group">
              <label class="control-label">Genero: </label>
              <?php  if($row['Gender']=="Female"){ ?>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Femenino
              <input type="radio" name="gender" id="gender" value="male">Masculino
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Masculino
              <input type="radio" name="gender" id="gender" value="Female">Femenino
              </label>
             <?php } ?>
            </div>
<div class="form-group">
<label for="address">
Direccion Alumno
</label>
<textarea name="address" class="form-control" required="true"><?php  echo $row['AlumnoAdd'];?></textarea>
</div>
<div class="form-group">
<label for="fess">
 Edad Alumno
</label>
<input type="text" name="alumage" class="form-control"  value="<?php  echo $row['AlumnoAge'];?>" required="true">
</div>
<div class="form-group">
<label for="fess">
 Historial Academico
</label>
<textarea type="text" name="infacad" class="form-control"  placeholder="Enter Historial Academic Alumno(Si existe)" required="true"><?php  echo $row['AlumnoInfacad'];?></textarea>
</div>	
<div class="form-group">
<label for="fess">
 Fecha Creacion
</label>
<input type="text" class="form-control"  value="<?php  echo $row['CreationDate'];?>" readonly='true'>
</div>
<?php } ?>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Actualizar
</button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="panel panel-white">
</div>
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
