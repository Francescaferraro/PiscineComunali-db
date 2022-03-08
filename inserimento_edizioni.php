<?php 
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn){
	echo 'Connessione al database fallita.';
	exit();
	//die('Connessione al database fallita.');
} else {
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$corso = isset($_POST['corso']) ? $_POST['corso'] : '';
$inizio = isset($_POST['inizio']) ? $_POST['inizio'] : '';
$fine = isset($_POST['fine']) ? $_POST['fine'] : '';
$orario = isset($_POST['orario']) ? $_POST['orario'] : '';
$giorno = isset($_POST['giorno']) ? $_POST['giorno'] : '';
$istruttore = isset($_POST['istruttore']) ? $_POST['istruttore'] : '';

//inserting data order
$query = "INSERT INTO edizioni
			(numero, datainizio, corso, datafine, ora, giorno, istruttore)
			VALUES
			('$numero',
			'$inizio',
			'$corso',
			'$fine',
			'$orario',
			'$giorno',
			'$istruttore')";
//declare in the order variable
$result = pg_query($conn, $query);	//order executes
if(!$result) {
	echo "<center><br>Si è verificato un errore, <a href='edizioni.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Inserimento avvenuto con successo, <a href='edizioni.php'>ritorna</a></br>.</center>";
      return;
}
}
?>