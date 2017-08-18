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
if 
(strtolower($message['text']) == "Grab color"     
|| $message['text'] == "Grab colors" 
|| $message['text'] == "Grab Color"
|| $message['text'] == "Grab Colors" 
|| $message['text'] == "GrabColors"
|| $message['text'] == "GrabColor"
|| $message['text'] == "สีGrab"
|| $message['text'] == "สี Grab"   
   
)
{
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => 
'รหัสสีเขียวของ Grab ได้แก่
RGB : 0 157 59
CMYK : 90 0 100 0
Hex : #009d3b
สามารถดูชุดสี Secondaryเพิ่มเติม ได้จากรูปด้านล่างนะคะ'
            ),
            array(
                'type' => 'image',
                'originalContentUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg',
                'previewImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg'
            )
            
            
            
        )  
        
        
        
    ));
}


?>

