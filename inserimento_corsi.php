<?php 
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn){
	echo 'Connessione al database fallita.';
	exit();
	//die('Connessione al database fallita.');
} else {
$piscina = isset($_POST['piscina']) ? $_POST['piscina'] : '';
$corso = isset($_POST['corso']) ? $_POST['corso'] : '';
$tipologia = isset($_POST['tipologia']) ? $_POST['tipologia'] : '';
$costo = isset($_POST['costo']) ? $_POST['costo'] : '';
$max = isset($_POST['max']) ? $_POST['max'] : '';
$min = isset($_POST['min']) ? $_POST['min'] : '';
$corsia = isset($_POST['corsia']) ? $_POST['corsia'] : '';
$livello = isset($_POST['livello']) ? $_POST['livello'] : '';

//inserting data order
$query = "INSERT INTO corsi
			(id, tipologia, costo, max, min, livello, corsia, piscina)
			VALUES
			('$corso',
			'$tipologia',
			'$costo',
			'$max',
			'$min',
			'$livello',
			'$corsia',
			'$piscina')";
//declare in the order variable
$result = pg_query($conn, $query);	//order executes
if(!$result) {
	echo "<center><br>Si è verificato un errore, <a href='piscine.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Inserimento avvenuto con successo, <a href='piscine.php'>ritorna</a></br>.</center>";
      return;
}
}
?>