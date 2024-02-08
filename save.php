<?php
// Get the file name
$file = "omerosta.txt";

// Get the data from the POST request
$data = $_POST["html"];

// Check if the data is not empty
if ($data != "") {
    // Write the data to the file
    file_put_contents($file, $data);

    // Echo a success message
    echo "File saved successfully";
}
else {
    // Echo an error message
    echo "No data to save";
}
?>
