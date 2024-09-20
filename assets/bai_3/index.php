<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frm" method="post">
        them so thu 1 <input type="text" name="so1" /><br />
        them so thu 2 <input type="text" name="so2" /><br />
        <input type="submit" name="sm" value="Tong" />
        <input type="submit" name="sm1" value="Hieu" />
        <input type="submit" name="sm2" value="Tich" />
        <input type="submit" name="sm3" value="Thuong" />
        <input type="submit" name="sm4" value="So du" />
    </form>
    <?php
        $a = $_POST["so1"];
        $b = $_POST["so2"];
        function tong($a, $b){
            $c = $a + $b;
            return $c;
        }

        function hieu($a, $b){
            $c = $a - $b;
            return $c;
        }

        function tich($a, $b){
            $c = $a * $b;
            return $c;
        }

        function thuong($a, $b){
            $c = $a / $b;
            return $c;
        }

        function phepchialaydu($a, $b){
            $c = $a % $b;
            return $c;
        }

        if (isset($_POST['sm'])) {
            echo "Kết quả: " . tong($a, $b);
        } elseif (isset($_POST['sm1'])) {
            echo "Kết quả: " . hieu($a, $b);
        } elseif (isset($_POST['sm2'])) {
            echo "Kết quả: " . tich($a, $b);
        } elseif (isset($_POST['sm3'])) {
            echo "Kết quả: " . thuong($a, $b);
        } elseif (isset($_POST['sm4'])) {
            echo "Kết quả: " . phepchialaydu($a, $b);
        }
    ?>
</body>

</html>