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
$database="r1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

$name=$_GET["Name"];
$email=$_GET["Email"];
$title=$_GET["Rt"];
$content=$_GET["Rc"];


// Sql query to be executed
$sql = "INSERT INTO `rewive` (`Name`, `Email`,`Rt`,`Rc`) VALUES ('$name', '$email','$title','$content')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "Thanks for feedback!<br>";
}
else{
    echo "The feedback was not recorded please try again ---> ". mysqli_error($conn);
}

?>