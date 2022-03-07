<?php
//$token = ''



include 'Telegram.php';

$telegram = new Telegram('1955996849:AAHGh9frCPnfUbFO6lsIftBpLDCvWitsDMQ');
$chat_id = $telegram -> ChatID();
$text = $telegram -> Text();

$text = strtolower($text);


if ($text == '/start'){
    $context = ['chat_id' => $chat_id, 'text' => "Assalomu alaykum tushdi $chat_id", ];
    $telegram -> sendMessage($context);
}; else {


$context = ['chat_id' => $chat_id];

switch ($text) {
    case 'salom':
        $context['text'] = 'salom ishlar qale';
        break;
    
    default:
        $context['text'] = "Bunday so'z topilmadi";
        
        break;
}

$telegram -> sendMessage($context);

};