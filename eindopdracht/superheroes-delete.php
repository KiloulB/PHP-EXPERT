<?php
$database_lokatie     = 'localhost';
$database_naam        = 'phpexpert';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$id = $_GET["id"];

$title  = $_GET['title'];
$alignment  = $_GET['alignment'];
$gender  = $_GET['gender'];
$height  = $_GET['height'];
$maritalstatus  = $_GET['maritalstatus'];
$eyes  = $_GET['eyes'];
$hair  = $_GET['hair'];
$placeofbirth  = $_GET['placeofbirth'];
$placeofdeath  = $_GET['placeofdeath'];
$citizenship  = $_GET['citizenship'];
$occupation  = $_GET['occupation'];


$sql = "DELETE FROM superheroes WHERE id = :id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":id", $id );
$var_dump = $stmt->execute();


header("location: superheroes-index.php");
