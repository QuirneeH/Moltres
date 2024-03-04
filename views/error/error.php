<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro <?= $data['code']; ?></title>
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="shortcut icon" href="../public/images/icons/moltres_icon.png" type="image/x-icon">
</head>
<body>
    <?php
        if($data['code'] == 404){
            echo "<h1>ERRO $data[code]</h1>" . 
                 "<h2>Página não encontrada.</h2>";
        } elseif ($data['code'] == 405) {
            echo "<h1>ERRO $data[code]</h1>" . 
                 "<h2>Método não permitido.</h2>";
        } elseif ($data['code'] == 400) {
            echo "<h1>ERRO $data[code]</h1>" . 
                 "<h2>Solicitação mau implementada.</h2>";
        } elseif ($data['code'] == 501) {
            echo "<h1>ERRO $data[code]</h1>" . 
                 "<h2>Solicitação não implementada.</h2>";
        }
    ?>

    <a href="/Moltres"><button>Inicio</button></a>
</body>
</html>