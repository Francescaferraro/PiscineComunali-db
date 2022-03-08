<?php
session_start();

$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
  if (!$conn) {
    echo 'Connessione al database fallita.';
    exit();
  }
  else {
    //echo "Connessione riuscita."."<br/>";
    $piscina = isset($_POST['piscina']) ? $_POST['piscina'] : '';
$corso = isset($_POST['corso']) ? $_POST['corso'] : '';
$tipologia = isset($_POST['tipologia']) ? $_POST['tipologia'] : '';
$costo = isset($_POST['costo']) ? $_POST['costo'] : '';
$max = isset($_POST['max']) ? $_POST['max'] : '';
$min = isset($_POST['min']) ? $_POST['min'] : '';
$corsia = isset($_POST['corsia']) ? $_POST['corsia'] : '';
$livello = isset($_POST['livello']) ? $_POST['livello'] : '';

    $query = "UPDATE corsi SET  id='$corso', tipologia='$tipologia', costo='$costo', max='$max', min='$min', livello='$livello', corsia='$corsia', piscina='$piscina' WHERE id='$corso' AND piscina='$piscina'";
    $result = pg_query($conn, $query);
    if (!$result) {
      echo "<center><br>Si è verificato un errore, <a href='corsi_upd.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Aggiornamento avvenuto con successo, <a href='corsi_upd.php'>ritorna</a></br>.</center>";
      return;
  };
}
?>