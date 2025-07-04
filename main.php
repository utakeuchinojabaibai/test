<?php
// データベース接続設定
$db = new PDO('mysql:host=localhost;dbname=sample_db', 'user', 'password');

// ログインフォームから送信されたデータを受け取る
$username = $_POST['username'];
$password = $_POST['password'];

// データベースからユーザー情報を検索
$query = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$query->execute(['username' => $username, 'password' => $password]);
$user = $query->fetch();

// ユーザー認証の確認
if ($user) {
    echo "ログイン成功！ようこそ、" . htmlspecialchars($user['username']) . "さん。";
} else {
    echo "ログイン失敗：ユーザー名またはパスワードが間違っています。";
}
?>
