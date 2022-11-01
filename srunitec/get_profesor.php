<?php
include('include/config.php');
if(!empty($_POST["asignaturaid"])) 
{

 $sql=mysqli_query($con,"select profesorName,id from profesores where asignatura='".$_POST['asignaturaid']."'");?>
 <option selected="selected">Seleccione Profesor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['profesorName']); ?></option>
  <?php
}
}


if(!empty($_POST["profesor"])) 
{

 $sql=mysqli_query($con,"select arancel from profesores where id='".$_POST['profesor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['arancel']); ?>"><?php echo htmlentities($row['arancel']); ?></option>
  <?php
}
}

?>

