<?php 
session_start();

$login    = $_POST['nlogin'];
$password = $_POST['npassword'];

$nlogin = ['SENHA' => $password,
           'LOGIN' => $login            
];

if($login == $nlogin['LOGIN'] && $password == $nlogin['SENHA']){
    $_SESSION['login']    = $login;
    $_SESSION['password'] = $password;
    echo json_encode(array("statusCode"=>200));
}
else{
 echo json_encode(array("statusCode"=>201));
}