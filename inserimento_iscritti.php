<?php 
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn){
	echo 'Connessione al database fallita.';
	exit();
	//die('Connessione al database fallita.');
} else {
$tessera = isset($_POST['tessera']) ? $_POST['tessera'] : '';
$cf = isset($_POST['cf']) ? $_POST['cf'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cognome = isset($_POST['cognome']) ? $_POST['cognome'] : '';
$nascita = isset($_POST['nascita']) ? $_POST['nascita'] : '';
$corso = isset($_POST['corso']) ? $_POST['corso'] : '';
$iscrizione = isset($_POST['iscrizione']) ? $_POST['iscrizione'] : '';

//inserting data order
$query1 = "INSERT INTO persone
			(cf, nome, cognome, datanascita)
			VALUES
			('$cf',
			'$nome',
			'$cognome',
			'$nascita')";
$query2 = "INSERT INTO iscritti
			(tessera, cf)
			VALUES
			('$tessera',
			'$cf')";
$query3 = "INSERT INTO iscrizioni
			(corso, iscritto, data)
			VALUES
			('$corso',
			'$tessera',
			'$iscrizione')";
			
		
$result1 = pg_query($conn, $query1);
$result2 = pg_query($conn, $query2);
$result3 = pg_query($conn, $query3);

if((!$result1)||(!$result2)||(!$result3)) {
	echo "<center><br>Si è verificato un errore, <a href='iscritti.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Inserimento avvenuto con successo, <a href='iscritti.php'>ritorna</a></br>.</center>";
      return;
}
}
?>