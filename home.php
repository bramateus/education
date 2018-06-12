<?php
require_once('includes/config.php');

/*$updatecamp   = "UPDATE landingpage_campaign SET campanha_num_clicks = :campanha_num_clicks WHERE campanha_id = :campanha_id";
$resultupcamp = $PDO->prepare($updatecamp);
$newclick     = $rowscamp['campanha_num_clicks'] + 1;
$resultupcamp->bindParam(':campanha_id', $rowscamp['campanha_id']);
$resultupcamp->bindParam(':campanha_num_clicks', $newclick);
$resultupcamp->execute();*/

$btninscrevase  = "RASPE AQUI";
$btnaguarde     = "ENVIANDO SOLICITAÇÃO...";
$topoformulario = "<strong>É Isso mesmo! raspou, ganhou!</strong><br>Preencha o formulário, raspe a raspadinha e descubra o valor da sua mensalidade:";
$btnregulamento = "regulamento-interclasse-raspou-ganhou-jun.pdf";

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
<body>
<?php echo $rowsun['instituicao_tagmanager_body']; ?>

<!-- LP -->
<!-- FORMULÁRIO -->
<div class="box" id="form-box">
    <button class="btn btn-warning btn-sm btn-close"><i class="fa fa-close fa-fw"></i></button>
    <p class="text-uppercase"><?php echo $topoformulario; ?></p>

    <?php if($_REQUEST['e'] === 'e') : ?>
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Você já se registrou nessa campanha, aguarde nosso contato.</strong>
    </div>
    <?php endif; ?>

    <form action="formulario.php" method="post">
        <div class="form-group">
            <input type="text" name="NomeCompleto" class="form-control" placeholder="Digite seu nome:" required>
        </div>

        <div class="form-group">
            <input type="text" name="CPF" id="cpf" class="form-control" placeholder="Digite seu CPF:" required>
        </div>

        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Digite seu e-mail:" id="myEmail" required>
        </div>

        <div class="form-group">
            <input type="text" name="Telefone" class="form-control" id="celular" placeholder="Telefone: (00) 00000-0000" oninvalid="this.setCustomValidity('Digite seu telefone completo com DDD')"  minlength="13" required>
        </div>

        <div class="form-group">
            <select class="form-control" name="AreaPretendida" title="" required>
                <option value="">Área Pretendida?</option>
                <option value="Agronomia">Agronomia</option>
                <option value="Comunicação">Comunicação</option>
                <option value="Educação">Educação</option>
                <option value="Gestão e MBA">Gestão e MBA</option>
                <option value="Informática">Informática</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                <option value="Saúde">Saúde</option>
            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="ComoConheceu" title="" required>
                <option value="">Como nos conheceu?</option>
                <option value="Facebook">Facebook</option>
                <option value="Instagram">Instagram</option>
                <option value="Vi em um site">Vi em um site</option>
                <option value="Pesquisei no Google">Pesquisei no Google</option>
                <option value="Recebi um SMS">Recebi um SMS</option>
                <option value="Indicação de Amigo">Indicação de Amigo</option>
                <option value="Conversei com um vendedor externo">Conversei com um vendedor externo</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Faixa">Faixa</option>
                <option value="Panfleto">Panfleto</option>
                <option value="Rádio">Rádio</option>
                <option value="Cartaz">Cartaz</option>
            </select>
        </div>

        <div class="form-check">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" name="AceiteRegulamento" required>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description text-light">Li e aceito o regulamento da promoção.</span>
            </label>
        </div>

        <div class="form-group">
            <button id="submit" class="btn btn-danger d-block mx-auto" aria-pressed="true">
                <span id="inscreva"><?php echo $btninscrevase; ?></span>
                <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> <?php echo $btnaguarde; ?></span>
            </button>
        </div>

        <div class="form-group">
            <label class="">
                <span class="custom-control-description"><a href="<?php echo $btnregulamento; ?>" target="_blank" class="text-light">Consulte o regulamento*.</a></span>
            </label>
        </div>
    </form>
</div>

<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<div class="efeito" id="eft"></div>

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid mt-4">
    <!-- DOBRA 1 -->
    <div class="row">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-md-2 col-mdd-auto col-lg-3 col-xl-1"></div>

        <!-- CONTEUDO -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-mdd-7 col-lg-5 col-xl-8">
          
        </div>

        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        <div class="col-xs-12 col-sm-12 col-md-2 col-mdd-5 col-lg-4 col-xl-3">
              <img style="position: relative;" src="img/conteudo_a.png" class="img-fluid ml-2 conteudo-a d-block mx-auto" alt="">
        </div>

        <!-- FOLGA -->
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-8 col-lg-6 col-xl-6 folga"></div> -->
    </div>

    <!-- BOTÃO QUE ABRE O FORMULÁRIO NO MOBILE -->
    <div class="btn-formulario-display">
        <button class="btn btn-success btn-lg d-block mx-auto" id="btn-formulario-a"><?php echo $btninscrevase; ?></button>
    </div>
</section>

<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/api.js"></script>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('bHVjaWFuYTpiOTAzOTJmNi1mOGJkLTQyOWUtYTA1NC00YTg5NzEwM2UyMzM=')
            .withButton({"color":"#BF1E2E","icon":"https://s3-sa-east-1.amazonaws.com/msging.net/Services/Images/a74a202c-20e4-45bf-9969-0640a09e1472"})
            .build();
        }
    })();
</script>
</body>
</html>