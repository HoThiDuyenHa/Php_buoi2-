<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_POST["nb1"];
         
    function check($a){
        if ($a%2==0){
            echo "Số chẵn";
        }else{
            echo "Số lẻ";
        }

    }
    check($a);
   
    ?>

    <form action="" method="POST">
            First number: <input type="number" name="nb1"><br>
            <input type="hidden" name="submit" value="1">
            <input type="submit" value="Submit">
    </form>
</body>
</html>