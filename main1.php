<?php

$sudo = 5610949952;//ايديك
$userbot = "@Shqaf0bot";
//=================//
ob_start();
$token = '6423184829:AAESRI1vfp4C7ytmjPhM49lY7MMj2X7UEmA';
define('API_KEY',$token);
//=================//
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $Alsh = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
        $Alsh = file_get_contents($url);
        return json_decode($Alsh); 
}
//--------------------الفانكشن والمتغيرات----------------------//
function SendMessage($chat_id,$text,$mode,$reply = null,$keyboard = null){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode,
	'reply_to_message_id'=>$reply,
	'reply_markup'=>$keyboard
	]);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}
$from_id = $message->from->id;
$rdod = json_decode(file_get_contents("rdod.json"),true);
$replyy = $message->reply_to_message->forward_from->id;
$nameee = $message->from->first_name;
$username = $message->from->username;
$nameeee = $update->callback_query->from->first_name;
$usernamee = $update->callback_query->from->username;
$sudov = file_get_contents("sudos.txt");
$reply = file_get_contents("reply.txt");
$sudos = explode("\n",$sudov);
$text = $message->text;
$id = $message->from->id;
$button  = json_decode(file_get_contents('button.json'),1);
$Media = file_get_contents("Media.txt");
$sendid = file_get_contents("id.txt");
$link = file_get_contents("link.txt");
$apsi = file_get_contents("apsi.txt");
$TH1 = file_get_contents("things.txt");
$back = file_get_contents("back.txt");
$stop = file_get_contents("stop.txt");
$ans3 = file_get_contents("ans3.txt");
$ans4 = file_get_contents("ans4.txt");
$apsi1 = file_get_contents("apsi1.txt");
$autoreply = file_get_contents("autoreply.txt");
$lockbot = file_get_contents("lockbot.txt");
$lockjoin = file_get_contents("lockjoin.txt");
$listema002am = json_decode(file_get_contents("anser002.json"),true);
$listema002 = $listema002am["$chat_id"];
$listema0022 = $listema002am["$chatid"];
$video = file_get_contents("viedo.txt");
$voice = file_get_contents("voice.txt");
$music = file_get_contents("music.txt");
$users = file_get_contents("users.txt");
$how = file_get_contents("how.txt");
$setjoin = file_get_contents("setjoin.txt");
$dec = file_get_contents("dec.txt");
$sticker = file_get_contents("sticker.txt");
@$things = json_decode(file_get_contents("things.json"),true,128|64|256);
$photo = file_get_contents("photo.txt");
file_put_contents("users.txt","مفتوح");
file_put_contents("photo.txt","مفتوح");
file_put_contents("sticket.txt","مفتوح");
file_put_contents("video.txt","مفتوح");
file_put_contents("voice.txt","مفتوح");
file_put_contents("music.txt","مفتوح");
file_put_contents("dec.txt","مفتوح");
file_put_contents("link.txt","مفتوح");
$caption = $update->message->caption;
$message_idd = $message->message_id;
$getmsgid = file_get_contents("data/$message_idd.txt");
$getmsgidd = file_get_contents("data/$message_id.txt");
$allrdd = file_get_contents("allrd/$text.txt");
$msgsend = file_get_contents("sends.txt");
$start = file_get_contents("start.txt");
$datas = json_decode(file_get_contents('datas.json'),true);
$set = file_get_contents("set.txt");
$filterlist = file_get_contents("filtertext.txt");
$filterward = explode("\n", $filterlist);
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
$bans = file_get_contents("banslist.txt");
$banlist = explode("\n", $bans);
//============
function check_filter($str){
	global $filterlist;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}
function save($array){
file_put_contents('button.json', json_encode($array));
}
foreach($things['buttons'] as $key => $name){
$name = $things['buttons'][$key];
$button_user[] = [['text'=>"$name"]];       
}
foreach($rdod['buttons'] as $key => $myrd){
$myrd = $things['buttons'][$key];
$bbbb[] = [['text'=>"$myrd"]];       
}
//===========================//
# *الاشتراك الاجباري* #
if($lockjoin == "مفتوح"){
$chjoin = file_get_contents("channel.txt");
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chjoin&user_id=".$chat_id);
if($message && (strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
if($setjoin == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"◾ مرحبا !!
◾ يرجى اشتراك بقناة صاحب البوت لتستطيع التواصل معه .

◾ القناة : $chjoin
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- اشترك .",'callback_data'=>"t.me/toffybots"]],
]
])
]);
}
else
{
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$setjoin
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- اشترك .",'callback_data'=>"t.me/$chjoin"]],
]
])
]);
}
return false;
}
}
if($lockbot == "مقفول"){
if($chat_id !== $sudo){
if($stop == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
◾ هذا البوت متوقف حاليا !
◾ سيتم تفعيله من المطور لاحقا .
",
]);
}
else
{
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$stop
",
]);
}
}
}
//~~~~~~~~~{Yemen}~~~~~~~//
# *الممنوعات* #
if($data == "filterlist"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ قائمة الكلمات الممنوعة :
$name
*$filterlist*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
if($data == "delfilter"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ تم مسح جميع الممنوعات .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("filtertext.txt","");
}
if(strpos($text,"منع ") !== false){
$filterward = str_replace("منع ","",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم منع الكلمة بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("filtertext.txt","$filterward\n",FILE_APPEND);
}
if(strpos($text,"الغاء منع ") !== false){
$filterward = str_replace("الغاء منع ","",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم منع الكلمة بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
$str = str_replace($filterward . "\n", '' ,$filterlist);
file_put_contents('filtertext.txt', $str);
}
if($data == "change"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اختر نوع النظام الذي تريد التغيير اليه .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تواصل توجية .",'callback_data'=>"forwardpv"]],
[['text'=>"◾ تواصل بدون توجيه .",'callback_data'=>"pv"]],
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
# *الحظر* #
if($replyy){
if($text == "حظر" and $chat_id == $sudo){
file_put_contents("banslist.txt","$replyy\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'◾ تم حظر العضو بنجاح .',
]);
bot('sendMessage',[
'chat_id'=>$replyy,
'text'=>'◾ تم حظرك بواسطة المدير .',
]);
}
}
if($replyy){
if($text == "الغاء حظر" and $chat_id == $sudo){
$strr = str_replace($replyy."\n", "" ,$bans);
file_put_contents("banslist.txt",$strr);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>'◾ تم الغاء حظر العضو بنجاح .',
]);
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>'◾ تم الغاء حظرك .'
]);
}
}
if($bans == "" or $bans == null){
file_put_contents("banslist.txt","");
}
if($data == "showbans"){
$count = count($banlist)-1;
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ قائمة المحضورين : *$count*

*$bans*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
if($data == "delbans"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ تم حذف المحظورين بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("banslist.txt","");
}
# *تعيين رسالة الاشتراك* #
if($data == "setjoin"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالة الاشتراك الخاصة بك مع القناة .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","text");
}
if($text and $set == "text"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حفظ رسالة الاشتراك الاجباري .
◾ قم بتفعيله الان .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("setjoin.txt",$text);
}
# *الاحصائيات * #
if($data == "allthings"){
$countalll= count($getmember)-1;
$countban = count($banlist)-1;
$countoff = "لايوجد .";
$countall = $countban + $countalll;
$counton = $countall - $countban - 1;
$countfiltermsg = "".$datas['data']['filtermsg']."";
$counttake = "".$datas['data']['takemsg']."";
$countsend = "".$datas['msg']['sendmsg']."";
$countmedia = "".$datas['data']['mediamsg']."";
$countallmsg = "".$datas['all']['allmsg']."";
$countmsg = $countallmsg + $countmedia + $countsend + $counttake + $countfiltermsg;
$countsubs =  "".$datas['data']['subs']."";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اليك احصائيات بوتك :

◾ عدد المشتركين الكلي : *$countall*
◾ المحظورين منهم : *$countban*
◾ الوهمين منهم : *$countoff*
◾ المشتركين النشطين : *$counton*

◾ عدد الرسائل الكلي : *$countmsg*
◾ عدد رسائل الكلمات الممنوعة : *$countfiltermsg*
◾ عدد الرسائل المستلمة : *$counttake*
◾ عدد الرسائل المرسلة : *$countsend*
◾ عدد رسائل الميديا : *$countmedia*

◾ عدد مشتركين قناتك عبر البوت : *$countsubs*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ العودة .",'callback_data'=>"back"]],
]
])
]);
}
//=============
/*
*This File is written by ahmef alapsi
* any quation please go to
* @TTKTT OR @YEM1BOT
* My chNnel : @ToffyBots
*/
//=============
if($data == "forwardpv"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ تم التغيير لـ نطام التوجية بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("how.txt","forward");
}
//=============
if($data == "pv"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ تم التغيير لـ نطام شبه سايت بنجاح .
◾ هذا النظام يتيح لك مراسلة قافلين التوجيه .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("how.txt","pv");
}
//=============
//===========
//=========
if($lockbot == "مفتوح"){
if($how == "forward" and !in_array($chat_id,$banlist)){
if($message and $chat_id != $sudo){
if($photo == "مفتوح" or $dec == "مفتوح"  or $sticker == "مفتوح" or $video == "مفتوح" or $music == "مفتوح" or $voice == "مفتوح" or $link == "مفتوح" or $users == "مفتوح" or $Media == "مفتوح" and !in_array($text,$filterward)){
if($reply== null){
$datas['data']['takemsg'] = ($datas['data']['takemsg']+1);
file_put_contents('datas.json', json_encode($datas));
if($text !== "/start"){
if($text !== "$name"){
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
◾ تم ارسال رسالتك بنجاح .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'◾ اصنع بوتك .','url'=>'t.me/LQPBOT']],
               ]
        ])
    ]);
        bot('forwardMessage',[
        'chat_id'=>$sudo,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
}
}
}
else
{
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$reply",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'◾ اصنع بوتك .','url'=>'t.me/LQPBOT']],
               ]
        ])
    ]);
$datas['data']['takemsg'] = ($datas['data']['takemsg']+1);
file_put_contents('datas.json', json_encode($datas));
    bot('forwardMessage',[
        'chat_id'=>$sudo,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
}
}
}
}
if($message->photo){
if($photo == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الصور .",
        ]);
}
}
if($message->video){
if($video == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الفيديو .",
        ]);
}
}
if($message->audio){
if($music == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الموسيقى والـ mp3 .",
        ]);
}
}
if($message->voice){
if($voice == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الصوت .",
        ]);
}
}
if($message->document){
if($dec == "مفتوح"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الملفات .",
        ]);
}
}
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
if($users == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال المعرفات .",
        ]);
}
}
if(strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
if($users == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الروابط .",
        ]);
}
}
if($how == "pv" and !in_array($chat_id,$banlist) and !in_array($text,$filterward)){
if($text != '/start' and $chat_id != $sudo){
if($reply == null){
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
◾ تم ارسال رسالتك بنجاح .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'◾ اصنع بوتك .','url'=>'t.me/LQPBOT']],
               ]
        ])
    ]);
   $datas['data']['takemsg'] = ($datas['data']['takemsg']+1);
file_put_contents('datas.json', json_encode($datas));
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
◾ رسالة جديدة من : [$name](tg://user?id=$chat_id)
◾ ايديه : $chat_id
◾ الرسالة :

◾ *$text*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ رد على الرسالة .",'callback_data'=>"pas-$chat_id"]],
[['text'=>"◾ تغيير النظام .",'callback_data'=>"change"]],
]
])
]);
    }
else
{
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$reply",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'◾ اصنع بوتك .','url'=>'t.me/LQPBOT']],
               ]
        ])
    ]);
$datas['data']['takemsg'] = ($datas['data']['takemsg']+1);
file_put_contents('datas.json', json_encode($datas));
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
◾ رسالة جديدة من : [$name](tg://user?id=$chat_id)
◾ ايديه : $chat_id
◾ الرسالة :

◾ $text
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ رد على الرسالة .",'callback_data'=>"pas-$chat_id"]],
[['text'=>"◾ تغيير النظام .",'callback_data'=>"change"]],
]
])
]);
}
}
}
}
//=========
if (strpos($data, "pas-") !== false) {
$id = str_replace("pas-",'',$data);
file_put_contents("id.txt","$id");
file_put_contents("set.txt","des");
bot("editmessagetext", [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالتك الان .
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"◾ تغيير النظام .","callback_data"=>"change"]],
]
])
]);
}
if($message and $set == "des" and $chat_id == $sudo){
$datas['msg']['sendmsg'] = ($datas['msg']['sendmsg']+1);
file_put_contents('datas.json', json_encode($datas));
$message = $message_idd+3;
file_put_contents("data/oo".$message.".txt",$text);
$get = bot('sendMessage',[
'chat_id'=>$sendid,
'text'=>$text,
]);
$msg_id = $get->result->message_id;
file_put_contents("data/$message.txt","".$sendid."==".$msg_id."\n", FILE_APPEND);
file_put_contents("set.txt","");
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
◾ تم الارسال للشخص بنجاح .
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تعديل الرسالة .",'callback_data'=>"editmsg"]],
[['text'=>"◾ حذف الرسالة .",'callback_data'=>"delmsgg"]],
]
])
]);
file_put_contents("set.txt","");
}
mkdir("data");
if($message->reply_to_message->forward_from->id and $chat_id == $sudo){
$datas['msg']['sendmsg'] = ($datas['msg']['sendmsg']+1); file_put_contents('datas.json', json_encode($datas));
$message = $message_idd+3;
file_put_contents("data/oo".$message.".txt",$text);
$get = bot('sendmessage',[
       'chat_id'=>$replyy,
        'text'=>$text,
]);
$msg_id = $get->result->message_id;
file_put_contents("data/$message.txt","".$replyy."==".$msg_id."\n", FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$sudo,
'text'=>"
◾ تم الارسال للشخص بنجاح .
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تعديل الرسالة .",'callback_data'=>"editmsg"]],
[['text'=>"◾ حذف الرسالة .",'callback_data'=>"delmsgg"]],
]
])
]);
file_put_contents("set.txt","");
}
//==============
if($data == "editmsg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان الرسالة الجديدة .
",
]);
file_put_contents("set.txt","editmsg");
}
if($text and $set == "editmsg"){
file_put_contents("set.txt","");
$ex = explode("==",$getmsgid);
$getmsg1 =$ex[1];
$getid1 =$ex[0];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تعديل الرسالة بنجاح .
",
]);
bot('deleteMessage',[
'chat_id'=>$getid1,
'message_id'=>$getmsg1,
]);
bot('sendmessage',[
'chat_id'=>$getid1,
'text'=>
$text,
]);
unlink("data/oo".$message_idd.".txt");
unlink("data/$message_idd.txt");
}
if($data == "delmsgg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ هل انت متاكد؟!
◾ ارسل نعم للحذف او اضغط على زر الالغاء .
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ الغاء .",'callback_data'=>"all"]],
]
])
]);
file_put_contents("set.txt","delmsgg");
}
if($text == "نعم" and $set == "delmsgg"){
$ex = explode("==",$getmsgid);
$getmsg1 =$ex[1];
$getid1 =$ex[0];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حذف الرسالة بنجاح .
",
]);
bot('deleteMessage',[
'chat_id'=>$getid1,
'message_id'=>$getmsg1,
]);
}
//---------------------اوامر المطور--------------------//
if($lockbot == "مفتوح" and !in_array($chat_id,$banlist)){
if($text == '/start' and $start != null){
if($apsi !== "YES"){
if($chat_id != $sudo or !in_array($chat_id,$sudos)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$start

- تم عمل هذا البوت بواسطة : @LQPBOT .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
$datas['data']['subs'] = ($datas['data']['subs']+1);
file_put_contents('datas.json', json_encode($datas));
}
}
}
}

if($update and $chat_id != $sudo and !in_array($chat_id,$sudos)){
$datas['all']['allmsg'] = ($datas['all']['allmsg']+1); file_put_contents('datas.json', json_encode($datas));
}
if($text and $chat_id != $sudo and !in_array($chat_id,$sudos)){
if(strstr($text ,$filterward) == true or strstr($caption,$filterward) == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ عذرا !! رسالتك ممنوعة من ارسالها لـ المطور ",
]);
}
$datas['data']['filtermsg'] = ($datas['data']['filtermsg']+1); file_put_contents('datas.json', json_encode($datas));
}
//===================//

//======{الازرار}======//
if($text == '/start' and $start == null){
if($chat_id != $sudo or !in_array($chat_id,$sudos)){
if($apsi == "YES"){
$button_user = json_encode(['keyboard'=> $button_user ,'resize_keyboard'=>true]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◼ مرحبا بك في بوت التواصل .

◼ ارسل ماتريد ارسالة الان .

◼ سيتم تحويلها الى صاحب البوت .

",
'reply_markup'=>$button_user,
]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
$datas['data']['subs'] = ($datas['data']['subs']+1);
file_put_contents('datas.json', json_encode($datas));
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
}
}
}
}
if($text == '/start' and $start != null){
if($apsi == "YES"){
$button_user = json_encode(['keyboard'=> $button_user ,'resize_keyboard'=>true]);
if($chat_id != $sudo or !in_array($chat_id,$sudos)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$start

",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>$button_user,
]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
$datas['data']['subs'] = ($datas['data']['subs']+1);
file_put_contents('datas.json', json_encode($datas));
}
}
}
}
if($text == '/start' and $start == null){
if($chat_id != $sudo or !in_array($chat_id,$sudos)){
if($apsi1 == "NO"){
foreach($button['buttons'] as $code => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$code]];
}
foreach($button['links'] as $code => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>$code]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◼ مرحبا بك في بوت التواصل .

◼ ارسل ماتريد ارسالة الان .

◼ سيتم تحويلها الى صاحب البوت .

",
 'reply_markup'=>$reply_markup,
]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
$datas['data']['subs'] = ($datas['data']['subs']+1);
file_put_contents('datas.json', json_encode($datas));
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
exit;
}
}
}
}
if($text == '/start' and $start != null){
if($chat_id != $sudo or !in_array($chat_id,$sudos)){
if($apsi1 == "NO"){
foreach($button['buttons'] as $code => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$code]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$start

",
 'reply_markup'=>$reply_markup,
]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
$datas['data']['subs'] = ($datas['data']['subs']+1);
file_put_contents('datas.json', json_encode($datas));
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
exit;
}
}
}
}
//=======
$price = $button['buttons'][$data]['mo'];
$name = $button['buttons'][$data]['name'];
$textt = str_replace(["NA","US","ID"],["$nameeee","$usernamee","$chat_id"],"$price");
if($price != null){
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>$textt,
     'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ العودة .",'callback_data'=>"back123"]],
]
])
      ]);
  }
if($data == "back123"){
if($back == null){
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>$backtext,
]);
}
else
{
	bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"◾ تم العودة الى القائمة الرئيسية",
     'reply_markup'=>$reply_markup,
    ]);
   }
   }
//=========
if($rdod['buttonans'][$text] != null){
if($chat_id != $sudo){
$ansbtn = $rdod['buttonans'][$text];
$textt = str_replace(["NA","US","ID"],["$nameee","$username","$chat_id"],"$ansbtn");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$textt",
'reply_to_message_id'=>$message->message_id,
]);
}
}
//========
if($things['buttonans'][$text] != null){
	if($chat_id != $sudo){
		$ansbtn = $things['buttonans'][$text];
		$textt = str_replace(["NA","US","ID"],["$nameee","$username","$chat_id"],"$ansbtn");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$textt",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>$button_user,
]);
}else{
		if($things['step'] == "none"){
			$ansbtn = $things['buttonans'][$text];
			$textt = str_replace(["NA","US","ID"],["$nameee","$username","$chat_id"],"$ansbtn");
			bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$textt",
'reply_to_message_id'=>$message->message_id,
]);
		}
	}
}
//======
if($text == '/start' and $start == null){
if($chat_id != $sudo or !in_array($chat_id,$sudos)){
if($apsi !== "YES" ){
if($apsi1 !== "NO"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◼ مرحبا بك في بوت التواصل .

◼ ارسل ماتريد ارسالة الان .

◼ سيتم تحويلها الى صاحب البوت .

◼ تم عمل هذا البوت بواسطة : @LQPBOT .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
if ($update && !in_array($chat_id, $getmember)) {
$member = file_get_contents('members.txt');
$getmember= explode("\n",$member);
$datas['data']['subs'] = ($datas['data']['subs']+1);
file_put_contents('datas.json', json_encode($datas));
file_put_contents("members.txt","$chat_id\n", FILE_APPEND);
}
}
}
}
}
$check = check_filter("$text");
if ($check == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ لايمكن ارسال الرسالة لانها تحتوى على ممنوعات .
",
]);
}
}
if($update and in_array($chat_id,$banlist)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ للاسف انت محظور من البوت .
",
]);
}
if($text == '/panel'){
file_put_contents("set.txt","null");
if($chat_id == $sudo or in_array($chat_id,$sudos)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ اهلا بك في اعدادات  بوت التواصل .
◾ تستطيع التحكم بها من الازرار .
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ عرض جميع اوامر الاقسام .",'callback_data'=>"allorders"]],
[['text'=>"◾ قسم الحقوق",'callback_data'=>"copyright"],['text'=>"◾ قسم الحماية .",'callback_data'=>"hmaiah"]],
[['text'=>"◾ قسم الازرار .",'callback_data'=>'addbutton']],
[['text'=>"◾ قسم الاذاعة .",'callback_data'=>"sendss"],['text'=>"◾ قسم الردود .",'callback_data'=>"reply"]],
[['text'=>"◾ قسم الاوامر العامة .",'callback_data'=>"all"]],
]
])
]);
}
}
# *العودة* #
if($data == "back"){
	file_put_contents("set.txt","null");
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اهلا بك في اعدادات  بوت التواصل .
◾ تستطيع التحكم بها من الازرار .
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ عرض جميع اوامر الاقسام .",'callback_data'=>"allorders"]],
[['text'=>"◾ قسم الحقوق",'callback_data'=>"copyright"],['text'=>"◾ قسم الحماية .",'callback_data'=>"hmaiah"]],
[['text'=>"◾ قسم الازرار .",'callback_data'=>'addbutton']],
[['text'=>"◾ قسم الاذاعة .",'callback_data'=>"sendss"],['text'=>"◾ قسم الردود .",'callback_data'=>"reply"]],
[['text'=>"◾ قسم الاوامر العامة .",'callback_data'=>"all"]],
]
])
]);
}
}
if($data == "allorders"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ يمكنك التحكم عبر الازرار في الاسفل .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تعيين الستارت .",'callback_data'=>"setstart"],['text'=>"◾ تعيين الاستلام .",'callback_data'=>"setreply"]],
[['text'=>"◾ تعيين رسالة العودة .",'callback_data'=>"backtext"]],
[['text'=>"◾ تعيين رسالة التنبيه .",'callback_data'=>"setalarm"],['text'=>"◾ تعيين رسالة التوقف .",'callback_data'=>"setstop"]],
[['text'=>"◾ تعيين قناة الاشتراك الاجباري .",'callback_data'=>"setch"]],
[['text'=>"- اضافة زر ➕",'callback_data'=>"addbtn"],['text'=>"- حذف زر ➖",'callback_data'=>"delbtn"]],
[['text'=>"- حذف الازرار 🗑",'callback_data'=>"delallbtn"],['text'=>"",'callback_data'=>"getbtns"]],
[['text'=>"- اوامر النشر بتوجيه 🗳",'callback_data'=>"orderfor"]],
[['text'=>"- الاحصائيات 💹",'callback_data'=>"allthings"],['text'=>"- تعيين رسالة الاشتراك 🗯",'callback_data'=>"setjoin"]],
[['text'=>"نشر اذاعة عادي 💬",'callback_data'=>"getinfo"],['text'=>"- الممنوعات 📛",'callback_data'=>"filterlist"]],
[['text'=>"- تغيير نظام البوت 📌",'callback_data'=>"change"]],
[['text'=>"- اضف ادمن ➕",'callback_data'=>"addadmin"],['text'=>"- حذف ادمن ➖",'callback_data'=>"deladmin"]],
[['text'=>"- مسح الممنوعات 🗑",'callback_data'=>"delfilter"]],
[['text'=>"- حذف الادمنية 🗑",'callback_data'=>"deladmins"],['text'=>"- عرض الادمنيه 📋",'callback_data'=>"showadmins"]],
[['text'=>"- تعيين قناة الاشتراك الاجباري 📡",'callback_data'=>"setch"]],
[['text'=>"- المحظورين 📛",'callback_data'=>"showbans"],['text'=>"- مسح المحظورين 🗑",'callback_data'=>"delbans"]],
[['text'=>"- اضافة رد ➕",'callback_data'=>"addrd"],['text'=>"- حذف رد ➖",'callback_data'=>"delrd"]],
[['text'=>"- حذف الردود 🗑",'callback_data'=>"delallrd"],['text'=>"- عرض الردود 🗳",'callback_data'=>"getrdod"]],
[['text'=>"- العودة .",'callback_data'=>"back"]],
]
])
]);
}
}
# *قسم الحقوق* #
if($data == "copyright"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اهلا بك في قسم تغيير الحقوق .
◾ تستطيع تغيير حقوق البوت الان .

◾ يمكنك التحكم عبر الازرار في الاسفل .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تعيين الستارت .",'callback_data'=>"setstart"],['text'=>"◾ تعيين الاستلام .",'callback_data'=>"setreply"]],
[['text'=>"◾ تعيين رسالة العودة .",'callback_data'=>"backtext"]],
[['text'=>"◾ تعيين رسالة التنبيه .",'callback_data'=>"setalarm"],['text'=>"◾ تعيين رسالة التوقف .",'callback_data'=>"setstop"]],
[['text'=>"◾ تعيين قناة الاشتراك الاجباري .",'callback_data'=>"setch"]],
[['text'=>"- العودة .",'callback_data'=>"back"]],
]
])
]);
}
}
if($data == "backtext"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالة العودة الان ...
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","backt");
}
}
if($text and $set == "backt"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("back.txt",$text);
file_put_contents("set.txt","null");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تحديث رسالة  بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
//==
if($data == "setstop"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالة التوقف الان ...
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","stopp");
}
}
if($text and $set == "stopp"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("stop.txt",$text);
file_put_contents("set.txt","null");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تحديث رسالة  التوقف بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
if($data == "setstart"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالة الستارت الجديدة ...
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","start");
}
}
if($text and $set == "start"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("start.txt",$text);
file_put_contents("set.txt","null");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تحديث رسالة الستارت بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
//=========================
if($data == "setreply"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالة الاستلام الجديدة ...
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","reply");
}
}
if($text and $set == "reply"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("reply.txt",$text);
file_put_contents("set.txt","null");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تحديث رسالة الاستلام بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
//========================
if($data == "setalarm"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل رسالة التنبيه الجديدة ...
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","alarm");
}
}
if($text and $set == "alarm"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("alarm.txt",$text);
file_put_contents("set.txt","null");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تحديث رسالة التنبيه بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
//=======================
if($data == "setch"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل معرف القناة الجديدة ...
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("set.txt","ch");
}
}
if($text and $set == "ch"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("channel.txt",$text);
file_put_contents("set.txt","null");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تحديث قناة الاشتراك بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
# *قسم الحماية* #
if($data == "hmaiah"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اهلا بك في قسم تغيير الحماية .
◾ تستطيع قفل ارسال الميديا اليك .
◾ يمكنك التحكم بي عبر ارسال الاتي :

◻ *قفل - فتح : التوجيه*
◻ *قفل - فتح : الصور*
◻ *قفل - فتح : الملصقات*
◻ *قفل - فتح : الفيديو*
◻ *قفل - فتح : الصوت*
◻ *قفل - فتح : الروابط*
◻ *قفل - فتح : البصمات*
◻ *قفل - فتح : المعرفات*
◻ *قفل - فتح : الكل*

◾ قفل : لقفل الامر 📛
◾ فتح : لفتح الامر ✅
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- حالة الحماية 📛",'callback_data'=>"locks"]],
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
if($data == "locks"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اليك حالة الحماية في بوتك .

◾ الصور : {$photo}
◾ الفيديو : {$video}
◾ الموسيقى : {$music}
◾ الصوت : {$voice}
◾ الملفات : {$dec}
◾ الروابط : {$link}
◾ المعرفات : {$users}
◾ الملصقات : {$sticker}
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
if($text == "قفل الروابط"){
	if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("link.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الروابط لك بنجاح .
",
]);
}
}
if($text == "فتح الروابط"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("link.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الروابط لك بنجاح .
",
]);
}
}
if($text == "قفل الملفات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("dec.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الملفات لك بنجاح .
",
]);
}
}
if($text == "فتح الملفات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("dec.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الملفات لك بنجاح .
",
]);
}
}
if($text == "قفل الملصقات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("sticker.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الملصقات لك بنجاح .
",
]);
}
}
if($text == "فتح الملصقات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("sticker.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الملصقات لك بنجاح .
",
]);
}
}
if($text == "قفل الصور"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("photo.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الصور لك بنجاح .
",
]);
}
}
if($text == "فتح الصور"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("photo.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الصور لك بنجاح .
",
]);
}
}
if($text == "قفل التوجيه" or $text == "قفل التوجية"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("forward.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال بالتوجيه لك بنجاح .
",
]);
}
}
if($text == "فتح التوجيه" or $text == "فتح التوجية"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("forward.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح الارسال بالتوجيه لك بنجاح .
",
]);
}
}
if($text == "قفل الفيديو"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("video.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الفيديو لك بنجاح .
",
]);
}
}
if($text == "فتح الفيديو"){
	if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("video.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الفيديو لك بنجاح .
",
]);
}
}
if($text == "قفل الكل"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("Media.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الكل لك بنجاح .
",
]);
}
}
if($text == "فتح الكل"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("Media.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الكل لك بنجاح .
",
]);
}
}
if($text == "قفل الصوت"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("music.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال الصوت لك بنجاح .
",
]);
}
}
if($text == "فتح الصوت"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("music.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال الصوت لك بنجاح .
",
]);
}
}
if($text == "قفل البصمات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("voice.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال البصمات لك بنجاح .
",
]);
}
}
if($text == "فتح البصمات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("voice.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال البصمات لك بنجاح .
",
]);
}
}
if($text == "قفل المعرفات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("users.txt","مقفول");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم قفل ارسال المعرفات لك بنجاح .
",
]);
}
}
if($text == "فتح المعرفات"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
file_put_contents("users.txt","مفتوح");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم فتح ارسال المعرفات لك بنجاح .
",
]);
}
}
# *قسم الازرار* #
if($data == "addbutton"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ مرحبا بك في قسم الازرار .
◾ يمكنك اضافة ازرار شفافة او كيبورد .
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- اضافة زر ➕",'callback_data'=>"addbtn"],['text'=>"- حذف زر ➖",'callback_data'=>"delbtn"]],
[['text'=>"- حذف الازرار 🗑",'callback_data'=>"delallbtn"],['text'=>"",'callback_data'=>"getbtns"]],
[['text'=>"- العودة .",'callback_data'=>"back"]],
]
])
]);
}
if($data == "delbtn"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل اسم الزر الذي تريد حذفه الان .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("set.txt","delzr");
}
}
if($text and $set == "delzr"){
if(in_array($text, $button['buttons']) or in_array($text, $things['buttons']) or in_array($text, $button['links']) ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حذف الزر (*$text*) بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
unset($button['links'][$text]);
unset($button['buttons'][$text]);
file_put_contents("button.json",json_encode($button));
//===
$search = array_search($text, $rdod['buttons']);
unset($things['buttons'][$search]);
unset($things['buttonans'][$text]);
$things['buttons'] = array_values($things['buttons']);
file_put_contents("things.json",json_encode($things));
}else{
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ لم يتم صنع رد بهذه الكلمة من قبل !!
",
]);
}
}
if($data == "delallrd"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"◾ تم حذف جميع الردود .
",
]);
unset($things["buttons"]);
unset($things["buttonans"]);
file_put_contents("things.json", json_encode($things));
unset($button['links']);
unset($button['buttons']);
sava($button);
}
}
if($data == "getrdod"){
if($chatid == $sudo or in_array($chatid,$sudos)){
if(count($listema0022) > 0){
$txxxt = "◾ قائمة الردود :
";
$counter = 1;
foreach($listema0022 as $k => $ans){
$txxxt .= "$counter: $k ➡ $ans \n";
$counter++;
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$txxxt
",
]);
}
else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ القائمة خالية .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
}
}
if($data == "addbtn"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اختر نوع الزر الذي تريد اضافته .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ زر كيبورد",'callback_data'=>"btnkeyboard"],['text'=>"◾ زر شفاف .",'callback_data'=>'databtn']],
[['text'=>"◾ العودة .",'callback_data'=>'back']],
]
])
]);
}
if($data == "databtn"){
if($apsi == "YES"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ قم بإختيار نوع الزر الان .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ محتوى .",'callback_data'=>"محتوى"],['text'=>"◾ رابط .",'callback_data'=>"رابط"]],
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ عذرا !! لقد قمت بصناعه زر كيبورد .
◾ لذلك حسب لغة php يمنع انشاء زرين من نوعين مختلفين .
◾ قم بحذف جميع الازرار الكيبورد وقم بعمل ازرار شفافه .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ العودة .",'callback_data'=>'addbutton']],
]
])
]);
}
}
if($data == "محتوى"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل اسم الزر الان .
◾ يمكنك صنع مايقارب الـ *20* زر .
◾ عند صنع ازرار شفافة لن تستطيع صنع ازرار كيبورد مالم تقم بحذف الازرار الشفافه .
◾ تستطيع وضع ازرار محتوى او رابط .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$button['mode'] = 'add';
save($button );
exit;
}
if($text != '/start' and $text != null and $button['mode'] == 'add'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حفظ اسم الزر بنجاح .
◾ يرجى ارسال محتوى الزر الان .
◾ قد يكون نص او رابط فقط .
◾ تستطيع اضافة الدوال الاتيه .

◾ دالة طبع اسم الشخص : NA
◾ دالة طبع معرف الشخص : US
◾ دالة طبع ايدي الشخص : ID

◾ قم باضافتها للنص الذي سترسله كمثال :
مرحبا يا NA كيف حالك !!",
'reply_to_message_id'=>$message->message_id,
]);
$button['n'] = $text;
$button['mode'] = 'addm';
save($button );
exit;
}
if($text != '/start' and $text != null and $button['mode'] == 'addm'){
$code = $button['n'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم صنع الزر بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$button['buttons'][$code]['name'] = $button['n'];
$button['buttons'][$code]['mo'] = $text;
$button['n'] = null;
$button['mode'] = null;
save($button);
file_put_contents("apsi1.txt","NO");
file_put_contents("sends.txt","");
exit;
}
//================
if($data == "رابط"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل اسم الزر الان .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$button['mode'] = 'addd';
save($button );
exit;
}
if($text != '/start' and $text != null and $button['mode'] == 'addd'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حفظ اسم الزر بنجاح .
◾ يرجى ارسال الرابط الان .
◾ يجب ان يبدأ بـ http او https او www او رابط تليجرام .
",
'reply_to_message_id'=>$message->message_id,
]);
$button['n'] = $text;
$button['mode'] = 'adddm';
save($button );
exit;
}
if($text != '/start' and $text != null and $button['mode'] == 'adddm'){
$code = $text;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم صنع الزر بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$button['links'][$code]['name'] = $button['n'];
$button['links'][$code]['mo'] = $text;
$button['n'] = null;
$button['mode'] = null;
save($button);
file_put_contents("apsi1.txt","NO");
file_put_contents("sends.txt","");
exit;
}
//================
if($data == "btnkeyboard"){
if($apsi1 !== "NO"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل اسم الزر الان .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$things['step'] = "addbutton";
file_put_contents("things.json",json_encode($things));
}
else{
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ عذرا ياصديقي لقد قمت بصناعة ازرار شفافة .
◾ لااستطيع صنع زرين بنوعين مختلفين .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ العودة .",'callback_data'=>'back']],
]
])
]);
}
}
elseif($things['step'] == "addbutton" and isset($text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حفظ الاسم .
◾ ارسل محتوى الزر الان (نص فقط)
◾ تستطيع اضافة الدوال الاتيه .

◾ دالة طبع اسم الشخص : NA
◾ دالة طبع معرف الشخص : US
◾ دالة طبع ايدي الشخص : ID

◾ قم باضافتها للنص الذي سترسله كمثال :
مرحبا يا NA كيف حالك !!",
]);
$things['step'] = "ansbtn|$text";
$things['buttons'][] = "$text";
file_put_contents("sends.txt",$text);
file_put_contents("things.json",json_encode($things));
}
elseif(strpos($things['step'], "ansbtn") !== false and isset($text)){
$nambtn = str_replace("ansbtn|",null,$things['step']);
$things['step'] = "none";
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم صنع الزر بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$things['buttonans'][$nambtn] = "$text";
file_put_contents("things.json",json_encode($things));
file_put_contents("apsi.txt","YES");
file_put_contents("sends.txt","");
}
//=============
# *قسم الردود* #
if($data == "reply"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اهلا بك في قسم الردود التلقائية .
◾ تستطيع اضافة وحذف الردود الان .

◾ يمكنك التحكم عبر الازرار في الاسفل .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- اضافة رد ➕",'callback_data'=>"addrd"],['text'=>"- حذف رد ➖",'callback_data'=>"delrd"]],
[['text'=>"- حذف الردود 🗑",'callback_data'=>"delallrd"],['text'=>"- عرض الردود 🗳",'callback_data'=>"getrdod"]],
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
if($data == "addrd"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان الكلمة التي تريد الرز عليها .
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة .",'callback_data'=>"back"]],
]
])
]);
$rdod['step'] = "addbutton";
file_put_contents("rdod.json",json_encode($rdod));
}
}
elseif($rdod['step'] == "addbutton" and isset($text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم اضافة الكلمة بنجاح .
◾ الان قم بارسال الرد الذي تريد من البوت ارساله عندما يقوم احد بارسال هذه الكلمه .
◾ تستطيع اضافة الدوال الاتيه .

◾ دالة طبع اسم الشخص : NA
◾ دالة طبع معرف الشخص : US
◾ دالة طبع ايدي الشخص : ID

◾ قم باضافتها للنص الذي سترسله كمثال :
مرحبا يا NA كيف حالك !!",
]);
$rdod['step'] = "ansrd|$text";
$rdod['buttons'][] = "$text";
file_put_contents("rdod.json",json_encode($rdod));
}
elseif(strpos($rdod['step'], "ansrd") !== false and isset($text)){
$nambtn = str_replace("ansrd|",null,$rdod['step']);
$rdod['step'] = "none";
$listema002am = json_decode(file_get_contents("anser002.json"),true);
$listema002 = $listema002am["$chat_id"];
if(!isset($listema002[$pmsh])){
$listema002[$nambtn] = $text;
$listema002am["$chat_id"][$nambtn] = $text;
file_put_contents("anser002.json", json_encode($listema002am));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم اضافة الكلمة بنجاح .
◾ اذا قام احد بإرسال *$nambtn* سيتم الرد عليه بـ *$text*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
$rdod['buttonans'][$nambtn] = "$text";
file_put_contents("rdod.json",json_encode($rdod));
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ الكلمة مضافة مسبقا .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
}
if($data == "delrd"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل اسم الرد الذي تريد حذفه الان .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("set.txt","delrd");
}
}
if($text and $set == "delrd"){
if(in_array($text, $rdod['buttons'])){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حذف الرد (*$text*) بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
$rdod['step'] = "none";
$search = array_search($text, $rdod['buttons']);
unset($rdod['buttons'][$search]);
unset($rdod['buttonans'][$text]);
unset($listema002am["$chat_id"][$pmsh]);
file_put_contents("anser002.json", json_encode($listema002am));
$rdod['buttons'] = array_values($rdod['buttons']);
file_put_contents("rdod.json",json_encode($rdod));
}else{
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ لم يتم صنع رد بهذه الكلمة من قبل !!
",
]);
}
}
if($data == "delallrd"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"◾ تم حذف جميع الردود .
",
]);
unset($rdod["buttons"]);
unset($rdod["buttonans"]);
file_put_contents("rdod.json", json_encode($rdod));
unset($listema002am["$chat_id"]);
file_put_contents("anser002.json", json_encode($listema002am));
}
}
if($data == "getrdod"){
if($chatid == $sudo or in_array($chatid,$sudos)){
if(count($listema0022) > 0){
$txxxt = "◾ قائمة الردود :
";
$counter = 1;
foreach($listema0022 as $k => $ans){
$txxxt .= "$counter: $k ➡ $ans \n";
$counter++;
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$txxxt
",
]);
}
else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ القائمة خالية .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
}
}
# *قسم الاوامر العامة* #
if($data == "all"){
file_put_contents("set.txt","null");
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اهلا بك في قسم تغيير الاوامر .
◾ تستطيع التحكم بالبوت كاملا الان .
◾ الاوامر الكتابية :

◻ *تفعيل/تعطيل : الرد التلقائي*
◻ *تفعيل/تعطيل : الاشتراك الاجباري*
◻ *تفعيل/تعطيل : البوت*
◻ *تفعيل/تعطيل : التنبيه*
◻ *منع + كلمة : لمنع كلمة ما*
◻ *الغاء منع + كلمة : لالغاء منعها*

◾ يمكنك التحكم عبر الازرار في الاسفل .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- الاحصائيات 💹",'callback_data'=>"allthings"],['text'=>"- تعيين رسالة الاشتراك 🗯",'callback_data'=>"setjoin"]],
[['text'=>"",'callback_data'=>"getinfo"],['text'=>"- الممنوعات 📛",'callback_data'=>"filterlist"]],
[['text'=>"- تغيير نظام البوت 📌",'callback_data'=>"change"]],
[['text'=>"- اضف ادمن ➕",'callback_data'=>"addadmin"],['text'=>"- حذف ادمن ➖",'callback_data'=>"deladmin"]],
[['text'=>"- مسح الممنوعات 🗑",'callback_data'=>"delfilter"]],
[['text'=>"- حذف الادمنية 🗑",'callback_data'=>"deladmins"],['text'=>"- عرض الادمنيه 📋",'callback_data'=>"showadmins"]],
[['text'=>"- تعيين قناة الاشتراك الاجباري 📡",'callback_data'=>"setch"]],
[['text'=>"- المحظورين 📛",'callback_data'=>"showbans"],['text'=>"- مسح المحظورين 🗑",'callback_data'=>"delbans"]],
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
}
# *الافعيل والتعطيل* #
if($chat_id == $sudo or in_array($chat_id,$sudos)){
if($text == "تفعيل الاشتراك الاجباري"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تفعيل الاشتراك الاجباري .
◾ تاكد من اضافة قناة للاشتراك .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("lockjoin.txt","مفتوح");
}
if($text == "تعطيل الاشتراك الاجباري"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تعطيل الاشتراك الاجباري .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("lockjoin.txt","مقفول");
}
//=========
if($text == "تفعيل البوت"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تفعيل البوت بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("lockbot.txt","مفتوح");
}
if($text == "تعطيل البوت"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تعطيل البوت بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("lockbot.txt","مقفول");
}
//=========
if($text == "تفعيل الرد التلقائي"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تفعيل الرد التلقائي .
◾ لن يتم توصيل الرسائل لك اذا كانت ضمن رسائل الرد التلقائي .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("autoreply.txt","مفتوح");
}
if($text == "تعطيل الرد التلقائي"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تعطيل الرد التلقائي .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("autoreply.txt","مقفول");
}
//======
if($text == "تفعيل التنبيه"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تفعيل تنبيه البوت بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("alarm.txt","مفتوح");
}
if($text == "تعطيل التنبيه"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم تفعيل تنبيه البوت بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("alarm.txt","مقفول");
}
}
# *الادمنية* #
if($data == "addadmin"){
if($chatid == $sudo or in_array($chatid,$sudos)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل ايدي الشخص الذي تريد رفعه .
◾ ملاحظة : سيتم اعطاؤه كافة صلاحياتك .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("set.txt","addadmin");
}
}
if($text and $set == "addadmin"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم رفعه مشرف بنجاح .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("sudos.txt","$text\n",FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"
◾ تم رفعك مشرف في هذا البوت .
◾ ارسل /panel للدخول الى لوحة التحكم .
",
]);
}
}
if($chatid == $sudo or in_array($chatid,$sudos)){
if($data == "deladmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل ايدي الشخص الذي تريد ازالته .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
file_put_contents("set.txt","deladmin");
}
}
if($text and $set == "deladmin"){
if($chat_id == $sudo or in_array($chat_id,$sudos)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم حذف الادمن بنجاح
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
$str = str_replace($text . "\n", '' ,$sudov);
file_put_contents("sudos.txt",$str);
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"
◾ تم ازالتك من الادمنية في هذا البوت .",
]);
}
}
if($chatid == $sudo or in_array($chatid,$sudos)){
if($data == "showadmins"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ قائمة الادمنية :

*$sudov*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
if($data == "deladmins"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ تم حذف جميع الادمنز .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"all"]],
]
])
]);
}
}
  # *قسم الاذاعة* #
if($data == "sendss"){
file_put_contents("set.txt","send");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ اهلا بك في قسم تغيير الاذاعة .
◾ تستطيع نشر رسائل للمشتركين الان .
◾ قم بارسال رسالتك ثم حدد نوع النشر .

◾ ارسل رسالتك الان .
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة 🔙",'callback_data'=>"back"]],
]
])
]);
}
if($text and $set == "send"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◻ تم حفظ رسالتك :
*$text*

◾ اختر طريقة النشر الان .
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- نشر عادي 💬",'callback_data'=>"sendmsg"],['text'=>"- ارسال ماركدون 🗯",'callback_data'=>"sendmark"]],
[['text'=>"- ارسال هتمل 🔃",'callback_data'=>"sendhtml"],['text'=>"- ارسال لشخص محدد 🔘",'callback_data'=>"sendone"]],
[['text'=>"",'callback_data'=>"formsg"],['text'=>"- ارسال لاشخاص محددين 💭",'callback_data'=>"sendsome"]],
[['text'=>"- اوامر النشر بتوجيه 🗳",'callback_data'=>"orderfor"]],
]
])
]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt",$text);
}
if($data == "sendmsg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$msgsend 

$text
◾ جاري نشر الرسالة ... 💬",
]);
for($i=0;$i < count($getmember); $i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>$msgsend,
]);
file_put_contents("sends.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم نشر الرسالة الى {$count} مشترك ☑
",
]);
}
//=====
if($data == "orderfor"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ حسنا !! اختر نوع التوجيه .
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"نشر توجيه 🔁",'callback_data'=>"formsg"],['text'=>"- ارسال لاشخاص محددين 💭",'callback_data'=>"sendsome"]],
[['text'=>"- توجيه لشخص محدد 👤",'callback_data'=>"forone"]],
[['text'=>"- توجية لعدة اشخاص 👥",'callback_data'=>"forsome"]],
]
])
]);
}
if($data == "formsg"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الرسالة الان .",
]);
file_put_contents("set.txt","sendl");
}
if($text and $set == "sendl"){
for($i=0;$i < count($getmember); $i++){
bot('ForwardMessage',[
	'chat_id'=>$getmember[$i],
	'from_chat_id'=>$chat_id,
	'message_id'=>$message->message_id,
]);
file_put_contents("set.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم توجيه الرسالة الى {$count} مشترك ☑
",
]);
}
//=====
if($data == "sendmark"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ جاري نشر الرسالة ... 💬",
]);
for($i=0;$i<count($getmember);$i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
file_put_contents("sends.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم نشر الرسالة الى {$count} مشترك ☑

(ماركداون)
",
]);
}
if($data == "sendhtml"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ جاري نشر الرسالة ... 💬",
]);
for($i=0;$i<count($getmember);$i++){
bot('sendMessage',[
'chat_id'=>$getmember[$i],
'text'=>$msgsend,
'parse_mode'=>"HTML",
]);
file_put_contents("sends.txt","");
}
$count = count($getmember)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم نشر الرسالة الى {$count} مشترك ☑

(هتمل)
",
]);
}
if($data == "sendone"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان ايدي الشخص المراد الارسال له .
",
]);
file_put_contents("set.txt","xxx");
}
if($text and $set == "xxx"){
bot('sendMessage',[
'chat_id'=>$text,
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
$count = count($getmember)-1;
if($data == "sendsome"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان رقم محدد من حساب عدد المشتركين .

*عدد المشتركين* :- $count

◾ مثلا 20 ✅
◾ بعد ذلك سيتم ارسال رسالتك لـ 20 شخص من بين $count شخص ☑
",
]);
file_put_contents("set.txt","nnn");
$allcount = $count - $text;
}
$countt = count($getmember)-$allcount;
if($text and $set == "nnn"){
for($i=0;$i<count($countt);$i++){
bot('sendMessage',[
'chat_id'=>$countt[$i],
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك لـ $count[$i] شخص بنجاح ✅ .
",
    ]);
  }
//=======================
if($data == "sendone"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان ايدي الشخص المراد الارسال له .
",
]);
file_put_contents("set.txt","xxx");
}
if($text and $set == "xxx"){
bot('sendMessage',[
'chat_id'=>$text,
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
$count = count($getmember)-1;
if($data == "sendsome"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان رقم محدد من حساب عدد المشتركين .

*عدد المشتركين* :- $count

◾ مثلا 20 ✅
◾ بعد ذلك سيتم ارسال رسالتك لـ 20 شخص من بين $count شخص ☑
",
]);
file_put_contents("set.txt","nnn");
$allcount = $count - $text;
}
$countt = count($getmember)-$allcount;
if($text and $set == "nnn"){
for($i=0;$i<count($countt);$i++){
bot('sendMessage',[
'chat_id'=>$countt[$i],
'text'=>$msgsend,
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك لـ $countt شخص بنجاح ✅ .
",
    ]);
  }
//===============
if($data == "forone"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان ايدي الشخص المراد التوجيه له .
",
]);
file_put_contents("set.txt","forw");
}
if($text and $set == "forw"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ ارسل الرسالة الان .
",
]);
file_put_contents("set.txt","foronee");
file_put_contents("sends.txt",$text);
}
if($text and $set == "foronee"){
    bot('forwardMessage',[
        'chat_id'=>$msgsend,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم ارسال رسالتك للشخص بنجاح .",
]);
  }
$count = count($getmember)-1;
if($data == "forsome"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾ ارسل الان رقم محدد من حساب عدد المشتركين .

*عدد المشتركين* :- $count

◾ مثلا 20 ✅
◾ بعد ذلك سيتم توجيه رسالتك لـ 20 شخص من بين $count شخص ☑
",
]);
file_put_contents("set.txt","nnnn");
}
$count = count($getmember);
if($text and $set == "nnnn"){
$allcount = $count - $text;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ ارسل رسالتك الان .

◾ سيتم ارسالها لـ $text ولن يتم ارسالها لـ $allcount
",
]);
file_put_contents("set.txt","sendfor");
file_put_contents("sends.txt","$allcount");
}
if($text and $set == "sendfor"){
$countt = count($getmember)-$msgsends;
for($i=0;$i<count($countt);$i++){
    bot('forwardMessage',[
        'chat_id'=>$countt[$i],
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
file_put_contents("set.txt","null");
file_put_contents("sends.txt","");
  }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ تم التوجيه لـ $countt شخص بنجاح ✅ .
",
    ]);
  }
?># Bot-test
