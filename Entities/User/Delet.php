<?php
include "Ajoute.php";
if(isset($_POST['submit'])){
    $id = $_POST['userId'];
    echo $id;
    $obj = new Gestion();
    $obj->Delet($id);
    
    
}
?>