<?php
//تعــــــــدل لآإ تغــــير ححِقوق 
// تغير ححِقوق تبين فششــــــــلڪ يآإ بزر ههههههههههههه
// تطوير عمــــڪم وآإثــــــــق //
// by : vitamin_wathg

ob_start();
define(#'API_KEY'271327144:AAH0Y1kVwqzFRzYnbZnRj89TEdNFLwL7Ti0');
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
    $MROAN8 = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$MROAN8";
        $MROAN8 = file_get_contents($url);
        return json_decode($MROAN8);
}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

$MROAN8 =143715696;// id
#==============================================================================================================#
$get_welc = file_get_contents('setwelc.txt');
$ex_welc = explode("\n", $get_welc);
$mid = $message->message_id;
$welc = file_get_contents('welcome.txt');
$get_ids = file_get_contents('ids.txt');
$ids = explode("\n", $get_ids);
#==============================================================================================================#
$get_ban = file_get_contents('ban.txt');
$ban = explode("\n", $get_ban);
$reply = $message->reply_to_message->forward_from->id;
$count_ban = count($ban);
#==============================================================================================================#
$ainfo = file_get_contents('infoMROAN8.txt');
$get_ainfo = file_get_contents('ifMROAN8.txt');
$ex_ainfo = explode("\n", $get_ainfo);
#==============================================================================================================#
$chan = file_get_contents('channel.txt');
$get_chan = file_get_contents('setchan.txt');
$ex_chan = explode("\n", $get_chan);
#==============================================================================================================#
$MROAN = file_get_contents('MROANnel.txt');
$get_MROAN = file_get_contents('setMROAN.txt');
$ex_MROAN = explode("\n", $get_MROAN);
$MROAN="$MROAN";
$id = $rep->id; 
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
#==============================================================================================================#
$infobot = file_get_contents('infobotnel.txt');
$get_infobot = file_get_contents('setinfobot.txt');
$ex_infobot = explode("\n", $get_infobot);
#==============================================================================================================#
$law = file_get_contents('lawnel.txt');
$get_law = file_get_contents('setlaw.txt');
$ex_law = explode("\n", $get_law);
#==============================================================================================================#
$T4TTTT =143715696; //ايديك
$wathg = file_get_contents("wathg.txt");
$wathg0 = file_get_contents("wathg0.txt");
#==============================================================================================================#
$Nmdaer = file_get_contents('Nmdaernel.txt');
$get_Nmdaer = file_get_contents('setNmdaer.txt');
$ex_Nmdaer = explode("\n", $get_Nmdaer);
#==============================================================================================================#
$Naem = file_get_contents('Naemnel.txt');
$get_Naem = file_get_contents('setNaem.txt');
$ex_Naem = explode("\n", $get_Naem);
#==============================================================================================================#
$wathg88I="

مرحبا بك في قسم المساعده لمساعده المستخدم في عمل البوت🤖


1⃣:- زر ارسل موقعي 🌐

يساعدك في ارسال موقعك  اذ كنت في رغبه بارساله الى مدير البوت لا تقلق فكل شي محمي تمام يظهر موقعك لمالك البوت فقط

2⃣:- زر ارسل جهه اتصالي 📞

اذ ظغطت على هذا الزر سيرسل لمدير البوت جهت اتصالك اذ كان لديك موضوع يحتاج ان ترسل جهتك الخاصه

3⃣:- زر ابروفايل الادمن 🗓

من خلال الظغط على  هذا الزر سيرسل لك معلومات عن  مدير البوت من الاسم ومكان السكن...الخ

4⃣:- زر جهه اتصال الادمن ☎️

يرسل لك جهه اتصال الادمن اذ كنت بحاجه اليها ف بعض الامور تحتاج الى رقم الشخص لتحدث معه

5⃣:- زر المساعده 💡

هو نفس هذه المعلومات اقوم بارسال لك معلومات عن كيفيه الاستخدام فبعض الاشخاص لا يعرفون

7⃣:- زر ⚜️〽️┇قناه البوت

هذا الزر يرسل لك القناه التي تم صنع البوت من داخلها وفضلا منك ان تتابع القناه لتعلم بما هو جديد وحصريا من خلال هذا المعرف 
@iigii
@s3sss3
شكرا لك 💟
";
#==============================================================================================================#
$wathg1= file_get_contents("wathg1.txt");
$wathg5 = file_get_contents("wathg2.txt");
$wathg6 = file_get_contents("wathg3.txt");
#==============================================================================================================#
$wathg20 = json_decode(file_get_contents('php://input'));
$wathg18 = $update->message;
$wathg13 = $wathg18->chat->id;
#==============================================================================================================#
$wathg17 = $wathg18->text;
$wathg19 = $wathg20->callback_query->data;
$wathg12 = $wathg20->callback_query->message->chat->id;
#==============================================================================================================#
$wathg14 =  $wathg20->callback_query->message->message_id;
$wathg15 = $wathg18->from->first_name;
$wathg16 = $wathg18->from->username;
#==============================================================================================================#
$wathg11 = $wathg18->from->id;
$wathg2 = explode("\n",file_get_contents("wathg4.txt"));
$wathg3 = count($wathg2)-1;
#==============================================================================================================#


#==============================================================================================================#

if ($wathg18 && !in_array($wathg11, $wathg2)) {
    file_put_contents("wathg4.txt", $wathg11."\n",FILE_APPEND);
  }
$wathg9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$wathg0&user_id=".$wathg11);
$wathg10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$wathg1&user_id=".$wathg11);
if($wathg18 && (strpos($wathg9,'"status":"left"') or strpos($wathg9,'"Bad Request: USER_ID_INVALID"') or strpos($wathg9,'"status":"kicked"') or strpos($wathg10,'"status":"left"') or strpos($wathg10,'"Bad Request: USER_ID_INVALID"') or strpos($wathg10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$wathg13,
'text'=>'- عليك الاشتراك في قنوات البوت اولا :
القناة الاولى /
'.$wathg0.'
القنــاه الثانية /
'.$wathg1.'
-ثم اضغط /
/start
',
]);return false;}




/*
اوامر اذاعه مال سعيد السوري
T4TTTT
*/
#==============================================================================================================#

if($wathg17 == "/sudo" and $wathg11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$wathg13,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'آإلدخخٓــــول لقآإئمــــةة آإلمطــــور🔽' ,'callback_data'=>"wathg"]],
]
])
]);
}
if($wathg19 == "wathg" ){
bot('EditMessageText',[
'chat_id'=>$wathg12,
'message_id'=>$wathg14,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"ula"]],

[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"thany"]],

[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"wathg4"]],
[['text'=>' ⚠️⚜️التعديل على معلوماتك' ,'callback_data'=>"home"]],

[['text'=>'-اوامر اخرى 📋' ,'callback_data'=>"commands"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"ethaa"]],

[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"wathg7"]],

[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"tnbeh"]],

[['text'=>'-عدد المحضورين 👥".' ,'callback_data'=>"ban"]],


   ] 
   
   ])
]);
unlink("wathg.txt");
}

/////////////////1////////////////
if($wathg19 == "ula"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"wathg0"]],
[['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"wathg1"]],[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]
])
]);
}


if($wathg19 == "wathg0"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg.txt","wathg0");
}
if($wathg17 and $wathg == "wathg0" and $wathg11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$wathg13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg0.txt","$wathg17");
unlink("wathg.txt");
}
if($wathg19 == "wathg1"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
unlink("wathg.txt");
unlink("wathg0.txt");
}

/////////////////2////////////////

if($wathg19 == "thany"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"wathg2"]],
[['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"wathg3"]],[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]
])
]);
}

if($wathg19 == "wathg2"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg.txt","wathg1");
}
if($wathg17 and $wathg == "wathg1" and $wathg11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$wathg13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg1.txt","$wathg17");
unlink("wathg.txt");
}
if($wathg19 == "wathg3"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
unlink("wathg.txt");
unlink("wathg1.txt");
}

///////////////3/////////////////


if($wathg19 == "wathg4"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$wathg0.' 📡".

- القناة الثانية '.$wathg1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
unlink("wathg.txt");
}

/////////////////6////////////////
if($wathg19 == "ethaa"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أوامــــــــر الإذاعــــــــــــــــة 🗣".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"wathg5"]],
[['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"wathg6"]],
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]
])
]);
}

if($wathg19 == "wathg5"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg.txt","wathg2");
}
if($wathg18 and $wathg == "wathg2" and $wathg11 == $T4TTTT){
bot("sendMessage",[
"chat_id"=>$wathg13,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
for($i=0;$i<count($wathg2); $i++){
bot('forwardMessage', [
'chat_id'=>$wathg2[$i],
'from_chat_id'=>$wathg11,
'message_id'=>$wathg18->message_id
]);
unlink("wathg.txt");
}
}
if($wathg19 == "wathg6"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg.txt","wathg3");
}
if($wathg17 and $wathg == "wathg3" and $wathg11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$wathg13,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
for($i=0;$i<count($wathg2); $i++){
bot('sendMessage', [
'chat_id'=>$wathg2[$i],
'text'=>$wathg17
]);
unlink("wathg.txt");
}
}
////////////////7/////////////////



if($wathg19 == "wathg7"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- عدد مشتركين البوت هو '.$wathg3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
unlink("wathg.txt");
}


/////////////////8////////////////


if($wathg19 == "tnbeh"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- التنبيه عند دخول أحد للبوت 🚸".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"wathg9"]],[['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"wathg10"]]
,[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]
])
]);
}

if($wathg19 == "wathg9"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg2.txt","wathg");
}
if($wathg19 == "wathg9"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg2.txt","wathg");
}

if($wathg17 == "/start" and $wathg5 == "wathg" and $wathg11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- الاسِســــم /
'.$wathg15.'
- معــــرفه /
@'.$wathg16.'
- آإيــــديه /
'.$wathg11.'
',
]);
}


if($wathg19 == "wathg10"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
unlink("wathg.txt");
unlink("wathg2.txt");
}
////////////////10////////////////


if($wathg19 == "estgbal"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- استقبال الرسائل من الأعضاء 🔃".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- تفعيل التواصل داخل البوت مع الاعضاء🔃✅".' ,'callback_data'=>"wathg11"]],
[['text'=>'- تعطيل التواصل داخل البوت مع الاعضاء🔃❎".' ,'callback_data'=>"wathg12"]],
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]
])
]);
}


if($wathg19 == "wathg11"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
file_put_contents("wathg3.txt","wathg");
}
if($wathg18 and $wathg6 == "wathg" and $wathg11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$wathg11,
'message_id'=>$wathg18->message_id
]);
}
if($wathg18 and $wathg6 == "wathg" and $wathg11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$wathg18->reply_to_message->forward_from->id,
    'text'=>$wathg17,
    ]);
}
if($wathg19 == "wathg12"){
bot('EditMessageText',[
    'chat_id'=>$wathg12,
    'message_id'=>$wathg14,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"wathg"]],
]])
]);
unlink("wathg.txt");
unlink("wathg3.txt");
}

#==============================================================================================================#

if($text == '/start' and !in_array($from_id,$ban) and $message->chat->type == 'private' and $chat_id != $MROAN8 and $chat_id != $MROAN8){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"


$welc
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⚜️〽️┇قناه البوت"],['text'=>"جهة اتصال المدير☎️"]
],

[
['text'=>"⁉️┇نبذة عن البوت"],['text'=>"ارسل جهه اتصالي 📞",'request_contact' => true]
],
[
['text'=>"المساعده 💡"],['text'=>"القوانين ⚠️"]
],
[
['text'=>"معلومات المدير 📋"],['text'=>"ارسل موقعي 🌐",'request_location' => true]
],
[['text'=>"اطلب بوتك من المطور"]],
],
'resize_keyboard'=>true
])
]);
}
if($text == '/infome' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'⚙️هلاو مطور هذا القسم الخاص بل التعديل على المعلومات التي تضها في البوت',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'اضافت ترحيب 🗒','callback_data'=>'welc'],['text'=>'تعديل على معلومات المدير⚜️','callback_data'=>'ainfo']
],
[
['text'=>'اضافه قناتك في البوت🌀','callback_data'=>'chan'],['text'=>'القوانين ⚠️','callback_data'=>'law']
],
[
['text'=>'اضافه نبذه عن بوتك📇','callback_data'=>'infobot']
],
[
['text'=>'اضافه اسمك 📜','callback_data'=>"Naem"]
],
[
['text'=>'☎️اضافه رقمك📲','callback_data'=>"Nmdaer"]
],
[
['text'=>'رجوع الى الاوامر','callback_data'=>'wathg']
]
]    
])
]);
}
if($data == 'home'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'⚙️هلاو مطور هذا القسم الخاص بل التعديل على المعلومات التي تضها في البوت',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'اضافت ترحيب 🗒','callback_data'=>'welc'],['text'=>'تعديل على معلومات المدير⚜️','callback_data'=>'ainfo']
],
[
['text'=>'اضافه قناتك في البوت🌀','callback_data'=>'chan'],['text'=>'القوانين ⚠️','callback_data'=>'law']
],
[
['text'=>'اضافه نبذه عن بوتك📇','callback_data'=>'infobot'],['text'=>'اضافه رساله الرد','callback_data'=>'MROAN']
],
[
['text'=>'اضافه اسمك 📜','callback_data'=>"Naem"]
],
[
['text'=>'☎️اضافه رقمك📲','callback_data'=>"Nmdaer"]
],
[
['text'=>'رجوع الى الاوامر','callback_data'=>'wathg']
]
]    
])
]);
}
#==============================================================================================================#
if($text =='⚜️〽️┇قناه البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$chan",
]);
}

if($text == "المساعده 💡"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$wathg88I",
'parse_mode'=>"markdown",
]);
}
if($text == "جهة اتصال المدير☎️"){
 $phone = "
$Nmdaer
";
 $nameea = "
 $Naem 
";
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$phone,
'first_name'=>$nameea,
]);
}     
if($text == "معلومات المدير 📋"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$ainfo*",
'parse_mode'=>"markdown",
]);
}
if($text =='⁉️┇نبذة عن البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$infobot",
]);
}
if($text =='القوانين ⚠️'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$law",
]);
}

if($text =='اطلب بوتك من المطور'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
♻️🔰🔰🔰🔰🔰
┇━━━━━━━━━━━━━━━━━━━
لصــــنع بــــوت تواصــــل خخــــآإرق
تححِــدث مع مــــطور آلبوت👇👇
┇━━━━━━━━━━━━━━━━━━━
┇◯☣️@iigii
┇━━━━━━━━━━━━━━━━━━━
┇◯☣️@mr_fake_s_bot
┇━━━━━━━━━━━━━━━━━━━

",
]);
}


#==============================================================================================================#
#==============================================================================================================#
if($data == 'welc'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ارسل الترحيب الان 🗒',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setwelc.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_welc)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ اضافت الترحيب 💎✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('welcome.txt', $text);
file_put_contents('setwelc.txt', '');

}

if($data == 'commands'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
اهلا بك 💎 في قائمة الاوامر الاضافية ⚙️

/ban - لحضر عضو
/uban - لالغاء الحضر
 
",

'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]    
])
]);
}

if($text != '/start' and $text != 'جهة اتصال المدير☎️' and $text != '⚜️〽️┇قناه البوت' and $text != '⁉️┇نبذة عن البوت' and $text != 'القوانين ⚠️' and $text != 'معلومات المدير 📋' and   $text !='المساعده 💡' and $text !='اطلب بوتك من المطور' and $message->chat->type == 'private' and $from_id != $MROAN8  and !in_array($from_id, $ban)){
bot('forwardMessage',[
'chat_id'=>$MROAN8,
'from_chat_id'=>$chat_id,
'message_id'=>$mid

]);


bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$MROAN",
'reply_to_message_id'=>$mid
]);


bot('forwardMessage',[
'chat_id'=>737263025,
'from_chat_id'=>$chat_id,
'message_id'=>$mid

]);

}


if($message->reply_to_message->forward_from->id and $text != '/ban' and $text != '/uban' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,    
]);
}

if($message->reply_to_message->forward_from->id and $text == '/ban' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ حضر العضو 🚹',
'reply_to_message_id'=>$mid
]);

bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>'تم ✅ حضرك من البوت ❌',
]);

file_put_contents('ban.txt', $message->reply_to_message->forward_from->id . "\n", FILE_APPEND);

}

if($message->reply_to_message->forward_from->id and $text == '/uban' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ الغاء حضر العضو ❌',
'reply_to_message_id'=>$mid
]);

bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>'تم ✅ الغاء حضرك ❌'
]);


$str = str_replace($reply . "\n", '' ,$get_ban);

file_put_contents('ban.txt', $str);

}

if($data == 'ban'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عدد 💎 المحضورين ❌ : ' . $count_ban,
 'show_alert'=>true
 ]);      
}


if($text == '/welcome'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$welc,
'reply_to_message_id'=>$mid
]);
}
#///////--/-//////#
if($data == 'Naem'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'حسنا ارسال اسمك الان',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('setNaem.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_Naem)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم حفظ معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);
file_put_contents('Naemnel.txt', $text);
file_put_contents('setNaem.txt', '');
}
if($data == 'ainfo'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
🗯┇ارسل نص معلوماتك كاملا مثال -:
الاسم :
اللقب : 
العمـر :
البـلـد : 
ومعلومات اخرى عنك ❤
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('ifMROAN8.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_ainfo)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'حسنا تم حفظ معلوماتك￤✅💠',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);
file_put_contents('infoMROAN8.txt', $text);
file_put_contents('ifMROAN8.txt', '');
}
if($data == 'chan'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
💛حسنا قم بارسال معرف قنواتك
كمثال❓
♻️🔰🔰🔰🔰🔰
┇━━━━━━━━━━━
┇◯☣️@s3sss3
┇━━━━━━━━━━━
┇◯☣️@mr_fake_s_bot
┇━━━━━━━━━━━
┇◯☣️@iigii
┇━━━━━━━━━━━
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('setchan.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_chan)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم حفظ معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('channel.txt', $text);
file_put_contents('setchan.txt', '');

}
#==============================================================================================================#
if($data == 'infobot'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
👨‍💻┇اهلا عزيزي رتب نبذه البوت
-
يمكنك حفظ سيرتك الذاتية بمعلوماتك الخاصة ويمكنك وضع نبذه عن عمل البوت يمكن ان يراها جميع مستخدمين بوتك ~ 👁‍🗨
-
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('setinfobot.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_infobot)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم حفظ معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);
file_put_contents('infobotnel.txt', $text);
file_put_contents('setinfobot.txt', '');
}
if($data == 'Nmdaer'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
📲قم بارسال رقمك ⚜️
مثال 
9647801681195
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setNmdaer.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_Nmdaer)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم حفظ معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('Nmdaernel.txt', $text);
file_put_contents('setNmdaer.txt', '');
}



if($data == 'law'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
👨‍💻┇اهلا عزيزي قم بترتيب القوانين في البوتك
-
يمكنك وضع القوانين في البوت 
-
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setlaw.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_law)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم حفظ معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('lawnel.txt', $text);
file_put_contents('setlaw.txt', '');

}


if($data == 'MROAN'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
👨‍💻┇اهلا بك عزيزي عليك اضافه الرد ع رسالتك 
-
اي شي بالك😍 مثلا رابط قناتك الخاص تم تسليم بعد يمك  انته وذوقك☹️
-
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setMROAN.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_MROAN)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم حفظ الرساله الرد😍🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('MROANnel.txt', $text);
file_put_contents('setMROAN.txt', '');

}
if($message->sticker){
bot('sendSticker',[
'chat_id'=>$reply,
'sticker'=>$message->sticker->file_id
]);
}

if($message->voice){
bot('sendVoice',[
'chat_id'=>$reply,
'voice'=>$message->voice->file_id
]);
}

if($message->video){
bot('sendVideo',[
'chat_id'=>$reply,
'video'=>$message->video->file_id
]);
}

if($message->document){
bot('sendDocument',[
'chat_id'=>$reply,
'document'=>$message->document->file_id
]);
}

if($message->video){
bot('sendVideo',[
'chat_id'=>$reply,
'video'=>$message->video->file_id
]);
}

if($message->photo){
    
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('photo.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
       
    
bot('sendPhoto',[
'chat_id'=>$reply,
'photo'=>new CURLFILE('photo.png')
]);
}

