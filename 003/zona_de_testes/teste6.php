<?php

$i = imagecreatefrompng("../../007/Aatrox.png");
for ($x=0;$x<imagesx($i);$x++) {
for ($y=0;$y<imagesy($i);$y++) {
$rgb = imagecolorat($i,$x,$y);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;
$rTotal += $r;
$gTotal += $g;
$bTotal += $b;
$total++;
}
}
$rAverage = round($rTotal/$total);
$gAverage = round($gTotal/$total);
$bAverage = round($bTotal/$total);

 echo $rAverage.",".$gAverage.",".$bAverage;	'<br>';
 echo imagecolorstotal($i);
?>
<style>
#class {width:20px; height:20px;}
</style>
<div id="class" style="background:rgb(<?php  echo $rAverage.",".$gAverage.",".$bAverage ?>);"></div>