<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro <?= $info['number']; ?></title>
    <link rel="stylesheet" href="../public/css/root.css">
</head>
<body>
    <?php
        if($info['number'] == 404){
            echo "<h1>ERRO <?= $info[number]; ?></h1>" . 
                 "<h2>Página não encontrada.</h2>";
        }
    ?>
</body>
</html>