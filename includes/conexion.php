<?php
$host = 'localhost';
$user = 'root';
$db = 'Sistema_cursos';
$pass = '';

    try{
        $pdo = new PDO('mysql:host='.$host. ';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        'error: '.$e->getMessage();
    }