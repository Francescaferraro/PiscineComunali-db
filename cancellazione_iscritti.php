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
    $tessera = isset($_POST['tessera']) ? $_POST['tessera'] : '';
    $cf = isset($_POST['cf']) ? $_POST['cf'] : '';
    //echo "Connessione riuscita."."<br/>";
    $query1 = "DELETE FROM persone WHERE cf='$cf'";
    
    $result1 = pg_query($conn, $query1);

    if (!$result1) {
      echo "<center><br>Si è verificato un errore, <a href='iscritti_del.php'>riprova</a>.</br></center>";
      echo pg_last_error($conn);
      exit();
    } else {
      echo "<center><br>Cancellazione avvenuta con successo, <a href='iscritti_del.php'>ritorna</a></br>.</center>";
      return;
    }
  }
?>