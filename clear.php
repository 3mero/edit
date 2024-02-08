<?php
// Get the file name
$file = "omerosta.txt";

// Check if the file exists
if (file_exists($file)) {
    // Delete the file content
    file_put_contents($file, "");

    // Echo a success message
    echo "File cleared successfully";
}
else {
    // Echo an error message
    echo "File not found";
}
?>