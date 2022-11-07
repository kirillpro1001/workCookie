<?
setcookie('login','admin',time()+5,'/');
setcookie('password','admin',time()+5,'/');
var_dump($_COOKIE);
echo "Cookie установлены";
?>