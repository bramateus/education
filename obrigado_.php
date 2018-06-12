<?php
require_once('includes/config.php');

$btninscrevase = "QUERO SABER COMO";
$btnaguarde = "ENVIANDO SOLICITAÇÃO...";
$topoformulario = "A sua ideia não precisa morrer na praia. Preencha o formulário e entenda como dar vida longa à sua startup.";
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
    <link href="css/media-geral.min.css" rel="stylesheet">
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

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bodytkp">
<?php echo $rowsun['instituicao_tagmanager_body']; ?>

<!-- LP -->

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid mt-4">
    <!-- DOBRA 1 -->
    <div class="row">
        <div class="col-xs-12 col-md-auto col-mdd-7 col-lg-6 col-xl-6">











            <div id="main">
               <div class="demo">
                    <canvas></canvas>
               </div>
            </div>






            <style type="text/css">
            .demo{width:320px; margin:10px auto 20px auto; min-height:300px;}
            .msg{text-align:center; height:32px; line-height:32px; font-weight:bold; margin-top:50px}
            </style>




            <!-- <div class="ardono"></div>
            <div class="skills-wheel">
                <ul class="wheel">
                    <li>
                        <img src="img/fatia-impar.png" alt=""><a href="#commercial-awareness" title="" class="fancybox">R$79,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-par.png" alt=""><a href="#communication" title="" class="fancybox">R$69,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-impar.png" alt=""><a href="#teamwork" title="" class="fancybox">R$79,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-par.png" alt=""><a href="#negotiation" title="" class="fancybox">R$49,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-impar.png" alt=""><a href="#problem-solving" title="" class="fancybox">R$79,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-par.png" alt=""><a href="#leadership" title="" class="fancybox">R$69,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-impar.png" alt=""><a href="#organisation" title="" class="fancybox">R$79,90</a>
                    </li>
                    <li>
                        <img src="img/fatia-par.png" alt=""><a href="#entrepreneurial-skills" title="" class="fancybox">R$59,90</a>
                    </li>
                </ul>
                <a href="#/" title="" class="btn"></a> -->
            </div>
     
        <!-- </div> -->
        <div class="col-xs-12 col-md-12 col-mdd-4 col-lg-5 col-xl-6 text-center text-light mt-5 pt-5 aux">
            <h2 class="mt-5">PARABÉNS! SUA PRÉ-INSCRIÇÃO FOI REALIZADA COM SUCESSO.</h2>
            <h2>RASPE E DESCUBRA O SEU DESCONTO <span> *</span> <!-- <span class="text-warning font-weight-bold" id="valordesconto">(CARREGANDO...)</span> * --></h2>
            <h2>EM BREVE UM CONSULTOR EDUCACIONAL ENTRARÁ EM CONTATO COM VOCÊ.</h2>
            <small>*CONSULTE O REGULAMENTO</small>
            <!-- <h3> <span> </span>% de DESCONTO</h3> -->
            <h3>VOCÊ GANHOU UM DESCONTO DE <span class="text-warning font-weight-bold" id="valordesconto">(CARREGANDO...)%</span></h3>
        </div>
        <div class="col-xs-12 col-md-auto col-lg-1 col-xl-2">
    </div>

</section>

<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.0.0/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js'></script>
<script src="js/index.js"></script>

<input type="hidden" name="idmatricula" id="idmatricula" value="<?php echo $_REQUEST['c']; ?>">
</body>
</html>