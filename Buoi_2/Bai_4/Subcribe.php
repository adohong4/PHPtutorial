<?php
$firstName = $lastName = $address = $gender = "";
$magazines = [];
$payment = "";
$errors = [];

// Kiểm tra nếu biểu mẫu được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $address = trim($_POST['address']);
    $gender = $_POST['gender'];
    $magazines = isset($_POST['magazines']) ? $_POST['magazines'] : [];
    $payment = $_POST['payment'];

    // Kiểm tra các trường bắt buộc
    if (empty($firstName)) {
        $errors[] = "Trường first name không được để trống.";
    }
    if (empty($lastName)) {
        $errors[] = "Trường last name không được để trống.";
    }
    if (empty($address)) {
        $errors[] = "Trường address không được để trống.";
    }
    if (empty($magazines)) {
        $errors[] = "Bạn phải chọn ít nhất một tạp chí.";
    }

    // Nếu không có lỗi, hiển thị hộp thoại xác nhận
    if (empty($errors)) {
        echo "<script>
                var confirmMessage = 'Tạp chí đã chọn: " . implode(", ", $magazines) . "\\nPhương thức thanh toán: " . htmlspecialchars($payment) . "';
                if (confirm(confirmMessage)) {
                    alert('Giới tính: " . htmlspecialchars($gender) . "\\nĐịa chỉ: " . htmlspecialchars($address) . "');
                } else {
                    document.getElementById('last_name').focus();
                }
              </script>";
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
        <h2>Biểu mẫu đăng ký</h2>
        <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" required
                    value="<?php echo htmlspecialchars($firstName); ?>">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" id="last_name" required
                    value="<?php echo htmlspecialchars($lastName); ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" required
                    value="<?php echo htmlspecialchars($address); ?>">
            </div>
            <div class="form-group">
                <label>Giới tính:</label><br>
                <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>> Nam
                <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Nữ
            </div>
            <div class="form-group">
                <label>Tạp chí:</label><br>
                <input type="checkbox" name="magazines[]" value="Magazine 1"
                    <?php if (in_array("Magazine 1", $magazines)) echo "checked"; ?>> Tạp chí 1<br>
                <input type="checkbox" name="magazines[]" value="Magazine 2"
                    <?php if (in_array("Magazine 2", $magazines)) echo "checked"; ?>> Tạp chí 2<br>
                <input type="checkbox" name="magazines[]" value="Magazine 3"
                    <?php if (in_array("Magazine 3", $magazines)) echo "checked"; ?>> Tạp chí 3<br>
            </div>
            <div class="form-group">
                <label for="payment">Phương thức thanh toán:</label>
                <select class="form-control" name="payment" required>
                    <option value="">Chọn phương thức</option>
                    <option value="Credit Card" <?php if ($payment == "Credit Card") echo "selected"; ?>>Thẻ tín dụng
                    </option>
                    <option value="PayPal" <?php if ($payment == "PayPal") echo "selected"; ?>>PayPal</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Process</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
</body>

</html>