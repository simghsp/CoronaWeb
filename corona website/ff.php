
<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database="pp";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

$id=$_GET["Id"];
$name=$_GET["Name"];
$add=$_GET["Address"];
$pin=$_GET["PinCode"];
$mo=$_GET["MobileNo"];
$qu=$_GET["Quantity"];

// Sql query to be executed
$sql = "INSERT INTO `product` (`Id`, `Name`,`Address`,`PinCode`,`MobileNo`,`Quantity`) VALUES ('$id', '$name','$add','$pin','$mo','$qu')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "Your Order is placed successfully!<br>";
}
else{
    echo "The order  was not placed successfully because of this error ---> ". mysqli_error($conn);
}

?>

