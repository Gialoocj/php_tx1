<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bai2.css"/>
    <?php 

    if($_POST["delete"]){
        $inp_arr = "";
    }
        if(isset($_POST["inp_array"]) && isset($_POST["process"])){
           $inp_arr = $_POST["inp_array"];
           $arr = explode(",",$inp_arr);
           $desOddArr = [];
           $ascEvenArr = [];
           $avg=0.0;
           $maxEven = -999;
           $countDiv3 = 0;

           for($i = 0; $i < count($arr); $i++){
            if($arr[$i]%3 == 0){
                $countDiv3++;
            }
            if($arr[$i]%2!=0){
                array_push($desOddArr, $arr[$i]);
            }else{
                array_push($ascEvenArr, $arr[$i]);

            }
           }

           $avg = array_sum($arr)/count($arr);
           $maxEven = max($ascEvenArr);
            rsort($desOddArr);
           sort($ascEvenArr);

           $_desOddArr = implode(",",$desOddArr);

         
        }

    ?>
</head>
<body>
    <form method="POST">
    <table>
        <tr>
            <td colspan="2" style="text-align: center; font-size:16px; text-transform: uppercase">Nhập mảng và hiển thị</td>
        </tr>
        <tr>
            <td>Nhập mảng</td>
            <td>
                <input type="text" id="inp_array" name="inp_array" value = "<?php echo $inp_arr ?>">
            </td>
        </tr>
        <tr>
            <td style="display:flex;justify-content:end; border:0;">
              <button type="submit" name="process">Thực hiện</button>
            </td>
            <td>
                <button type="submit" name="delete">Xóa</button>
            </td>
        </tr>
        <tr>
            <td>Phần tử chia hết cho 3</td>
            <td>
                <input type="text" <?php echo "value = $countDiv3" ?>>
            </td>
        </tr>
        <tr>
            <td>Phần tử mảng lẻ xếp tăng dần</td>
            <td>
                <input type="text" value = "<?php echo  $_desOddArr ?>">
            </td>
        </tr>
        <tr>
            <td>Phần tử mảng chẵn xếp giảm dần</td>
            <td>
                <input type="text" <?php echo "value = $maxEven" ?>>
            </td>
        </tr>
        <tr>
            <td>Tĩnh trung bình cộng phần tử chẵn</td>
            <td>
                <input type="text" <?php echo "value = $avg" ?>>
            </td>
        </tr>
        <tr>
            <td>Phần tử mảng chẵn lớn nhất</td>
            <td>
                <input type="text" <?php echo "value = $maxEven" ?>>
            </td>
        </tr>
    </table>
    </form>
   
</body>
</html>