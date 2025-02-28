<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php

// check to see if they are set before using them.
if (isset($_POST['username']) && isset($_POST['password'])) {

echo "HELLO";
// Login
$dbuser="system";
$dbpass="Leela123";
$db="//localhost/orcl";

// extract all the form fields and store them in variables
$username=$_POST['username'];
$password=$_POST['password'];

//$remember=$_POST['remember'];

echo $username;
//echo $dbpass;
echo $db;


//Connect to DB
$connect = oci_connect($dbuser, $dbpass, $db);

if (!$connect) {
echo "An error has occured connecting to the database";
exit;
}

//
$query = "INSERT INTO ord VALUES ('".$username."','".$ord_id."','".$ord_det."')";

//Store resultsof select query
$result = OCIParse($connect, $query);

//Just check
//$sql = OCIParse($connect, $query);
if(! $result) {
echo "An error occurred in parsing the sql string '$query'.\n";
exit;
}
else
echo 'User';

$r = OCIExecute($result);

if(! $r) {
echo "An error occurred in executing the sql '$query'.\n";
exit;
}

} else {
echo 'You must supply a username and password.';
}

//End Cookie script

?>
</body>
</html>