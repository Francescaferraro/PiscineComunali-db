<!--basic_del.php-->
<?php
session_start();
//print_R($_POST);
  $conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
  if (!$conn) {
    echo 'Connessione al database fallita.';
    exit();
  }
  else {
    $piscina = isset($_POST['piscina']) ? $_POST['piscina'] : '';
    $corso = isset($_POST['corso']) ? $_POST['corso'] : '';
    //echo "Connessione riuscita."."<br/>";
    $query = "DELETE FROM corsi WHERE piscina='$piscina' AND id='$corso'";
    
    $result = pg_query($conn, $query);
    if (!$result) {
      echo "<center><br>Si è verificato un errore, <a href='corsi_del.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Cancellazione avvenuta con successo, <a href='corsi_del.php'>ritorna</a></br>.</center>";
      return;
    }
  }
?>