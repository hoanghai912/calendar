<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/webhooks/929259498927951882/0wK1yu8WvFikIj3ANRjiJKLjkyl0xqVyFc4SjCY38O5ucvFDnOig2rdlwC1dJVPqwepu");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$param = '{ "username" : "Schedule Message", "avatar_url" : "https://cdn-icons-png.flaticon.com/512/470/470326.png", "embeds" : [{ "title" : "THURSDAY (Thứ 5)", "description": "**12:00 PM - 04:50 PM** | [Hoá đại cương TN (CH1004)](https://meet.google.com/ngf-finu-yfi)" }] }';
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result = curl_exec($ch);
curl_close($ch);

echo $result

?>