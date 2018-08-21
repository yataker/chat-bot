<?php

//Composerでインストールしたライブグラリを一括読み込み
reqire_once__Dir__.'vendor/autoload.php';

//POSTメソッドで渡される値を取得、表示
$inputString = file_get_contents('php://input');
error_log($inputString);

 ?>
