<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Text)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://devdocs.line.me/en/#text
 */
/**
陣列輸出 Json
==============================
{
    "type": "text",
    "text": "Hello, world!"
}
==============================
*/
if (strtolower($message['text']) == "Hi" || $message['text'] == "สวัสดี" || $message['text'] == "ดี"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', // 訊息類型 (文字)
                'text' => 'สวัสดีค่ะ' // 回復訊息
            )
        )
    ));
}

if (strtolower($message['text']) == "dzi" && $message['text'] == "ค่าสี" && $message['text'] == "เขียว"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', // 訊息類型 (文字)
                'text' => 'ค่าสีเขียวของ Grab คือ </br> RGB: 0 157 59 </br> CMYK: 90 0 100 0 </br> HEX: # ' // 回復訊息
            )
        )
    ));
}




?>
