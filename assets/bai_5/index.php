<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frm" method="post">
        Nhập số điện <input type="text" name="sodien" /><br />
        <input type="submit" name="sm4" value="Hoa don" />
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            define("LOAI1", 100*450);
            define("LOAI2", 100 *750);
            define("LOAI3", 100*900);
            define("LOAI4", 100*1000);
            define("LOAI5", 100*1200);
            $a = $_POST["sodien"];
            if($a <= 100 ){
                $hoadon = $a*450;
            }else{
                if($a <= 200){
                     $hoadon = LOAI1 + ($a - 100)*600;
                }else if( $a <= 300){
                     $hoadon = LOAI1 + LOAI2 + ($a - 200)*750;
                }else if( $a <= 500){
                     $hoadon = LOAI1 + LOAI2 + LOAI3 + ($a - 300)*900;
                }else if( $a <= 1000){
                     $hoadon = LOAI1 + LOAI2 + LOAI3 + LOAI4 + ($a - 500)*1000;
                }else{
                     $hoadon = LOAI1 + LOAI2 + LOAI3 + LOAI4 + ($a - 1000)*1200;
                }
            }
            echo "Hóa đơn: ".number_format($hoadon, 0, ',', '.') . " VNĐ<br/>";
        }
    ?>
</body>

</html>