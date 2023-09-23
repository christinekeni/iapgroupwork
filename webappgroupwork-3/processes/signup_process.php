<?php
    require_once "../includes/db_connection.php";

    if(isset($_POST["register"])) {
        $firstName = mysqli_real_escape_string($db_connect, $_POST["firstName"]);
        $lastName = mysqli_real_escape_string($db_connect, $_POST["lastName"]);
        $email = mysqli_real_escape_string($db_connect, $_POST["email"]);
        $password = mysqli_real_escape_string($db_connect, $_POST["pass"]);
        $dob = mysqli_real_escape_string($db_connect, $_POST["dob"]);
        $phone = mysqli_real_escape_string($db_connect, $_POST["phone"]);

        // Check if the email is already registered
        $checkEmailQuery = "SELECT * FROM authors WHERE email = '$email' LIMIT 1";
        $checkEmailResult = $db_connect->query($checkEmailQuery);

        if($checkEmailResult->num_rows > 0) {
            echo "Email is already registered.";
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $insertQuery = "INSERT INTO authors (firstName, lastName, email, password, dob, phone)
                            VALUES ('$firstName', '$lastName', '$email', '$hashedPassword', '$dob', '$phone')";

            if($db_connect->query($insertQuery) === TRUE) {
                header("Location: ../signin.php");
                exit();
            } else {
                echo "Error: " . $db_connect->error;
            }
        }
    }
?>

