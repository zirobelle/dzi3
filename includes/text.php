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

/////////////////// Color /////////////////////

if 
(strtolower($message['text']) ==  "Grab Color"     
|| $message['text'] == "Grab Colors"
|| $message['text'] == "grab Colors"
|| $message['text'] == "Grab Colors"
|| $message['text'] == "GrabColor" 
|| $message['text'] == "GrabColors" 

|| $message['text'] == "grab color"
|| $message['text'] == "grab colors"
|| $message['text'] == "grabcolor" 
|| $message['text'] == "grabcolors"
|| $message['text'] == "Grab color"
|| $message['text'] == "Grab colors"
|| $message['text'] == "Grabcolor" 
|| $message['text'] == "Grabcolors"

|| $message['text'] == "grab Color"
|| $message['text'] == "grab Colors"
|| $message['text'] == "grabColor" 
|| $message['text'] == "grabColors"

//////

|| $message['text'] == "Grab Colours"
|| $message['text'] == "GrabColour" 
|| $message['text'] == "GrabColours" 

|| $message['text'] == "grab colour"
|| $message['text'] == "grab colours"
|| $message['text'] == "grabcolour" 
|| $message['text'] == "grabcolours"

|| $message['text'] == "Grab colour"
|| $message['text'] == "Grab colours"
|| $message['text'] == "Grabcolour" 
|| $message['text'] == "Grabcolours"

|| $message['text'] == "grab Colour"
|| $message['text'] == "grab Colours"
|| $message['text'] == "grabColour" 
|| $message['text'] == "grabColours"

//////

 
|| $message['text'] == "สีGrab"
|| $message['text'] == "สี grab"
|| $message['text'] == "สีgrab"
|| $message['text'] == "สี"
|| $message['text'] == "สีเขียว Grab"
|| $message['text'] == "สีเขียว grab"
|| $message['text'] == "color"
|| $message['text'] == "colors"
|| $message['text'] == "colour"
|| $message['text'] == "colours"
|| $message['text'] == "Color"
|| $message['text'] == "Colors"
|| $message['text'] == "Colour"
|| $message['text'] == "Colours"
|| $message['text'] == "green"
|| $message['text'] == "Green"
|| $message['text'] == "เขียว"  
   
)
{
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => 
'[ รหัสสีเขียวของ Grab ]
RGB : 0 157 59
CMYK : 90 0 100 0
Hex : #009d3b
สามารถดูชุดสีเพิ่มเติม ได้จากรูปด้านล่างนะคะ :)'
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

