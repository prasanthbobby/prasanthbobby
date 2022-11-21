<?php


$url="https://api.postalpincode.in/pincode/110001";

$data=file_get_contents($url);

$data=json_decode($data,true);

echo $data[0]['message'];

//echo "<pre>"; print_r($data);

foreach($data[0]['postoffice'] as $res){



echo $res['name']."<br>";





}









?>
