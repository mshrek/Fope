<?php
$servername = "127.0.0.1";
$username = "root";
$password = "MyNewPass";
$dbname ="Playlist";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $sqlquery ="SELECT id,title,duration,likes,dislikes,audiorating,videorating,contentrating FROM playlist1;";
    $results=$conn->query($sqlquery);

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {

            echo "<tr>";
            echo "<td data-sort-value='" . $row["id"] . "'>" . $row["id"] . "</td>";
            echo "<td class='titleCol'>" . $row["title"] . "</td>";
            echo "<td>" . $row["duration"] . "</td>";
            echo "<td>";
            echo "<span col-xs-6 class='pull-left text-success'>" . $row["likes"] . "</span>";
            echo "<span col-xs-6 class='pull-right text-danger'>" . $row["dislikes"] . "</span>";
            echo "</td>";
            echo "<td>";
            echo "<span col-xs-4 class='text-danger' style='padding-left:25px;'>" . $row["audiorating"] . "</span>";
            echo "<span col-xs-4 class='text-warning qualityCenter'>" . $row["videorating"] . "</span>";
            echo "<span col-xs-4 class='text-success'>" . $row["contentrating"] . "</span>";
            echo "<span class='glyphicon glyphicon-alert' aria-hidden='true'></span>";
            echo "</td>";
            echo "</tr>";

        }
    }
    else{
        echo "<tr>";
        echo "<td>NA</td>";
        echo "<td>NA</td>";
        echo "<td>NA</td>";
        echo "<td>NA</td>";
        echo "<td>NA</td>";
        echo "<td>NA</td>";
        echo "<td>NA</td>";
        echo "</tr>";
    }

}
$conn->close();
?>