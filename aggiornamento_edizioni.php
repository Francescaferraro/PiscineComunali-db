<?php
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
  if (!$conn) {
    echo 'Connessione al database fallita.';
    exit();
  }
  else {
    //echo "Connessione riuscita."."<br/>";
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$corso = isset($_POST['corso']) ? $_POST['corso'] : '';
$inizio = isset($_POST['inizio']) ? $_POST['inizio'] : '';
$fine = isset($_POST['fine']) ? $_POST['fine'] : '';
$orario = isset($_POST['orario']) ? $_POST['orario'] : '';
$giorno = isset($_POST['giorno']) ? $_POST['giorno'] : '';
$istruttore = isset($_POST['istruttore']) ? $_POST['istruttore'] : '';

    $query = "UPDATE edizioni SET  numero='$numero', datainizio='$inizio', corso='$corso', datafine='$fine', ora='$orario', giorno='$giorno', istruttore='$istruttore' WHERE corso='$corso' AND numero='$numero'";
    $result = pg_query($conn, $query);
    if (!$result) {
      echo "<center><br>Si è verificato un errore, <a href='edizioni_upd.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Aggiornamento avvenuto con successo, <a href='edizioni_upd.php'>ritorna</a></br>.</center>";
      return;
  };
}
?>