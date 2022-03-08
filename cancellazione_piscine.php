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
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $citta = isset($_POST['citta']) ? $_POST['citta'] : '';
    //echo "Connessione riuscita."."<br/>";
    $query = "DELETE FROM piscine WHERE nome='$nome' AND citta='$citta'";
    
    $result = pg_query($conn, $query);
    if (!$result) {
      echo "<center><br>Si è verificato un errore, <a href='comuni_del.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Cancellazione avvenuta con successo, <a href='comuni_del.php'>ritorna</a></br>.</center>";
      return;
    }
  }
?>