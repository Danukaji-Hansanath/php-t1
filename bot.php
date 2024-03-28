<?php
$target_url = file_get_contents('http://nitroflare.com/plugins/fileupload/getServer');

$file = realpath('media/1.mp4');
$post = array('files' => curl_file_create($file), 'user' => '732943e838e3513cdab1cbeb1664da90e9be13e6');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec ($ch);
curl_close ($ch);

var_dump(json_decode($result));