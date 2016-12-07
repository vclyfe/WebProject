<?php

$val=file_get_contents("php://input");
$lol=json_decode($val);
echo $lol->id;
echo $lol->language;
echo $lol->edition;
echo $lol->author;

?>
