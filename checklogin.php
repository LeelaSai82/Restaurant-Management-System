<?php
$loggedIn = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
$dbuser = "system";
$dbpass="Leela123";
$db="//localhost/orcl";

$connect = OCILogon($dbuser, $dbpass, $db);
if (!$connect) {
echo "An error has occured connecting to the database";
exit;
}
//
$username=$_POST['username'];
$password=$_POST['password'];
//$query = "SELECT * FROM user1 WHERE (username = '".$username."' and password='".$password."') ";

//$res = OCIParse($connect, $query);
$res="array";
/*if(! $result) {
echo "An error occurred in parsing the sql string '$query'.\n";
exit;
}
$r = OCIExecute($result);
if(! $r) {
echo "An error occurred in executing the sql '$query'.\n";
exit;
}
*/

$stid = oci_parse($connect, "SELECT * FROM user1 WHERE (username = '".$username."' and password='".$password."') " );
  
    oci_execute($stid);
   
    $nrows = oci_fetch_all($stid,$res);

echo $nrows;


if ($nrows==1){
    //header(location={projject.php})
    header("location: projject.php");
}
else
echo "invalid username and password";
}