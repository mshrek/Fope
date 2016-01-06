<?php
$servername = "127.0.0.1";
$username = "root";
$password = "MyNewPass";
$dbname ="Playlist";

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
       echo "reordering started...";
        $reIndexQuery1= "SET @x=0";
        $reIndexQuery2= "UPDATE playlist1 set sorted_id=(@x:=@x+1) order by publishedAt;";
        $indexResult1=$conn->query($reIndexQuery1);
        $indexResult2=$conn->query($reIndexQuery2);
}
$conn->close();
//echo 'hello!';
?>