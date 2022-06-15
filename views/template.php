<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">
</head>
<body>
    <div class="topo">
        <a href="<?php echo BASE_URL;?>login/logout">
            <div>Sair</div> 
        </a>
        <div class="topousuario"><?php echo $viewData['info']->getNome();?></div>
        <a href="<?php echo BASE_URL?>cursos/index"><div class="topousuario">Meus Cursos</div></a>
    </div>
    <?php $this->loadViewInTemplate($viewName, $viewData);?>
    <script src="<?php echo BASE_URL;?>assets/js/script.js"></script>
</body>
</html>