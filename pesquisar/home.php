<?php
require_once('includes/config.php');





 $topoformulario = "";


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
    <h4 class="text-uppercase" style="color: #000; text-align: center; padding: 15px 0 25px 0"><?php echo $rowscamp['campanha_titulo']; ?></h4>
     <!-- <form action="formulario.php" method="post">  -->
        <!-- div class="form-group">
            <input type="text" name="NomeCompleto" class="form-control" placeholder="Digite seu nome:" required>
        </div>
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Digite seu e-mail:" id="myEmail" required>
        </div> -->
        <!-- <div class="form-group">
            <input type="text" name="Matricula_cpf" class="form-control" id="celular" placeholder="Telefone para contato"  required>
        </div> -->




       

        <!-- <div class="form-group">
            <select id="unidadeProxima" name="UnidadeProxima" class="form-control" required>
                <option value="">Unidade mais próxima da sua casa?</option>

                <?php
                $sql = "SELECT id_unidades, unidade_nome FROM unidades WHERE instituicao_id_instituicao = 2 AND status_id_status = 3 ORDER BY unidade_nome ASC";
                $query = mysqli_query($sqlconex, $sql);
                while($unid = mysqli_fetch_array($query)) {
                 echo "<option value='" . $unid['id_unidades'] . "'>" . $unid['unidade_nome'] . "</option>";
                }
                ?>

            </select>
        </div> -->


       
<form method="POST">
    <!-- <input name="nome" value="" /> -->
    

    <div class="col-lg-12">
        <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <a href="#" class="btn btn-info mx-auto t1" style="display: none; width: 100%; text-transform: uppercase;">por nome</a>
                <input type="text" name="nome" class="form-control t1" placeholder="Consulte pelo nome: ">
            </div>
        </div>

        <div class="col-lg-4" >
            <div class="form-group">
                <a href="#" class="btn btn-info mx-auto t2" style="display: none; width: 100%; text-transform: uppercase;">por cpf</a>
                <input type="text" id="cpf" name="cpf" class="form-control t2" placeholder="Consulte pelo CPF: (XXX.XXX.XXX-XX) ">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <a href="#" class="btn btn-info mx-auto t3" style="display: none; width: 100%; text-transform: uppercase;">por email</a>
                <input type="text" name="email" class="form-control t3" placeholder="Consulte pelo E-mail: " >
            </div>
        </div>
        </div>
        <hr />
        <div class="form-group">
            
            <button type="submit" class="btn btn-success d-block mx-auto" aria-pressed="true" style="width: 280px!important;  cursor: pointer;">
                
                <span  id="inscreva">CONSULTAR</span>
                <script type="text/javascript">
                $(document).ready(function() { 
                    window.location.href='#final';
                    });
                </script>
            </button>
        </div>

        <hr>

    </div>


    <!-- '{$_REQUEST['Telefone']}' -->

</form>

<style type="text/css">
    .none {
        display: none;
    }


    .invisible {
        visibility: hidden;
    }
    .disabled{
    pointer-events:none;
    outline:none;
    text-indent:-9999px;
    
    background:#eee;
    border:1px solid #ccc;
}
</style>

<script type="text/javascript">
$( document ).ready(function() {
    $('input.t1').click(function() {
        $('input.t2').slideUp(10);
        $('input.t3').slideUp(10);
        $('a.t2').slideDown(10);
        $('a.t3').slideDown(10);
        $('input.t2').val("");
        $('input.t3').val("");
    
    });
     $('input.t2').click(function() {
        $('input.t1').slideUp(10);
        $('input.t3').slideUp(10);
        $('a.t1').slideDown(10);
        $('a.t3').slideDown(10);
        $('input.t1').val("");
        $('input.t3').val("");
    
    });
      $('input.t3').click(function() {
        $('input.t1').slideUp(10);
        $('input.t2').slideUp(10);
        $('a.t1').slideDown(10);
        $('a.t2').slideDown(10);
        $('input.t1').val("");
        $('input.t2').val("");
    
    });


    $('a.t1').click(function() {
        $('a.t1').slideUp(10);
        $('a.t2,a.t3').slideDown(10);
        $('input.t1').slideDown(10);
        $('input.t2').slideUp(10);
        $('input.t3').slideUp(10);
        $('input.t2').val("");
        $('input.t3').val("");
    });

     $('a.t2').click(function() {
        $('a.t2').slideUp(10);
        $('a.t1,a.t3').slideDown(10);
        $('input.t1').slideUp(10);
        $('input.t2').slideDown(10);
        $('input.t3').slideUp(10);
        $('input.t1').val("");
        $('input.t3').val("");
    });

    $('a.t3').click(function() {
        $('a.t3').slideUp(10);
        $('a.t1,a.t2').slideDown(10);
        $('input.t1').slideUp(10);
        $('input.t2').slideUp(10);
        $('input.t3').slideDown(10);
        $('input.t1').val("");
        $('input.t2').val("");
    });

    //  $('a.t2').click(function() {
    //     $('a.t1,a.t2,a.t3').slideUp(200);
    //     $('input.t1').slideDown(200);
    //     $('input.t2').slideDown(200);
    //     $('input.t3').slideDown(200);
    
    // });


});
</script>



<?php
$nome = "";
$cpf = "";
$email = "";
$status = 0;


if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['email'])) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];

    if ($nome == true) {

        $sql = "SELECT * FROM matricula WHERE matricula_instituicao = '" . $universidade . "' AND matricula_codigo = '" . $campanha . "' AND  matricula_nome LIKE '%". $nome . "%' ORDER BY matricula_dataCadastro DESC, matricula_nome ASC";
        $resultcamp = mysqli_query($sqlconex, $sql);

                // $rowscamp   = $resultcamp->fetch_assoc();
                
                echo '<div class="container" id="table">           
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Email</th>
                                <th>Fixo</th>
                                <th>Celular</th>
                                <th>Valor da Parcela</th>
                                <th>Data do Cadastro (AAAA/MM/DD)</th>
                              </tr>
                            </thead>
                            <tbody>';

                while ($row = $resultcamp->fetch_row()) {

                    $status = 1;

                    echo '
                      <tr>
                        <td>'. $row[6] .'</td>
                        <td>'. $row[5] .'</td>
                        <td>'. $row[24] .'</td>
                        <td>'. $row[13] .'</td>
                        <td>'. $row[14] .'</td>
                        <td>'. $row[39] .'</td>
                        <td>'. $row[42] .'</td>
                      </tr>
                      ';

                }


                 echo "</tbody>
                            </table>
                          </div>";
                        echo "<p style='margin-bottom: 100px;'></p>";
                        echo "<a href='#' id='final'></a>";

                if ($status == 0) {

                     echo "<div class='container' >
                                <div class='col-lg-12' >
                                    <div  id='msg' style='width:50%; margin: 0 auto; margin-top:-110px'  class='alert alert-info'>
                                        <strong>Ops!</strong> Não foi encontrado nenhum resultado :/ 
                                    </div>
                                </div>
                               </div>";
                        echo "<p style='margin-bottom: 100px;'></p>";
                        echo "<a href='#' id='final'></a>";


                        echo "
                    <script type='text/javascript'>
            
                            
                                $('#table').addClass('none');

                    
                        </script> ";
 

                         
                }



                   



                        // echo "<div class='container' >
                        //         <div class='col-lg-12' >
                        //             <div  id='msg' style='width:50%; margin: 0 auto' class='alert alert-info'>
                        //                 <strong>Ops!</strong> Não foi encontrado nenhum resultado :/ 
                        //             </div>
                        //         </div>
                        //        </div>";
                        // echo "<p style='margin-bottom: 100px;'></p>";
                        // echo "<a href='#' id='final'></a>";

                        
            

    } 
        else if ($cpf == true) {

            $sql = "SELECT * FROM matricula WHERE matricula_instituicao = '" . $universidade . "' AND matricula_codigo = '" . $campanha . "' AND matricula_cpf LIKE '%". $cpf . "%' ORDER BY matricula_dataCadastro DESC, matricula_nome ASC";
            $resultcamp = mysqli_query($sqlconex, $sql);



            
             echo '<div class="container" id="table">           
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Fixo</th>
                            <th>Celular</th>
                            <th>Valor Retirado</th>
                            <th>Data do Cadastro (AAAA/MM/DD)</th>
                          </tr>
                        </thead>
                        <tbody>';



            while ($row = $resultcamp->fetch_row()) {

                $status = 1;

                echo '
                  <tr>
                    <td>'. $row[6] .'</td>
                    <td>'. $row[5] .'</td>
                    <td>'. $row[24] .'</td>
                    <td>'. $row[13] .'</td>
                    <td>'. $row[14] .'</td>
                    <td>'. $row[39] .'</td>
                    <td>'. $row[42] .'</td>
                  </tr>
                  ';
                  

                  // exit();
                }


                echo "</tbody>
                      </table>
                    </div>";
                  echo "<p style='margin-bottom: 100px;'></p>";
                  echo "<a href='#' id='final'></a>";


                if ($status == 0) {

                     echo "<div class='container' >
                                <div class='col-lg-12' >
                                    <div  id='msg' style='width:50%; margin: 0 auto; margin-top:-110px'  class='alert alert-info'>
                                        <strong>Ops!</strong> Não foi encontrado nenhum resultado :/ 
                                    </div>
                                </div>
                               </div>";
                        echo "<p style='margin-bottom: 100px;'></p>";
                        echo "<a href='#' id='final'></a>";


                        echo "
                    <script type='text/javascript'>
            
                            
                                $('#table').addClass('none');

                    
                        </script> ";
 

                         
                }

                

    } 
        else if ($email == true) {

            $sql = "SELECT * FROM matricula WHERE matricula_instituicao = '" . $universidade . "' AND matricula_codigo = '" . $campanha . "' AND matricula_email LIKE '%". $email . "%' ORDER BY matricula_dataCadastro DESC, matricula_nome ASC";
            $resultcamp = mysqli_query($sqlconex, $sql);

                         echo '<div class="container" id="table">           
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Email</th>
                                            <th>Fixo</th>
                                            <th>Celular</th>
                                            <th>Valor Recebido</th>
                                            <th>Data do Cadastro (AAAA/MM/DD)</th>
                                          </tr>
                                        </thead>
                                        <tbody>';

    
                        while ($row = $resultcamp->fetch_row()) {
                               
                                $status = 1;

                                echo '
                                  <tr>
                                    <td>'. $row[6] .'</td>
                                    <td>'. $row[5] .'</td>
                                    <td>'. $row[24] .'</td>
                                    <td>'. $row[13] .'</td>
                                    <td>'. $row[14] .'</td>
                                    <td>'. $row[39] .'</td>
                                    <td>'. $row[42] .'</td>
                                  </tr>
                                  ';

                                  

                                
                             }

                             echo "</tbody>
                                     </table>
                                   </div>";
                                echo "<p style='margin-bottom: 100px;'></p>";
                                echo "<a href='#' id='final'></a>";


                            if ($status == 0) {

                        echo "<div class='container' >
                                <div class='col-lg-12' >
                                    <div  id='msg' style='width:70%; margin: 0 auto; margin-top:-110px'  class='alert alert-info'>
                                        <strong>Ops!</strong> Não foi encontrado nenhum resultado :/ 
                                    </div>
                                </div>
                               </div>";
                        echo "<p style='margin-bottom: 100px;'></p>";
                        echo "<a href='#' id='final'></a>";


                        echo "
                            <script type='text/javascript'>
            
                            
                                $('#table').addClass('none');

                    
                        </script> ";
 

                         
                }
                                
                }






                else {
                    
                        echo "<div class='container' >
                                <div class='col-lg-12' >
                                    <div  id='msg' style='width:50%; margin: 0 auto' class='alert alert-danger'>
                                        <strong>Atenção!</strong> Campos vazios não são permitidos.
                                    </div>
                                </div>
                               </div>";
                        echo "<p style='margin-bottom: 100px;'></p>";
                        echo "<a href='#' id='final'></a>";
                        
                    
                    
                }
        } 

    ?>

        <script type="text/javascript">
            $(document).ready(function() {
            setTimeout(function () {

                $('#msg').show(600).delay( 500 ).fadeOut( 600 ); // "foo" é o id do elemento que seja manipular.
            }, 4000); // O valor é representado em milisegundos.

        });
        </script>



        
    </div>




<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<div class="efeito" id="eft"></div>

<!-- CONTEUDO COMPLETO -->
<section class="container-fluid mt-4">
    <!-- DOBRA 1 -->
    <div class="row">
        
       

        
        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        <div class="col-xs-12 col-sm-12 col-md-auto col-mdd-7 col-lg-12 col-xl-12"></div>

    </div>




    <!-- BOTÃO QUE ABRE O FORMULÁRIO NO MOBILE -->
    <!-- <div class="btn-formulario-display">
        <button class="btn btn-success btn-lg d-block mx-auto" id="btn-formulario-a"><?php echo $btninscrevase; ?></button>
    </div> -->
</section>

<script src="js/jquery.mask.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/api.js"></script>
</body>
</html>