<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=hotel;port=3306;charset=utf8",'root','root');
    }catch(Exception $e){
    echo  $e->getMessage();
    }
?>