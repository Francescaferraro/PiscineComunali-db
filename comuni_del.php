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
.topnav a.sel {
  background-color: #ddd;
  color: black;
}
.topnav a.sel:hover {
  background-color: #b0ceff;
  color: black;
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
    </style>
	<h1>Area Comuni</h1>
	<h3>Cancellazione piscina</h3>
	</center>
</head>
<body>
		<form action="cancellazione_piscine.php" name="dati" method="POST">
    <center>
    	<table>
      <tr>
        <td>Città</td>
        <td>
       		<select name="citta">
            <?php
                    $conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
                    $query = "SELECT citta FROM comuni";
                    $result = pg_query($conn, $query);

                    if (!$result) {
                        echo "Si è verificato un errore.<br/>";
                        echo pg_last_error($conn);
                    } else {
                        while ($row = pg_fetch_array($result)) {
                            echo ' <option value= "' . $row['citta'] . '" >' . $row['citta'] . '</option>';
                        };
                    };
                    ?>			
          </select>
      	</td>
      </tr>
      <tr>
        <td>Piscina</td>
        <td>
          <select name="nome">
                    <?php
                    $conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
                    $query = "SELECT nome FROM piscine";
                    $result = pg_query($conn, $query);

                    if (!$result) {
                        echo "Si è verificato un errore.<br/>";
                        echo pg_last_error($conn);
                    } else {
                        while ($row = pg_fetch_array($result)) {
                            echo ' <option value= "' . $row['nome'] . '" >' . $row['nome'] . '</option>';
                        };
                    };
                    ?>
          </select>
        </td>
      </tr>
      <td></td><td><input class="left" type="submit" value="Cancella"><input class="right" type="reset" value="Annulla"></td>
      </tr>
    </table>
  </form>
	</center>
</body>

</html>