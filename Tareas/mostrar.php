<?php

include 'religion.php';

echo "probando herencia <br>";

$creencia=new religion('cristianos','biblia','jesus','jerusalen','0');

echo $creencia->creencia('jesus');
?>