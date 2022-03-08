<!DOCTYPE html>

<head>
  <title>PISCINE COMUNALI</title>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="comuni.php">Inserimento Piscine</a>
  <a href="comuni_del.php">Cancellazione Piscine</a>
  <a href="comuni_upd.php">Aggiornamento Piscine</a>
  <a class="sel" href="comuni_sel.php">Visualizza Piscine</a>
</div>
  <center>
    <style>
      html {
      background-color: #f5f9ff;
    }
      /* Add a black background color to the top navigation */
.topnav {
  background-color: #b0ceff;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #146dff;
  color: white;
}
.topnav a.sel {
  background-color: #ddd;
  color: black;
}
.topnav a.sel:hover {
  background-color: #b0ceff;
  color: black;
}
    </style>
  <h1>Area Comuni</h1>
  <h3>Piscine</h3>
  </center>
</head>
<body>
<?php
$conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
if (!$conn) {
  echo 'Connessione al database fallita.';
  exit();
}
else {
  //echo "Connessione riuscita."."<br/>";
  $query = "SELECT * FROM piscine";
  $result = pg_query($conn, $query);
  if (!$result) {
    echo "Si è verificato un errore.<br/>";
    echo pg_last_error($conn);
    exit();
  } else {
      echo '<center><br><table>
          <tr>
            <th>Nome</th>
            <th>Città</td>
            <th>Via</th>
            <th>Civico</th>
            <th>Apertura</th>
            <th>Chiusura</th>
            <th>Numero vasche</th>
          </tr>';
    while ($row = pg_fetch_array($result)) {
        echo '<tr>
              <td>'. $row['nome'].'</td>
              <td>'. $row['citta'].'</td>
              <td>'. $row['via'].'</td>
              <td>'. $row['civico'].'</td>          
              <td>'. $row['apertura'].'</td>
              <td>'. $row['chiusura'].'</td> 
              <td>'. $row['numerovasche'].'</td>             
            </tr></center>';//<td>'. $row['nint'].'</td>
    };
    echo '</table>';
  };
}
?>

</body>
</html>