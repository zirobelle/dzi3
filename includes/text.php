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

if (strtolower($message['text']) == "dzi แสดงค่าสีเขียว" || $message['text'] == "dzi ค่าสีเขียว" || $message['text'] == "dzi อยากรู้ค่าสีเขียว" || $message['text'] == "dzi อยากรู้ค่าสี"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => 'ค่าสีเขียวของ Grab คือ'
                'text' => 'RGB: 0 157 59'
                'text' => 'CMYK: 90 0 100 0'
                'text' => 'HEX: #'
                'text' => ''
                'text' => 'ดูสีอื่นๆ เพิ่มเติมได้จากรูปค่ะ'
                
                'type' => 'image',
                'originalContentUrl' => 'https://gallery.mailchimp.com/0bbff1e4457f7e08892c68f1a/images/119d68eb-367f-4d33-aeb0-7e8e9cd192ad.png', //
                'previewImageUrl' => 'https://gallery.mailchimp.com/0bbff1e4457f7e08892c68f1a/images/119d68eb-367f-4d33-aeb0-7e8e9cd192ad.png' //
            )
        )
    ));
}




?>
