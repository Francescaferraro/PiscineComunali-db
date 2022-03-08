<?php
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
  if (!$conn) {
    echo 'Connessione al database fallita.';
    exit();
  }
  else {
    //echo "Connessione riuscita."."<br/>";
    $nome = isset($_POST['piscine']) ? $_POST['piscine'] : '';
    $citta = isset($_POST['citta']) ? $_POST['citta'] : '';
    $via = isset($_POST['via']) ? $_POST['via'] : '';
    $civico = isset($_POST['civico']) ? $_POST['civico'] : '';
    $apertura = isset($_POST['apertura']) ? $_POST['apertura'] : '';
    $chiusura = isset($_POST['chiusura']) ? $_POST['chiusura'] : '';
    $vasche = isset($_POST['vasche']) ? $_POST['vasche'] : '' ;
    $query = "UPDATE piscine SET nome='$nome', citta='$citta', via='$via', civico='$civico', apertura='$apertura', chiusura='$chiusura', numeroVasche='$vasche' WHERE nome='$nome' AND citta='$citta'";
    $result = pg_query($conn, $query);
    if (!$result) {
      echo "<center><br>Si è verificato un errore, <a href='comuni_upd.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Aggiornamento avvenuto con successo, <a href='comuni_upd.php'>ritorna</a></br>.</center>";
      return;
  };
}
?>