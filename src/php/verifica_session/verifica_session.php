<?php
// se minha  sessao email nao existir ela  ira  redirecionar para o index

if(!$_SESSION['login'] && !$_SESSION['password']){
    header('location:http://localhost:8081/');
    exit();
}