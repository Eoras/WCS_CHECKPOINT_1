<?php
date_default_timezone_set('UTC');
include 'connect_bdd.php';
$bdd_connect = mysqli_connect(SERVEUR, USER, PASSWORD, DATABASE);
mysqli_set_charset($bdd_connect,"utf8");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cestpasfaux.com</title>
    <link rel="icon" type="image/png" href="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

<nav class="navbar navbar-inverse kaamelott-underline">

    <div class="navbar-header">
        <a class="navbar-brand kaamelott-font" href="index.php">Cestpasfaux.com</a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-right">
            <a href="addUpdate.php" class="btn btn-kaamelott" role="button">Ajouter</a>
        </form>
    </div>
</nav>

<div class="container">
