<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index</title>
</head>
<body>
    <?php
    session_start();

    require `Menu.php`;?>
    

       <?php if (!isset($_SESSION['login'])): {

        echo `<form action="Logar.php" method="POST">`;
                
        echo    `<label>Email:</label><br>`;
        echo    `<input type="email" name="email" required><br><br>`;
                
        echo    `<label>Senha:</label><br>`;
        echo    `<input type="password" name="senha" required><br><br>`;
                
        echo    `<input type="submit" value="Entrar">`;
        echo `</form>`;
       }
       ?>
       <?php else: ?>
        <p>Você já está logado como <strong><?= $_SESSION['login'] ?></strong>.</p>
       
       
       <?php endif; ?>
</body>
</html>