<?php
//db connection credentials
$serverName = "127.0.0.1";
$userName = "root";
$password = "root";
$dbname = "formsDB";

$controller_task = $_POST["controller_task"];

//operation processing
if($controller_task == 'retrieve_data')
{
	$conn = new mysqli($serverName, $userName, $password, $dbname);
	include "db_retrieve_data.php";
}

if($controller_task == 'insert_data')
{

}



if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

echo json_encode($aaData);
//echo $data;;

?>