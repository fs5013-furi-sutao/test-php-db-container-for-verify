# Apache + PHP + MySQL の動作検証環境

このリポジトリは Apache + PHP + MySQL の動作検証環境です

## 使い方

1. トップディレクトリに `.env.example` をコピーして `.env` ファイルを作る
2. `docker-compose up` もしくは `docker-compose up -d` コマンドを実行する
3. ブラウザで `http://localhost:8080/` を開く
4. `src` フォルダの中身は、動作検証した PHP プロジェクトにする
