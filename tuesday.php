<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/webhooks/929259498927951882/0wK1yu8WvFikIj3ANRjiJKLjkyl0xqVyFc4SjCY38O5ucvFDnOig2rdlwC1dJVPqwepu");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$param = '{ "username" : "Schedule Message", "avatar_url" : "https://cdn-icons-png.flaticon.com/512/470/470326.png", "embeds" : [{ "title" : "TUESDAY (Thứ 3)", "description": "**02:00 PM - 03:50 PM** | [Kinh tế kỹ thuật (IM1027)](https://meet.google.com/ywt-tnae-aku)" }] }';
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result = curl_exec($ch);
curl_close($ch);

echo $result

?>