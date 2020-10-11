<?php
session_start();


mail("dircom@comline-ce.fr","Nouvel inscrit email site",$_POST['mail']);

$_SESSION['dejaEnvoye']=true;

    header("Location: /?msg=mailOk");
    exit();