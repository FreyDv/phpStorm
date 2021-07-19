<?php
if(isset($_POST["send"])){
    echo"<pre>";
    print_r($_POST);
    echo "</pre>";
}
if(!empty($_FILES)){
    echo"<pre>";
    print_r($_FILES);
    echo "</pre>";
    move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
}

echo"<pre>";
print_r($_SERVER);
echo "</pre>";
echo $_SERVER['HTTP_REFERER']; // Адрес страницы с которой перешли по сылкеж
echo $_SERVER['REMOTE_ADDR']; // Адрес страницы с которой перешли по сылкеж

?>
<html lang="en"><head><meta charset="utf-8"><style>
        body {background: #1C1818FF; /* Цвет фона */color: #FFCC00FF; /* Цвет текста */}
        iframe { width:100%; height:1000px;}
</style>
<body>

<form method="Post" action="" enctype="multipart/form-data">

    <input type="file" name = "file">
    <p>
        <button type="submit" name = "send" value = "Ok">Send</button>
    </p>

</form>
</body>
    <title>24 Урок</title></head><body></body></html>























<!--<form  >-->
<!--        method= "post" action = ""-->
<!--    <p1>-->
<!--                name = "name"-->
<!--        <input type="text" name = "name" >-->
<!---->
<!--    </p1>-->
<!--    <p>-->
<!--        <textarea name="text"></textarea>-->
<!--    </p>-->
<!--    <p>-->
<!--        <button type="submit" name="button1" value=1 formmethod ="post">Send POST</button>-->
<!--        <button type="submit" name="button2" value=2 formmethod ="get"-->
<!--        >Send GET</button>-->
<!--    </p>-->
<!--</form>-->








