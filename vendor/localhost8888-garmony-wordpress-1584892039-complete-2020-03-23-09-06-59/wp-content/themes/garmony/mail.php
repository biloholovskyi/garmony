<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$question = $_POST['question'];

$message = "Имя: ".$name." | Номер: ".$tel." | email: ".$email." | Вопрос: ".$question;
$headers = 'From: info@garmoniya-vkusa.ru' . "\r\n" .
           'Reply-To: info@garmoniya-vkusa.ru' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('biloholovskyi@gmail.com', "Вопрос с сайта", $message, $headers);