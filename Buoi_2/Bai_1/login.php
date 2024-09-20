<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy thông tin từ form
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Kiểm tra thông tin đăng nhập
        if ($username == "admin" && $password == "admin") {
            $message = "Chào mừng bạn, $username!";
            header('Location: homepage.php');
            exit();
        } else {
            $message = "Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h2>SIGN IN</h2>
        </div>
        <?php if (isset($message)) { ?>
        <p class="<?php echo $message == "Chào mừng bạn, $username!" ? "success" : "error" ; ?>"><?php echo $message; ?>
        </p>
        <?php } ?>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="nhập tên đăng nhập">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="username" name="password" required placeholder="nhập mật khẩu">
            </div>
            <button type="submit" name="login" class="login-button">Login</button>
        </form>
    </div>
</body>

</html>