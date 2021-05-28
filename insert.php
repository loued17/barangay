<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = mydata";
   $credentials = "user = postgres password=loued";
$con = pg_connect( "$host $port $dbname $credentials"  ) or die ("Could not connect to server\n");

if(!$con){
		echo "Error : Unable to open database\n";
} else {
	$name = $_POST['name'];
	$password = $_POST['password'];

	$query = "INSERT INTO register(name, password) VALUES ('$name','$password')";
	$result = pg_query($con, $query);
	header("index.html");
}

pg_close($con);

?>
