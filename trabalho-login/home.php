<?php
    include 'check_login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-user">
    <h1>Página do cliente</h1>
    <p>usuario logado:
        <?php echo $usario; ?>

    </p>

    <a href="logout.php">Sair</a>

</body>
</html>