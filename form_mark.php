<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* Đặt kích thước và căn chỉnh cho container */
         #container {
            width: 700px;
            height: auto;
            background-color: chocolate;
            margin: 20px auto; /* Căn giữa container */
            padding: 20px;
            border-radius: 10px;
        }

        /* Căn giữa tiêu đề và tạo khoảng cách trên */
        h1 {
            text-align: center;
            margin-top: 10px;
        }

        /* Căn chỉnh các ô input và khoảng cách */
        .box {
            display: flex;
            align-items: center;
            margin-bottom: 15px; /* Khoảng cách giữa các dòng */
        }

        .box p {
            width: 100px; /* Đảm bảo nhãn có kích thước cố định */
            margin-right: 10px;
        }

        .input_number, select {
            width: 100%; /* Ô input rộng bằng phần còn lại của dòng */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Tạo khoảng cách giữa các nút và các thành phần khác */
        .button {
            text-align: center;
            margin-top: 20px;
           
        }

        .button input {
            width: 100px;
            padding: 10px;
            margin: 5px; /* Khoảng cách giữa các nút */
            background-color:yellow;
            border: none;
            border-radius: 5px;
           
        }

        .button input:hover {
            background-color: darkgreen; /* Hiệu ứng hover */
        }
        .rank{

        }

       
    </style>

</head>
<body>
    <?php
     $num1=$_POST["semester1"];
     $num2=$_POST["semester2"];
     $num3=$_POST["year"];
     $kq = '';
    function mark($num1,$num2,$num3){

        if ($num3==1){
            $kq=($num1+($num2))/2;

        }else{
            $kq=($num1+($num2*3))/4;

        }
        return $kq;
    }
    
    $kq=mark($num1,$num2,$num3);
    
    $rank=" ";
    if($kq>=9){
        $rank="Học sinh Xuất Sắc";
   
    }else if( $kq>=8){
        $rank="Học sinh Giỏi";
           
    }else if($kq>=6){
         $rank="Học sinh Khá";
       
    }else if($kq>=5){
         $rank="Học sinh Trung Bình";
    
    }else{
         $rank="Học sinh Yếu";
        
    }

    ?>


    <div id="container">
        <form action="form_mark.php" method="POST">
            <h1> BẢNG ĐIỂM CỦA EM</h1> 
            <div class="box">
                <p>Semester1: </p>
                <input id ="se1" class="input_number" type="number" name="semester1" value="<?php echo $num1?>">
            </div>
            <div class="box">
                <p>Semester2: </p>
                <input id="se2" class="input_number" type="number"  name="semester2"value="<?php echo $num2?>">
             </div>

            <div class="box">
                <p>Year:</p>
                <select name="year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <div class="box">
                <p>Summarise: </p>
                <input  id="kq" class="input_number" type="number" value="<?php echo $kq?>">
            </div>

            <div class="box">
                <p>Rank:</p>
                <p><?php echo $rank; ?></p> 
            </div>

            <div class="button">
                <input type="submit" value="OK">
                <input type="reset" value="Cancle" onclick="window.location.href='http://localhost:8080/haphp/Bu%e1%bb%95i%202/form_mark.php'" >
            </div>
        
        </form>
        

    </div>

        
</body>
</html>
