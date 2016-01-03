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
	 $pduration=$_POST['pduration'];
	 $plikes=$_POST['plikes'];
	 $pdislikes=$_POST['pdislikes'];
	 $audiorating=0;
	 $videorating=0;
	 $contentrating=0;
	 $reportbroken='false';
	 $authorname='"'.$_POST['pauthorname'].'"';  //to be read from config file
	 $authorid='"'.$_POST['pauthorid'].'"';          //to be read from config file
	 $pviewcount=$_POST['pviewcount'];
	 $pcommentscount=$_POST['pcommentscount'];
     $pvideolink='"'.$_POST['pvideolink'].'"';;
     $pimageURL = '"'.$_POST['pimageURL'].'"';

	 $sqlquery="INSERT INTO playlist1 VALUES (null,$ptitle,$pduration,
	 $plikes,$pdislikes,$audiorating,$videorating,$contentrating,$reportbroken,
	 $authorname,$authorid,$pviewcount,$pcommentscount,$pvideolink,$pimageURL);";

	 echo $sqlquery;
	 $result=$conn->query($sqlquery);

     //echo ("result is ".$result." result num rows= ".$result->num_rows);
	 if($result<= 0)
		echo "Error in insertion of the data";
}
$conn->close();
//echo 'hello!';
?>