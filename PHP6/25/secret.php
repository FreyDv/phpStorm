<?php
session_start();
if(isset($_GET['do'])&&$_GET['do']=='exit'){
unset($_SESSION["admin"]);
}
require "include.php";
echo "<pre>";
if(isset($_SESSION["admin"])) {
    print_r ($_SESSION["admin"]);
}
echo "</pre>";
echo "<center><p1>SESION SECRET</p1></center>";
if(isset($_SESSION["admin"])) {
    if ($_SESSION["admin"] != "admin") die('Вы не авторизованны');
}else die('Вы не авторизованны');
echo "Добро пожаловать {$_SESSION["admin"]}";
echo $lincBlockStart.$linc1.$linc2.$lincBlockStart;
echo "<center><p1> id Сесии: ". session_id() ."</p1></center>";
echo ">LogOut</a>"
?>


<title>secret</title>

