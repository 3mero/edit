<?php
// Get the data from the POST request
$data = $_POST["page"];

// Check if the data is not empty
if ($data != "") {
    // Get the content of the web page
    $content = file_get_contents($data);

    // Extract the text from the content
    $text = strip_tags($content);

    // Echo the text
    echo $text;
}
else {
    // Echo an error message
    echo "No page to load";
}
?>
