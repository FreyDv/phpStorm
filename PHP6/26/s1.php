<?php


setcookie('test','MyValue',time()+3600,"/");
setcookie('test','MyValue',time()-1,"/");

$rst = 0;

if(isset($_POST["Rest"])){
//    print_r($_POST["Rest"]);
    $rst = $_POST["Rest"];
    $_POST["Rest"]=0;
}
if($rst==1){
    setcookie("counter",0,time()+3600,"/");
    header("location: s1.php");die();
}
else isset($_COOKIE["counter"])? setcookie("counter",++$_COOKIE["counter"],time()+3600,"/") : setcookie("counter",1,time()+3600,"/");


echo "id:".session_id();
echo "<br>";
echo "path". session_save_path();
echo "<br>";

echo isset($_COOKIE["test"]) ?  $_COOKIE['test']: "Не нашел";

if(isset($_POST)){
    echo "<pre>";
    print_r($_POST);
    print_r("rst: ".$rst);
    echo "</pre>";
}

echo $_COOKIE["counter"] ?? 1;
echo "<br>";
if(isset($_COOKIE["counter"])){
    if($_COOKIE["counter"]>1){
        echo "<form action=\"\" method=\"post\" >";
        echo "<button type=\"submit\" name=\"Rest\" value =1>Rest counter</button>";
        echo "</form>";
    }
}
if($_COOKIE["counter"]==0 and $rst==1){
    $rst=0;
    print_r("rst: ".$rst);
}
?>


