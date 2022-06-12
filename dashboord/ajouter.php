<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include "includes/connection.php";
        $type=$_POST["type"];
        $nombre=$_POST["nombre"];
        $req = $conn->prepare("INSERT INTO chombres(type,nomber) VALUES(?,?)");
        if($req->execute(array($type,$nombre))){
            header("location:chombres.php");
       }
    }else{
        header("location:chombres.php");
    }
    
?>