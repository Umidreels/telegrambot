<?php

define('itmaktabi1','LITE_TOKEN');
$admin = "LITE_ID";
$bot = bot('getme',['bot'])->result->username;

//@itmaktabi1
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".itmaktabi1."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$name = $message->chat->first_name;
$tx = $message->text;
$step = file_get_contents("step/$cid.step");
$mid = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$uid= $message->from->id;
$name = $message->from->first_name;
$familya = $message->from->last_name;
$bio = $message->from->about;
$username = $message->from->username;
$chat_id = $message->chat->id;
$reply = $message->reply_to_message->text;
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$callfrid = $update->callback_query->from->id;
$callname = $update->callback_query->from->first_name;
$calluser = $update->callback_query->from->username;
$surname = $update->callback_query->from->last_name;
$about = $update->callback_query->from->about;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";


//@itmaktabi1
$kalt = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📖Konspekt yozish"]],
]
]);
//@itmaktabi1
if($text=="/start"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>👋 Assalomu alaykum</b> <a href = 'tg://user?id=$cid'>$name</a>!
<b>📌Quyidagi menyu orqali botdan foydalaning👇</b> ",
    'parse_mode'=>'html',
    'reply_markup'=>$kalt,
    ]);
}
//@itmaktabi1
if($text=='📖Konspekt yozish'){
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=>"📖Konspekt yaratish uchun 

`/konspekt Salom` 

Shu ko'rinishda yuboring" ,
'parse_mode'=>'markdown',
]);
}
if(mb_stripos($text,"/konspekt")!==false){ 
$ex=explode("/konspekt ",$text); 
$text=$ex[1]; 
$api = array("https://apis.xditya.me/write?text=$text"); 

bot('sendPhoto',[
'chat_id'=>$cid,
"photo"=>$api[0],
    'caption'=>"Siz kiritgan matn Konspekt rasmi:  *$text*" ,
'parse_mode'=>'markdown',
]);
}
//@itmaktabi1
?>