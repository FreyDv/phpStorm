<?php
$s1 = "s1.php";
$s2 = "s2.php";
$s3 = "secret.php";
$lincBlockStart = "<ul>";
$linc1="<li><a href=$s1>s1</a></li>";
$linc2="<li><a href=$s2>s2</a></li>";
$linc3="<li><a href=$s3>secret</a></li>";
$lincBlockStart = "</ul>";

$loginStart = "<center><form action=\"\" method=\"post\">";
$input ="<input type=\"text\" name=\"login\">";
$buton ="<button type=\"submit\">Login</button>";
$loginFinish= "</form></center>";
define('ADMIN','admin');

