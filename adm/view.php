<?php 
$file = '../../TFT/data/json/comp.json';
$getContents = file_get_contents($file);
$decode = json_decode('['.$getContents.']', true);
$count = count($decode);
echo $getContents;


$fileItens = '../../TFT/data/json/itens.json';
$getItens = file_get_contents($fileItens);
$decodeItens = json_decode($getItens, true);
$countItens = count($decodeItens);
echo $countItens;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php for ($i = 1; $i < $count; $i++) { ?>
    <div class="comp">
        <h1><?php echo $decode[$i]['compName'];?></h1>
        <h2><?php echo $decode[$i]['data'][0]['name'];?></h2>
        <h3>Itens</h3>
        <p><?php echo $decode[$i]['data'][0]['itens'][0];?></p>
        <p><?php echo $decode[$i]['data'][0]['itens'][1];?></p>
        <p><?php echo $decode[$i]['data'][0]['itens'][2];?></p>
        <p><?php echo $decode[$i]['data'][0]['class'];?></p>
    </div>
<?php } ?>
</body>
</html>