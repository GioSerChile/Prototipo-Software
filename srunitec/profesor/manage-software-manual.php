<?php
  
// Store the file name into variable
$file = 'C:\xampp\htdocs\software_reg&adm_unitec\help-menu\software-manual\manual_de_instalación (referencia).pdf';
$filename = 'manual_de_instalación (referencia).pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
  
?>