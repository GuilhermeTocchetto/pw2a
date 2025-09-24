<html>
<head>
	<title>Meu banco de dados</title>
</head>
	<body>
		<?php
			$host = "localhost";
			$username = "aluno";
			$password = "aluno.etec";
			$database = "teste";


			$conn = mysqli_connect($host, $username, $password, $database);

			$sql = "CREATE TABLE alunos (
				cod INT NOT NULL AUTO_INCREMENT,
				aluno VARCHAR(100) NOT NULL,
				email VARCHAR(100),
				celular VARCHAR(20),
				PRIMARY KEY (cod)
			)ENGINE=InnoDB DEFAULT CHARSET=utf8";
		?>
	</body>
</html>

