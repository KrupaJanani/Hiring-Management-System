<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    // Check if the username and password are correct
    if ($username == "admin" && $password == "admin") {
        // Redirect to the home page (you can change the URL accordingly)
        echo "<script>alert(\"Login successful.\");location.href = 'indexWT.html';</script>";
        exit();
    } else {
        // Display an alert for unsuccessful login        
        echo "<script>alert(\"Login unsuccessful.\");location.href = 'admin_login.html';</script>";
    }
} else {
    // If the form is not submitted through POST, redirect to an error page or the login page
    header("Location: login_admin.php");
    exit();
}
?>
