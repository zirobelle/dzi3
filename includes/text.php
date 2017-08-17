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
if (strtolower($message['text']) == "ดี" || $message['text'] == "ดีครับ" ){
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
if (strtolower($message['text']) == "dzi_ค่าสีเขียว" || $message['text'] == "dzi_ค่าสี" ){
    
    
    
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                
               'type' => 'text', // 訊息類型 (位置)
                'title' => 'Example location', // 回復標題
                'text' => 'xxxxxxxxxxxxxx', // 回復地址
                'latitude' => 22.653742, // 地址緯度
                'longitude' => 120.32652400000006 // 地址經度
                
            )    
        )               
    ));
    
   
 
    
}
?>

