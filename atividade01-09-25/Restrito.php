<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Restrito</title>
</head>
<body>

       <?php 

            if(!isset($_SESSION['login'])){
                header('Location: Index.php');
                exit;
            }
            require 'Menu.php';
            ?>
            
            <h2>Área Restrita</h2>
            <p>Bem-vindo, <?php echo $_SESSION['login']; ?>!</p>
       
       
       <?php endif; ?>
    
</body>
</html>