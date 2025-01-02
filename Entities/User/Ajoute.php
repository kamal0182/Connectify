<?php
include("database.php");

class Gestion {

    
    public function __construct() {
        $this->dt = (new database())->connect();
    }
    function afficher(){
        $sql = "SELECT * FROM contact";
            $stmt = $this->dt->prepare($sql);
            $stmt->execute();
            $usersdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usersdata ;
    }
    function Ajoute($name,$lastname,$email,$phone){
        $dt = (new database())->connect();
        $sql = "INSERT INTO contact (name,prenom,email,phone) VALUES (:name,:prenom,:email,:phone)";
        $stmt = $dt->prepare($sql);
            $stmt->execute(['name'=>$name,'prenom'=>$lastname,'email'=>$email,'phone'=>$phone]);
    }
    function Delet($id){
        $dt = (new database())->connect();
        $sql = "DELETE FROM  contact WHERE id  = ".$id;
        $stmt = $dt->prepare($sql);
        $stmt->execute();      
    }
    function modify($name,$lastname,$email,$phone,$id){
        $dt = (new database())->connect();
        $sql = "UPDATE TABLE contact set name = $name ,prenom = $lastname , email = $email , phone = $phone Where id =" .$id;
        $stmt = $dt->prepare($sql);
        $stmt->execute();   

    }
}



?>