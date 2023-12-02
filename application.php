<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            text-align: center;
            color: #555;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        /* Style for the overall form container */
form {
    max-width: 600px;
    margin: 0 auto;
}

/* Style for form labels */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

/* Style for form input fields */
input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

/* Style for the submit button */
button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for the submit button on hover */
button:hover {
    background-color: #0056b3;
}

/* Style for form groups (optional) */
.form-group {
    margin-bottom: 20px;
}

/* Style for the form row (optional) */
.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

/* Style for form group in form row (optional) */
.form-row .form-group {
    flex: 1;
    margin-right: 10px;
}

/* Style for the file input */
.form-group input[type="file"] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }

        /* Style for the 'No file chosen' text */
        .form-group .file-text {
            margin-left: 10px;
        }

/* Style for the file input label (optional) */
.form-group label {
    background-color: #007bff;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
}

/* Style for the file input label on hover (optional) */
.form-group label:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

    <h1>Job Application</h1>

    <?php
    // Retrieve the job name from the query parameter
    $jobName = isset($_GET['job']) ? $_GET['job'] : 'Unknown Job';

    // Display the job name
    echo "<p>Applying for: $jobName</p>";
?>

<form accept-charset="UTF-8" action="submit_application.php" method="POST" enctype="multipart/form-data" target="_blank" onsubmit="return validateForm()" thank-you="thankyou.php">
      <div class="form-group">
        <label for="exampleInputName">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="exampleInputName" placeholder="Enter your name and surname" required="required">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" required="required">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" class="form-control" id="inputCity" placeholder="Chennai" required>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" name="zip" class="form-control" id="inputZip" required>
        </div>
      </div>
      <div class="form-group">
        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
        <div class="col-10">
          <input class="form-control" name="tel" type="tel" value="1-(555)-555-5555" id="example-tel-input" required>
        </div>
      </div>
      <div class="form-group">
        <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
        <div class="col-10">
          <input class="form-control" name="starting_date" type="date" value="2020-02-01" id="example-date-input" required>
        </div>
      </div>
      <div class="form-group mt-3">
      <label for="file">Upload your CV:</label>
            <input type="file" name="file" id="file" class="file-input">
            <span class="file-text">No file chosen</span>
            <span class="chosen-file"></span>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
    // JavaScript to update the chosen file text and hide "No file chosen"
    const fileInput = document.getElementById('file');
    const fileText = document.querySelector('.file-text');
    const chosenFileText = document.querySelector('.chosen-file');

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            fileText.style.display = 'none'; // Hide "No file chosen"
            chosenFileText.textContent = `Chosen file: ${fileInput.files[0].name}`;
        } else {
            fileText.style.display = 'inline'; // Show "No file chosen"
            chosenFileText.textContent = '';
        }
    });
    function validateForm() {
            // You can add additional JavaScript validation here if needed

            // Example: Check if the file input has a file chosen
            const fileInput = document.getElementById('file');
            if (fileInput.files.length === 0) {
                alert('Please choose a file.');
                return false;
            }

            // Add more validation as needed

            // If all validations pass, return true to submit the form
            return true;
    }
</script>

</body>
</html>
