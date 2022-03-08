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
.topnav a.sel {
  background-color: #ddd;
  color: black;
}
.topnav a.sel:hover {
  background-color: #b0ceff;
  color: black;
}
    </style>
	<center>
	<h1>Area Piscine</h1>
	<h3>Corsi</h3>
	</center>
</head>
<body>
	

</body>
</html>