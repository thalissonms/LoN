<?php 
//Json do Log
$packLogs = array('key'=>'1', 'log1'=>$resultado1, 'log2'=>$resultado2, 'log3'=>$resultado3, 'log4'=>$resultado4, 'log5'=>$resultado5, 'log6'=>$resultado6, 'log7'=>$resultado7);
echo $ajaxSend = json_encode($packLogs);
?>