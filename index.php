<?php
require('config/functions.php');
$API = new API();
if(isset($_GET['key'])){
    http_response_code(200);
    print($API->setHash($_GET['key']));
}else{
    http_response_code(404);
    print($API->error());
}
?>