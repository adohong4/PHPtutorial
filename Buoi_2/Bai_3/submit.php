<?php
// Kiểm tra nếu biểu mẫu được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    $validatePassed = filter_var($website, FILTER_VALIDATE_URL);

    if ($validatePassed) {
        // Hiển thị thông tin người dùng
        echo "<h2>Send contact thành công!</h2>";
        echo "Your name: " . htmlspecialchars($name) . "<br>";
        echo "Your email: " . htmlspecialchars($email) . "<br>";
        echo "Your phone number: " . htmlspecialchars($phone) . "<br>";
        echo "Your Website: " . htmlspecialchars($website) . "<br>";
        echo "Your message: " . nl2br(htmlspecialchars($message)) . "<br>";
    } else {
        echo "Url is not in correct format.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Liên hệ với chúng tôi</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="number" class="form-control" name="phone" required>
            </div>
            <div class="form-group">
                <label for="website">Trang web:</label>
                <input type="text" class="form-control" name="website" required>
            </div>
            <div class="form-group">
                <label for="message">Tin nhắn:</label>
                <textarea class="form-control" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>
</body>

</html>