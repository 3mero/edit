<?php
// Get the file name
$file = "omerosta.txt";

// Check if the file exists
if (file_exists($file)) {
    // Read the file content
    $content = file_get_contents($file);

    // Echo the content
    echo $content;
}
else {
    // Echo an error message
    echo "File not found";
}
?>
