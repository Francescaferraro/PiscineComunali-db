<?php 
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn){
	echo 'Connessione al database fallita.';
	exit();
	//die('Connessione al database fallita.');
} else {
$password = $_POST['password'];
if ($password=='abcd') {
	$_SESSION['password'] = $pwd_piscine;
	header("Location: comuni.php");
} else {
	echo("<center><br>Password non corretta: <a href='login_comuni.php'>riprova</a>.</center>");
}
}
?>