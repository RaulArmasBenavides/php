<?php
function getRealIP() {
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    return $_SERVER['HTTP_CLIENT_IP'];

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    return $_SERVER['HTTP_X_FORWARDED_FOR'];

return $_SERVER['REMOTE_ADDR'];
}
$ip=getRealIP();

if ($ip=='127.0.0.1'){
    $sys_server="localhost";
    $sys_user="root";
    $sys_password="123456";
    $sys_db="admin";
    $_SERVER['msg']='SERVIDOR LOCAL';
}
else{
    $sys_server="localhost";
    $sys_user="root";
    $sys_password="abcd";
    $sys_db="admin";
    $_SERVER['msg']='SERVIDOR PRINCIPAL';
}
//echo $sys_server.'-'.$sys_user.'-'.$sys_password.'-'.$sys_db;
$enlace=mysqli_connect($sys_server, $sys_user, $sys_password, $sys_db);
?>
