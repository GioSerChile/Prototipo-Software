<?php
  
// Store the file name into variable
$file = 'C:\xampp\htdocs\software_reg&adm_unitec\help-menu\user-manual\manual_reg_unitec (referencia).pdf';
$filename = 'manual_reg_unitec (referencia).pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
  
?>