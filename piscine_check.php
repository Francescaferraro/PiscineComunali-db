<?php 
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn){
	echo 'Connessione al database fallita.';
	exit();
	//die('Connessione al database fallita.');
} else {
$password = $_POST['password'];
if ($password=='1234') {
	$_SESSION['password'] = $pwd_piscine;
	header("Location: piscine.php");
}
else {
echo("<center><br>Password non corretta: <a href='login_piscine.php'>riprova</a>.</center>");
}
}
?>