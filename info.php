<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "college_connect_db";
$port = 3306;

$conn = mysqli_connect($server, $username, $password, $database, $port);

$type = $_GET['type'];

if ($type == "teachers") {
    $query = "SELECT * FROM teachers";
    $result = mysqli_query($conn, $query);

    echo "<h3>Teachers Records</h3>";
    echo "<table border='1' cellpadding='5'>
            <tr><th>Id</th><th>Name</th><th>Subject</th><th>Email</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['Id']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['Subject']."</td>
				<td>".$row['Email']."</td>
              </tr>";
    }
    echo "</table>";
}

if ($type == "students") {
    $query = "SELECT * FROM students";
    $result = mysqli_query($conn, $query);

    echo "<h3>Students Records</h3>";
    echo "<table border='1' cellpadding='5'>
            <tr><th>Id</th><th>Name</th><th>Contact_Number</th><th>Email</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['Id']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['Contact_Number']."</td>
				<td>".$row['Email']."</td>
              </tr>";
    }
    echo "</table>";
}
?>