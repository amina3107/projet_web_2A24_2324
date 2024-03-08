<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$phone=$_POST['telephone'];
$email=$_POST['email'];
$dob=$_POST['date_naissance'];
$motdepasse=$_POST['mot_de_passe'];
$confirm=$_POST['confirmer_mot_de_passe'];

include "../controller/employeC.php";
include "../model/employe.php";

$empl= new employe(,$nom,$prenom,$motdepasse,$phone,$email,$dob);
$employe= new employeC();
$employe->showemploye($empl);


?>