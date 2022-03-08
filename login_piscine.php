<!DOCTYPE html>

<head>
	<title>PISCINE COMUNALI</title>
	<a href="index.php"><input class="left" type="submit" value="Home" style="background-color: #edf4ff"></a>
	<center>
	<h1>Area Piscine</h1>
	<h3>Login</h3>
	</center>
	<style>
		html {
			background-color: #f5f9ff;
		}
		button:hover {
  background-color: #ddd;
  color: black;
}
		button {
		 border-radius: 50px; 
		 height: 30px;
		 background-color: #b0ceff;
		}
	</style>
</head>
<body>
	
		<form action="piscine_check.php" , method="POST">
    <center>
    	<table>
      <tr>
      	<td>Password:</td>
      	<td><input type="password" name="password" required></td>
      	<td><button>Accedi</button></td>
      </tr>
  </table>
</center>
</form>
</body>
</html>