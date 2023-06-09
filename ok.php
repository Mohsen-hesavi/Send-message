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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ok</title>
</head>
<body>
    <div class="main2">
    <i class="icon fa-check-square"></i>
    <h1>ارسال موفقیت آمیز بود</h1>
 <p class="porg">تا <span style=font-size:20px; color:#000;">5</span> ثانیه دیگر به صفحه اصلی منتقل میشوید در صورت ناموفق بود از دکمه زیر به صفحه اصلی باز گردید</p>
 <?php
$seconds = 5;
$redirectPage = 'index.html';
header("Refresh:$seconds; url=$redirectPage");
?>
<a href="index.html"><button class="btn-ok">بازگشت</button></a>
    </div>
</body>
</html>