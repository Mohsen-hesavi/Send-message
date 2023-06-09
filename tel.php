<!--

        _______                   _     
    ___|__   __|                 | |    
   / __ \ | | __ _ _ __ ___ _   _| |__  
  / / _` || |/ _` | '__/ __| | | | '_ \ 
 | | (_| || | (_| | | | (__| |_| | |_) |
  \ \__,_||_|\__,_|_|  \___|\__, |_.__/ 
   \____/                    __/ |      
                            |___/       


  -->

<?php
$botToken = "5387862619:AAEq8ohD3JzM-Z_Bxb_eERw4sPEBJCGpImc"; //Token Bot
$chatId = 1492292402; //Admin Id

$name = $_POST['name'];
$famil = $_POST['famil'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$referer = $_SERVER['HTTP_REFERER'];
$New=array(
            '😁 یک پیام جدید داری:',
            '😇 یک پیام جدید داری:',
            '🤪 یک پیام جدید داری:',
            '🤤 یک پیام جدید داری:',
            '❤️ یک پیام جدید داری:',
            '😡 یک پیام جدید داری:',
         ); 
shuffle($New);
$New1=reset($New);
require_once('ja.php');

// تنظیم منطقه زمانی به ایران
$currentDateTime = new DateTime();

// تنظیم تاریخ و زمان یک ساعت قبل
$currentDateTime->modify('-1 hour');

// تبدیل تاریخ و زمان به شمسی
$jDate = new jDateTime(true, true, 'Asia/Tehran');
$jalaliDate = $jDate->date('Y-m-d', $currentDateTime->getTimestamp());
$jalaliTime = $jDate->date('H:i:s', $currentDateTime->getTimestamp());
$message="
$New1

👤 نام: $name

👥 نام خانوادگی: $famil

✉️ ایمیل: $email

📞 تلفن: $phone

🔖 پیامش: $massage

📍ایپی: $ip

🖥 سیستم عامل و مرورگر: $userAgent

📬دریافت شده در تاریخ و ساعت:

🗓 تاریخ: $jalaliDate
⏰ ساعت: $jalaliTime

";
$telegramApiUrl = 'https://api.telegram.org/bot' . $botToken . '/sendMessage';
$data = array(
    'chat_id' => $chatId,
    'text' => $message
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded\r\n',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($telegramApiUrl, false, $context);

// بررسی نتیجه ارسال پیام
if ($result === false) {
    header('Location: no.php');
} else {
    header('Location: ok.php');
}
?>