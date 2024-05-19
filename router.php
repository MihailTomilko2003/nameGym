<?php
session_start();
global $mysqli;
$mysqli = new mysqli("127.0.0.1", "root", "root", "powerGym", "8889");
require_once './Clients.php';
$path = explode('/', $_SERVER['REQUEST_URI'])[2];
$pathArr = explode('/', $_SERVER['REQUEST_URI']);
$title = "";
$visible = "";
$content = "404";
$clientact = "";
$addact = "";
$visibleTitle = true;
if ($path == "_unlock"){
    $_SESSION['verefication'] = 3;
    header("Location: /nameGym/clients");
}
if(isset($_SESSION['verefication'])){
    if ($path == "clients" or $path == "" or $path == "index.php") {
        $_SESSION['verefication'] = 3;
        $title = "Список клиентов";
        $clientact = "active animate-element";
        $addact = "off";
        $visible = "";
        $visibleTitle = true;
        $content = file_get_contents('./clients.html');
    }
    //$_SESSION['verefication'] = 1;
    if ($path == "getClients") {
        exit(Clients::getClients());
    } elseif ($path == "addClient" and $_SERVER['REQUEST_METHOD'] == "GET") {
        $_SESSION['verefication'] = 3;
        $title = "Добавление нового посетителя";
        $addact = "active animate-element";
        $clientact = "off";
        $visibleTitle = false;
        $visible = "d-none";
        $content = file_get_contents('./addClient.html');
    } elseif ($pathArr[2] == "delete") {
        exit(Clients::deleteClient($pathArr[3]));
    } elseif ($pathArr[2] == "editClient") {
        exit(Clients::editClient($pathArr[3]));
    } elseif ($path == "addClient" and $_SERVER['REQUEST_METHOD'] == "POST") {
        exit(Clients::addClient());
    }
}else{
    exit(file_get_contents('./lock.html'));
}
if ($path == "lock") {
    unset($_SESSION['verefication']);
    $title = "";
    $addact = "";
    $visible = "";
    exit(file_get_contents('./lock.html'));
}

require_once './template.php';