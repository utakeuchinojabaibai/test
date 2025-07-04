<?php
$username = $_POST['username'];
$password = $_POST['password'];

// データベースからユーザー情報を取得
$conn = new mysqli("localhost", "username", "password", "database");
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    // 認証成功
    session_start();
    $_SESSION['username'] = $username;
    header("Location: success.php"); // 成功ページにリダイレクト
  } else {
    // パスワードが間違っている
    echo "パスワードが間違っています。";
  }
} else {
  // ユーザー名が存在しない
  echo "ユーザー名が存在しません。";
}
$conn->close();
?>

