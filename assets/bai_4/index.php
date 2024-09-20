<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frm" method="post">
        Ma san pham <input type="text" name="msp" /><br />
        Ten san pham <input type="text" name="tsp" /><br />
        So luong <input type="text" name="sl" /><br />
        Don gia <input type="text" name="dgia" /><br />
        <input type="submit" name="sm4" value="Hoa don" />
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            define("VAT_RATE", 0.05);

            $msp = $_POST["msp"];
            $tsp = $_POST["tsp"];
            $sl = $_POST["sl"];
            $dgia = $_POST["dgia"];
            $vat = VAT_RATE;

            $tongTruocThue = $sl * $dgia;
            $tongSauThue = $tongTruocThue * (1 - $vat);

            echo "Mã sản phẩm: $msp<br/>";
            echo "Tên sản phẩm: $tsp<br/>";
            echo "Số lượng: $sl<br/>";
            echo "Đơn giá: " . number_format($dgia, 0, ',', '.') . " VNĐ<br/>";
            echo "Giá trị trước thuế: " . number_format($tongTruocThue, 0, ',', '.') . " VNĐ<br/>";
            echo "Giá trị sau thuế: " . number_format($tongSauThue, 0, ',', '.') . " VNĐ<br/>";
        }
    ?>
</body>

</html>