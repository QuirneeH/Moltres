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
            # code...
        } elseif ($data['code'] == 504) {
            # code...
        } elseif ($data['code'] == 505) {
            # code...
        }
    ?>
</body>
</html>