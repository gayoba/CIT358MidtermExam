    <?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "library";


$connect = new mysqli_connect($localhost, $username, $password, $dbname);
if(!$connect) {
	die("Connection Failed : " . mysql_connect_error());
} else {
echo "Connected successfully";
}

?>