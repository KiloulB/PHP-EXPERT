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
$id = $_GET["id"];
$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT id,title,alignment,gender,height,maritalstatus,eyes,hair,placeofbirth,placeofdeath,citizenship,occupation FROM superheroes WHERE id = $id";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);


echo "<center>";
foreach($database_gegevens as $gebruikers){  
    echo "
          <h1 style='margin-top:50px'>". $gebruikers["title"] ."</h1>

          </tr>";
          // if($gebruikers["alignment"][0] == NULL){
          //   echo"h";
  
          // }
  } 
echo "<table class='table table-bordered'; style='width:90%;margin-top:40px;'>
<thead>
<tr>
  <th>Id</th>
  <th>Title</th>
  <th>Alignment</th>
  <th>Gender</th>
  <th>Height</th>
  <th>Maritalstatus</th>
  <th>Eyes</th>
  <th>Hair</th>
  <th>Place of Birth</th>
  <th>Place of Death</th>
  <th>Citizenship</th>
  <th>Occupation</th>

</tr>
<tr>";
foreach($database_gegevens as $gebruikers){  
    echo "<tr>
          <td>". $gebruikers["id"] ."</td>
          <td>". $gebruikers["title"] ."</td>
          <td>". $gebruikers["alignment"] ."</td>
          <td>". $gebruikers["gender"] ."</td>
          <td>". $gebruikers["height"] ."</td>
          <td>". $gebruikers["maritalstatus"] ."</td>
          <td>". $gebruikers["eyes"] ."</td>
          <td>". $gebruikers["hair"] ."</td>
          <td>". $gebruikers["placeofbirth"] ."</td>
          <td>". $gebruikers["placeofdeath"] ."</td>
          <td>". $gebruikers["citizenship"] ."</td>
          <td>". $gebruikers["occupation"] ."</td>
          
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