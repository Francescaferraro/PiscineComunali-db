<?php
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
  if (!$conn) {
    echo 'Connessione al database fallita.';
    exit();
  }
  else {
    //echo "Connessione riuscita."."<br/>";
$cf = isset($_POST['cf']) ? $_POST['cf'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cognome = isset($_POST['cognome']) ? $_POST['cognome'] : '';
$nascita = isset($_POST['nascita']) ? $_POST['nascita'] : '';

    $query1 = "UPDATE persone SET  nome='$nome', cognome='$cognome', datanascita='$nascita' WHERE cf='$cf'";

    $result1 = pg_query($conn, $query1);

    if(!$result1) {
      echo "<center><br>Si è verificato un errore, <a href='iscritti_upd.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Aggiornamento avvenuto con successo, <a href='iscritti_upd.php'>ritorna</a></br>.</center>";
      return;
  };
}
?>