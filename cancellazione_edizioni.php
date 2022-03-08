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
    $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
    $corso = isset($_POST['corso']) ? $_POST['corso'] : '';
    //echo "Connessione riuscita."."<br/>";
    $query = "DELETE FROM edizioni WHERE corso='$corso' AND numero='$numero'";
    
    $result = pg_query($conn, $query);
    if (!$result) {
      echo "<center><br>Si è verificato un errore, <a href='edizioni_del.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Cancellazione avvenuta con successo, <a href='edizioni_del.php'>ritorna</a></br>.</center>";
      return;
    }
  }
?>