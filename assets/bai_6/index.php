<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày trong tuần</title>
</head>

<body>
    <form method="post">
        Nhập số (0-6): <input type="number" name="day" min="0" max="6" required />
        <input type="submit" value="Kiểm tra" />
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $day = $_POST["day"];

            switch ($day) {
                case 0:
                    echo "Ngày thứ hai";
                    break;
                case 1:
                    echo "Ngày thứ ba";
                    break;
                case 2:
                    echo "Ngày thứ tư";
                    break;
                case 3:
                    echo "Ngày thứ năm";
                    break;
                case 4:
                    echo "Ngày thứ sáu";
                    break;
                case 5:
                    echo "Ngày thứ bảy";
                    break;
                case 6:
                    echo "Ngày Chủ nhật";
                    break;
                default:
                    echo "Không hợp lệ";
                    break;
            }
        }
    ?>
</body>

</html>