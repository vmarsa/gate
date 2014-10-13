<?php

error_reporting(E_ERROR);

$url = 'https://e.mail.ru/api/v1/user/password/restore';
$url2 - 'https://e.mail.ru/api/v1/user/access/support';
if($_GET["mrim"] == "1") $url = $url2;
$data = array('ajax_call' => '1', 'x-email' => '', 'htmlencoded' => 'false', 'api' => '1', 'token' => '', 'email' => $_GET["email"]);





$postdata = http_build_query(
    $data
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);

$result = file_get_contents($url, false, $context);

echo $result;


?>