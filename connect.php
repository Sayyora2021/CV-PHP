<?php
include './contact.php';

if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["phone"]))
{
    //on récupère les name de html
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $text=$_POST["textarea"];

//on envoit à DB ->table
    $req = mysqli_query($link, "insert into user (nom, email, tel, msg) values ('$nom','$email', '$phone', '$text') ");

    if($req){
        echo "insertion effectuée";
    }
    else{
        echo "erreur d'insertion";
    }
}

?>
