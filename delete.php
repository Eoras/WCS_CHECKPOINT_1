<?php
require 'connect_bdd.php';
$bdd_connect = mysqli_connect(SERVEUR, USER, PASSWORD, DATABASE);

$id = mysqli_real_escape_string($bdd_connect, $_POST['id']);

$request = "DELETE FROM citation WHERE id='$id'";
$result = mysqli_query($bdd_connect, $request);

header('Location: index.php');