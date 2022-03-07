<?php

include 'Telegram.php';

$telegram = new Telegram('1955996849:AAHGh9frCPnfUbFO6lsIftBpLDCvWitsDMQ');
$chat_id = $telegram->ChatID();
$text = $telegram->Text();
 
echo $text;

if ($text == '/start') {
	$content = ['chat_id' => $chat_id, 'text' => 'Start bosganingiz uchun raxmat'];
	$telegram->sendMessage($content);
}


$option = array( 
    //First row
    array($telegram->buildInlineKeyBoardButton("Button 1", $url="http://youtube.com"), $telegram->buildInlineKeyBoardButton("Button 2", $url="http://link2.com")), 
    //Second row 
    array($telegram->buildInlineKeyBoardButton("Button 3", $url="http://link3.com"), $telegram->buildInlineKeyBoardButton("Button 4", $url="http://link4.com"), $telegram->buildInlineKeyBoardButton("Button 5", $url="http://link5.com")), 
    //Third row
    array($telegram->buildInlineKeyBoardButton("Button 6", $url="http://link6.com")) );
$keyb = $telegram->buildInlineKeyBoard($option);

$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");
$telegram->sendMessage($content);
// $option = [
//     [$telegram->buildKeyboardButton("Button 1"),],
//     [$telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 1"),],
//     [$telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 1"),],
//     [$telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 1"), $telegram->buildKeyboardButton("Button 1"),],
// ];



// $keyb = $telegram->buildKeyBoard($option, $onetime=false);
// $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");

// $telegram->sendMessage($content);


