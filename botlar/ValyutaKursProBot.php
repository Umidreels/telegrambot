<?php
ini_set('display_errors', 1);
ob_start();
error_reporting(0);

/* Dasturchi @VisualCoderUz
Manba @SupperCoderUz
Mualliflik huquqi hurmat qilinsin */

define('API_KEY', 'LITE_TOKEN');
$admin = "LITE_ID";
$bot = bot('getme', ['bot'])->result->username;
$botnik = bot('getme', ['bot'])->result->first_name;
echo file_get_contents('https://api.telegram.org/bot' . API_KEY . '/setwebhook?url=' . $_SERVER["SERVER_NAME"] . '' . $_SERVER["SCRIPT_NAME"] . '&allowed_updates=["message","edited_message","callback_query","my_chat_member","chat_member"]');

function bot($method, $datas = [])
{
$url = "https://api.unlimited-telegram.org/bot" . API_KEY . "/$method";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
$res = curl_exec($ch);
if (curl_error($ch)) {
var_dump(curl_error($ch));
} else {
return json_decode($res);
}
}
function get($h)
{
return file_get_contents($h);
}

function joinchat($id)
{
global $mid;
$array = array("inline_keyboard");
$get = file_get_contents("tizim/kanal.txt");
$ex = explode("\n", $get);
if ($get == null) {
return true;
} else {
for ($i = 0; $i <= count($ex) - 1; $i++) {
$first_line = $ex[$i];
$first_ex = explode("-", $first_line);
$name = $first_ex[0];
$url = $first_ex[1];
$ret = bot("getChatMember", [
"chat_id" => "@$url",
"user_id" => $id,
]);
$stat = $ret->result->status;
if ((($stat == "creator" or $stat == "administrator" or $stat == "member"))) {
$array['inline_keyboard']["$i"][0]['text'] = "✅ " . $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
} else {
$array['inline_keyboard']["$i"][0]['text'] = "❌ " . $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
$uns = true;
}
}
$array['inline_keyboard']["$i"][0]['text'] = "🔄 Tekshirish";
$array['inline_keyboard']["$i"][0]['callback_data'] = "result";
if ($uns == true) {
bot('sendMessage', [
'chat_id' => $id,
'text' => "⚠️ <b>Botdan foydalanish uchun, quyidagi kanallarga obuna bo'ling:</b>",
'parse_mode' => 'html',
'disable_web_page_preview' => true,
'reply_markup' => json_encode($array),
]);
exit();
} else {
return true;
}
}
}

$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$uid = $message->from->id;
$mid = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$name = $message->chat->first_name;
$familya = $message->from->last_name;
$user = $message->chat->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$replytomessageID = $update->message->reply_to_message->message_id;
$uid2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;
$callback = $update->callback_query;
$callid = $callback->id;
$names = "<a href='tg://user?id=$uid'>$name $familya</a>";

$step = file_get_contents("step/$cid.step");
$baza = file_get_contents("azo.dat");
$kanal = file_get_contents("tizim/kanal.txt");
mkdir("step");

$json = json_decode(file_get_contents("https://cbu.uz/oz/arkhiv-kursov-valyut/json/"),true);
$usd = $json[0]['Rate']; $usdname = $json[0]['CcyNm_UZ'];
$eur = $json[1]['Rate']; $eurname = $json[1]['CcyNm_UZ'];
$rub = $json[2]['Rate']; $rubname = $json[2]['CcyNm_UZ'];
$gbp = $json[3]['Rate']; $gbpname = $json[3]['CcyNm_UZ'];
$jpy = $json[4]['Rate']; $jpyname = $json[4]['CcyNm_UZ'];
$azn = $json[5]['Rate']; $aznname = $json[5]['CcyNm_UZ'];
$bdt = $json[6]['Rate']; $bdtname = $json[6]['CcyNm_UZ'];
$bgn = $json[7]['Rate']; $bgnname = $json[7]['CcyNm_UZ'];
$bhd = $json[8]['Rate']; $bhdname = $json[8]['CcyNm_UZ'];
$bnd = $json[9]['Rate']; $bndname = $json[9]['CcyNm_UZ'];
$brl = $json[10]['Rate']; $brlname = $json[10]['CcyNm_UZ'];
$byn = $json[11]['Rate']; $bynname = $json[11]['CcyNm_UZ'];
$cad = $json[12]['Rate']; $cadname = $json[12]['CcyNm_UZ'];
$chf = $json[13]['Rate']; $chfname = $json[13]['CcyNm_UZ'];
$cny = $json[14]['Rate']; $cnyname = $json[14]['CcyNm_UZ'];
$cup = $json[15]['Rate']; $cupname = $json[15]['CcyNm_UZ'];
$czk = $json[16]['Rate']; $czkname = $json[16]['CcyNm_UZ'];
$dkk = $json[17]['Rate']; $dkkname = $json[17]['CcyNm_UZ'];
$dzd = $json[18]['Rate']; $dzdname = $json[18]['CcyNm_UZ'];
$egp = $json[19]['Rate']; $egpname = $json[19]['CcyNm_UZ'];
$afn = $json[20]['Rate']; $afnname = $json[20]['CcyNm_UZ'];
$ars = $json[21]['Rate']; $arsname = $json[21]['CcyNm_UZ'];
$gel = $json[22]['Rate']; $gelname = $json[22]['CcyNm_UZ'];
$hkd = $json[23]['Rate']; $hkdname = $json[23]['CcyNm_UZ'];
$huf = $json[24]['Rate']; $hufname = $json[24]['CcyNm_UZ'];
$idr = $json[25]['Rate']; $idrname = $json[25]['CcyNm_UZ'];
$ils = $json[26]['Rate']; $ilsname = $json[26]['CcyNm_UZ'];
$inr = $json[27]['Rate']; $inrname = $json[27]['CcyNm_UZ'];
$iqd = $json[28]['Rate']; $iqdname = $json[28]['CcyNm_UZ'];
$irr = $json[29]['Rate']; $irrname = $json[29]['CcyNm_UZ'];
$isk = $json[30]['Rate']; $iskname = $json[30]['CcyNm_UZ'];
$jod = $json[31]['Rate']; $jodname = $json[31]['CcyNm_UZ'];
$aud = $json[32]['Rate']; $audname = $json[32]['CcyNm_UZ'];
$kgs = $json[33]['Rate']; $kgsname = $json[33]['CcyNm_UZ'];
$khr = $json[34]['Rate']; $khrname = $json[34]['CcyNm_UZ'];
$krw = $json[35]['Rate']; $krwname = $json[35]['CcyNm_UZ'];
$kwd = $json[36]['Rate']; $kwdname = $json[36]['CcyNm_UZ'];
$kzt = $json[37]['Rate']; $kztname = $json[37]['CcyNm_UZ'];
$lak = $json[38]['Rate']; $lakname = $json[38]['CcyNm_UZ'];
$lbp = $json[39]['Rate']; $lbpname = $json[39]['CcyNm_UZ'];
$lyd = $json[40]['Rate']; $lydname = $json[40]['CcyNm_UZ'];
$mad = $json[41]['Rate']; $madname = $json[41]['CcyNm_UZ'];
$mdl = $json[42]['Rate']; $mdlname = $json[42]['CcyNm_UZ'];
$mmk = $json[43]['Rate']; $mmkname = $json[43]['CcyNm_UZ'];
$mnt = $json[44]['Rate']; $mntname = $json[44]['CcyNm_UZ'];
$mxn = $json[45]['Rate']; $mxnname = $json[45]['CcyNm_UZ'];
$myr = $json[46]['Rate']; $myrname = $json[46]['CcyNm_UZ'];
$nok = $json[47]['Rate']; $nokname = $json[47]['CcyNm_UZ'];
$nzd = $json[48]['Rate']; $nzdname = $json[48]['CcyNm_UZ'];
$omr = $json[49]['Rate']; $omrname = $json[49]['CcyNm_UZ'];
$php = $json[50]['Rate']; $phpname = $json[50]['CcyNm_UZ'];
$pkr = $json[51]['Rate']; $pkrname = $json[51]['CcyNm_UZ'];
$pln = $json[52]['Rate']; $plnname = $json[52]['CcyNm_UZ'];
$qar = $json[53]['Rate']; $qarname = $json[53]['CcyNm_UZ'];
$ron = $json[54]['Rate']; $ronname = $json[54]['CcyNm_UZ'];
$rsd = $json[55]['Rate']; $rsdname = $json[55]['CcyNm_UZ'];
$amd = $json[56]['Rate']; $amdname = $json[56]['CcyNm_UZ'];
$sar = $json[57]['Rate']; $sarname = $json[57]['CcyNm_UZ'];
$sdk = $json[58]['Rate']; $sdkname = $json[58]['CcyNm_UZ'];
$sek = $json[59]['Rate']; $sekname = $json[59]['CcyNm_UZ'];
$sgd = $json[60]['Rate']; $sgdname = $json[60]['CcyNm_UZ'];
$syp = $json[61]['Rate']; $sypname = $json[61]['CcyNm_UZ'];
$thb = $json[62]['Rate']; $thbname = $json[62]['CcyNm_UZ'];
$tjs = $json[63]['Rate']; $tjsname = $json[63]['CcyNm_UZ'];
$tmt = $json[64]['Rate']; $tmtname = $json[64]['CcyNm_UZ'];
$tnd = $json[65]['Rate']; $tndname = $json[65]['CcyNm_UZ'];
$try = $json[66]['Rate']; $tryname = $json[66]['CcyNm_UZ'];
$uah = $json[67]['Rate']; $uahname = $json[67]['CcyNm_UZ'];
$aed = $json[68]['Rate']; $aedname = $json[68]['CcyNm_UZ'];
$uyu = $json[69]['Rate']; $uyuname = $json[69]['CcyNm_UZ'];
$ves = $json[70]['Rate']; $vesname = $json[70]['CcyNm_UZ'];
$vnd = $json[71]['Rate']; $vndname = $json[71]['CcyNm_UZ'];
$yer = $json[73]['Rate']; $yername = $json[73]['CcyNm_UZ'];

if (isset($message)) {
$baza = file_get_contents("azo.dat");
if (mb_stripos($baza, $chat_id) !== false) {
} else {
$txt = "\n$chat_id";
$file = fopen("azo.dat", "a");
fwrite($file, $txt);
fclose($file);
}
}

$home = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔖 Valyuta kurslari"],['text'=>"🔣 Hisoblash"]],
]]);

$panel = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "📢 Kanallar"]],
[['text' => "📊 Statistika"], ['text' => "✉ Xabar yuborish"]],
[['text' => "/start"]],
]
]);

$boshqarish = json_encode([
'resize_keyboard' => true,
'keyboard' => [
[['text' => "/panel"]],
]
]);

if ($data == "result" and joinchat($cid2) == true) {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "✅ <b>Obunangiz tasdiqlandi. Bosh menyudasiz!

<i>ℹ️ Bu bot sizga dunyodagi barcha mahalliy valyutalar kursi haqida ma'lumot bera oladi.

👇 Quyidagi tugmalardan birini tanlang:</i></b>",
'parse_mode' => 'html',
'reply_markup' => $home,
]);
unlink("step/$cid2.step");
exit();
}

if ($data == "delete") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
unlink("step/$cid2.step");
}

if ($text == "/start" and joinchat($cid) == true) {
bot('sendmessage', [
'chat_id' => $cid,
'text' => "<b>👋 Salom $names, « $botnik » ga xush kelibsiz.

<i>ℹ️ Bu bot sizga dunyodagi barcha mahalliy valyutalar kursi haqida ma'lumot bera oladi.

👇 Quyidagi tugmalardan birini tanlang:</i></b>",
'parse_mode' => "html",
'reply_markup' => $home,
]);
unlink("step/$cid.step");
exit();
}

if ($text == "🔖 Valyuta kurslari" and joinchat($cid) == true) {
bot('sendmessage', [
'chat_id' => $cid,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (1 - bo'lim):
  
🇺🇸 1 $usdname = $usd so'm
🇪🇺 1 $eurname = $eur so'm
🇷🇺 1 $rubname = $rub so'm
🏴󠁧󠁢󠁥󠁮󠁧󠁿 1 $gbpname = $gbp so'm
🇯🇵 1 $jpyname = $jpy so'm
🇦🇿 1 $aznname = $azn so'm
🇧🇩 1 $bdtname = $bdt so'm
🇧🇬 1 $bgnname = $bgn so'm
🇧🇭 1 $bhdname = $bhd so'm
🇧🇳 1 $bndname = $bnd so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "➡️ Keyingi", 'callback_data' => "rate2"],['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "rate1") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (1 - bo'lim):
  
🇺🇸 1 $usdname = $usd so'm
🇪🇺 1 $eurname = $eur so'm
🇷🇺 1 $rubname = $rub so'm
🏴󠁧󠁢󠁥󠁮󠁧󠁿 1 $gbpname = $gbp so'm
🇯🇵 1 $jpyname = $jpy so'm
🇦🇿 1 $aznname = $azn so'm
🇧🇩 1 $bdtname = $bdt so'm
🇧🇬 1 $bgnname = $bgn so'm
🇧🇭 1 $bhdname = $bhd so'm
🇧🇳 1 $bndname = $bnd so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "➡️ Keyingi", 'callback_data' => "rate2"],['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "rate2") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (2 - bo'lim):
  
🇧🇷 1 $brlname = $brl so'm
🇧🇾 1 $bynname = $byn so'm
🇨🇦 1 $cadname = $cad so'm
🇨🇭 1 $chfname = $chf so'm
🇨🇳 1 $cnyname = $cny so'm
🇨🇺 1 $cupname = $cup so'm
🇨🇿 1 $czkname = $czk so'm
🇩🇰 1 $dkkname = $dkk so'm
🇩🇿 1 $dzdname = $dzd so'm
🇪🇬 1 $egpname = $egp so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (1)", 'callback_data' => "rate1"],['text' => "➡️ Keyingi (3)", 'callback_data' => "rate3"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($data == "rate3") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (3 - bo'lim):
  
🇦🇫 1 $afnname = $afn so'm
🇦🇷 1 $arsname = $ars so'm
🇬🇪 1 $gelname = $gel so'm
🇭🇰 1 $hkdname = $hkd so'm
🇭🇺 1 $hufname = $huf so'm
🇮🇩 1 $idrname = $idr so'm
🇮🇱 1 $ilsname = $ils so'm
🇮🇳 1 $inrname = $inr so'm
🇮🇶 1 $iqdname = $iqd so'm
🇮🇷 1 $irrname = $irr so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (2)", 'callback_data' => "rate2"],['text' => "➡️ Keyingi (4)", 'callback_data' => "rate4"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($data == "rate4") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (4 - bo'lim):
  
🇮🇸 1 $iskname = $isk so'm
🇯🇴 1 $jodname = $jod so'm
🇦🇺 1 $audname = $aud so'm
🇰🇬 1 $kgsname = $kgs so'm
🇰🇭 1 $khrname = $khr so'm
🇰🇷 1 $krwname = $krw so'm
🇰🇼 1 $kwdname = $kwd so'm
🇰🇿 1 $kztname = $kzt so'm
🇱🇦 1 $lakname = $lak so'm
🇱🇧 1 $lbpname = $lbp so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (3)", 'callback_data' => "rate3"],['text' => "➡️ Keyingi (5)", 'callback_data' => "rate5"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($data == "rate5") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (5 - bo'lim):
  
🇱🇾 1 $lydname = $lyd so'm
🇲🇦 1 $madname = $mad so'm
🇲🇩 1 $mdlname = $mdl so'm
🇲🇲 1 $mmkname = $mdl so'm
🇲🇳 1 $mntname = $mnt so'm
🇲🇽 1 $mxnname = $mxn so'm
🇲🇾 1 $myrname = $myr so'm
🇳🇴 1 $nokname = $nok so'm
🇳🇿 1 $nzdname = $nzd so'm
🇴🇲 1 $omrname = $omr so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (4)", 'callback_data' => "rate4"],['text' => "➡️ Keyingi (6)", 'callback_data' => "rate6"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($data == "rate6") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (6 - bo'lim):
  
🇵🇭 1 $phpname = $php so'm
🇵🇰 1 $pkrname = $pkr so'm
🇵🇱 1 $plnname = $pln so'm
🇶🇦 1 $qarname = $qar so'm
🇷🇴 1 $ronname = $ron so'm
🇷🇸 1 $rsdname = $rsd so'm
🇦🇲 1 $amdname = $amd so'm
🇸🇦 1 $sarname = $sar so'm
🇸🇩 1 $sdkname = $sdk so'm
🇸🇪 1 $sekname = $sek so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (5)", 'callback_data' => "rate5"],['text' => "➡️ Keyingi (7)", 'callback_data' => "rate7"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($data == "rate7") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (7 - bo'lim):
  
🇸🇬 1 $sgdname = $sgd so'm
🇸🇾 1 $sypname = $syp so'm
🇹🇭 1 $thbname = $thb so'm
🇹🇯 1 $tjsname = $tjs so'm
🇹🇲 1 $tmtname = $tmt so'm
🇹🇳 1 $tndname = $tnd so'm
🇹🇷 1 $tryname = $try so'm
🇺🇦 1 $uahname = $uah so'm
🇦🇪 1 $aedname = $aed so'm
🇺🇾 1 $uyuname = $uyu so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (6)", 'callback_data' => "rate6"],['text' => "➡️ Keyingi (8)", 'callback_data' => "rate8"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($data == "rate8") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>🔖 Hozirgi vaqtdagi valyuta kurslari (so'ngi bo'lim):
  
🇻🇪 1 $vesname = $ves so'm
🇻🇳 1 $vndname = $vnd so'm     
🇾🇪 1 $yername = $yer so'm</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "⬅️ Oldingi (7)", 'callback_data' => "rate7"],['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
}

if ($text == "🔣 Hisoblash" and joinchat($cid) == true) {
bot('sendmessage', [
'chat_id' => $cid,
'text' => "<b>👇 Quyidagilardan birini tanlang (1 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇺🇸 $usdname", 'callback_data' => "hisobla-$usd-$usdname"]],
[['text' => "🇪🇺 $eurname", 'callback_data' => "hisobla-$eur-$eurname"]],
[['text' => "🇷🇺 $rubname", 'callback_data' => "hisobla-$rub-$rubname"]],
[['text' => "🏴󠁧󠁢󠁥󠁮󠁧󠁿 $gbpname", 'callback_data' => "hisobla-$gbp-$gbpname"]],
[['text' => "🇯🇵 $jpyname", 'callback_data' => "hisobla-$jpy-$jpyname"]],
[['text' => "🇦🇿 $aznname", 'callback_data' => "hisobla-$azn-$aznname"]],
[['text' => "🇧🇩 $bdtname", 'callback_data' => "hisobla-$bdt-$bdtname"]],
[['text' => "🇧🇬 $bgnname", 'callback_data' => "hisobla-$bgn-$bgnname"]],
[['text' => "🇧🇭 $bhdname", 'callback_data' => "hisobla-$bhd-$bhdname"]],
[['text' => "🇧🇳 $bndname", 'callback_data' => "hisobla-$bnd-$bndname"]],
[['text' => "➡️ Keyingi (2)", 'callback_data' => "math_a"],['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (1 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇺🇸 $usdname", 'callback_data' => "hisobla-$usd-$usdname"]],
[['text' => "🇪🇺 $eurname", 'callback_data' => "hisobla-$eur-$eurname"]],
[['text' => "🇷🇺 $rubname", 'callback_data' => "hisobla-$rub-$rubname"]],
[['text' => "🏴󠁧󠁢󠁥󠁮󠁧󠁿 $gbpname", 'callback_data' => "hisobla-$gbp-$gbpname"]],
[['text' => "🇯🇵 $jpyname", 'callback_data' => "hisobla-$jpy-$jpyname"]],
[['text' => "🇦🇿 $aznname", 'callback_data' => "hisobla-$azn-$aznname"]],
[['text' => "🇧🇩 $bdtname", 'callback_data' => "hisobla-$bdt-$bdtname"]],
[['text' => "🇧🇬 $bgnname", 'callback_data' => "hisobla-$bgn-$bgnname"]],
[['text' => "🇧🇭 $bhdname", 'callback_data' => "hisobla-$bhd-$bhdname"]],
[['text' => "🇧🇳 $bndname", 'callback_data' => "hisobla-$bnd-$bndname"]],
[['text' => "➡️ Keyingi (2)", 'callback_data' => "math_a"],['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math_a") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (2 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇧🇷 $brlname", 'callback_data' => "hisobla-$brl-$brlname"]],
[['text' => "🇧🇾 $bynname", 'callback_data' => "hisobla-$byn-$bynname"]],
[['text' => "🇨🇦 $cadname", 'callback_data' => "hisobla-$cad-$cadname"]],
[['text' => "🇨🇭 $chfname", 'callback_data' => "hisobla-$chf-$chfname"]],
[['text' => "🇨🇳 $cnyname", 'callback_data' => "hisobla-$cny-$cnyname"]],
[['text' => "🇨🇺 $cupname", 'callback_data' => "hisobla-$cup-$cupname"]],
[['text' => "🇨🇿 $czkname", 'callback_data' => "hisobla-$czk-$czkname"]],
[['text' => "🇩🇰 $dkkname", 'callback_data' => "hisobla-$dkk-$dkkname"]],
[['text' => "🇩🇿 $dzdname", 'callback_data' => "hisobla-$dzd-$dzdname"]],
[['text' => "🇪🇬 $egpname", 'callback_data' => "hisobla-$egp-$egpname"]],
[['text' => "⬅️ Oldingi (1)", 'callback_data' => "math"],['text' => "➡️ Keyingi (3)", 'callback_data' => "math_b"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math_b") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (3 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇦🇫 $afnname", 'callback_data' => "hisobla-$afn-$afnname"]],
[['text' => "🇦🇷 $arsname", 'callback_data' => "hisobla-$ars-$arsname"]],
[['text' => "🇬🇪 $gelname", 'callback_data' => "hisobla-$gel-$gelname"]],
[['text' => "🇭🇰 $hkdname", 'callback_data' => "hisobla-$hkd-$hkdname"]],
[['text' => "🇭🇺 $hufname", 'callback_data' => "hisobla-$huf-$hufname"]],
[['text' => "🇮🇩 $idrname", 'callback_data' => "hisobla-$idr-$idrname"]],
[['text' => "🇮🇱 $ilsname", 'callback_data' => "hisobla-$ils-$ilsname"]],
[['text' => "🇮🇳 $inrname", 'callback_data' => "hisobla-$inr-$inrname"]],
[['text' => "🇮🇶 $iqdname", 'callback_data' => "hisobla-$iqd-$iqdname"]],
[['text' => "🇮🇷 $irrname", 'callback_data' => "hisobla-$irr-$irrname"]],
[['text' => "⬅️ Oldingi (2)", 'callback_data' => "math_a"],['text' => "➡️ Keyingi (4)", 'callback_data' => "math_c"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math_c") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (4 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇮🇸 1 $iskname", 'callback_data' => "hisobla-$isk-$iskname"]],
[['text' => "🇯🇴 1 $jodname", 'callback_data' => "hisobla-$jod-$jodname"]],
[['text' => "🇦🇺 1 $audname", 'callback_data' => "hisobla-$aud-$audname"]],
[['text' => "🇰🇬 1 $kgsname", 'callback_data' => "hisobla-$kgs-$kgsname"]],
[['text' => "🇰🇭 1 $khrname", 'callback_data' => "hisobla-$khr-$khrname"]],
[['text' => "🇰🇷 1 $krwname", 'callback_data' => "hisobla-$krw-$krwname"]],
[['text' => "🇰🇼 1 $kwdname", 'callback_data' => "hisobla-$kwd-$kwdname"]],
[['text' => "🇰🇿 1 $kztname", 'callback_data' => "hisobla-$kzt-$kztname"]],
[['text' => "🇱🇦 1 $lakname", 'callback_data' => "hisobla-$lak-$lakname"]],
[['text' => "🇱🇧 1 $lbpname", 'callback_data' => "hisobla-$lbp-$lbpname"]],
[['text' => "⬅️ Oldingi (3)", 'callback_data' => "math_b"],['text' => "➡️ Keyingi (5)", 'callback_data' => "math_d"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math_d") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (5 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇱🇾 $lydname", 'callback_data' => "hisobla-$lyd-$lydname"]],
[['text' => "🇲🇦 $madname", 'callback_data' => "hisobla-$mad-$madname"]],
[['text' => "🇲🇩 $mdlname", 'callback_data' => "hisobla-$mdl-$mdlname"]],
[['text' => "🇲🇲 $mmkname", 'callback_data' => "hisobla-$mmk-$mmkname"]],
[['text' => "🇲🇳 $mntname", 'callback_data' => "hisobla-$mnt-$mntname"]],
[['text' => "🇲🇽 $mxnname", 'callback_data' => "hisobla-$mxn-$mxnname"]],
[['text' => "🇲🇾 $myrname", 'callback_data' => "hisobla-$myr-$myrname"]],
[['text' => "🇳🇴 $nokname", 'callback_data' => "hisobla-$nok-$nokname"]],
[['text' => "🇳🇿 $nzdname", 'callback_data' => "hisobla-$nzd-$nzdname"]],
[['text' => "🇴🇲 $omrname", 'callback_data' => "hisobla-$omr-$omrname"]],
[['text' => "⬅️ Oldingi (4)", 'callback_data' => "math_c"],['text' => "➡️ Keyingi (6)", 'callback_data' => "math_e"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math_e") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (6 - bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇵🇭 $phpname", 'callback_data' => "hisobla-$php-$phpname"]],
[['text' => "🇵🇰 $pkrname", 'callback_data' => "hisobla-$pkr-$pkrname"]],
[['text' => "🇵🇱 $plnname", 'callback_data' => "hisobla-$pln-$plnname"]],
[['text' => "🇶🇦 $qarname", 'callback_data' => "hisobla-$qar-$qarname"]],
[['text' => "🇷🇴 $ronname", 'callback_data' => "hisobla-$ron-$ronname"]],
[['text' => "🇷🇸 $rsdname", 'callback_data' => "hisobla-$rsd-$rsdname"]],
[['text' => "🇦🇲 $amdname", 'callback_data' => "hisobla-$amd-$amdname"]],
[['text' => "🇸🇦 $sarname", 'callback_data' => "hisobla-$sar-$sarname"]],
[['text' => "🇸🇩 $sdkname", 'callback_data' => "hisobla-$sdk-$sdkname"]],
[['text' => "🇸🇪 $sekname", 'callback_data' => "hisobla-$sek-$sekname"]],
[['text' => "⬅️ Oldingi (5)", 'callback_data' => "math_d"],['text' => "➡️ Keyingi (7)", 'callback_data' => "math_f"]],
[['text' => "❌ Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "math_f") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('sendmessage', [
'chat_id' => $cid2,
'text' => "<b>👇 Quyidagilardan birini tanlang (so'ngi bo'lim):</b>",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🇸🇬 $sgdname", 'callback_data' => "hisobla-$sgd-$sgdname"]],
[['text' => "🇸🇾 $sypname", 'callback_data' => "hisobla-$syp-$sypname"]],
[['text' => "🇹🇭 $thbname", 'callback_data' => "hisobla-$thb-$thbname"]],
[['text' => "🇹🇯 $tjsname", 'callback_data' => "hisobla-$tjs-$tjsname"]],
[['text' => "🇹🇲 $tmtname", 'callback_data' => "hisobla-$tmt-$tmtname"]],
[['text' => "🇹🇳 $tndname", 'callback_data' => "hisobla-$tnd-$tndname"]],
[['text' => "🇹🇷 $tryname", 'callback_data' => "hisobla-$try-$tryname"]],
[['text' => "🇺🇦 $uahname", 'callback_data' => "hisobla-$uah-$uahname"]],
[['text' => "🇦🇪 $aedname", 'callback_data' => "hisobla-$aed-$aedname"]],
[['text' => "🇺🇾 $uyuname", 'callback_data' => "hisobla-$uyu-$uyuname"]],
[['text' => "🇻🇪 $vesname", 'callback_data' => "hisobla-$ves-$vesname"]],
[['text' => "🇻🇳 $vndname", 'callback_data' => "hisobla-$vnd-$vndname"]],
[['text' => "🇾🇪 $yername", 'callback_data' => "hisobla-$yer-$yername"]],
[['text' => "⬅️ Oldingi (6)", 'callback_data' => "math_e"],['text' => "❌ Yopish", 'callback_data' => "delete"]]
]
])
]);
exit();
}

if (mb_stripos($data, "hisobla-") !== false) {
$ex = explode("-", $data);
$rate = $ex[1];
$ratename = $ex[2];
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>💸 Hisoblamoqchi bo'lgan $ratename miqdorini kiriting:

<i>Masalan:</i></b> <code>100</code>",
'parse_mode' => 'html',
'reply_markup' => $home,
]);
file_put_contents("step/$cid2.step", "hisobla-$rate-$ratename");
exit();
}
if (mb_stripos($step, "hisobla-") !== false) {
$ex = explode("-", $step);
$rate = $ex[1];
$ratename = $ex[2];
if (is_numeric($text) == "true") {
$holat = $text * $rate;
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>🔗 Kiritildi $text $ratename.

☑️ Natija: $holat so'm</b>",
'parse_mode' => 'html',
'reply_markup' => $home
]);
unlink("step/$cid.step");
exit();
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>⚠️ Faqat raqamlardan foydalaning.

Qayta kiriting:</b>",
'parse_mode' => 'html',
]);
exit();
}
}

/* Admin panel */

if ($text == "/panel") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Admin paneliga xush kelibsiz!</b>",
'parse_mode' => 'html',
'reply_markup' => $panel,
]);
exit();
}
}

if ($text == "✉ Xabar yuborish" and $cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Yuboriladigan xabar turini tanlang;</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "Oddiy", 'callback_data' => "send"]],
[['text' => "Yopish", 'callback_data' => "delete"]],
]
])
]);
exit();
}

if ($data == "send") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "*Xabaringizni kiriting:*",
'parse_mode' => "markdown",
'reply_markup' => $boshqarish
]);
file_put_contents("step/$cid2.step", "send");
exit();
}

if ($step == "send") {
if ($cid == $admin) {
$lich = file_get_contents("azo.dat");
$lichka = explode("\n", $lich);
foreach ($lichka as $lichkalar) {
$okuser = bot("SendMessage", [
'chat_id' => $lichkalar,
'text' => $text,
'parse_mode' => 'html',
'disable_web_page_preview' => true,
]);
}
}
}
if ($okuser) {
bot("sendmessage", [
'chat_id' => $admin,
'text' => "<b>Xabaringiz yuborildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $panel
]);
unlink("step/$cid.step");
exit();
}

if ($text == "📊 Statistika") {
if ($cid == $admin) {
$baza = file_get_contents("azo.dat");
$obsh = substr_count($baza, "\n");
$start_time = round(microtime(true) * 1000);
bot('SendMessage', [
'chat_id' => $cid,
'text' => "",
'parse_mode' => 'html',
]);
$end_time = round(microtime(true) * 1000);
$ping = $end_time - $start_time;
bot('SendMessage', [
'chat_id' => $cid,
'text' => "💡 <b>Yuklanish:</b> <code>$ping</code>
👥 <b>Foydalanuvchilar:</b> $obsh ta",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "Yopish", 'callback_data' => "delete"]]
]
])
]);
exit();
}
}

if ($text == "📢 Kanallar") {
if ($cid == $admin) {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Quyidagilardan birini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔐 Majburiy obunalar", 'callback_data' => "majburiy"]],
[['text' => "Yopish", 'callback_data' => "delete"]]
]
])
]);
exit();
}
}

if ($data == "kanallar") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Quyidagilardan birini tanlang:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔐 Majburiy obunalar", 'callback_data' => "majburiy"]],
[['text' => "Yopish", 'callback_data' => "delete"]]
]
])
]);
exit();
}

if ($data == "majburiy") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "<b>Kuting...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>Majburiy obunalarni sozlash bo'limidasiz:</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "➕ Qo'shish", 'callback_data' => "qoshish"]],
[['text' => "📑 Ro'yxat", 'callback_data' => "royxat"], ['text' => "🗑 O'chirish", 'callback_data' => "ochirish"]],
[['text' => "◀️ Orqaga", 'callback_data' => "kanallar"]]
]
])
]);
}

if ($data == "qoshish") {
bot('deleteMessage', [
'chat_id' => $cid2,
'message_id' => $mid2,
]);
bot('SendMessage', [
'chat_id' => $cid2,
'text' => "<b>Kanalingiz userini kiriting:

Namuna:</b> SupperCoders-SupperCoderUz
( Kanal nomi-Kanal_useri )",
'parse_mode' => 'html',
'reply_markup' => $boshqarish,
]);
file_put_contents("step/$cid2.step", "qo'shish");
exit();
}

if ($step == "qo'shish") {
if ($cid == $admin) {
if (isset($text)) {
if (mb_stripos($text, "-") !== false) {
if ($kanal == null) {
$a = $KanalMin + 1;
file_put_contents("tizim/KanalMin.txt", $a);
file_put_contents("tizim/kanal.txt", $text);
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy
]);
unlink("step/$cid.step");
exit();
} else {
file_put_contents("tizim/kanal.txt", "$kanal\n$text");
bot('SendMessage', [
'chat_id' => $admin,
'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => $asosiy
]);
unlink("step/$cid.step");
exit();
}
} else {
bot('SendMessage', [
'chat_id' => $cid,
'text' => "<b>Kanalingiz userini kiriting:

Namuna:</b> SupperCoders-SupperCoderUz
( Kanal nomi-Kanal_useri )",
'parse_mode' => 'html',
]);
exit();
}
}
}
}

if ($data == "ochirish") {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "✅ <b>Kanallar muvaffaqiyatli o'chirildi!</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
]
])
]);
unlink("tizim/kanal.txt");
}

if ($data == "royxat") {
$soni = substr_count($kanal, "-");
if ($kanal == null) {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "📂 <b>Kanallar ro'yxati bo'sh!</b>",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
]
])
]);
} else {
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2 + 1,
'text' => "⏱ <b>Yuklanmoqda...</b>",
'parse_mode' => 'html',
]);
bot('editMessageText', [
'chat_id' => $cid2,
'message_id' => $mid2,
'text' => "<b>📢 Kanallar ro'yxati:</b>

$kanal

<b>Ulangan kanallar soni:</b> $soni ta",
'parse_mode' => 'html',
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
]
])
]);
}
}
/* Dasturchi @VisualCoderUz
Manba @SupperCoderUz
Mualliflik huquqi hurmat qilinsin */
?>