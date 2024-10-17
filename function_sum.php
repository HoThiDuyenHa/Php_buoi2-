<!-- Có 2 loại function :PHP và user Function(không có tham số và có tham số) -->
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
        $a=5;
        $b=6;
        return $a+$b;
        
    }
    echo "Tổng là:",sum();

    ?>
</body>
</html>
<?php
?>