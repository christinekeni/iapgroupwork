<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abilia Candle Co</title>
    <link rel = "icon" href = "Images/Content/Icon Logo Header.jpg" type="image/x-icon" />
    <link rel = "stylesheet" href = "css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
</body>
</html>

<?php
    require_once "includes/db_connection.php";

    $sql= "SELECT authorID, firstName, lastName, email, dob, phone FROM authors";
    $result=mysqli_query($db_connect, $sql);


echo "<table>";
    echo "<tr>
	<th>authorID</th>
	<th>firstName</th>
	<th>lastName</th>
	<th>email</th>
	<th>dob</th>
	<th>phone</th>
	
	</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["authorID"] . "</td>";
        echo "<td>" . $row["firstName"] . "</td>";
        echo "<td>" . $row["lastName"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($db_connect);
    ?>
