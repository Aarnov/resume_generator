<?php
$url='https:corona.askbhunte.com/api/v1/data/nepal';
$data=file_get_contents($url);//put the contents of the file into a variable
$characters = json_decode();//DECODE THE json FEED
print_r($characters);
?>

