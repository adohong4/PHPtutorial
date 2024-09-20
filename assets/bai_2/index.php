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
        <input type="submit" name="sm" value="Kiem tra" />
    </form>
    <?php
        $a = $_POST["so1"];
        function check($a){
            while($a < 0){
                return "kiem tra lai gia tri";
                break;
            }

            if($a % 2 == 1){
                return "Le";
            }else{
                return "Chan";
            }
        }
        echo "a la so: ".check($_POST["so1"]);
    ?>
</body>

</html>