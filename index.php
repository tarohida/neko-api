<?php
header('Content-Type: application/json; charset=utf-8');
$neko = array('にゃーん');
#
# $raw_json = file_get_contents("php://input");
# $json = json_decode($raw_json, true);
# $neko = $json;


print json_encode($neko, JSON_PRETTY_PRINT);

