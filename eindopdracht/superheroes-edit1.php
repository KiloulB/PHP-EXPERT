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


$sql = "UPDATE superheroes SET title = :title, alignment = :alignment, gender = :gender, height = :height, maritalstatus = :maritalstatus, eyes = :eyes, hair = :hair, placeofbirth = :placeofbirth, placeofdeath = :placeofdeath, citizenship = :citizenship, occupation = :occupation WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $id );
$stmt->bindParam(":title", $title );
$stmt->bindParam(":alignment", $alignment );
$stmt->bindParam(":gender", $gender );
$stmt->bindParam(":height", $height );
$stmt->bindParam(":maritalstatus", $maritalstatus );
$stmt->bindParam(":eyes", $eyes );
$stmt->bindParam(":hair", $hair );
$stmt->bindParam(":placeofbirth", $placeofbirth );
$stmt->bindParam(":placeofdeath", $placeofdeath );
$stmt->bindParam(":citizenship", $citizenship );
$stmt->bindParam(":occupation", $occupation );
$stmt->execute();

header("location: superheroes-index.php");
