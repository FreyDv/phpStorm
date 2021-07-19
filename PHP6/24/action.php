<?php
error_reporting(-1);
//    echo '<pre>';
//    echo $_POST["name"];
//    echo `</pre>`;



if(!empty($_GET))
    if(isset($_GET["name"]))
        if ($_GET["name"] != null) {
    echo "GET:";
    echo '<pre>';
    print_r($_GET);
    echo `</pre>`;
}
echo"<p>";
echo ">back</a>";
echo"</p>";











//if(!empty($_POST)) $x= 2;
//if(!empty($_GET)) $x=3;
//if((!empty($_POST))&(!empty($_GET))) $x = 1;
//else $x = 0;
//switch ($x){
//    case 1:{
//        print_r($_POST);
//        echo "<br>";
//        print_r($_GET);
//        echo "<br>";
//        break;
//    }
//    case 2:{
//        print_r($_POST);
//        echo "<br>";
//        break;
//    }
//    case 3:{
//
//        print_r($_GET);
//        echo "<br>";
//
//        break;
//    }break;
//}
//echo"<p>";
//echo"<a href = \"23.php\">back</a>";
//echo"</p>";
//



