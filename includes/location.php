<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Location)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://devdocs.line.me/en/#location
 */
/**
陣列輸出 Json
==============================
{
    "type": "location",
    "title": "Example location",
    "address": "台灣高雄市三民區大昌一路 98 號 (立志中學)",
    "latitude": 22.653742,
    "longitude": 120.32652400000006
}
==============================
*/
if (strtolower($message['text']) == "Grab Location" || $message['text'] == "Grab location" || $message['text'] == "grab location"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'location', // 訊息類型 (位置)
                'title' => 'Grab', // 回復標題
                'address' => '
ชั้น 30 อาคาร ธนภูมิ
1550 ถนนเพชรบุรีตัดใหม่
แขวงมักกะสัน เขตราชเทวี
กรุงเทพ 10400', // 回復地址
                'latitude' => 13.7493344, // 地址緯度
                'longitude' => 100.556898 // 地址經度
            )
        )
    ));
}
?>
