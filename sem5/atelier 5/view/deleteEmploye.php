<?php

include '../controller/employeC.php';

$employeC=new EmployeC();
$employeC->supprimer($_GET["id"]);

header('Location:ListEmploye.php');

?>