<?php
$host="127.0.0.1";
$port=3306;
$socket="MySQL";
$user="root";
$password="bluellama1";
$dbname="aixhibit";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

echo 'Connected successfully';

$con->close();

?>