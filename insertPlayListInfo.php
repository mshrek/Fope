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
    $ppublishedAt = '"'.$_POST['ppublishedAt'].'"';

    //check for already published video's dates
//    $getpublishedAt=$conn->$conn->query("SELECT publishedAt from playlist1;");
//    $alreadyPublishedDates=array();
//    while($rec = $getpublishedAt->fetch_assoc())
//    {
//        $alreadyPublishedDates[] = $rec;
//    }
//
//    echo 'Already published dates ='.implode(",",$alreadyPublishedDates);
//    if(!in_array($ppublishedAt,$alreadyPublishedDates)) {
        $sqlquery = "INSERT INTO playlist1 VALUES (null,$ptitle,$pduration,
	    $plikes,$pdislikes,$audiorating,$videorating,$contentrating,$reportbroken,
	    $authorname,$authorid,$pviewcount,$pcommentscount,$pvideolink,$pimageURL,$ppublishedAt,null);
	    ";

//        $reIndexQuery1= "SET @x=0;";
//        $reIndexQuery2="UPDATE playlist1 set sorted_id=(@x:=@x+1) order by publishedAt;";
//        $indexResult1=$conn->query($reIndexQuery1);
//        $indexResult2=$conn->query($reIndexQuery2);

        echo $sqlquery;
        $result = $conn->query($sqlquery);

        //echo ("result is ".$result." result num rows= ".$result->num_rows);
        if ($result <= 0)
            echo 0;
//    }
//    else{
//        echo "Record with published date ".$ppublishedAt."already exists in the DB";
//    }
}
$conn->close();
//echo 'hello!';
?>