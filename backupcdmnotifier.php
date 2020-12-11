<?php
if(isset($_POST["hostname"])) {
  $hostname=$_POST["hostname"];
  $token="";
  $chat_id="";
  $curl = curl_init();
  $post = [
    "chat_id" => "$chat_id",
    "text" => "Backup server $hostname error -- please check"
  ];
  curl_setopt($curl, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage");
  curl_setopt($curl, CURLOPT_HTTPHEADER, "content-type: application/json");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  $response = curl_exec($curl);
  curl_close($curl);
}
?>
