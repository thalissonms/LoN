<?php
$b = 94;
$a = $_GET['n'];
for ($i = $a; $i < 1635; $i++){
  $b = $b + 1;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "3333",
  CURLOPT_URL => "http://192.168.15.12:3333/itens/backup?=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 180,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "    {\n      \"ip\": \"$i\"\n    }\n",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
set_time_limit(10000);
if ($err) {
  header('localhost/alpha/loja2.php?n='.$b);//echo "cURL Error #:" . $err;
} else {
  echo $response;
}
//sleep(1);
}
?>