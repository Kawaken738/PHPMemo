<?php

/**
 * PDOを使ってデータベースに接続する
 * @return PDO
 */
function getDatabaseConnection() {

    $dsn = 'mysql:host=db;dbname=php_memo;charset=utf8mb4';
    $user = 'root';
    $password = 'password';
    try
    {
        $database_handler = new PDO($dsn, $user, $password);
    }
    catch (PDOException $e)
    {
        echo "DB接続に失敗しました。<br />";
        echo $e->getMessage();
        exit;
    }
    return $database_handler;
}