<!-- process.php -->
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve data from the form
    $inputData = $_POST["inputData"];
    // print_r($_POST);
    // phpinfo();
    // Process the data (You can replace this with your specific PHP command)
    $processedData = processInput($inputData);

    // Display the results
    echo "<h2>Results:</h2>";
    echo "<p>Input Data: $inputData</p>";
    echo "<p>Processed Data: $processedData</p>";
}

function processInput($data) {
    // Replace this with your actual processing logic
    // For example, you can perform database operations, computations, etc.
    return "Processed: " . strtoupper($data);
}

?>
