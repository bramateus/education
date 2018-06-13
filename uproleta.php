<?php
require_once('includes/config.php');


$desconto = $_REQUEST['vp'];
$id = $_REQUEST['c'];





$sql = "SELECT * FROM matricula WHERE matricula_codigo = 1 AND id_matricula = '". $id . "'";
$query = mysqli_query($sqlconex, $sql);
// $contador = mysqli_num_rows($query);


$row = $query->fetch_row();
echo "<div>";
var_dump($row[38]);
echo "</div>";

if (empty($row[38])) {



$sql = "UPDATE matricula SET matriculaCurso_valorParcela = '" . $desconto . "' WHERE id_matricula = '". $id . "'";
mysqli_query($sqlconex, $sql);

$sql = "SELECT * FROM matricula WHERE id_matricula = " . $id;
$query = mysqli_query($sqlconex, $sql);
$mat = mysqli_fetch_array($query);

/*echo "<pre>";
var_dump($mat);
echo "</pre>";*/

//INTEGRAÇÃO COM ACTIVE CAMPAIGN
if ($rowscamp['campanha_activecampaign'] == 1) {
    $url    = 'https://grupoandrademartins.api-us1.com/';
    $params = array(
        'api_key'    => '38536f92aa5f18e16ae4371dfd838cf5589e56cad61b447fccc003812e7e482e2011eb2a',
        'api_action' => 'contact_add',
        'api_output' => 'serialize',
    );

    $post = array(
        'first_name' => $mat["matricula_nome"],
        'email'      => $mat["matricula_email"],
        'field[3]'   => $mat["matricula_fixo"],
        'field[24]'  => $mat['matriculaCurso_area'],
        'field[6]'   => $mat["matricula_como_conheceu"],
        'field[33]'  => $mat["matricula_cpf"],
        'field[63]'  => "R$ " . $mat["matriculaCurso_valorParcela"],
        'form'       => 107,
    );

    $query = "";
    foreach ($params as $key => $value) $query .= urlencode($key) . '=' . urlencode($value) . '&';
    $query = rtrim($query, '& ');

    // This section takes the input data and converts it to the proper format
    $data = "";
    foreach ($post as $key => $value) $data .= urlencode($key) . '=' . urlencode($value) . '&';
    $data = rtrim($data, '& ');
    $url  = rtrim($url, '/ '); // clean up the url

    // This sample code uses the CURL library for php to establish a connection,
    // submit your request, and show (print out) the response.
    if (!function_exists('curl_init')) die('CURL not supported. (introduced in PHP 4.0.2)');

    // If JSON is used, check if json_decode is present (PHP 5.2.0+)
    if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
        die('JSON not supported. (introduced in PHP 5.2.0)');
    }

    $api = $url . '/admin/api.php?' . $query; // define a final API request - GET

    $request = curl_init($api); // initiate curl object
    curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
    curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
    curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
    curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

    $response = (string)curl_exec($request); // execute curl post and store results in $response

    curl_close($request); // close curl object

    if (!$response) {
        die('Nothing was returned. Do you have a connection to Email Marketing server?');
    }
    $result = unserialize($response);
}


            }
            else {
                echo "nao faca nada";
            }