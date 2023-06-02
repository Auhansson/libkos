<?php
    date_default_timezone_set('Europe/Kiev'); 
    $currentHour = date('G');

    if ($currentHour >= 18 || $currentHour < 6) { // від 18:00 до 6:00 
        $backgroundColor = "rgb(28, 28, 28)"; 
        $textColor = 'blanchedalmond'; 
    } else { // від 6:00 до 18:00
        $backgroundColor = 'rgb(178, 178, 178)'; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
</head>
<link rel = "Stylesheet" href="title.css">
<body>
    <div class="header">
        <div class="headlogo">
            <img class="logo" src="../photo/photo1.jpg">
            <b class="namelogo"><big>libkos</big></b>
        </div>
        <div class="headbotton">
            <a href="libkos.php">Головна сторінка</a>
            <a href="../author/libkosauthor.php">Про авторів</a>
            <a href="../portfolio/libkosportfolio.php">Портфоліо</a>
            <a href="#libkoscontact">Контакти</a>
        </div>
    </div>

    <div id="titlepage">
        <pre id="texttitle">
        <img id="titlephoto1" src="../photo/photo2.jpg">
    Ми розуміємо, що це очевидно, однак про всяк випадок проговоримо: 
    це не постановочні кадри. Не антуражні фотогеничні окопи 
    в стилі другої світової. Це реальність цих людей.</pre>
        <img id="titlephoto2" src="../photo/photo3.jpg">
        <h1 id="texttitle2">LIBKOS STORIES</h1>

    </div>
    <div>
        <a class="portfoliointitle" href="../portfolio/libkosportfolio.php">Портфоліо</a>
        <img id="titlephoto4" src="../photo/photo4.jpg">
        <img id="titlephoto5" src="../photo/photo5.jpg">
        <img id="titlephoto7" src="../photo/photo7.jpg">
        <img id="titlephoto8" src="../photo/photo8.jpg">
        <img id="titlephoto9" src="../photo/photo9.jpg">
        <img id="titlephoto13" src="../photo/photo13.jpg">
    </div>
    <div>
        <a class="authorintitle" href="../author/libkosauthor.php">Про авторів</a>
            <p class="authortexttitle"> <?php include 'text_libkos.php'; ?></p>
            <a class="nexttext" href="../author/libkosauthor.php">Читати далі ...</a>
            <img class="titlephoto15" src="../photo/photo15.jpg">
    </div>
    <form action="" class="form1" id="login-form">
        <div class="formname">
            <h2>Вхід</h2>
        </div>
        <div class="formname">
            <label for="email">Email Address *</label><br>
            <input type="email" id="email" name="email"  placeholder="your email..." required><br>
        </div>
        <div class="formname">
            <label  for="password">Password *</label><br>
            <input type="password" id="password" name="password" required>
            
        </div>
        </div>
        <div id="error" style="color:red"></div>
        <button  type="button" class="button" onclick="login()">Увійти</button>
        <div class="input_output">
            <p>Немає акаунту? <a href="#as" onclick="toggleForm()">Зареєструватись</a></p>
        </div>
        </form>

    <form action="registration.php"  method="post" id="register-form" style="display:none"  class="form1">
        <div class="formname">
		    <h2>Реєстрація</h2>
        </div>
        <div class="formname">
		    <label for="reg-email">Електронна пошта *</label>
		    <input type="email" id="reg-email" name="reg-email" required><br><br>
            <div id="email-error" style="color:red;"></div>
        <script src="validate-email.js"></script>
		</div>
        <div class="formname">
            <label for="reg-password">Пароль *</label>
		    <input type="password" id="reg-password" name="reg-password" required><br><br>
        </div>
        <div class="formname">
            <label for="confirm-password">Підтвердження пароля *</label>
		    <input type="password" id="confirm-password" name="confirm-password" required><br><br>
        </div>
        <div id="error2" style="color:red"></div>
        <button onclick="register()" name="submit" type="button" class="button">Зареєструватись</button>
        <div class="input_output">
		    <p>Вже маєте акаунт? <a href="#as" onclick="toggleForm()">Увійти</a></p>
        </div>
    </form>

    <form id="exit-form" style="display:none"  class="form1">
        <button onclick="exit_id()" class="button">Вийти</button>
    </form>

    <div>
        <a name="libkoscontact" id="titlecontact">Контакти</a>
        
        <ul type="squere" class="list">
            <li>Instagram: <a id="link" href="https://instagram.com/libkos?igshid=MjkzY2Y1YTY="> @libkos</a></li>
            <li>Telegram: <a id="link" href="t.me/libkosstories (https://t.me/libkosstories)">LIBKOS STORIES</a></li>
            <li>Підтримка libkos: <a id="link" href="https://send.monobank.ua/jar/sVU9eHExu">bank monobank</a></li>
            <li>PayPal:  libkos@gmail.com</li>
        </ul>
    </div>
    <p id="endtitle">UKRAINIAN PHOTODOCUMENTARY</p>
    <script src="title.js"></script>
</body>
</html>