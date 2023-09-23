<?php
// import the database connection
require_once "../includes/db_connection.php";

// session start
session_start();

// sign-in process
if (isset($_POST["Login"])) {
    // variable declaration
    $entered_email = mysqli_real_escape_string($db_connect, $_POST["email"]);
    $entered_password = mysqli_real_escape_string($db_connect, $_POST["pass"]);

    // verify email
    $spot_email = "SELECT * FROM authors WHERE email = '$entered_email' LIMIT 1";

    // execute the select query
    $email_res = $db_connect->query($spot_email);

    // check if at least one matching row found
    if ($email_res->num_rows > 0) {
        // fetch the author record
        $author_row = $email_res->fetch_assoc();

        // verify if the entered password is identical to the stored password
        if (password_verify($entered_password, $author_row["pass"])) {
            // create session variables
            $_SESSION["AuthorId"] = $author_row["authorId"];
            $_SESSION["email"] = $author_row["email"];

            // redirect to the desired page
            header("Location: ../viewBlog.html");
            exit();
        } else {
            // incorrect password, redirect back to sign-in page
            header("Location: ../signIn.php");
            exit();
        }
    } else {
        // email not found, redirect back to sign-in page
        header("Location: ../signIn.php");
        exit();
    }
}
?>

