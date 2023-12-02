<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Response</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Display a response
        echo "<h2>Thank you, $name!</h2>";
        echo "<p>Your message has been received.</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Message: $message</p>";
        echo "<a href=\"indexWT.html\">Go to Home Page</a><br><br>";
    } else {
        // If the form is not submitted, redirect to the form page
        header("Location: your-form-page.html");
        exit();
    }
    ?>
</div>

</body>
</html>
