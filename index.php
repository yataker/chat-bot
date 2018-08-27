<?php

// Composerでインストールしたライブラリを一括読み込み
require_once __DIR__ . '/vendor/autoload.php';


//アクセストークンを使いCurlHTTPClientをインスタンス化
$httpClinet = new \LINE\LINEBot\HTTPClient\CurlHTTPCLient(getenv('CHANNEL_ACCESS_TOKEN'));

//CurlHTTPCLientとシークレットを使いLINEBotをインスタンス化
$bot = new \LINE\LINEBot($httpClinet,['channelSecret' => getenv('CHANNEL_SECRET')]);

//LINE Mesaging API リクエストに付与した署名を取得
$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];

//署名が正当がどうかチェック。正当であれば、パースし配列へ
$events = $bot->parseEventRequest(file_get_cntents('php://input'),$signature);

//配列に格納された各イベントをループで処理
foreach ($events as $events) {
  // テキストを返信
  $bot->replyText($event->getPeplyToken(),'TextMessage')
}

 ?>
