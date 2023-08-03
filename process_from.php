<?php
session_start();
include "db_conn.php";

if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve the form data
        $full_name = $_POST["full_name"];
        $occupation = $_POST["occupation"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];

        // Add more form fields as needed

        // Process the form data (e.g., store in a database, send emails, etc.)
        // ...

        // Prepare the SQL query to insert data into the database
        $sql = "INSERT INTO glaucoma_forms (full_name, occupation, address, phone, age, gender) 
                VALUES ('$full_name', '$occupation', '$address', '$phone', '$age', '$gender')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Redirect to a success page or show a success message
            header("Location: success.php");
            exit;
        } else {
            // Handle the case where the query execution fails
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>


<?php
        // PHP processing
        session_start();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!isset($_SESSION['step'])) {
                $_SESSION['step'] = 1;
            }

            switch ($_SESSION['step']) {
                case 1:
                    // Step 1: Collect Personal Information
                    $_SESSION['full_name'] = $_POST['full_name'];
                    $_SESSION['occupation'] = $_POST['occupation'];
                    $_SESSION['address'] = $_POST['address'];
                    $_SESSION['phone'] = $_POST['phone'];
                    $_SESSION['age'] = $_POST['age'];
                    $_SESSION['gender'] = $_POST['gender'];
                    $_SESSION['step'] = 2;
                    break;

                case 2:
                    // Step 2: Medical History
                    $_SESSION['medical_history'] = $_POST['medical_history'];
                    $_SESSION['diagnosis'] = isset($_POST['diagnosis']) ? $_POST['diagnosis'] : [];
                    $_SESSION['step'] = 3;
                    break;

                case 3:
                    // Step 3: Confirmation and Submission
                    // Process and store the data in the database or perform any other actions
                    // ...

                    // Clear the session data after successful submission
                    session_unset();
                    session_destroy();
                    echo '<h2>Thank you for submitting the form!</h2>';
                    exit;

                default:
                    // Invalid step, redirect back to step 1
                    $_SESSION['step'] = 1;
                    break;
            }
        }
        ?>