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
        // ユーザーから受け取ったパスワード
$raw_password = 'user_input_password';

// パスワードをハッシュ化する
$hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

// データベースにハッシュ化されたパスワードを保存
echo 'ハッシュ化されたパスワード: ' . $hashed_password;
        echo "ログイン情報を受け取りました。";
    }
}
?>
