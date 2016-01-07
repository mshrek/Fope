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
$ratingfor=$_POST['ratingfor'];
$value=$_POST['value'];
$elementID=$_POST['elementID'];

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    $choice=$ratingfor;
}

echo $ratingfor." ".$value." ".$elementID;

$sqlquery = "UPDATE playlist1 set ".$choice."=".$value." where sorted_id =".$elementID.";";

$results = $conn->query($sqlquery);
if ($results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        echo "Updation done successfully for ".$ratingfor." element";
    }
}
else{
    echo "Updation was not done successfully for ".$ratingfor." element";
}
$conn->close();
?>