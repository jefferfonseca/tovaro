<?php
$host='localhost';
$username='tovaroed_dx';
$password='1049629422SantiF*';
$dbname='tovaroed_dx1';




try {
   $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
   die("Could not connect to the database $dbname :" . $pe->getMessage());
}


/*$query = 'SELECT * FROM user';
$coneccionDB = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);
$result = $coneccionDB->query($query);
foreach($result as $row){
   print_r($row);
}
$coneccionDB = NULL;

*/

//Conexion remota
// $host='host17.latinoamericahosting.com:3306';
// $usuariodb='tovaroed_dx';
// $passwdb='1049629422SantiF';
// $nombredb='tovaroed_dx';

// $query = 'SELECT * FROM user';
// $coneccionDB = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);
// $result = $coneccionDB->query($query);
// foreach($result as $row){
//    print_r($row);
// }
// $coneccionDB = NULL;
?>