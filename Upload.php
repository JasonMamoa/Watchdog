<?php


$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="watchdog";

$FirstName = $_POST['fname'];
$LastName = $_POST['ename'];
$Email = $_POST['email'];

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

//$con = new mysqli($host, $user, $password, $dbname, $port);
//

// Run the create table query
$sql = "INSERT INTO deviceusers(DeviceUserID,Fname, Ename, Email, DeviceRole) VALUES ('1','$FirstName', '$LastName','$Email', 'DefaultRole')";

if(mysqli_query($watchdog, $sql)){
    echo "<p> Data transfered <\p>";
} else {
    echo "<p> Data transfer failed <\p>";
}

//Close the connection
$conn->close();


?>