<?php

function create_pdo()
{
    $options = [
        // 接続した後に実行されるコマンド
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'",
        // エラー時の処理 -> 例外をスロー
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // データのフェッチした後のスタイル -> カラム名をキーとする連想配列
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    try {
        $pdo = new PDO(
            "mysql:dbname=".getEnv("DB_NAME")."; host=".getEnv("HOST_NAME")."; port=".getEnv("INNER_DB_PORT")."; charset=utf8mb4",
            getEnv("DB_USER"),
            getEnv("DB_PASS"),
            $options
        );
    } catch (Exception $e) {
        error_log($e);
    }
    return $pdo;
}