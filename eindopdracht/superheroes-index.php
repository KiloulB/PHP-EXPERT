<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


<?php

$database_lokatie     = 'localhost';
$database_naam        = 'phpexpert';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT id,title,alignment,gender,height,maritalstatus,eyes,hair,placeofbirth,placeofdeath,citizenship,occupation FROM superheroes";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";



echo "<center>";
echo "<h1>Superheroes</h1><br>";
echo "<table class='table table-bordered'; style='width:20px;height:20px;'>
<thead>
<tr>
  <th>Id</th>
  <th>Title</th>
  <th>Alignment</th>
  <th>Bekijken</th>
  <th>Updaten</th>
  <th>Verwijderen</th>
</tr>
<tr>";
foreach($database_gegevens as $gebruikers){
  echo "<tr>
        <td>". $gebruikers["id"] ."</td>
        <td>". $gebruikers["title"] ."</td>
        <td>". $gebruikers["alignment"] ."</td>
        <td><a href=\"superheroes-show.php?id=". $gebruikers["id"] ."\"><button class='btn btn-primary' id='bekijk'>Bekijk</button></a></td>
        <td><a href=\"superheroes-edit.php?id=". $gebruikers["id"] ."\"><button class='btn btn-primary' id='update'>Update</button></a></td>
        <td><a href=\"superheroes-delete.php?id=". $gebruikers["id"] ."\"><button class='btn btn-primary' id='verwijder'>Verwijder</button></a></td>
        </tr>";
        // if($gebruikers["alignment"][0] == NULL){
        //   echo"h";

        // }
}
echo"
</thead>
</table>";

?>

</body>

</html>
