<?php require('conexion_sql.php'); session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query3  = "SELECT * FROM usuarios_login WHERE email='".$usuario."'";
$doQuery3 = mysql_query($query3);
$u = 0;

if($data3 = mysql_fetch_assoc($doQuery3)){

	do {
		
		if ($password === $data3['password']) {
		
			echo 0;
			$_SESSION['usuario-id'] = $data3['id'];
		
		} else {
		
			echo 2;
		
		}
		
	} while($data3 = mysql_fetch_assoc($doQuery3));
	
} else {

	echo 1;

}

/*if ($usuario != 'JonHutchinson') {

	echo 1;

} else if ($password != 'Hutchinson') {

	echo 2;

} else {

	echo 0;

}*/

?>