<?php
session_start();
//header("refresh: 1;");
//session_destroy();
require "include.php";

if(!empty($_POST["login"])){
    if($_POST["login"]==ADMIN){
        $_SESSION['admin']=ADMIN;
        $_SESSION['res']= "Успешная авторизация";
    }
    else{
        $_SESSION['res']="Неверный пароль";
    }
    header("location: s1.php");
    die();
}
echo "<center><p1>SESION №1</p1></center>";
echo $lincBlockStart.$linc2.$linc3.$lincBlockStart;
echo "<hr>";
if(empty($_SESSION["admin"])){
    echo $loginStart.$input.$buton.$loginFinish;
}
else echo "<h1 align=\"right\">Hi!!! {$_SESSION["admin"]}</h1>";
if(isset($_SESSION["res"])){
    echo "<h2 align=\"right\">status:{$_SESSION["res"]}</h2>";
    unset($_SESSION["res"]);
}
echo "<pre>";
print_r($_POST);
print_r($_SESSION);
echo "</pre>";
?>

