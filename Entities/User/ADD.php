<?php
include "Ajoute.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastname = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ajou = new Gestion();
    $ajou->Ajoute($name,$lastname,$email,$phone);
}



?>