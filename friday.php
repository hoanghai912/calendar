<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/webhooks/929259498927951882/0wK1yu8WvFikIj3ANRjiJKLjkyl0xqVyFc4SjCY38O5ucvFDnOig2rdlwC1dJVPqwepu");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$param = '{ "username" : "Schedule Message", "avatar_url" : "https://cdn-icons-png.flaticon.com/512/470/470326.png", "embeds" : [{ "title" : "FRIDAY (Thứ 6)", "description": "**01:00 PM - 02:50 PM** | [Hoá đại cương LT (CH1003)](https://meet.google.com/den-thdv-yur) \n **04:00 PM - 05:50 PM** | [Kinh tế chính trị (SP1033)](https://meet.google.com/dtj-xooh-cxs)" }] }';
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result = curl_exec($ch);
curl_close($ch);

echo $result

?>