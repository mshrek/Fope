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
    $sqlquery ="SELECT sorted_id,title,duration,likes,dislikes,audiorating,videorating,contentrating,brokenlink FROM playlist1;";
    $results=$conn->query($sqlquery);

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            echo "<tr class='sendIdOnClick'>";
            echo "<td data-sort-value='" . $row['sorted_id'] . "'>" . $row['sorted_id'] . "</td>";
            echo "<td class='titleCol col-xs-3'>" . $row["title"] . "</td>";
            echo "<td>" . $row["duration"] . "</td>";
            echo "<td>";
            echo "<span col-xs-6 class='pull-left text-success'>" . $row["likes"] . "</span>";
            echo "<span col-xs-6 class='pull-right text-danger'>" . $row["dislikes"] . "</span>";
            echo "</td>";
            echo "<td>";
            echo "<span col-xs-4 class='text-danger col-xs-offset-2  col-xs-2' style='padding-right:10px;'>" . $row["audiorating"] . "</span>";
            echo "<span col-xs-4 class='text-warning qualityCenter col-xs-2' style='padding-left:15px;'>" . $row["videorating"] . "</span>";
            echo "<span col-xs-4 class='text-success col-xs-2' style='padding-left:10px;'>" . $row["contentrating"] . "</span>";
            if($row["brokenlink"]==1)
                echo "<span class='glyphicon glyphicon-warning-sign warning-red col-xs-2 warning' bg-color='#ffff00' aria-hidden='true' id='warning".$row['sorted_id']."'></span>";
            else
                echo "<span class='glyphicon glyphicon-warning-sign col-xs-2 warning' bg-color='#ffff00' aria-hidden='true' id='warning".$row['sorted_id']."'></span>";
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