<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
    <?php
    session_start();?>
    
    <nav>
        <a href = 'Index.php' > inicio </a>
        <a href = 'Restrito.php' > Restrito </a>
        <?php if(isset ($_SESSION['login'])): ?>
            <a href = 'Sair.php'> Sair </a>
        <?php endif; ?>
    </nav>
</body>
</html>