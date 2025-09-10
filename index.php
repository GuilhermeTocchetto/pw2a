<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula PHP com sql</title>
</head>
<body>
	
<?php
$host = "localhost";
$username = "aluno";
$password = "aluno.etec";
$database = "teste";

$conn = mysqli_connect($host, $username, $password, $database);

$sql = "SELECT cod,curso FROM cursos WHERE cod < 5";

$resultados = myslqi_query($conn, $sql);

if(mysqli_num_rows($resultados) == 0){
	echo "sem resultados para exibir!";
}
echo "<table border='1'>";
while($linha = mysqli_fetch_assoc($resultados)){
	echo "<tr><td>" . $linha["cod"] . "</td><td>" . $linha["curso"] . "</td></tr>";

echo "</table>";
}

?>

</body>
</html>