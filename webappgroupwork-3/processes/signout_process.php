<?php
//import the database connection
require_once "../includes/db_connection.php";

//signout process
if(isset($_GET["signout"])){
    unset($_SESSION["control"]);
    header("Location: ../signIn.php");
    exit();
}

?>