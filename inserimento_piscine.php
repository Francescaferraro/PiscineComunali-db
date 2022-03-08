<?php 
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn){
	echo 'Connessione al database fallita.';
	exit();
	//die('Connessione al database fallita.');
} else {
$citta = isset($_POST['citta']) ? $_POST['citta'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$via = isset($_POST['via']) ? $_POST['via'] : '';
$civico = isset($_POST['civico']) ? $_POST['civico'] : '';
$apertura = isset($_POST['apertura']) ? $_POST['apertura'] : '';
$chiusura = isset($_POST['chiusura']) ? $_POST['chiusura'] : '';
$vasche = isset($_POST['vasche']) ? $_POST['vasche'] : '';

//inserting data order
$query = "INSERT INTO piscine
			(citta, nome, via, civico, apertura, chiusura, numeroVasche)
			VALUES
			('$citta',
			'$nome',
			'$via',
			'$civico',
			'$apertura',
			'$chiusura',
			'$vasche')";
//declare in the order variable
$result = pg_query($conn, $query);	//order executes
if(!$result) {
	echo "<center><br>Si è verificato un errore, <a href='comuni.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Inserimento avvenuto con successo, <a href='comuni.php'>ritorna</a></br>.</center>";
      return;
}
}
?>