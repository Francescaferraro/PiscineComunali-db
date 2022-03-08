<!DOCTYPE html>

<head>
	<title>PISCINE COMUNALI</title>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Corsi
    </button>
    <div class="dropdown-content">
      <a href="piscine.php">Inserimento Corsi</a>
      <a href="corsi_del.php">Cancellazione Corsi</a>
      <a href="corsi_upd.php">Aggiornamento Corsi</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Edizioni
    </button>
    <div class="dropdown-content">
      <a href="edizioni.php">Inserimento Edizioni</a>
      <a href="edizioni_del.php">Cancellazione Edizioni</a>
      <a href="edizioni_upd.php">Aggiornamento Edizioni</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Iscritti
    </button>
    <div class="dropdown-content">
      <a href="iscritti.php">Inserimento Iscritti</a>
      <a href="iscritti_del.php">Cancellazione Iscritti</a>
      <a href="iscritti_upd.php">Aggiornamento Iscritti</a>
    </div>
  </div>
  <a class="sel" href="corsi_sel.php">Visualizza Corsi</a>
  <a class="sel" href="edizioni_sel.php">Visualizza Edizioni</a>
  <a class="sel" href="iscritti_sel.php">Visualizza Iscritti</a>
  <a class="sel" href="personale_sel.php">Visualizza Personale</a>
</div>
  <style>
    .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.topnav a.sel {
  background-color: #ddd;
  color: black;
}
.topnav a.sel:hover {
  background-color: #b0ceff;
  color: black;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #f5f9ff;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
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
    </style>
  <center>
	<center>
	<h1>Area Piscine</h1>
	<h3>Inserimento nuova edizione</h3>
	</center>
</head>
<body>
		<form action="inserimento_edizioni.php" , method="POST">
    <center>
    	<table>
      <tr>
        <td>ID Corso:</td>
        <td><select name="corso">
            <?php
                    $conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
                    $query = "SELECT id FROM corsi";
                    $result = pg_query($conn, $query);

                    if (!$result) {
                        echo "Si è verificato un errore.<br/>";
                        echo pg_last_error($conn);
                    } else {
                        while ($row = pg_fetch_array($result)) {
                            echo ' <option value= "' . $row['id'] . '" >' . $row['id'] . '</option>';
                        };
                    };
                    ?> 
          </select></td>
      </tr>
      <tr>
      <td>Numero edizione:</td>
      <td><input type="text" name="numero" required></td>
  		</tr>
      <tr>
      <td>Data inizio:</td>
  <td><input type="date" name="inizio"></td>
      </tr>
      <tr>
      <td>Data fine:</td>
      <td><input type="date" name="fine"></td>
      </tr>
      <tr>
      <td>Ora:</td>
      <td><input type="time" name="orario">
</select>
</select></td>
      </tr>
      <tr>
      <td>Giorno della settimana:</td>
      <td><select name="giorno">
        <option value="lunedì">lunedì</option>
        <option value="martedì">martedì</option>
        <option value="mercoledì">mercoledì</option>
        <option value="giovedì">giovedì</option>
        <option value="venerdì">venerdì</option>
        <option value="sabato">sabato</option>
        <option value="domenica">domenica</option>
      </select>
    </td>
      </tr>
      <td>CF istruttore:</td>
      <td><select name="istruttore">
            <?php
                    $conn = pg_connect("host=localhost port=5432 dbname=piscine user=postgres password=PostgresF28!");
                    $query = "SELECT istruttore FROM edizioni";
                    $result = pg_query($conn, $query);

                    if (!$result) {
                        echo "Si è verificato un errore.<br/>";
                        echo pg_last_error($conn);
                    } else {
                        while ($row = pg_fetch_array($result)) {
                            echo ' <option value= "' . $row['istruttore'] . '" >' . $row['istruttore'] . '</option>';
                        };
                    };
                    ?> 
          </select></td>
      </tr>
      <tr>
      <td></td><td><input class="left" type="submit" value="Aggiungi"><input class="right" type="reset" value="Annulla"></td>
      </tr>
    </table>
  </form>
	</center>
</body>

</html>