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
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);
echo "<pre>";

// echo "<form method='post' action='edit.php' name='edit'>
// <table class='container'>
//     <tr class='stuff'></tr>

//         <tr class='setting' hidden>

//         ... Some inputs and such go here...

//         <td class='checkbox'>
//         <input class='cancel' type='button'>
//         <input class='save' name='update' value='update' type='submit'>
//         </td></tr>
//     </table>
// </form>";

echo "<center>";
echo "<h1>Superheroes</h1><br>";
// echo "<table class='table table-bordered'; style='width:90%;margin-top:40px;'>
// <thead>
// <tr>
//   <th>Id</th>
//   <th>Title</th>
//   <th>Alignment</th>
//   <th>Gender</th>
//   <th>Height</th>
//   <th>Maritalstatus</th>
//   <th>Eyes</th>
//   <th>Hair</th>
//   <th>Place of Birth</th>
//   <th>Place of Death</th>
//   <th>Citizenship</th>
//   <th>Occupation</th>

// </tr>
// <tr>";
// foreach($database_gegevens as $gebruikers){
//     echo "<tr>
//           <td>". $gebruikers["id"] ."</td>
//           <td>". $gebruikers["title"] ."</td>
//           <td>". $gebruikers["alignment"] ."</td>
//           <td>". $gebruikers["gender"] ."</td>
//           <td>". $gebruikers["height"] ."</td>
//           <td>". $gebruikers["maritalstatus"] ."</td>
//           <td>". $gebruikers["eyes"] ."</td>
//           <td>". $gebruikers["hair"] ."</td>
//           <td>". $gebruikers["placeofbirth"] ."</td>
//           <td>". $gebruikers["placeofdeath"] ."</td>
//           <td>". $gebruikers["citizenship"] ."</td>
//           <td>". $gebruikers["occupation"] ."</td>

//           </tr>";
//           // if($gebruikers["alignment"][0] == NULL){
//           //   echo"h";

//           // }
//   }
echo"
</thead>
</table>";

?>

<form action="superheroes-edit1.php?" method="get">
<b>Id:</b> <input class="form-control" value="<?php echo $_GET["id"]; ?>" style="width:50%" type="text" name="id" readonly><br>
<b>Title:</b> <input class="form-control"  style="width:50%" type="text" name="title" value="<?php echo $database_gegevens['title'] ?>"><br>
<b>Alignment:</b> <input class="form-control" style="width:50%" type="text" name="alignment" value="<?php echo $database_gegevens['alignment'] ?>"><br>
<b>Gender:</b> <input class="form-control" style="width:50%" type="text" name="gender" value="<?php echo $database_gegevens['gender'] ?>"><br>
<b>Height:</b> <input class="form-control" style="width:50%" type="text" name="height" value="<?php echo $database_gegevens['height'] ?>"><br>
<b>Maritalstatus:</b> <input class="form-control" style="width:50%" type="text" name="maritalstatus" value="<?php echo $database_gegevens['maritalstatus'] ?>"><br>
<b>Eyes:</b> <input class="form-control" style="width:50%" type="text" name="eyes" value="<?php echo $database_gegevens['eyes'] ?>"><br>
<b>Hair:</b> <input class="form-control" style="width:50%" type="text" name="hair" value="<?php echo $database_gegevens['hair'] ?>"><br>
<b>Place of Birth:</b> <input class="form-control" style="width:50%" type="text" name="placeofbirth" value="<?php echo $database_gegevens['placeofbirth'] ?>"><br>
<b>Place of Death:</b> <input class="form-control" style="width:50%" type="text" name="placeofdeath" value="<?php echo $database_gegevens['placeofdeath'] ?>"><br>
<b>Citizenship:</b> <input class="form-control" style="width:50%" type="text" name="citizenship" value="<?php echo $database_gegevens['citizenship'] ?>"><br>
<b>Occupation:</b> <input class="form-control" style="width:50%" type="text" name="occupation" value="<?php echo $database_gegevens['occupation'] ?>"><br>
<button type="submit" class="btn btn-primary">Update!</button>


</form>
</body>

</html>
