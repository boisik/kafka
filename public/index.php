<?php
$task = $_GET["task"];
$url = 'https://662b-194-15-147-11.ngrok-free.app';
if ($task=='del'){

    $url = $url.'/connectors/mongo';
//$url = 'https://373a-194-15-147-11.ngrok-free.app/connectors';
// $url = 'https://c3d4-194-15-147-11.ngrok-free.app/connector-plugins/mysql-connector/config/validate';
    $file_path = 'mysql2.json';

  //  $json_data = file_get_contents($file_path);

// Инициализируем cURL
    $ch = curl_init();

// Настраиваем cURL
    curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
//curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

// Выполняем запрос
    $result = curl_exec($ch);

    if ($result === false) {
        echo 'Ошибка при отправке данных: ' . curl_error($ch);
    } else {
        echo 'Данные успешно отправлены!';
        print_r($result);
    }

    curl_close($ch);

}elseif ($task=='add'){
   // $url = 'https://373a-194-15-147-11.ngrok-free.app/connectors/mysql-connector';
$url = $url.'/connectors';
// $url = 'https://c3d4-194-15-147-11.ngrok-free.app/connector-plugins/mysql-connector/config/validate';
    $file_path = 'mongo.json';

    $json_data = file_get_contents($file_path);

// Инициализируем cURL
    $ch = curl_init();

// Настраиваем cURL
    curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

// Выполняем запрос
    $result = curl_exec($ch);

    if ($result === false) {
        echo 'Ошибка при отправке данных: ' . curl_error($ch);
    } else {
        echo 'Данные успешно отправлены!';
        print_r($result);
    }

    curl_close($ch);
}elseif ($task=='addm'){
    // $url = 'https://373a-194-15-147-11.ngrok-free.app/connectors/mysql-connector';
    $url = $url.'/connectors';
// $url = 'https://c3d4-194-15-147-11.ngrok-free.app/connector-plugins/mysql-connector/config/validate';
    $file_path = 'mysql.json';

    $json_data = file_get_contents($file_path);

// Инициализируем cURL
    $ch = curl_init();

// Настраиваем cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

// Выполняем запрос
    $result = curl_exec($ch);

    if ($result === false) {
        echo 'Ошибка при отправке данных: ' . curl_error($ch);
    } else {
        echo 'Данные успешно отправлены!';
        print_r($result);
    }

    curl_close($ch);
}elseif ($task=='delm'){

    $url = $url.'/connectors/mysql';
//$url = 'https://373a-194-15-147-11.ngrok-free.app/connectors';
// $url = 'https://c3d4-194-15-147-11.ngrok-free.app/connector-plugins/mysql-connector/config/validate';
    $file_path = 'mysql-debezium-connector.json';

   // $json_data = file_get_contents($file_path);

// Инициализируем cURL
    $ch = curl_init();

// Настраиваем cURL
    curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
//curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

// Выполняем запрос
    $result = curl_exec($ch);

    if ($result === false) {
        echo 'Ошибка при отправке данных: ' . curl_error($ch);
    } else {
        echo 'Данные успешно отправлены!';
        print_r($result);
    }

    curl_close($ch);

}


