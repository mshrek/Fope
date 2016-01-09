<?php
/**
 * Created by IntelliJ IDEA.
 * User: srikanthmannepalle
 * Date: 1/2/16
 * Time: 4:59 PM
 */

$servername = "127.0.0.1";
$username = "root";
$password = "MyNewPass";
$dbname ="Playlist";

$rest_json = file_get_contents("php://input");
parse_str($rest_json,$_POST);

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $sqlquery = "SELECT viewcount,audiorating,videorating,contentrating,favrating from playlist1 where sorted_id=".$_POST["id"]." and authorid = ".$_POST["authid"].";";

    //echo $sqlquery;
    $results = $conn->query($sqlquery);

//echo ($result);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            echo ($row["viewcount"].",".$row["audiorating"].",".$row["videorating"].",".$row["contentrating"].",".$row["favrating"]);
        }
    }
    else{
        echo "NA";
    }
    $conn->close();
}
?>