<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include "includes/connection.php";
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $login=$_POST["login"];
        $password=$_POST["password"];
        $req = $conn->prepare("INSERT INTO reseptionistes(nom,prenom,login,password) VALUES(?,?,?,?)");
        if($req->execute(array($nom,$prenom,$login,$password))){
            header("location:reseptioniste.php");
       }
    }else{
        header("location:reseptioniste.php");
    }
    
?>