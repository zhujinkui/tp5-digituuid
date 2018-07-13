<?php
header("Content-Type: Text/Html;Charset=UTF-8");
require "./vendor/autoload.php";

$uuid_tool_object = new \think\DigitUuid();
//$id = $uuid_tool_object::get(12, 10, time());
//$id = $uuid_tool_object::generateNumber(12, 10, 8);
$id = $uuid_tool_object::encode(12, 10);
var_dump($id);
exit;

