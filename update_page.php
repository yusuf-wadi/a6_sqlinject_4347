// UPDATE INJECTION - vulnerable code
<?php
$host="localhost";
$port=3306;
$socket="MySQL";
$user="root";
$password="";
$dbname="aixhibit";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST['ArtistName'];

    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());

    // Update Vulnerability 
    $newName = $_POST['newName'];
    $sql = "UPDATE artists SET ArtistName = '$newName' where ArtistName = '$name'";

    $result = $conn->query($sql);
    echo "<h2>Results:</h2>";
    if ($result) {
        // Fetch all rows as an associative array
        $rows = $result->fetch_all(MYSQLI_ASSOC);

        // Display the data
        foreach ($rows as $row) {
            foreach ($row as $key => $value) {
                echo "$key: $value<br>";
            }
            echo "-------------------<br>";
        }

        // Free the result set
        $result->free();
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the connection
    $mysqli->close();
}
?>