<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frm" method="post">
        <input type="text" name="so1" />them so thu 1<br />
        <input type="text" name="so2" />them so thu 2<br />
        <input type="submit" name="sm" value="Tinh" />
    </form>
    <?php
        $a = $_POST["so1"];
        $b = $_POST["so2"];
        function tinh($a, $b){
            $c = $a + $b;
            return $c;
        }
        echo "Ket qua: ".tinh($_POST["so1"],$_POST["so2"] );
    ?>
</body>

</html>