<?php
session_start();
$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan password yang benar
    if ($username === "admin" && $password === "admin") {
        $_SESSION['login'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Username atau Password salah!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; }
        .container {
            width: 350px;
            margin: 60px auto;
            background: #fff;
            border: 1px solid #ccc;
            padding: 25px 30px 20px 30px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        h2 { text-align: center; margin-bottom: 20px; }
        label { display: block; margin-bottom: 6px; }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 14px;
            border: 1px solid #aaa;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .btn {
            width: 100%;
            padding: 8px;
            background: #1a73e8;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover { background: #1558b0; }
        .error {
            color: #d93025;
            font-size: 14px;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="post" action="">
        <label>Username</label>
        <input type="text" name="username" autocomplete="off" required value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
        <label>Password</label>
        <input type="password" name="password" autocomplete="off" required>
        <?php if ($error): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <button class="btn" type="submit" name="login">Log In</button>
    </form>
</div>
</body>
</html>