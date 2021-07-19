

<html lang="en"><head><meta charset="utf-8"><style>
        body {background: #1C1818FF; /* Цвет фона */color: #FFCC00FF; /* Цвет текста */}
        iframe { width:100%; height:1000px;}
</style>
<body>
<form  > <!--action.php-->
<!--    method= "post" action = ""-->
    <p1>
<!--        name = "name"-->
        <input type="text" name = "name" >

    </p1>
    <p>
        <textarea name="text"></textarea>
    </p>
    <p>
        <button type="submit" name="button1" value=1 formmethod ="post">Send POST</button>
        <button type="submit" name="button2" value=2 formmethod ="get"
        >Send GET</button>
    </p>
</form>
</body>
    <title>23 Урок</title></head><body></body></html>



<?php
//<editor-fold desc="Description">
{

}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------
//<editor-fold desc="Description">
{

}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------

//<editor-fold desc="POST">
{
    if (!empty($_POST)) {
        if (isset($_POST["name"])){
            if ($_POST["name"] != null) {
                echo $_POST["name"].": ";
                if (isset($_POST["text"])) {
                    if ($_POST["text"] != null ) {
                        echo nl2br($_POST["text"].";<br>");
                    }
                }


            }
        }
    }
    elseif(!empty($_GET)) {
        if (isset($_GET["name"])) {
            if ($_GET["name"] != null) {
                echo $_GET["name"].":";
                if (isset($_GET["text"])) {
                    if ($_GET["text"] != null) {
                        echo nl2br($_GET["text"].";<br>");
                    }
                }
            }
        }
    }



    echo"<p>";
    echo"<a href = \"24.php\">CLEAN</a>";
    echo"</p>";
}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------
//<editor-fold desc="GET">
{

}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------
//<editor-fold desc="Back">
{

}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------
//<editor-fold desc="Description">
{

}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------
//<editor-fold desc="Description">
{

}
//</editor-fold>
//----------------------------------------------------------------------------------------------------------------------







