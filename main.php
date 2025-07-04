<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTデータを受け取る
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // 入力検証
    if (empty($username) || empty($password)) {
        echo "ユーザー名またはパスワードが入力されていません。";
    } else {
        // ここでデータベースに保存する処理を行う
        // データベース接続処理など
        echo "ログイン情報を受け取りました。";
    }
}
?>
