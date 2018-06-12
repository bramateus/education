<?php 
require_once('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
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
  <title>Raspadinha</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="index,follow">
  <meta name="googlebot" content="index,follow">
  <meta name="distribution" content="global">
  <meta name="rating" content="General">
  <meta name="language" content="pt-br">
  <meta name="doc-class" content="completed">
  <meta name="doc-rights" content="public">
  <meta name="autor" content="">
  <meta name="company" content="">
  <meta name="revisit-after" content="1">
  
  <!-- filestart -->
  <link rel="Stylesheet" type="text/css" href="./demo/demo.css" />
  <script type="text/javascript" src="./lib/jquery.1.11.0.min.js"></script>
  <!-- fileend -->

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/lpbootstrap.min.css" rel="stylesheet">

  <!-- Medias -->
  <link href="css/media-geral.min.css" rel="stylesheet">
  <link href="css/tkp/media-xsss.css" rel="stylesheet" media="(min-width: 1px) and (max-width: 320px)">
  <link href="css/tkp/media-xss.css" rel="stylesheet" media="(min-width: 321px) and (max-width: 375px)">
  <link href="css/tkp/media-xs.css" rel="stylesheet" media="(min-width: 376px) and (max-width: 425px)">
  <link href="css/tkp/media-sm.css" rel="stylesheet" media="(min-width: 426px) and (max-width: 767px)">
  <link href="css/tkp/media-md.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 991px)">
  <link href="css/tkp/media-mdd.css" rel="stylesheet" media="(min-width: 992px) and (max-width: 1199px)">
  <link href="css/tkp/media-lg.css" rel="stylesheet" media="(min-width: 1200px) and (max-width: 1440px)">
  <link href="css/tkp/media-xl.css" rel="stylesheet" media="(min-width: 1441px)"> 

  <!-- Fontawesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<style>
html, 
body {
    height: 100%;
}
            
          </style>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body class="bodytkp">
<?php echo $rowsun['instituicao_tagmanager_body']; ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-lg-6 col-sm-12">
      <div id="scratchpad-container">
        <div id="raspadinha" class="scratchpad"></div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 col-sm-12">
      <div class="msg">
        <p>PARABÉNS! SUA PRÉ-INSCRIÇÃO<br>
        FOI REALIZADA COM SUCESSO.</p>
        <p>VOCÊ PAGARÁ APENAS <span style="color:#fbb442;" id="premio">...</span>*</p>
        <p>EM BREVE UM CONSULTOR<br>
        EDUCACIONAL ENTRARÁ<br>
        EM CONTATO COM VOCÊ.</p>
        <small>*CONSULTE O REGULAMENTO</small>
        <img src="img/baloon01.png" id="balloon01" />
        <img src="img/baloon02.png" id="balloon02" />
      </div>
      
      
    </div>
    
  </div>
</div>

      <script type="text/javascript" src="./wScratchPad.min.js"></script>
      <script src="js/index.js"></script>
      <script type="text/javascript">
        
      </script>
      

<input type="hidden" name="idmatricula" id="idmatricula" value="<?php echo $_REQUEST['c']; ?>">
    

  
</body>
</html>