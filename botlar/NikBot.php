//@itmaktabi1
<?php
ob_start();
define('API_KEY',"LITE_TOKEN");
$admin = 'LITE_ID';

$soat = date('H:i');
$sana = date("d.m.Y");

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
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
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$callmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$callcid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$tx = $message->text;
$text= $message->text;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
mkdir("Bot");
$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;
$description = $message->chat->description;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ismi = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;

$sticker = $message->sticker;
$audio = $message->audio;
$voice = $message->voice;
$video = $message->video;
$caption = $message->caption;
$performer = $message->performer;
$gif = $message->animation;
$doc = $message->document;
$contact = $message->contact;
$game = $message->game;
$location = $message->location;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$selfi1 = $message->video_note;
$lichka = file_get_contents("lichka.db");
$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;
$orqa = '⬅️ Orqaga';
$step = file_get_contents("bot/$cid.step");
$stepa = file_get_contents("step/$cid.step");
mkdir("bot");
mkdir("step");
mkdir("stat");

$adminpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"✍️Foydalanuvchilarga Xabar Yuborish"]],
[['text'=>"✍️Foydalanuvchilarga Forward Yuborish"]]
]
]);

if($tx=="/start" and $type=="private"){
bot("sendMessage",[
         "chat_id"=>$cid,
'text'=>"<b>👋Assalamu aleykum <a href='tg://user?id=$cid'>$name2</a>
Ushbu bot orqali ajoyib nik yozishingiz mumkin
sIZHAM o'z botingizni quring @Grantmakerbot
Buning uchun pastdagi bo‘limlardan birini tanlang 👇</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>'✏ Nik Yasash','callback_data'=>"nik"],],
   [['text'=>'📊 Statistika','callback_data'=>"stat"],],
]
])
]);  
}

	
	
	
  if($tx=="/start" and $type=="supergroup" or $type=="group"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot lichkasiga yozing!!",
]);
}
   
  if($tx=="/admin" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨🏻‍💻Admin panelga xush kelibsiz!!",
'reply_markup'=>$adminpanel,
]);
} 
   
if($data=="bosh"){
bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"Bosh Menuga Qaytdik",
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>'✏ Nik Yasash','callback_data'=>"nik"],],
   [['text'=>'📊 Statistika','callback_data'=>"stat"],],
]
])
]);
}   
   
   $lichka=file_get_contents("stat/user.list");
$gruppa=file_get_contents("stat/group.list");
if($type=="group" or $type=="supergroup"){
if(strpos($gruppa,"$cid") !==false){
}else{
file_put_contents("stat/group.list","$gruppa\n$cid");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("stat/user.list","$lichka\n$cid");
}
}
if($data =="stat"){
$lichka=file_get_contents("stat/user.list");
$lich=substr_count($lichka,"\n");
$gruppa=file_get_contents("stat/group.list");
$gro=substr_count($gruppa,"\n");
$um=$lich+$gro;
bot('editmessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Guruxlar: <b>$gro</b>
└▶⭕Umumuy: <b>$um</b>

<i>👨‍💻Dasturchi: @Grantmakerbot</i>",
'parse_mode' => 'html',
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menu",'callback_data'=>"bosh"]],
]
]),
]);
}


if($data == "yangiyil") {   
$kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
  bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
   'text'=>"
🎄 Yangi Yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!
❄️ *Kirib kelayotgan Yangi Yil muborak bo'lsin.*", 
'parse_mode'=>'markdown', 
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>'🏠 Bosh menu','callback_data'=>"bosh"],],
    
 ]
])
]);   
}


 
//Admin Panella

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝Userga Xabar"],['text'=>"📝Guruhga Xabar"]],
[['text'=>"📋Userga Forward"],['text'=>"📋Guruhga Forward"]],
[['text'=>"🚫 Bekor qilish"]],
]
]);

if(isset($text)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }

if($cid == "private" or $cid == $admin){
if($text == "/panel" or $text == "/admin"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Assalamu alaykum <a href='tg://user?id=$uid'>$name</a>!</b>\n\n<i>Kerakli boʻlimni tanlang!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$panel,
]);
}
}


    if($text == "📝Userga Xabar" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Userlarga yuboriladigan habarni kiriting!!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$panel,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $cid == $admin){
      if($text == "🚫 Bekor qilish"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"<b>$text</b>",
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Habar Barcha Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
       if($text == "📝Guruhga Xabar" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Guruhlarga yuboriladigan habar matnini kiriting!!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$panel,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $cid == $admin){
      if($text == "🚫 Bekor qilish"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"<b>$text</b>",
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }

if($tx == "🚫 Bekor qilish" and $cid==$admin){
 bot('sendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'markdown',
'text'=>"*Bekor qilindi!*",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
sleep(0.7);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Assalomu alaykum! \nBotimizga Xush Kelibsiz!*\n\n_Oʻzingizga Kerakli Boʻlimni Tanlang!!_",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'✏ Nik Yasash','callback_data'=>"nik"],],
[['text'=>'📊 Statistika','callback_data'=>"stat"],],
]
]),
]);
unlink("stat/$chat_id.step");
}

//Forward Yuborish

if($text == "📋Userga Forward" and $cid == $admin){
 bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ *Userlarga forward qilinadigan xabarni kiriting!*",
'parse_mode'=>'markdown',
]);
file_put_contents("stat/$chat_id.step","forward");
}

if($step == "forward" and $cid == $admin){
if($text == "🚫 Bekor qilish"){
unlink("stat/$chat_id.step");
}else{ 
$soni=substr_count($userlar,"\n")-1;
$ids=explode("\n",$userlar);
foreach($ids as $id){
$user = bot('forwardMessage', [
'chat_id'=>$id,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);
unlink("stat/$chat_id.step");
}
if($user){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Xabar *$soni* userga yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("stat/$cid.step");
}
}
}   

if($text == "📋Guruhga Forward" and $cid == $admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ *Guruhlarga forward qilinadigan xabarni kiriting!*",
'parse_mode'=>'markdown',
]);
file_put_contents("stat/$cid.step","sendfor");
}

if($step == "sendfor" and $cid == $admin){
if($text == "🚫 Bekor qilish"){
unlink("stat/$cid.step");
}else{ 
$soni=substr_count($guruhlar,"\n")-1;
$ids=explode("\n",$guruhlar);
foreach($ids as $id){
$guruh = bot('forwardMessage', [
'chat_id'=>$id,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);
unlink("stat/$cid.step");
}
if($guruh){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Xabar *$soni* guruhga yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("stat/$cid.step");
}
}
}     

if($text == "👥Guruhlar" and $cid==$admin){
bot('sendDocument',[
'document'=>new CURLFile("stat/group.list"),
'chat_id'=>$admin,
'caption'=>"📝 *ID To‘plam Guruhlar!*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
}

if($text == "👤Userlar" and $cid==$admin){
bot('sendDocument',[
'document'=>new CURLFile("stat/user.list"),
'chat_id'=>$admin,
'caption'=>"📝 *ID To‘plam Userlar!*",
'parse_mode'=>'markdown',
'reply_to_message_id'=> $mid,
]);
}


$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
mkdir("Bot");

if($data=="nik"){
bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"<b><u>Iltimos Ismingizni kiriting</u></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"bosh"]],
]
]), 
]);
file_put_contents("Bot/$callcid.step","nik");
}
if($step=="nik"){
 if($text){
 	if($text != "/start"){
$nik1 = $text;
$nik1 = str_replace('a', 'Á', $nik1);
$nik1 = str_replace('b', 'ß', $nik1);
$nik1 = str_replace('c', 'Č', $nik1);
$nik1 = str_replace('d', 'Ď', $nik1);
$nik1 = str_replace('e', 'Ĕ', $nik1);
$nik1 = str_replace('f', 'Ŧ', $nik1);
$nik1 = str_replace('g', 'Ğ', $nik1);
$nik1 = str_replace('h', 'Ĥ', $nik1);
$nik1 = str_replace('i', 'Ĩ', $nik1);
$nik1 = str_replace('j', 'Ĵ', $nik1);
$nik1 = str_replace('k', 'Ķ', $nik1);
$nik1 = str_replace('l', 'Ĺ', $nik1);
$nik1 = str_replace('m', 'M', $nik1);
$nik1 = str_replace('n', 'Ń', $nik1);
$nik1 = str_replace('o', 'Ő', $nik1);
$nik1 = str_replace('p', 'P', $nik1);
$nik1 = str_replace('q', 'Q', $nik1);
$nik1 = str_replace('r', 'Ŕ', $nik1);
$nik1 = str_replace('s', 'Ś', $nik1);
$nik1 = str_replace('t', 'Ť', $nik1);
$nik1 = str_replace('u', 'Ú', $nik1);
$nik1 = str_replace('v', 'V', $nik1);
$nik1 = str_replace('w', 'Ŵ', $nik1);
$nik1 = str_replace('x', 'Ж', $nik1);
$nik1 = str_replace('y', 'Ŷ', $nik1);
$nik1 = str_replace('z', 'Ź', $nik1);
$nik1 = str_replace('A', 'Á', $nik1);
$nik1 = str_replace('B', 'ß', $nik1);
$nik1 = str_replace('C', 'Č', $nik1);
$nik1 = str_replace('D', 'Ď', $nik1);
$nik1 = str_replace('E', 'Ĕ', $nik1);
$nik1 = str_replace('F', 'Ŧ', $nik1);
$nik1 = str_replace('G', 'Ğ', $nik1);
$nik1 = str_replace('H', 'Ĥ', $nik1);
$nik1 = str_replace('I', 'Ĩ', $nik1);
$nik1 = str_replace('J', 'Ĵ', $nik1);
$nik1 = str_replace('K', 'Ķ', $nik1);
$nik1 = str_replace('L', 'Ĺ', $nik1);
$nik1 = str_replace('M', 'M', $nik1);
$nik1 = str_replace('N', 'Ń', $nik1);
$nik1 = str_replace('O', 'Ő', $nik1);
$nik1 = str_replace('P', 'P', $nik1);
$nik1 = str_replace('Q', 'Q', $nik1);
$nik1 = str_replace('R', 'Ŕ', $nik1);
$nik1 = str_replace('S', 'Ś', $nik1);
$nik1 = str_replace('T', 'Ť', $nik1);
$nik1 = str_replace('U', 'Ú', $nik1);
$nik1 = str_replace('V', 'V', $nik1);
$nik1 = str_replace('W', 'Ŵ', $nik1);
$nik1 = str_replace('X', 'Ж', $nik1);
$nik1 = str_replace('Y', 'Ŷ', $nik1);
$nik1 = str_replace('Z', 'Ź', $nik1);

 	$nik2 = $text;
$nik2 = str_replace('q', 'ϙᷭ', $nik2);
   $nik2 = str_replace('w', 'ᴡᷱ', $nik2);
   $nik2 = str_replace('e', 'ᴇⷷ', $nik2);
   $nik2 = str_replace('r', 'ʀᷢ', $nik2);
   $nik2 = str_replace('t', 'ᴛͭ', $nik2);
   $nik2 = str_replace('y', 'ʏꙷ', $nik2);
   $nik2 = str_replace('u', 'ᴜͧ', $nik2);
   $nik2 = str_replace('i', 'ɪͥ', $nik2);
   $nik2 = str_replace('o', 'ᴏⷪ', $nik2);
   $nik2 = str_replace('p', 'ᴘᷮ', $nik2);
   $nik2 = str_replace('a', 'ᴀⷽ', $nik2);
   $nik2 = str_replace('s', 'sᷤ', $nik2);
   $nik2 = str_replace('d', 'ᴅͩ', $nik2);
   $nik2 = str_replace('f', 'ғᷫ', $nik2);
   $nik2 = str_replace('g', 'ɢᷛ', $nik2);
   $nik2 = str_replace('h', 'ʜⷩ', $nik2);
   $nik2 = str_replace('j', 'ᴊᷯ', $nik2);
   $nik2 = str_replace('k', 'ᴋⷦ', $nik2);
   $nik2 = str_replace('l', 'ʟᷞ', $nik2);
   $nik2 = str_replace('z', 'ᴢᷦ', $nik2);
   $nik2 = str_replace('x', 'xͯ', $nik2);
   $nik2 = str_replace('c', 'ᴄⷭ', $nik2);
   $nik2 = str_replace('v', 'ᴠͮ', $nik2);
   $nik2 = str_replace('b', 'ʙⷡ', $nik2);
   $nik2 = str_replace('n', 'ɴᷡ', $nik2);
   $nik2 = str_replace('m', 'ᴍᷟ', $nik2);
   $nik2 = str_replace('Q', 'ϙᷭ', $nik2);
   $nik2 = str_replace('W', 'ᴡᷱ', $nik2);
   $nik2 = str_replace('E', 'ᴇⷷ', $nik2);
   $nik2 = str_replace('R', 'ʀᷢ', $nik2);
   $nik2 = str_replace('T', 'ᴛͭ', $nik2);
   $nik2 = str_replace('Y', 'ʏꙷ', $nik2);
   $nik2 = str_replace('U', 'ᴜͧ', $nik2);
   $nik2 = str_replace('I', 'ɪͥ', $nik2);
   $nik2 = str_replace('O', 'ᴏⷪ', $nik2);
   $nik2 = str_replace('P', 'ᴘᷮ', $nik2);
   $nik2 = str_replace('A', 'ᴀⷽ', $nik2);
   $nik2 = str_replace('S', 'sᷤ', $nik2);
   $nik2 = str_replace('D', 'ᴅͩ', $nik2);
   $nik2 = str_replace('F', 'ғᷫ', $nik2);
   $nik2 = str_replace('G', 'ɢᷛ', $nik2);
   $nik2 = str_replace('H', 'ʜⷩ', $nik2);
   $nik2 = str_replace('J', 'ᴊᷯ', $nik2);
   $nik2 = str_replace('K', 'ᴋⷦ', $nik2);
   $nik2 = str_replace('L', 'ʟᷞ', $nik2);
   $nik2 = str_replace('Z', 'ᴢᷦ', $nik2);
   $nik2 = str_replace('X', 'xͯ', $nik2);
   $nik2 = str_replace('C', 'ᴄⷭ', $nik2);
   $nik2 = str_replace('V', 'ᴠͮ', $nik2);
   $nik2 = str_replace('B', 'ʙⷡ', $nik2);
   $nik2 = str_replace('N', 'ɴᷡ', $nik2);
   $nik2 = str_replace('M', 'ᴍᷟ', $nik2);

$nik3 = $text;
$nik3 = str_replace('a', 'α', $nik3);
$nik3 = str_replace('b', 'в', $nik3);
$nik3 = str_replace('c', '¢', $nik3);
$nik3 = str_replace('d', '∂', $nik3);
$nik3 = str_replace('e', 'є', $nik3);
$nik3 = str_replace('f', 'ƒ', $nik3);
$nik3 = str_replace('g', 'g', $nik3);
$nik3 = str_replace('h', 'н', $nik3);
$nik3 = str_replace('i', 'ι', $nik3);
$nik3 = str_replace('j', 'נ', $nik3);
$nik3 = str_replace('k', 'к', $nik3);
$nik3 = str_replace('l', 'ℓ', $nik3);
$nik3 = str_replace('m', 'м', $nik3);
$nik3 = str_replace('n', 'η', $nik3);
$nik3 = str_replace('o', 'σ', $nik3);
$nik3 = str_replace('p', 'ρ', $nik3);
$nik3 = str_replace('q', 'q', $nik3);
$nik3 = str_replace('r', 'я', $nik3);
$nik3 = str_replace('s', 'ѕ', $nik3);
$nik3 = str_replace('t', 'т', $nik3);
$nik3 = str_replace('u', 'υ', $nik3);
$nik3 = str_replace('v', 'ν', $nik3);
$nik3 = str_replace('w', 'ω', $nik3);
$nik3 = str_replace('x', 'χ', $nik3);
$nik3 = str_replace('y', 'у', $nik3);
$nik3 = str_replace('z', 'z', $nik3);
$nik3 = str_replace('A', 'α', $nik3);
$nik3 = str_replace('B', 'в', $nik3);
$nik3 = str_replace('C', '¢', $nik3);
$nik3 = str_replace('D', '∂', $nik3);
$nik3 = str_replace('E', 'є', $nik3);
$nik3 = str_replace('F', 'ƒ', $nik3);
$nik3 = str_replace('G', 'g', $nik3);
$nik3 = str_replace('H', 'н', $nik3);
$nik3 = str_replace('I', 'ι', $nik3);
$nik3 = str_replace('J', 'נ', $nik3);
$nik3 = str_replace('K', 'к', $nik3);
$nik3 = str_replace('L', 'ℓ', $nik3);
$nik3 = str_replace('M', 'м', $nik3);
$nik3 = str_replace('N', 'η', $nik3);
$nik3 = str_replace('O', 'σ', $nik3);
$nik3 = str_replace('P', 'ρ', $nik3);
$nik3 = str_replace('Q', 'q', $nik3);
$nik3 = str_replace('R', 'я', $nik3);
$nik3 = str_replace('S', 'ѕ', $nik3);
$nik3 = str_replace('T', 'т', $nik3);
$nik3 = str_replace('U', 'υ', $nik3);
$nik3 = str_replace('V', 'ν', $nik3);
$nik3 = str_replace('W', 'ω', $nik3);
$nik3 = str_replace('X', 'χ', $nik3);
$nik3 = str_replace('Y', 'у', $nik3);
$nik3 = str_replace('Z', 'z', $nik3);

$nik4 = $text;
$nik4 = str_replace('a', 'ค', $nik4);
$nik4 = str_replace('b', '๒', $nik4);
$nik4 = str_replace('c', 'ς', $nik4);
$nik4 = str_replace('d', '๔', $nik4);
$nik4 = str_replace('e', 'є', $nik4);
$nik4 = str_replace('f', 'Ŧ', $nik4);
$nik4 = str_replace('g', 'g', $nik4);
$nik4 = str_replace('h', 'ђ', $nik4);
$nik4 = str_replace('i', 'เ', $nik4);
$nik4 = str_replace('j', 'ן', $nik4);
$nik4 = str_replace('k', 'к', $nik4);
$nik4 = str_replace('l', 'l', $nik4);
$nik4 = str_replace('m', '๓', $nik4);
$nik4 = str_replace('n', 'ภ', $nik4);
$nik4 = str_replace('o', '๏', $nik4);
$nik4 = str_replace('p', 'ק', $nik4);
$nik4 = str_replace('q', 'ợ', $nik4);
$nik4 = str_replace('r', 'г', $nik4);
$nik4 = str_replace('s', 'ร', $nik4);
$nik4 = str_replace('t', 't', $nik4);
$nik4 = str_replace('u', 'ย', $nik4);
$nik4 = str_replace('v', 'ש', $nik4);
$nik4 = str_replace('w', 'ฬ', $nik4);
$nik4 = str_replace('x', 'א', $nik4);
$nik4 = str_replace('y', 'ץ', $nik4);
$nik4 = str_replace('z', 'z', $nik4);

$nik4 = str_replace('A', 'ค', $nik4);
$nik4 = str_replace('B', '๒', $nik4);
$nik4 = str_replace('C', 'ς', $nik4);
$nik4 = str_replace('D', '๔', $nik4);
$nik4 = str_replace('E', 'є', $nik4);
$nik4 = str_replace('F', 'Ŧ', $nik4);
$nik4 = str_replace('G', 'g', $nik4);
$nik4 = str_replace('H', 'ђ', $nik4);
$nik4 = str_replace('I', 'เ', $nik4);
$nik4 = str_replace('J', 'ן', $nik4);
$nik4 = str_replace('K', 'к', $nik4);
$nik4 = str_replace('L', 'l', $nik4);
$nik4 = str_replace('M', '๓', $nik4);
$nik4 = str_replace('N', 'ภ', $nik4);
$nik4 = str_replace('O', '๏', $nik4);
$nik4 = str_replace('P', 'ק', $nik4);
$nik4 = str_replace('Q', 'ợ', $nik4);
$nik4 = str_replace('R', 'г', $nik4);
$nik4 = str_replace('S', 'ร', $nik4);
$nik4 = str_replace('T', 't', $nik4);
$nik4 = str_replace('U', 'ย', $nik4);
$nik4 = str_replace('V', 'ש', $nik4);
$nik4 = str_replace('W', 'ฬ', $nik4);
$nik4 = str_replace('X', 'א', $nik4);
$nik4 = str_replace('Y', 'ץ', $nik4);
$nik4 = str_replace('Z', 'z', $nik4);

$nik5 = $text;
$nik5 = str_replace('a', 'ä', $nik5);
$nik5 = str_replace('b', 'b', $nik5);
$nik5 = str_replace('c', 'ċ', $nik5);
$nik5 = str_replace('d', 'd', $nik5);
$nik5 = str_replace('e', 'ë', $nik5);
$nik5 = str_replace('f', 'f', $nik5);
$nik5 = str_replace('g', 'ġ', $nik5);
$nik5 = str_replace('h', 'h', $nik5);
$nik5 = str_replace('i', 'ï', $nik5);
$nik5 = str_replace('j', 'j', $nik5);
$nik5 = str_replace('k', 'k', $nik5);
$nik5 = str_replace('l', 'l', $nik5);
$nik5 = str_replace('m', 'm', $nik5);
$nik5 = str_replace('n', 'n', $nik5);
$nik5 = str_replace('o', 'ö', $nik5);
$nik5 = str_replace('p', 'p', $nik5);
$nik5 = str_replace('q', 'q', $nik5);
$nik5 = str_replace('r', 'r', $nik5);
$nik5 = str_replace('s', 's', $nik5);
$nik5 = str_replace('t', 't', $nik5);
$nik5 = str_replace('u', 'ü', $nik5);
$nik5 = str_replace('v', 'v', $nik5);
$nik5 = str_replace('w', 'w', $nik5);
$nik5 = str_replace('x', 'x', $nik5);
$nik5 = str_replace('y', 'ÿ', $nik5);
$nik5 = str_replace('z', 'ż', $nik5);

$nik5 = str_replace('A', 'ä', $nik5);
$nik5 = str_replace('B', 'b', $nik5);
$nik5 = str_replace('C', 'ċ', $nik5);
$nik5 = str_replace('D', 'd', $nik5);
$nik5 = str_replace('E', 'ë', $nik5);
$nik5 = str_replace('F', 'f', $nik5);
$nik5 = str_replace('G', 'ġ', $nik5);
$nik5 = str_replace('H', 'h', $nik5);
$nik5 = str_replace('I', 'ï', $nik5);
$nik5 = str_replace('J', 'j', $nik5);
$nik5 = str_replace('K', 'k', $nik5);
$nik5 = str_replace('L', 'l', $nik5);
$nik5 = str_replace('M', 'm', $nik5);
$nik5 = str_replace('N', 'n', $nik5);
$nik5 = str_replace('O', 'ö', $nik5);
$nik5 = str_replace('P', 'p', $nik5);
$nik5 = str_replace('Q', 'q', $nik5);
$nik5 = str_replace('R', 'r', $nik5);
$nik5 = str_replace('S', 's', $nik5);
$nik5 = str_replace('T', 't', $nik5);
$nik5 = str_replace('U', 'ü', $nik5);
$nik5 = str_replace('V', 'v', $nik5);
$nik5 = str_replace('W', 'w', $nik5);
$nik5 = str_replace('X', 'x', $nik5);
$nik5 = str_replace('Y', 'ÿ', $nik5);
$nik5 = str_replace('Z', 'ż', $nik5);

$nik6 = $text;
$nik6 = str_replace('a', 'ⓐ', $nik6);
$nik6 = str_replace('b', 'ⓑ', $nik6);
$nik6 = str_replace('c', 'ⓒ', $nik6);
$nik6 = str_replace('d', 'ⓓ', $nik6);
$nik6 = str_replace('e', 'ⓔ', $nik6);
$nik6 = str_replace('f', 'ⓕ', $nik6);
$nik6 = str_replace('g', 'ⓖ', $nik6);
$nik6 = str_replace('h', 'ⓗ', $nik6);
$nik6 = str_replace('i', 'ⓘ', $nik6);
$nik6 = str_replace('j', 'ⓙ', $nik6);
$nik6 = str_replace('k', 'ⓚ', $nik6);
$nik6 = str_replace('l', 'ⓛ', $nik6);
$nik6 = str_replace('m', 'ⓜ', $nik6);
$nik6 = str_replace('n', 'ⓝ', $nik6);
$nik6 = str_replace('o', 'ⓞ', $nik6);
$nik6 = str_replace('p', 'ⓟ', $nik6);
$nik6 = str_replace('q', 'ⓠ', $nik6);
$nik6 = str_replace('r', 'ⓡ', $nik6);
$nik6 = str_replace('s', 'ⓢ', $nik6);
$nik6 = str_replace('t', 'ⓣ', $nik6);
$nik6 = str_replace('u', 'ⓤ', $nik6);
$nik6 = str_replace('v', 'ⓥ', $nik6);
$nik6 = str_replace('w', 'ⓦ', $nik6);
$nik6 = str_replace('x', 'ⓧ', $nik6);
$nik6 = str_replace('y', 'ⓨ', $nik6);
$nik6 = str_replace('z', 'ⓩ', $nik6);

$nik6 = str_replace('A', 'Ⓐ', $nik6);
$nik6 = str_replace('B', 'Ⓑ', $nik6);
$nik6 = str_replace('C', 'Ⓒ', $nik6);
$nik6 = str_replace('D', 'Ⓓ', $nik6);
$nik6 = str_replace('E', 'Ⓔ', $nik6);
$nik6 = str_replace('F', 'Ⓕ', $nik6);
$nik6 = str_replace('G', 'Ⓖ', $nik6);
$nik6 = str_replace('H', 'Ⓗ', $nik6);
$nik6 = str_replace('I', 'Ⓘ', $nik6);
$nik6 = str_replace('J', 'Ⓙ', $nik6);
$nik6 = str_replace('K', 'Ⓚ', $nik6);
$nik6 = str_replace('L', 'Ⓛ', $nik6);
$nik6 = str_replace('M', 'Ⓜ', $nik6);
$nik6 = str_replace('N', 'Ⓝ', $nik6);
$nik6 = str_replace('O', 'Ⓞ', $nik6);
$nik6 = str_replace('P', 'Ⓟ', $nik6);
$nik6 = str_replace('Q', 'Ⓠ', $nik6);
$nik6 = str_replace('R', 'Ⓡ', $nik6);
$nik6 = str_replace('S', 'Ⓢ', $nik6);
$nik6 = str_replace('T', 'Ⓣ', $nik6);
$nik6 = str_replace('U', 'Ⓤ', $nik6);
$nik6 = str_replace('V', 'Ⓥ', $nik6);
$nik6 = str_replace('W', 'Ⓦ', $nik6);
$nik6 = str_replace('X', 'Ⓧ', $nik6);
$nik6 = str_replace('Y', 'Ⓨ', $nik6);
$nik6 = str_replace('Z', 'Ⓩ', $nik6);

$nik7 = $text;
$nik7 = str_replace('a', 'ᴬ', $nik7);
$nik7 = str_replace('b', 'ᴮ', $nik7);
$nik7 = str_replace('c', 'ᶜ', $nik7);
$nik7 = str_replace('d', 'ᴰ', $nik7);
$nik7 = str_replace('e', 'ᴱ', $nik7);
$nik7 = str_replace('f', 'ᶠ', $nik7);
$nik7 = str_replace('g', 'ᴳ', $nik7);
$nik7 = str_replace('h', 'ᴴ', $nik7);
$nik7 = str_replace('i', 'ᴵ', $nik7);
$nik7 = str_replace('j', 'ᴶ', $nik7);
$nik7 = str_replace('k', 'ᴷ', $nik7);
$nik7 = str_replace('l', 'ᴸ', $nik7);
$nik7 = str_replace('m', 'ᴹ', $nik7);
$nik7 = str_replace('n', 'ᴺ', $nik7);
$nik7 = str_replace('o', 'ᴼ', $nik7);
$nik7 = str_replace('p', 'ᴾ', $nik7);
$nik7 = str_replace('q', 'ᵠ', $nik7);
$nik7 = str_replace('r', 'ᴿ', $nik7);
$nik7 = str_replace('s', 'ˁ', $nik7);
$nik7 = str_replace('t', 'ᵀ', $nik7);
$nik7 = str_replace('u', 'ᵁ', $nik7);
$nik7 = str_replace('v', 'ᵛ', $nik7);
$nik7 = str_replace('w', 'ᵂ', $nik7);
$nik7 = str_replace('x', 'ˣ', $nik7);
$nik7 = str_replace('y', 'ʸ', $nik7);
$nik7 = str_replace('z', 'ᶻ', $nik7);
$nik7 = str_replace('A', 'ᴬ', $nik7);
$nik7 = str_replace('B', 'ᴮ', $nik7);
$nik7 = str_replace('C', 'ᶜ', $nik7);
$nik7 = str_replace('D', 'ᴰ', $nik7);
$nik7 = str_replace('E', 'ᴱ', $nik7);
$nik7 = str_replace('F', 'ᶠ', $nik7);
$nik7 = str_replace('G', 'ᴳ', $nik7);
$nik7 = str_replace('H', 'ᴴ', $nik7);
$nik7 = str_replace('I', 'ᴵ', $nik7);
$nik7 = str_replace('J', 'ᴶ', $nik7);
$nik7 = str_replace('K', 'ᴷ', $nik7);
$nik7 = str_replace('L', 'ᴸ', $nik7);
$nik7 = str_replace('M', 'ᴹ', $nik7);
$nik7 = str_replace('N', 'ᴺ', $nik7);
$nik7 = str_replace('O', 'ᴼ', $nik7);
$nik7 = str_replace('P', 'ᴾ', $nik7);
$nik7 = str_replace('Q', 'ᵠ', $nik7);
$nik7 = str_replace('R', 'ᴿ', $nik7);
$nik7 = str_replace('S', 'ˁ', $nik7);
$nik7 = str_replace('T', 'ᵀ', $nik7);
$nik7 = str_replace('U', 'ᵁ', $nik7);
$nik7 = str_replace('V', 'ᵛ', $nik7);
$nik7 = str_replace('W', 'ᵂ', $nik7);
$nik7 = str_replace('X', 'ˣ', $nik7);
$nik7 = str_replace('Y', 'ʸ', $nik7);
$nik7 = str_replace('Z', 'ᶻ', $nik7);

$nik8 = $text;
$nik8 = str_replace('a', 'a̷', $nik8);
$nik8 = str_replace('b', 'b̷', $nik8);
$nik8 = str_replace('c', 'c̷', $nik8);
$nik8 = str_replace('d', 'd̷', $nik8);
$nik8 = str_replace('e', 'e̷', $nik8);
$nik8 = str_replace('f', 'f̷', $nik8);
$nik8 = str_replace('g', 'g̷', $nik8);
$nik8 = str_replace('h', 'h̷', $nik8);
$nik8 = str_replace('i', 'i̷', $nik8);
$nik8 = str_replace('j', 'j̷', $nik8);
$nik8 = str_replace('k', 'k̷', $nik8);
$nik8 = str_replace('l', 'l̷', $nik8);
$nik8 = str_replace('m', 'm̷', $nik8);
$nik8 = str_replace('n', 'n̷', $nik8);
$nik8 = str_replace('o', 'o̷', $nik8);
$nik8 = str_replace('p', 'p̷', $nik8);
$nik8 = str_replace('q', 'q̷', $nik8);
$nik8 = str_replace('r', 'r̷', $nik8);
$nik8 = str_replace('s', 's̷', $nik8);
$nik8 = str_replace('t', 't̷', $nik8);
$nik8 = str_replace('u', 'u̷', $nik8);
$nik8 = str_replace('v', 'v̷', $nik8);
$nik8 = str_replace('w', 'w̷', $nik8);
$nik8 = str_replace('x', 'x̷', $nik8);
$nik8 = str_replace('y', 'y̷', $nik8);
$nik8 = str_replace('z', 'z̷', $nik8);
$nik8 = str_replace('A', 'a̷', $nik8);
$nik8 = str_replace('B', 'b̷', $nik8);
$nik8 = str_replace('C', 'c̷', $nik8);
$nik8 = str_replace('D', 'd̷', $nik8);
$nik8 = str_replace('E', 'e̷', $nik8);
$nik8 = str_replace('F', 'f̷', $nik8);
$nik8 = str_replace('G', 'g̷', $nik8);
$nik8 = str_replace('H', 'h̷', $nik8);
$nik8 = str_replace('I', 'i̷', $nik8);
$nik8 = str_replace('J', 'j̷', $nik8);
$nik8 = str_replace('K', 'k̷', $nik8);
$nik8 = str_replace('L', 'l̷', $nik8);
$nik8 = str_replace('M', 'm̷', $nik8);
$nik8 = str_replace('N', 'n̷', $nik8);
$nik8 = str_replace('O', 'o̷', $nik8);
$nik8 = str_replace('P', 'p̷', $nik8);
$nik8 = str_replace('Q', 'q̷', $nik8);
$nik8 = str_replace('R', 'r̷', $nik8);
$nik8 = str_replace('S', 's̷', $nik8);
$nik8 = str_replace('T', 't̷', $nik8);
$nik8 = str_replace('U', 'u̷', $nik8);
$nik8 = str_replace('V', 'v̷', $nik8);
$nik8 = str_replace('W', 'w̷', $nik8);
$nik8 = str_replace('X', 'x̷', $nik8);
$nik8 = str_replace('Y', 'y̷', $nik8);
$nik8 = str_replace('Z', 'z̷', $nik8);
//@itmaktabi1
$nik9 = $text;
$nik9 = str_replace('q', 'Ǫ' , $nik9);
  	 $nik9 = str_replace('w', 'Ш' , $nik9);
	 $nik9 = str_replace('e', 'Ξ' , $nik9);
  	 $nik9 = str_replace('r', 'Я' , $nik9);
	 $nik9 = str_replace('t', '₮' , $nik9);
  	 $nik9 = str_replace('y', 'Џ' , $nik9);
	 $nik9 = str_replace('u', 'Ǚ' , $nik9);
  	 $nik9 = str_replace('i', 'ł' , $nik9);
	 $nik9 = str_replace('o', 'Ф' , $nik9);
  	 $nik9 = str_replace('p', 'ק' , $nik9);
	 $nik9 = str_replace('a', 'Λ' , $nik9);
  	 $nik9 = str_replace('s', 'Ŝ' , $nik9);
	 $nik9 = str_replace('d', 'Ð' , $nik9);
  	 $nik9 = str_replace('f', 'Ŧ' , $nik9);
	 $nik9 = str_replace('g', '₲' , $nik9);
  	 $nik9 = str_replace('h', 'Ḧ' , $nik9);
	 $nik9 = str_replace('j', 'J' , $nik9);
  	 $nik9 = str_replace('k', 'К' , $nik9);
	 $nik9 = str_replace('l', 'Ł' , $nik9);
  	 $nik9 = str_replace('z', 'Ꙃ' , $nik9);
	 $nik9 = str_replace('x', 'Ж' , $nik9);
  	 $nik9 = str_replace('c', 'Ͼ' , $nik9);
	 $nik9 = str_replace('v', 'Ṽ' , $nik9);
  	 $nik9 = str_replace('b', 'Б' , $nik9);
  	 $nik9 = str_replace('n', 'Л' , $nik9);
	 $nik9 = str_replace('m', 'Ɱ' , $nik9);
	
	$nik9 = str_replace('Q', 'Ǫ' , $nik9);
  	 $nik9 = str_replace('W', 'Ш' , $nik9);
	 $nik9 = str_replace('E', 'Ξ' , $nik9);
  	 $nik9 = str_replace('R', 'Я' , $nik9);
	 $nik9 = str_replace('T', '₮' , $nik9);
  	 $nik9 = str_replace('Y', 'Џ' , $nik9);
	 $nik9 = str_replace('U', 'Ǚ' , $nik9);
  	 $nik9 = str_replace('I', 'ł' , $nik9);
	 $nik9 = str_replace('O', 'Ф' , $nik9);
  	 $nik9 = str_replace('P', 'ק' , $nik9);
	 $nik9 = str_replace('A', 'Λ' , $nik9);
  	 $nik9 = str_replace('S', 'Ŝ' , $nik9);
	 $nik9 = str_replace('D', 'Ð' , $nik9);
  	 $nik9 = str_replace('F', 'Ŧ' , $nik9);
	 $nik9 = str_replace('G', '₲' , $nik9);
  	 $nik9 = str_replace('H', 'Ḧ' , $nik9);
	 $nik9 = str_replace('J', 'J' , $nik9);
  	 $nik9 = str_replace('K', 'К' , $nik9);
	 $nik9 = str_replace('L', 'Ł' , $nik9);
  	 $nik9 = str_replace('Z', 'Ꙃ' , $nik9);
	 $nik9 = str_replace('X', 'Ж' , $nik9);
  	 $nik9 = str_replace('C', 'Ͼ' , $nik9);
	 $nik9 = str_replace('V', 'Ṽ' , $nik9);
  	 $nik9 = str_replace('B', 'Б' , $nik9);
  	 $nik9 = str_replace('N', 'Л' , $nik9);
	 $nik9 = str_replace('M', 'Ɱ' , $nik9);
	
$nik10 = $text;
 $nik10 = str_replace('q', 'Ｑ' , $nik10);
  	 $nik10 = str_replace('w', 'Ｗ' , $nik10);
	 $nik10 = str_replace('e', 'Ｅ' , $nik10);
  	 $nik10 = str_replace('r', 'Ｒ' , $nik10);
	 $nik10 = str_replace('t', 'Ｔ' , $nik10);
  	 $nik10 = str_replace('y', 'Ｙ' , $nik10);
	 $nik10 = str_replace('u', 'Ｕ' , $nik10);
  	 $nik10 = str_replace('i', 'Ｉ' , $nik10);
	 $nik10 = str_replace('o', 'Ｏ' , $nik10);
  	 $nik10 = str_replace('p', 'Ｐ' , $nik10);
	 $nik10 = str_replace('a', 'Ａ' , $nik10);
  	 $nik10 = str_replace('s', 'Ｓ' , $nik10);
	 $nik10 = str_replace('d', 'Ｄ' , $nik10);
  	 $nik10 = str_replace('f', 'Բ' , $nik10);
	 $nik10 = str_replace('g', 'Ｇ' , $nik10);
  	 $nik10 = str_replace('h', 'Ｈ' , $nik10);
	 $nik10 = str_replace('j', 'Ｊ' , $nik10);
  	 $nik10 = str_replace('k', 'Ｋ' , $nik10);
	 $nik10 = str_replace('l', 'Ｌ' , $nik10);
  	 $nik10 = str_replace('z', 'Ｚ' , $nik10);
	 $nik10 = str_replace('x', 'Ｘ' , $nik10);
  	 $nik10 = str_replace('c', 'С' , $nik10);
	 $nik10 = str_replace('v', 'Ｖ' , $nik10);
  	 $nik10 = str_replace('b', 'Ｂ' , $nik10);
  	 $nik10 = str_replace('n', 'Ｎ' , $nik10);
	 $nik10 = str_replace('m', 'Ⅿ' , $nik10);
	
	$nik10 = str_replace('Q', 'Ｑ' , $nik10);
  	 $nik10 = str_replace('W', 'Ｗ' , $nik10);
	 $nik10 = str_replace('E', 'Ｅ' , $nik10);
  	 $nik10 = str_replace('R', 'Ｒ' , $nik10);
	 $nik10 = str_replace('T', 'Ｔ' , $nik10);
  	 $nik10 = str_replace('Y', 'Ｙ' , $nik10);
	 $nik10 = str_replace('U', 'Ｕ' , $nik10);
  	 $nik10 = str_replace('I', 'Ｉ' , $nik10);
	 $nik10 = str_replace('O', 'Ｏ' , $nik10);
  	 $nik10 = str_replace('P', 'Ｐ' , $nik10);
	 $nik10 = str_replace('A', 'Ａ' , $nik10);
  	 $nik10 = str_replace('S', 'Ｓ' , $nik10);
	 $nik10 = str_replace('D', 'Ｄ' , $nik10);
  	 $nik10 = str_replace('F', 'Բ' , $nik10);
	 $nik10 = str_replace('G', 'Ｇ' , $nik10);
  	 $nik10 = str_replace('H', 'Ｈ' , $nik10);
	 $nik10 = str_replace('J', 'Ｊ' , $nik10);
  	 $nik10 = str_replace('K', 'Ｋ' , $nik10);
	 $nik10 = str_replace('L', 'Ｌ' , $nik10);
  	 $nik10 = str_replace('Z', 'Ｚ' , $nik10);
	 $nik10 = str_replace('X', 'Ｘ' , $nik10);
  	 $nik10 = str_replace('C', 'С' , $nik10);
	 $nik10 = str_replace('V', 'Ｖ' , $nik10);
  	 $nik10 = str_replace('B', 'Ｂ' , $nik10);
  	 $nik10 = str_replace('N', 'Ｎ' , $nik10);
	 $nik10 = str_replace('M', 'Ⅿ' , $nik10);
	
$nik11 = $text;
$nik11 = str_replace('a', 'ɑ̝̚', $nik11);
$nik11 = str_replace('b', 'в̝̚', $nik11);
$nik11 = str_replace('c', 'c̝̚', $nik11);
$nik11 = str_replace('d', 'd̝̚', $nik11);
$nik11 = str_replace('e', 'ǝ̝̚', $nik11);
$nik11 = str_replace('f', 'г̵̵', $nik11);
$nik11 = str_replace('g', 'G̝̚', $nik11);
$nik11 = str_replace('h', 'н̝̚', $nik11);
$nik11 = str_replace('i', 'ı̝̚', $nik11);
$nik11 = str_replace('j', 'τ', $nik11);
$nik11 = str_replace('k', 'к̝', $nik11);
$nik11 = str_replace('l', 'l̝̚', $nik11);
$nik11 = str_replace('m', 'м̝̚', $nik11);
$nik11 = str_replace('n', 'и̝̚', $nik11);
$nik11 = str_replace('o', 'σ̝̚', $nik11);
$nik11 = str_replace('p', 'ρ̝̚', $nik11);
$nik11 = str_replace('q', 'Q̝̚', $nik11);
$nik11 = str_replace('r', 'я̝̚', $nik11);
$nik11 = str_replace('s', 'ƨ̝̚', $nik11);
$nik11 = str_replace('t', 'т̝̚', $nik11);
$nik11 = str_replace('u', 'υ̝̚', $nik11);
$nik11 = str_replace('v', 'ν̝̚', $nik11);
$nik11 = str_replace('w', 'ω̝̚', $nik11);
$nik11 = str_replace('x', 'x̝̚', $nik11);
$nik11 = str_replace('y', 'ч̝̚', $nik11);
$nik11 = str_replace('z', 'z̝̚', $nik11);

$nik11 = str_replace('A', 'ɑ̝̚', $nik11);
$nik11 = str_replace('B', 'в̝̚', $nik11);
$nik11 = str_replace('C', 'c̝̚', $nik11);
$nik11 = str_replace('D', 'd̝̚', $nik11);
$nik11 = str_replace('E', 'ǝ̝̚', $nik11);
$nik11 = str_replace('F', 'г̵̵', $nik11);
$nik11 = str_replace('G', 'G̝̚', $nik11);
$nik11 = str_replace('H', 'н̝̚', $nik11);
$nik11 = str_replace('I', 'ı̝̚', $nik11);
$nik11 = str_replace('J', 'τ', $nik11);
$nik11 = str_replace('K', 'к̝', $nik11);
$nik11 = str_replace('L', 'l̝̚', $nik11);
$nik11 = str_replace('M', 'м̝̚', $nik11);
$nik11 = str_replace('N', 'и̝̚', $nik11);
$nik11 = str_replace('O', 'σ̝̚', $nik11);
$nik11 = str_replace('P', 'ρ̝̚', $nik11);
$nik11 = str_replace('Q', 'Q̝̚', $nik11);
$nik11 = str_replace('R', 'я̝̚', $nik11);
$nik11 = str_replace('S', 'ƨ̝̚', $nik11);
$nik11 = str_replace('T', 'т̝̚', $nik11);
$nik11 = str_replace('U', 'υ̝̚', $nik11);
$nik11 = str_replace('V', 'ν̝̚', $nik11);
$nik11 = str_replace('W', 'ω̝̚', $nik11);
$nik11 = str_replace('X', 'x̝̚', $nik11);
$nik11 = str_replace('Y', 'ч̝̚', $nik11);
$nik11 = str_replace('Z', 'z̝̚', $nik11);


$nik12 = $text;
$nik12 = str_replace('a', 'ɑ̃̾', $nik12);
$nik12 = str_replace('b', 'в̃̾', $nik12);
$nik12 = str_replace('c', 'c̃̾', $nik12);
$nik12 = str_replace('d', 'd̃̾', $nik12);
$nik12 = str_replace('e', 'ǝ̃̾', $nik12);
$nik12 = str_replace('f', 'г̵̵', $nik12);
$nik12 = str_replace('g', 'G̃̾', $nik12);
$nik12 = str_replace('h', 'н̃̾', $nik12);
$nik12 = str_replace('i', 'ı̃̾', $nik12);
$nik12 = str_replace('j', 'τ̃̾', $nik12);
$nik12 = str_replace('k', 'к̃̾', $nik12);
$nik12 = str_replace('l', 'l̃̾', $nik12);
$nik12 = str_replace('m', 'м̃̾', $nik12);
$nik12 = str_replace('n', 'и̃̾', $nik12);
$nik12 = str_replace('o', 'σ̃̾', $nik12);
$nik12 = str_replace('p', 'ρ̃̾', $nik12);
$nik12 = str_replace('q', 'Q̃̾', $nik12);
$nik12 = str_replace('r', 'я̃̾', $nik12);
$nik12 = str_replace('s', 'ƨ̃̾', $nik12);
$nik12 = str_replace('t', 'т̃̾', $nik12);
$nik12 = str_replace('u', 'υ̃̾', $nik12);
$nik12 = str_replace('v', 'ν̃̾', $nik12);
$nik12 = str_replace('w', 'ω̃̾', $nik12);
$nik12 = str_replace('x', 'x̃̾', $nik12);
$nik12 = str_replace('y', 'ч̃̾', $nik12);
$nik12 = str_replace('z', 'z̃̾', $nik12);

$nik12 = str_replace('A', 'ɑ̃̾', $nik12);
$nik12 = str_replace('B', 'в̃̾', $nik12);
$nik12 = str_replace('C', 'c̃̾', $nik12);
$nik12 = str_replace('D', 'd̃̾', $nik12);
$nik12 = str_replace('E', 'ǝ̃̾', $nik12);
$nik12 = str_replace('F', 'г̵̵', $nik12);
$nik12 = str_replace('G', 'G̃̾', $nik12);
$nik12 = str_replace('H', 'н̃̾', $nik12);
$nik12 = str_replace('I', 'ı̃̾', $nik12);
$nik12 = str_replace('J', 'τ̃̾', $nik12);
$nik12 = str_replace('K', 'к̃̾', $nik12);
$nik12 = str_replace('L', 'l̃̾', $nik12);
$nik12 = str_replace('M', 'м̃̾', $nik12);
$nik12 = str_replace('N', 'и̃̾', $nik12);
$nik12 = str_replace('O', 'σ̃̾', $nik12);
$nik12 = str_replace('P', 'ρ̃̾', $nik12);
$nik12 = str_replace('Q', 'Q̃̾', $nik12);
$nik12 = str_replace('R', 'я̃̾', $nik12);
$nik12 = str_replace('S', 'ƨ̃̾', $nik12);
$nik12 = str_replace('T', 'т̃̾', $nik12);
$nik12 = str_replace('U', 'υ̃̾', $nik12);
$nik12 = str_replace('V', 'ν̃̾', $nik12);
$nik12 = str_replace('W', 'ω̃̾', $nik12);
$nik12 = str_replace('X', 'x̃̾', $nik12);
$nik12 = str_replace('Y', 'ч̃̾', $nik12);
$nik12 = str_replace('Z', 'z̃̾', $nik12);


$nik13 = $text;
$nik13 = str_replace('a', '̅α', $nik13);
$nik13 = str_replace('b', '̅в', $nik13);
$nik13 = str_replace('c', '̅c', $nik13);
$nik13 = str_replace('d', '̅ɒ', $nik13);
$nik13 = str_replace('e', '̅є', $nik13);
$nik13 = str_replace('f', '̅f', $nik13);
$nik13 = str_replace('g', '̅ɢ', $nik13);
$nik13 = str_replace('h', '̅н', $nik13);
$nik13 = str_replace('i', '̅ɪ', $nik13);
$nik13 = str_replace('j', '̅ᴊ', $nik13);
$nik13 = str_replace('k', '̅ĸ', $nik13);
$nik13 = str_replace('l', '̅ℓ', $nik13);
$nik13 = str_replace('m', '̅м', $nik13);
$nik13 = str_replace('n', '̅и', $nik13);
$nik13 = str_replace('o', '̅σ', $nik13);
$nik13 = str_replace('p', '̅ρ', $nik13);
$nik13 = str_replace('q', '̅q', $nik13);
$nik13 = str_replace('r', '̅я', $nik13);
$nik13 = str_replace('s', '̅s', $nik13);
$nik13 = str_replace('t', '̅τ', $nik13);
$nik13 = str_replace('u', '̅υ', $nik13);
$nik13 = str_replace('v', '̅v', $nik13);
$nik13 = str_replace('w', '̅ω', $nik13);
$nik13 = str_replace('x', '̅x', $nik13);
$nik13 = str_replace('y', '̅y', $nik13);
$nik13 = str_replace('z', '̅z', $nik13);
$nik13 = str_replace('A', '̅α', $nik13);
$nik13 = str_replace('B', '̅в', $nik13);
$nik13 = str_replace('C', '̅c', $nik13);
$nik13 = str_replace('D', '̅ɒ', $nik13);
$nik13 = str_replace('E', '̅є', $nik13);
$nik13 = str_replace('F', '̅f', $nik13);
$nik13 = str_replace('G', '̅ɢ', $nik13);
$nik13 = str_replace('H', '̅н', $nik13);
$nik13 = str_replace('I', '̅ɪ', $nik13);
$nik13 = str_replace('J', '̅ᴊ', $nik13);
$nik13 = str_replace('K', '̅ĸ', $nik13);
$nik13 = str_replace('L', '̅ℓ', $nik13);
$nik13 = str_replace('M', '̅м', $nik13);
$nik13 = str_replace('N', '̅и', $nik13);
$nik13 = str_replace('O', '̅σ', $nik13);
$nik13 = str_replace('P', '̅ρ', $nik13);
$nik13 = str_replace('Q', '̅q', $nik13);
$nik13 = str_replace('R', '̅я', $nik13);
$nik13 = str_replace('S', '̅s', $nik13);
$nik13 = str_replace('T', '̅τ', $nik13);
$nik13 = str_replace('U', '̅υ', $nik13);
$nik13 = str_replace('V', '̅v', $nik13);
$nik13 = str_replace('W', '̅ω', $nik13);
$nik13 = str_replace('X', '̅x', $nik13);
$nik13 = str_replace('Y', '̅y', $nik13);
$nik13 = str_replace('Z', '̅z', $nik13);


$nik14 = $text;
$nik14 = str_replace('a', 'ɐ', $nik14);
$nik14 = str_replace('b', 'q', $nik14);
$nik14 = str_replace('c', 'ɔ', $nik14);
$nik14 = str_replace('d', 'p', $nik14);
$nik14 = str_replace('e', 'ǝ', $nik14);
$nik14 = str_replace('f', 'ɟ', $nik14);
$nik14 = str_replace('g', 'ƃ', $nik14);
$nik14 = str_replace('h', 'ɥ', $nik14);
$nik14 = str_replace('i', 'ı', $nik14);
$nik14 = str_replace('j', 'ſ', $nik14);
$nik14 = str_replace('k', 'ʞ', $nik14);
$nik14 = str_replace('l', 'ן', $nik14);
$nik14 = str_replace('m', 'ɯ', $nik14);
$nik14 = str_replace('n', 'u', $nik14);
$nik14 = str_replace('o', 'o', $nik14);
$nik14 = str_replace('p', 'd', $nik14);
$nik14 = str_replace('q', 'b', $nik14);
$nik14 = str_replace('r', 'ɹ', $nik14);
$nik14 = str_replace('s', 's', $nik14);
$nik14 = str_replace('t', 'ʇ', $nik14);
$nik14 = str_replace('u', 'n', $nik14);
$nik14 = str_replace('v', 'ʌ', $nik14);
$nik14 = str_replace('w', 'ʍ', $nik14);
$nik14 = str_replace('x', 'x', $nik14);
$nik14 = str_replace('y', 'ʎ', $nik14);
$nik14 = str_replace('z', 'z', $nik14);

$nik14 = str_replace('A', 'ɐ', $nik14);
$nik14 = str_replace('B', 'q', $nik14);
$nik14 = str_replace('C', 'ɔ', $nik14);
$nik14 = str_replace('D', 'p', $nik14);
$nik14 = str_replace('E', 'ǝ', $nik14);
$nik14 = str_replace('F', 'ɟ', $nik14);
$nik14 = str_replace('G', 'ƃ', $nik14);
$nik14 = str_replace('H', 'ɥ', $nik14);
$nik14 = str_replace('I', 'ı', $nik14);
$nik14 = str_replace('J', 'ſ', $nik14);
$nik14 = str_replace('K', 'ʞ', $nik14);
$nik14 = str_replace('L', 'ן', $nik14);
$nik14 = str_replace('M', 'ɯ', $nik14);
$nik14 = str_replace('N', 'u', $nik14);
$nik14 = str_replace('O', 'o', $nik14);
$nik14 = str_replace('P', 'd', $nik14);
$nik14 = str_replace('Q', 'b', $nik14);
$nik14 = str_replace('R', 'ɹ', $nik14);
$nik14 = str_replace('S', 's', $nik14);
$nik14 = str_replace('T', 'ʇ', $nik14);
$nik14 = str_replace('U', 'n', $nik14);
$nik14 = str_replace('V', 'ʌ', $nik14);
$nik14 = str_replace('W', 'ʍ', $nik14);
$nik14 = str_replace('X', 'x', $nik14);
$nik14 = str_replace('Y', 'ʎ', $nik14);
$nik14 = str_replace('Z', 'z', $nik14);


$nik15 = $text;
$nik15 = str_replace('a', 'Ā', $nik15);
$nik15 = str_replace('b', '乃', $nik15);
$nik15 = str_replace('c', 'Ċ', $nik15);
$nik15 = str_replace('d', 'Ɖ', $nik15);
$nik15 = str_replace('e', 'Ē', $nik15);
$nik15 = str_replace('f', '₣', $nik15);
$nik15 = str_replace('g', 'Ǥ', $nik15);
$nik15 = str_replace('h', 'Ħ', $nik15);
$nik15 = str_replace('i', 'Ī', $nik15);
$nik15 = str_replace('j', 'J', $nik15);
$nik15 = str_replace('k', '₭', $nik15);
$nik15 = str_replace('l', 'Ŀ', $nik15);
$nik15 = str_replace('m', 'M', $nik15);
$nik15 = str_replace('n', '₦', $nik15);
$nik15 = str_replace('o', 'Ō', $nik15);
$nik15 = str_replace('p', 'P', $nik15);
$nik15 = str_replace('q', 'Ǭ', $nik15);
$nik15 = str_replace('r', 'Ṝ', $nik15);
$nik15 = str_replace('s', 'Ƨ', $nik15);
$nik15 = str_replace('t', 'Ŧ', $nik15);
$nik15 = str_replace('u', 'Ū', $nik15);
$nik15 = str_replace('v', '∀', $nik15);
$nik15 = str_replace('w', 'ฬ', $nik15);
$nik15 = str_replace('x', 'Ж', $nik15);
$nik15 = str_replace('y', 'Ȳ', $nik15);
$nik15 = str_replace('z', 'Ƶ', $nik15);

$nik15 = str_replace('A', 'Ā', $nik15);
$nik15 = str_replace('B', '乃', $nik15);
$nik15 = str_replace('C', 'Ċ', $nik15);
$nik15 = str_replace('D', 'Ɖ', $nik15);
$nik15 = str_replace('E', 'Ē', $nik15);
$nik15 = str_replace('F', '₣', $nik15);
$nik15 = str_replace('G', 'Ǥ', $nik15);
$nik15 = str_replace('H', 'Ħ', $nik15);
$nik15 = str_replace('I', 'Ī', $nik15);
$nik15 = str_replace('J', 'J', $nik15);
$nik15 = str_replace('K', '₭', $nik15);
$nik15 = str_replace('L', 'Ŀ', $nik15);
$nik15 = str_replace('M', 'M', $nik15);
$nik15 = str_replace('N', '₦', $nik15);
$nik15 = str_replace('O', 'Ō', $nik15);
$nik15 = str_replace('P', 'P', $nik15);
$nik15 = str_replace('Q', 'Ǭ', $nik15);
$nik15 = str_replace('R', 'Ṝ', $nik15);
$nik15 = str_replace('S', 'Ƨ', $nik15);
$nik15 = str_replace('T', 'Ŧ', $nik15);
$nik15 = str_replace('U', 'Ū', $nik15);
$nik15 = str_replace('V', '∀', $nik15);
$nik15 = str_replace('W', 'ฬ', $nik15);
$nik15 = str_replace('X', 'Ж', $nik15);
$nik15 = str_replace('Y', 'Ȳ', $nik15);
$nik15 = str_replace('Z', 'Ƶ', $nik15);


$nik16 = $text;
$nik16 = str_replace('a', 'ᾋ', $nik16);
$nik16 = str_replace('b', 'ϐ', $nik16);
$nik16 = str_replace('c', 'Ƈ', $nik16);
$nik16 = str_replace('d', 'Ɖ', $nik16);
$nik16 = str_replace('e', 'Ἕ', $nik16);
$nik16 = str_replace('f', 'Ғ', $nik16);
$nik16 = str_replace('g', 'Ɠ', $nik16);
$nik16 = str_replace('h', 'Ἤ', $nik16);
$nik16 = str_replace('i', 'Ἷ', $nik16);
$nik16 = str_replace('j', 'Ј', $nik16);
$nik16 = str_replace('k', 'Ḱ', $nik16);
$nik16 = str_replace('l', 'Ŀ', $nik16);
$nik16 = str_replace('m', 'Ṃ', $nik16);
$nik16 = str_replace('n', 'Ɲ', $nik16);
$nik16 = str_replace('o', 'Ὃ', $nik16);
$nik16 = str_replace('p', 'Ƥ', $nik16);
$nik16 = str_replace('q', 'Q', $nik16);
$nik16 = str_replace('r', 'Ȓ', $nik16);
$nik16 = str_replace('s', 'Ṩ', $nik16);
$nik16 = str_replace('t', 'Ҭ', $nik16);
$nik16 = str_replace('u', 'Ȗ', $nik16);
$nik16 = str_replace('v', 'V', $nik16);
$nik16 = str_replace('w', 'Ẃ', $nik16);
$nik16 = str_replace('x', 'Ẋ', $nik16);
$nik16 = str_replace('y', 'Ὓ', $nik16);
$nik16 = str_replace('z', 'Ẕ', $nik16);
//@itmaktabi1
$nik16 = str_replace('A', 'ᾋ', $nik16);
$nik16 = str_replace('B', 'ϐ', $nik16);
$nik16 = str_replace('C', 'Ƈ', $nik16);
$nik16 = str_replace('D', 'Ɖ', $nik16);
$nik16 = str_replace('E', 'Ἕ', $nik16);
$nik16 = str_replace('F', 'Ғ', $nik16);
$nik16 = str_replace('G', 'Ɠ', $nik16);
$nik16 = str_replace('H', 'Ἤ', $nik16);
$nik16 = str_replace('I', 'Ἷ', $nik16);
$nik16 = str_replace('J', 'Ј', $nik16);
$nik16 = str_replace('K', 'Ḱ', $nik16);
$nik16 = str_replace('L', 'Ŀ', $nik16);
$nik16 = str_replace('M', 'Ṃ', $nik16);
$nik16 = str_replace('N', 'Ɲ', $nik16);
$nik16 = str_replace('O', 'Ὃ', $nik16);
$nik16 = str_replace('P', 'Ƥ', $nik16);
$nik16 = str_replace('Q', 'Q', $nik16);
$nik16 = str_replace('R', 'Ȓ', $nik16);
$nik16 = str_replace('S', 'Ṩ', $nik16);
$nik16 = str_replace('T', 'Ҭ', $nik16);
$nik16 = str_replace('U', 'Ȗ', $nik16);
$nik16 = str_replace('V', 'V', $nik16);
$nik16 = str_replace('W', 'Ẃ', $nik16);
$nik16 = str_replace('X', 'Ẋ', $nik16);
$nik16 = str_replace('Y', 'Ὓ', $nik16);
$nik16 = str_replace('Z', 'Ẕ', $nik16);

//@itmaktabi1
$nik17 = $text;
$nik17 = str_replace('a', 'მ', $nik17);
$nik17 = str_replace('b', 'ჩ', $nik17);
$nik17 = str_replace('c', 'ƈ', $nik17);
$nik17 = str_replace('d', 'ძ', $nik17);
$nik17 = str_replace('e', 'ε', $nik17);
$nik17 = str_replace('f', 'բ', $nik17);
$nik17 = str_replace('g', 'ց', $nik17);
$nik17 = str_replace('h', 'հ', $nik17);
$nik17 = str_replace('i', 'ἶ', $nik17);
$nik17 = str_replace('j', 'ʝ', $nik17);
$nik17 = str_replace('k', 'ƙ', $nik17);
$nik17 = str_replace('l', 'l', $nik17);
$nik17 = str_replace('m', 'ო', $nik17);
$nik17 = str_replace('n', 'ղ', $nik17);
$nik17 = str_replace('o', 'օ', $nik17);
$nik17 = str_replace('p', 'ր', $nik17);
$nik17 = str_replace('q', 'գ', $nik17);
$nik17 = str_replace('r', 'ɾ', $nik17);
$nik17 = str_replace('s', 'ʂ', $nik17);
$nik17 = str_replace('t', 'է', $nik17);
$nik17 = str_replace('u', 'մ', $nik17);
$nik17 = str_replace('v', 'ν', $nik17);
$nik17 = str_replace('w', 'ω', $nik17);
$nik17 = str_replace('x', 'ჯ', $nik17);
$nik17 = str_replace('y', 'ყ', $nik17);
$nik17 = str_replace('z', 'z', $nik17);
//@itmaktabi1
$nik17 = str_replace('A', 'მ', $nik17);
$nik17 = str_replace('B', 'ჩ', $nik17);
$nik17 = str_replace('C', 'ƈ', $nik17);
$nik17 = str_replace('D', 'ძ', $nik17);
$nik17 = str_replace('E', 'ε', $nik17);
$nik17 = str_replace('F', 'բ', $nik17);
$nik17 = str_replace('G', 'ց', $nik17);
$nik17 = str_replace('H', 'հ', $nik17);
$nik17 = str_replace('I', 'ἶ', $nik17);
$nik17 = str_replace('J', 'ʝ', $nik17);
$nik17 = str_replace('K', 'ƙ', $nik17);
$nik17 = str_replace('L', 'l', $nik17);
$nik17 = str_replace('M', 'ო', $nik17);
$nik17 = str_replace('N', 'ղ', $nik17);
$nik17 = str_replace('O', 'օ', $nik17);
$nik17 = str_replace('P', 'ր', $nik17);
$nik17 = str_replace('Q', 'գ', $nik17);
$nik17 = str_replace('R', 'ɾ', $nik17);
$nik17 = str_replace('S', 'ʂ', $nik17);
$nik17 = str_replace('T', 'է', $nik17);
$nik17 = str_replace('U', 'մ', $nik17);
$nik17 = str_replace('V', 'ν', $nik17);
$nik17 = str_replace('W', 'ω', $nik17);
$nik17 = str_replace('X', 'ჯ', $nik17);
$nik17 = str_replace('Y', 'ყ', $nik17);
$nik17 = str_replace('Z', 'z', $nik17);
//@itmaktabi1

$nik18 = $text;
$nik18 = str_replace('a', 'λ', $nik18);
$nik18 = str_replace('b', 'ß', $nik18);
$nik18 = str_replace('c', 'Ȼ', $nik18);
$nik18 = str_replace('d', 'ɖ', $nik18);
$nik18 = str_replace('e', 'ε', $nik18);
$nik18 = str_replace('f', 'ʃ', $nik18);
$nik18 = str_replace('g', 'Ģ', $nik18);
$nik18 = str_replace('h', 'ħ', $nik18);
$nik18 = str_replace('i', 'ί', $nik18);
$nik18 = str_replace('j', 'ĵ', $nik18);
$nik18 = str_replace('k', 'κ', $nik18);
$nik18 = str_replace('l', 'ι', $nik18);
$nik18 = str_replace('m', 'ɱ', $nik18);
$nik18 = str_replace('n', 'ɴ', $nik18);
$nik18 = str_replace('o', 'Θ', $nik18);
$nik18 = str_replace('p', 'ρ', $nik18);
$nik18 = str_replace('q', 'ƣ', $nik18);
$nik18 = str_replace('r', 'ર', $nik18);
$nik18 = str_replace('s', 'Ș', $nik18);
$nik18 = str_replace('t', 'τ', $nik18);
$nik18 = str_replace('u', 'Ʋ', $nik18);
$nik18 = str_replace('v', 'ν', $nik18);
$nik18 = str_replace('w', 'ώ', $nik18);
$nik18 = str_replace('x', 'Χ', $nik18);
$nik18 = str_replace('y', 'ϓ', $nik18);
$nik18 = str_replace('z', 'Հ', $nik18);
//@itmaktabi1
$nik18 = str_replace('A', 'λ', $nik18);
$nik18 = str_replace('B', 'ß', $nik18);
$nik18 = str_replace('C', 'Ȼ', $nik18);
$nik18 = str_replace('D', 'ɖ', $nik18);
$nik18 = str_replace('E', 'ε', $nik18);
$nik18 = str_replace('F', 'ʃ', $nik18);
$nik18 = str_replace('G', 'Ģ', $nik18);
$nik18 = str_replace('H', 'ħ', $nik18);
$nik18 = str_replace('I', 'ί', $nik18);
$nik18 = str_replace('J', 'ĵ', $nik18);
$nik18 = str_replace('K', 'κ', $nik18);
$nik18 = str_replace('L', 'ι', $nik18);
$nik18 = str_replace('M', 'ɱ', $nik18);
$nik18 = str_replace('N', 'ɴ', $nik18);
$nik18 = str_replace('O', 'Θ', $nik18);
$nik18 = str_replace('P', 'ρ', $nik18);
$nik18 = str_replace('Q', 'ƣ', $nik18);
$nik18 = str_replace('R', 'ર', $nik18);
$nik18 = str_replace('S', 'Ș', $nik18);
$nik18 = str_replace('T', 'τ', $nik18);
$nik18 = str_replace('U', 'Ʋ', $nik18);
$nik18 = str_replace('V', 'ν', $nik18);
$nik18 = str_replace('W', 'ώ', $nik18);
$nik18 = str_replace('X', 'Χ', $nik18);
$nik18 = str_replace('Y', 'ϓ', $nik18);
$nik18 = str_replace('Z', 'Հ', $nik18);

//@itmaktabi1
$nik19 = $text;
$nik19 = str_replace('a', '🅐', $nik19);
$nik19 = str_replace('b', '🅑', $nik19);
$nik19 = str_replace('c', '🅒', $nik19);
$nik19 = str_replace('d', '🅓', $nik19);
$nik19 = str_replace('e', '🅔', $nik19);
$nik19 = str_replace('f', '🅕', $nik19);
$nik19 = str_replace('g', '🅖', $nik19);
$nik19 = str_replace('h', '🅗', $nik19);
$nik19 = str_replace('i', '🅘', $nik19);
$nik19 = str_replace('j', '🅙', $nik19);
$nik19 = str_replace('k', '🅚', $nik19);
$nik19 = str_replace('l', '🅛', $nik19);
$nik19 = str_replace('m', '🅜', $nik19);
$nik19 = str_replace('n', '🅝', $nik19);
$nik19 = str_replace('o', '🅞', $nik19);
$nik19 = str_replace('p', '🅟', $nik19);
$nik19 = str_replace('q', '🅠', $nik19);
$nik19 = str_replace('r', '🅡', $nik19);
$nik19 = str_replace('s', '🅢', $nik19);
$nik19 = str_replace('t', '🅣', $nik19);
$nik19 = str_replace('u', '🅤', $nik19);
$nik19 = str_replace('v', '🅥', $nik19);
$nik19 = str_replace('w', '🅦', $nik19);
$nik19 = str_replace('x', '🅧', $nik19);
$nik19 = str_replace('y', '🅨', $nik19);
$nik19 = str_replace('z', '🅩', $nik19);

$nik19 = str_replace('A', '🅐', $nik19);
$nik19 = str_replace('B', '🅑', $nik19);
$nik19 = str_replace('C', '🅒', $nik19);
$nik19 = str_replace('D', '🅓', $nik19);
$nik19 = str_replace('E', '🅔', $nik19);
$nik19 = str_replace('F', '🅕', $nik19);
$nik19 = str_replace('G', '🅖', $nik19);
$nik19 = str_replace('H', '🅗', $nik19);
$nik19 = str_replace('I', '🅘', $nik19);
$nik19 = str_replace('J', '🅙', $nik19);
$nik19 = str_replace('K', '🅚', $nik19);
$nik19 = str_replace('L', '🅛', $nik19);
$nik19 = str_replace('M', '🅜', $nik19);
$nik19 = str_replace('N', '🅝', $nik19);
$nik19 = str_replace('O', '🅞', $nik19);
$nik19 = str_replace('P', '🅟', $nik19);
$nik19 = str_replace('Q', '🅠', $nik19);
$nik19 = str_replace('R', '🅡', $nik19);
$nik19 = str_replace('S', '🅢', $nik19);
$nik19 = str_replace('T', '🅣', $nik19);
$nik19 = str_replace('U', '🅤', $nik19);
$nik19 = str_replace('V', '🅥', $nik19);
$nik19 = str_replace('W', '🅦', $nik19);
$nik19 = str_replace('X', '🅧', $nik19);
$nik19 = str_replace('Y', '🅨', $nik19);
$nik19 = str_replace('Z', '🅩', $nik19);

//@itmaktabi1
$nik20 = $text;
$nik20 = str_replace('a', '۰۪۫A۪۫۰', $nik20);
$nik20 = str_replace('b', '۰۪۫B۪۫۰', $nik20);
$nik20 = str_replace('c', '۰۪۫C۪۫۰', $nik20);
$nik20 = str_replace('d', '۰۪۫D۪۫۰', $nik20);
$nik20 = str_replace('e', '۰۪۫E۪۫۰', $nik20);
$nik20 = str_replace('f', '۰۪۫F۪۫۰', $nik20);
$nik20 = str_replace('g', '۰۪۫G۪۫۰', $nik20);
$nik20 = str_replace('h', '۰۪۫H۪۫۰', $nik20);
$nik20 = str_replace('i', '۰۪۫I۪۫۰', $nik20);
$nik20 = str_replace('j', '۰۪۫J۪۫۰', $nik20);
$nik20 = str_replace('k', '۰۪۫K۪۫۰', $nik20);
$nik20 = str_replace('l', '۰۪۫L۪۫۰', $nik20);
$nik20 = str_replace('m', '۰۪۫M۪۫۰', $nik20);
$nik20 = str_replace('n', '۰۪۫N۪۫۰', $nik20);
$nik20 = str_replace('o', '۰۪۫O۪۫۰', $nik20);
$nik20 = str_replace('p', '۰۪۫P۪۫۰', $nik20);
$nik20 = str_replace('q', '۰۪۫Q۪۫۰', $nik20);
$nik20 = str_replace('r', '۰۪۫R۪۫۰', $nik20);
$nik20 = str_replace('s', '۰۪۫S۪۫۰', $nik20);
$nik20 = str_replace('t', '۰۪۫T۪۫۰', $nik20);
$nik20 = str_replace('u', '۰۪۫U۪۫۰', $nik20);
$nik20 = str_replace('v', '۰۪۫V۪۫۰', $nik20);
$nik20 = str_replace('w', '۰۪۫W۪۫۰', $nik20);
$nik20 = str_replace('x', '۰۪۫X۪۫۰', $nik20);
$nik20 = str_replace('y', '۰۪۫Y۪۫۰', $nik20);
$nik20 = str_replace('z', '۰۪۫Z۪۫۰', $nik20);
$nik20 = str_replace('A', '۰۪۫A۪۫۰', $nik20);
$nik20 = str_replace('B', '۰۪۫B۪۫۰', $nik20);
$nik20 = str_replace('C', '۰۪۫C۪۫۰', $nik20);
$nik20 = str_replace('D', '۰۪۫D۪۫۰', $nik20);
$nik20 = str_replace('E', '۰۪۫E۪۫۰', $nik20);
$nik20 = str_replace('F', '۰۪۫F۪۫۰', $nik20);
$nik20 = str_replace('G', '۰۪۫G۪۫۰', $nik20);
$nik20 = str_replace('H', '۰۪۫H۪۫۰', $nik20);
$nik20 = str_replace('I', '۰۪۫I۪۫۰', $nik20);
$nik20 = str_replace('J', '۰۪۫J۪۫۰', $nik20);
$nik20 = str_replace('K', '۰۪۫K۪۫۰', $nik20);
$nik20 = str_replace('L', '۰۪۫L۪۫۰', $nik20);
$nik20 = str_replace('M', '۰۪۫M۪۫۰', $nik20);
$nik20 = str_replace('N', '۰۪۫N۪۫۰', $nik20);
$nik20 = str_replace('O', '۰۪۫O۪۫۰', $nik20);
$nik20 = str_replace('P', '۰۪۫P۪۫۰', $nik20);
$nik20 = str_replace('Q', '۰۪۫Q۪۫۰', $nik20);
$nik20 = str_replace('R', '۰۪۫R۪۫۰', $nik20);
$nik20 = str_replace('S', '۰۪۫S۪۫۰', $nik20);
$nik20 = str_replace('T', '۰۪۫T۪۫۰', $nik20);
$nik20 = str_replace('U', '۰۪۫U۪۫۰', $nik20);
$nik20 = str_replace('V', '۰۪۫V۪۫۰', $nik20);
$nik20 = str_replace('W', '۰۪۫W۪۫۰', $nik20);
$nik20 = str_replace('X', '۰۪۫X۪۫۰', $nik20);
$nik20 = str_replace('Y', '۰۪۫Y۪۫۰', $nik20);
$nik20 = str_replace('Z', '۰۪۫Z۪۫۰', $nik20);

file_put_contents("Bot/$cid.ism34","$nik34"); 
file_put_contents("Bot/$cid.ism33","$nik33"); 
file_put_contents("Bot/$cid.ism32","$nik32"); 
file_put_contents("Bot/$cid.ism31","$nik31"); 
file_put_contents("Bot/$cid.ism30","$nik30"); 
file_put_contents("Bot/$cid.ism29","$nik29"); 
file_put_contents("Bot/$cid.ism28","$nik28"); 
file_put_contents("Bot/$cid.ism27","$nik27"); 
file_put_contents("Bot/$cid.ism26","$nik26"); 
file_put_contents("Bot/$cid.ism25","$nik25"); 
file_put_contents("Bot/$cid.ism24","$nik24"); 
file_put_contents("Bot/$cid.ism23","$nik23"); 
file_put_contents("Bot/$cid.ism22","$nik22"); 
file_put_contents("Bot/$cid.ism21","$nik21"); 
file_put_contents("Bot/$cid.ism20","$nik20"); 
file_put_contents("Bot/$cid.ism19","$nik19"); 
file_put_contents("Bot/$cid.ism18","$nik18"); 
file_put_contents("Bot/$cid.ism17","$nik17"); 
file_put_contents("Bot/$cid.ism16","$nik16"); 
file_put_contents("Bot/$cid.ism15","$nik15"); 
file_put_contents("Bot/$cid.ism14","$nik14"); 
file_put_contents("Bot/$cid.ism13","$nik13"); 
file_put_contents("Bot/$cid.ism12","$nik12"); 
file_put_contents("Bot/$cid.ism11","$nik11"); 
file_put_contents("Bot/$cid.ism10","$nik10"); 
file_put_contents("Bot/$cid.ism9","$nik9"); 
file_put_contents("Bot/$cid.ism8","$nik8"); 
file_put_contents("Bot/$cid.ism7","$nik7"); 
file_put_contents("Bot/$cid.ism6","$nik6"); 
file_put_contents("Bot/$cid.ism5","$nik5"); 
file_put_contents("Bot/$cid.ism4","$nik4"); 
file_put_contents("Bot/$cid.ism3","$nik3"); 
file_put_contents("Bot/$cid.ism2","$nik1"); 
file_put_contents("Bot/$cid.ism","$nik2"); 
file_put_contents("Bot/$cid.step","");

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nik1\n\nNusxalash uchun bosing: <code>$nik1</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"no"],['text'=>"1/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik2"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}
}
}

if($data == "no"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "Ushbu tugma o`zgarmaydi",
       'show_alert'=>false,
        ]);
    }

if($data=="nik1"){
	$nikim1=file_get_contents("Bot/$callcid.ism2"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim1\n\nNusxalash uchun bosing: <code>$nikim1</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"no"],['text'=>"1/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik2"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}
//@itmaktabi1
if($data=="nik2"){
	$nikim2=file_get_contents("Bot/$callcid.ism"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim2\n\nNusxalash uchun bosing: <code>$nikim2</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik1"],['text'=>"2/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik3"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}     

if($data=="nik3"){
	$nikim3=file_get_contents("Bot/$callcid.ism3"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim3\n\nNusxalash uchun bosing: <code>$nikim3</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik2"],['text'=>"3/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik4"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik4"){
	$nikim4=file_get_contents("Bot/$callcid.ism4"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim4\n\nNusxalash uchun bosing: <code>$nikim4</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik3"],['text'=>"4/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik5"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}
//@itmaktabi1
if($data=="nik5"){
	$nikim5=file_get_contents("Bot/$callcid.ism5"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim5\n\nNusxalash uchun bosing: <code>$nikim5</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik4"],['text'=>"5/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik6"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik6"){
	$nikim6=file_get_contents("Bot/$callcid.ism6"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim6\n\nNusxalash uchun bosing: <code>$nikim6</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik5"],['text'=>"6/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik7"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik7"){
	$nikim7=file_get_contents("Bot/$callcid.ism7"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim7\n\nNusxalash uchun bosing: <code>$nikim7</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik6"],['text'=>"7/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik8"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik8"){
	$nikim8=file_get_contents("Bot/$callcid.ism8"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim8\n\nNusxalash uchun bosing: <code>$nikim8</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik7"],['text'=>"8/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik9"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik9"){
	$nikim9=file_get_contents("Bot/$callcid.ism9"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim9\n\nNusxalash uchun bosing: <code>$nikim9</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik8"],['text'=>"9/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik10"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}
//@itmaktabi1
if($data=="nik10"){
	$nikim10=file_get_contents("Bot/$callcid.ism10"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim10\n\nNusxalash uchun bosing: <code>$nikim10</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik9"],['text'=>"10/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik11"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}


if($data=="nik11"){
	$nikim11=file_get_contents("Bot/$callcid.ism11"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim11\n\nNusxalash uchun bosing: <code>$nikim11</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik10"],['text'=>"11/11",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik12"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik12"){
	$nikim12=file_get_contents("Bot/$callcid.ism12"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim12\n\nNusxalash uchun bosing: <code>$nikim12</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik11"],['text'=>"12/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik13"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik13"){
	$nikim13=file_get_contents("Bot/$callcid.ism13"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim13\n\nNusxalash uchun bosing: <code>$nikim13</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik12"],['text'=>"13/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik14"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik14"){
	$nikim14=file_get_contents("Bot/$callcid.ism14"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim14\n\nNusxalash uchun bosing: <code>$nikim14</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik13"],['text'=>"14/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik15"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik15"){
	$nikim15=file_get_contents("Bot/$callcid.ism15"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim15\n\nNusxalash uchun bosing: <code>$nikim15</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik14"],['text'=>"15/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik16"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik16"){
	$nikim16=file_get_contents("Bot/$callcid.ism16"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim16\n\nNusxalash uchun bosing: <code>$nikim16</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik15"],['text'=>"16/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik17"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik17"){
	$nikim17=file_get_contents("Bot/$callcid.ism17"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim17\n\nNusxalash uchun bosing: <code>$nikim17</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik16"],['text'=>"17/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik18"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik18"){
	$nikim18=file_get_contents("Bot/$callcid.ism18"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim18\n\nNusxalash uchun bosing: <code>$nikim18</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik17"],['text'=>"18/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik19"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik19"){
	$nikim19=file_get_contents("Bot/$callcid.ism19"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim19\n\nNusxalash uchun bosing: <code>$nikim19</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik18"],['text'=>"19/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik20"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

if($data=="nik20"){
	$nikim20=file_get_contents("Bot/$callcid.ism20"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim20\n\nNusxalash uchun bosing: <code>$nikim20</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik19"],['text'=>"20/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"no"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"bosh"]],
]
]),
]);
}

//@itmaktabi1