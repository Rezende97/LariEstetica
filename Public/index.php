<?php
    include_once "./../App/Config/config.php";
    include_once "./../App/autoload.php";    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- css -->
    <link rel="stylesheet" href="<?= URL ?>/Public/Css/style.css">


</head>
<body>
    <?php 

        include "../App/Views/menu.php";
        
        $rota = new Rota;

        include "../App/Views/rodape.php";
    ?>

    <!-- JavaScript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="<?= URL ?>/Public/JavaScript/produtos.js"></script>

</body>
</html>