<?php

define("HOSTNAME", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "blog_db");

$conn = new mysqli(HOSTNAME, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $authorName = $_POST["author"];
    $articleTitle = $_POST["article_title"];
    $articleText = $_POST["article_text"];

    $stmt = $conn->prepare("INSERT INTO articles (authorName,title, content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $authorName, $articleTitle, $articleText);

    if ($stmt->execute()) {
         header("Location: viewBlog.php");
    } else {
        echo "Error submitting article: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
