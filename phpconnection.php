<?php
$servername = "127.0.0.1";
$username = "root";
$password = "MyNewPass";
$dbname ="Playlist";

$rest_json = file_get_contents("php://input");
parse_str($rest_json,$_POST);
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
     echo $rest_json;
     echo $_POST;
	 echo "Connected successfully<br>";
	 $ptitle=$_POST['ptitle'];
     echo $ptitle;
	 $pduration=$_POST['pduration'];
     echo $pduration;
	 $plikes=$_POST['plikes'];
     echo $plikes;
	 $pdislikes=$_POST['pdislikes'];
     echo $pdislikes;
	 $audiorating=0;
	 $videorating=0;
	 $contentrating=0;
	 $reportbroken='false';
	 $authorname='"TEST"';
	 $authorid=123;
	 $pviewcount=$_POST['pviewcount'];
     echo $pviewcount;
	 $pcommentscount=$_POST['pcommentscount'];
     echo $pcommentscount;

	 $sqlquery="INSERT INTO playlist1 VALUES (null,$ptitle,$pduration,
	 $plikes,$pdislikes,$audiorating,$videorating,$contentrating,$reportbroken,
	 $authorname,$authorid,$pviewcount,$pcommentscount);";

	 echo $sqlquery;
	 $result=$conn->query($sqlquery);

     //echo ($result);
	 if($result->num_rows <= 0)
		echo "Error in insertion of the data";
}
$conn->close();
//echo 'hello!';
?>