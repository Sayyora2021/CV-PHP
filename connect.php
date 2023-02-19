<?php
include './contact.php';

if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["phone"]))
{
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];


    $req = mysqli_query($link, "insert into user (nom, email, tel) values ('$nom','$email', '$phone') ");

    if($req){
        echo "insertion effectuée";
    }
    else{
        echo "erreur d'insertion";
    }
}







?>