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
if (strtolower($message['text']) == "text" || $message['text'] == "Hi"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'video', // 訊息類型 (影片)
                'originalContentUrl' => 'https://api.reh.tw/line/bot/example/assets/videos/example.mp4', // 回復影片
                'previewImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg' // 回復的預覽圖片
            )
        )
    ));
}
?>
