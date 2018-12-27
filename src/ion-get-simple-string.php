<?php
header("Access-Control-Allow-Origin: *");

$result = (object)array('return_message' => 'See you later my friend!!!!');
echo json_encode($result);
?>
