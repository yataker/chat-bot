<?php

//Composerでインストールしたライブラリを一括読み込み
reqire_once__DIR__.'vendor/autoload.php';

//POSTメソッドで渡された値を取得、表示
$inputString = file_get_contents('php://input');
error_log($inputString);

 ?>
