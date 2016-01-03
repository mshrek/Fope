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
    $sqlquery = "SELECT videolink from playlist1 where id=".$_POST["id"].";";

    //echo $sqlquery;
    $results = $conn->query($sqlquery);

//echo ($result);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            echo '<iframe src="http://www.youtube.com/embed/'.$row['videolink'].'" width="100%" height="289px" frameborder="0" allowfullscreen></iframe>';
        }
    }
    else{
        echo "https://www.youtube.com/embed/HB8EZ5Xa_QI";
    }
    $conn->close();
}
?>