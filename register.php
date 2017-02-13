<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://wizzybot.herokuapp.com/execute.php';
$NOT_TOKEN = '362116522:AAEXdq1IMnrXMoo2GbmaTzj3eRlqLcSZ4uQ';
//$BOT_TOKEN = '760-0d32-40bb-beda-6fe41f7c7397';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);
