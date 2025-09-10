<?php
$token = "7482818508:AAE0HJwhkXcyGRGnmsE8Ahgnrf5N9n1mL1g";
$chat_id = "-1002680545996";

$message = isset($_POST['message']) ? $_POST['message'] : "No data";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message));

echo json_encode(["status"=>"success"]);
?>
