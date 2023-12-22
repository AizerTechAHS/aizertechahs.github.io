<?php
// Check if the request is coming from the button click
if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] == "http://yourdomain.com/button_page.php"){
    // The request is legitimate, show the content of the second page
    echo "<h1>Welcome to the Second Page!</h1>";
} else {
    // Redirect to an error page or take other actions
    header("Location: error_page.php");
    exit();
}
?>