<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';
    $city = isset($_POST["city"]) ? $_POST["city"] : '';
    $zip = isset($_POST["zip"]) ? $_POST["zip"] : '';
    $tel = isset($_POST["tel"]) ? $_POST["tel"] : '';
    $starting_date = isset($_POST["starting_date"]) ? $_POST["starting_date"] : '';
    // Display submitted details
    echo "<h1>Thank You!</h1>";
    echo "<p>Full Name: $fullname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Address: $address</p>";
    echo "<p>City: $city</p>";
    echo "<p>Zip: $zip</p>";
    echo "<p>Telephone: $tel</p>";
    echo "<p>Starting Date: $starting_date</p><br><br>";
    echo "<a href=\"indexWT.html\">Go to Home Page</a><br><br>";
}
?>
