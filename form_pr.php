<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function sum(){
            $a = $_POST["hsa"];
            $b = $_POST["hsb"];
            $sum = $a + $b;
            return $sum;
        }
        $kq = sum();
    ?>
    <form action="form.php" method="POST">
        First number: <input type="number" name="hsa" value="<?php echo $a?>"><br>

        Last number: <input type="number" name="hsb" value="<?php echo $b?>"><br>
        <input type="hidden" name="submit" value="1">
        <input type="submit" value="Submit">
    </form>
    <p class="kp"><?php echo $kq ?></p>

</body>
</html>
<!-- tham số là 1 biến được gọi khi khai báo hàm
 tham trị: -->