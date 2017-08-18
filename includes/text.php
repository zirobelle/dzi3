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
|| $message['text'] == "grab colors" 
|| $message['text'] == "grab Color"
|| $message['text'] == "grab Colors" 
|| $message['text'] == "grabColors"
|| $message['text'] == "grabColor"
 
|| $message['text'] == "Grab colours" 
|| $message['text'] == "Grab Colour"
|| $message['text'] == "Grab Colours" 
|| $message['text'] == "GrabColours"
|| $message['text'] == "GrabColour"
|| $message['text'] == "grab colours" 
|| $message['text'] == "grab Colour"
|| $message['text'] == "grab Colours" 
|| $message['text'] == "grabColours"
|| $message['text'] == "grabColour"
 
|| $message['text'] == "สีGrab"
|| $message['text'] == "สี grab"
|| $message['text'] == "สีgrab"
|| $message['text'] == "สี grab" 
|| $message['text'] == "สี"
|| $message['text'] == "color"
|| $message['text'] == "colors"
|| $message['text'] == "colour"
|| $message['text'] == "colours"
|| $message['text'] == "green" 
   
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
                'originalContentUrl' => 'https://gallery.mailchimp.com/0bbff1e4457f7e08892c68f1a/images/119d68eb-367f-4d33-aeb0-7e8e9cd192ad.png',
                'previewImageUrl' => 'https://gallery.mailchimp.com/0bbff1e4457f7e08892c68f1a/images/119d68eb-367f-4d33-aeb0-7e8e9cd192ad.png'
            )
            
            
            
        )  
        
        
        
    ));
}


?>

