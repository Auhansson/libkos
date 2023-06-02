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
</head>
<div id="topbot">
    <a href="#topsite" id="scrollBtn" onclick="coment_users()"><b>↓</b></a>
</div>
<a name="topsite"></a>
<link rel = "Stylesheet" href="portfolio.css">
<body>
    <body>
        <div class="header">
            <div class="headlogo">
                <img class="logo" src="../photo/photo1.jpg">
                <b class="namelogo"><big>libkos</big></b>
            </div>
            <div class="headbotton">
                <a href="../libkos/libkos.php">Головна сторінка</a>
                <a href="../author/libkosauthor.php">Про авторів</a>
                <a href="libkosportfolio.php">Портфоліо</a>
                <a href="#libkoscontact">Контакти</a>
            </div>
        </div>
    
    <body>
    <p id="titleportfolio">KOSTIANTYN & VLADA LIBEROV</p>
    <p id="titleportfolio2">UKRAINE WAR </p>
    <video autoplay loop id="video1">
        <source src="../photo/video1.mp4">
    </video>
    <video autoplay loop id="video2">
        <source src="../photo/video1.mp4">
    </video>
    
    
    <div>
        <?php include 'images.php'; ?>
    </div>
    <a name="bottomsite"></a>
    <p class="coment">Коментарії</p>
    <div class="coment2"> <?php include 'comment_public.php'; ?></div>
    <form  action="script.php"  method="post" class="form1" name="web_form">
        <div class="formname">
            <label for="name" >Ім'я:</label><br>
            <textarea id="name" name="name" type="text" placeholder="sasha"></textarea>
        </div>
        <div class="formname">
            <label >Задонатив за роботу Збройних Сил України?</label><br>
            <select id="selec" name="select" >
                <option>Так</option>
                <option>Буде зроблено</option>
            </select><br><br>
        </div>
        <div class="formname">
            <label for="impression">Cвої враження пиши сюди:</label><br>
            <textarea id="impression"  style="width: 310px; height: 147px;" onclick="clearTextarea()" name="impression" type="text" >напиши сюди...</textarea>
        </div>

        <button type="submit" name="submit" id="submitBtn"  onclick="coment_users()" class="button">Відправити коментар</button>

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
    <script src="porfolio.js"></script>
    <script src="location.js"></script>
    </body>
</body>
</html>