<?php
include '../controller/employeC.php';
$employeC=new EmployeC();
$employeC->modifier($_GET["id"]);
header('Location:ListEmploye.php');

?>