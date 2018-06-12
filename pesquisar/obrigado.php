<?php
require_once('includes/config.php');


$btninscrevase = "Quero saber como.";
$btnaguarde = "ENVIANDO SOLICITAÇÃO...";
$topoformulario = "Baixe o material gratuito com dicas para te ajudar a despertar a paixão pela leitura em seu filho.";
$btnregulamento = "";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php echo $rowsun['instituicao_tagmanager_head']; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title><?php echo $rowscamp['campanha_titulo']; ?> | <?php echo $rowsun['instituicao_titulo']; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="language" content="pt-br">
    <meta name="url" content="<?php echo $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']; ?>">
    <meta name="doc-class" content="completed">
    <meta name="doc-rights" content="public">
    <meta name="autor" content="<?php echo $rowsun['instituicao_titulo']; ?>">
    <meta name="company" content="<?php echo $rowsun['instituicao_titulo']; ?>">
    <meta name="revisit-after" content="1">
    <link rev="made" href="mailto:<?php echo $rowsun['instituicao_email_matricula']; ?>">
    <link rel="canonical" href="<?php echo $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']; ?>">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/lpbootstrap.min.css" rel="stylesheet">

    <!-- Medias -->
    <link href="css/media-geral.css" rel="stylesheet">
    <link href="css/media-xsss.css" rel="stylesheet" media="(min-width: 1px) and (max-width: 320px)">
    <link href="css/media-xss.css" rel="stylesheet" media="(min-width: 321px) and (max-width: 375px)">
    <link href="css/media-xs.css" rel="stylesheet" media="(min-width: 376px) and (max-width: 425px)">
    <link href="css/media-sm.css" rel="stylesheet" media="(min-width: 426px) and (max-width: 767px)">
    <link href="css/media-md.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 991px)">
    <link href="css/media-mdd.css" rel="stylesheet" media="(min-width: 992px) and (max-width: 1199px)">
    <link href="css/media-lg.css" rel="stylesheet" media="(min-width: 1200px) and (max-width: 1440px)">
    <link href="css/media-xl.css" rel="stylesheet" media="(min-width: 1441px)">

    <!-- Fontawesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="bodytkp">
<?php echo $rowsun['instituicao_tagmanager_body']; ?>

<!-- LP -->

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid mt-4">
    <!-- DOBRA 1 -->
    <div class="row">

        <!-- CONTEUDO -->
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/conteudo_tkp_a.png" class="img-fluid  conteudo-tkp-a d-block mx-auto" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/conteudo_tkp_b.png" class="img-fluid  conteudo-tkp-b d-block mx-auto" alt="">
        </div> -->
       
        <div class="col-xs-12 col-md-2"></div>

        <div class="col-xs-12 col-md-8">
             <!-- <img src="img/tkp_obrigado_c.png" class="img-fluid  conteudo-tkp-c d-block mx-auto" alt="">
             <img src="img/tkp_obrigado.png" class="img-fluid  conteudo-tkp-a d-block mx-auto" alt="">
             <img src="img/tkp_obrigado_b.png" class="img-fluid  conteudo-tkp-b d-block mx-auto" alt=""> -->
        </div>
        
        <div class="col-xs-12 col-md-2"></div>

        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        
    </div>

    <!-- BOTÃO QUE ABRE O FORMULÁRIO NO MOBILE -->
    <!-- <div class="btn-formulario-display">
        <button class="btn btn-success btn-lg d-block mx-auto" id="btn-formulario-a"><?php echo $btninscrevase; ?></button>
    </div> -->
</section>

<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>