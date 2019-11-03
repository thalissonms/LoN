<?php
header('Cache-Control: no-cache, must-revalidate'); 
header('Content-Type: application/json; charset=utf-8')

$aDados = json_decode($_POST['rel'], true);
$nProc = $aDados["Proc"];

echo json_encode(array("erro" => "0", "proc" => $nProc));
?> 