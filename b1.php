<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $a = (float)$_POST["a"];
    $b = (float)$_POST["b"];

   
    if ($a == 0) {
        $result = ($b == 0) ? "Phương trình có vô số nghiệm" : "Phương trình vô nghiệm";
    } else {
        $x = -$b / $a;
        $result = "Phương trình có nghiệm x = " .$x;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <link rel="stylesheet" href="kqb1.css">


</head>
<body>
    <div class="box">
    <h2>Kết quả giải phương trình</h2>
    <img class="anh" src="ảnh/1.gif" alt="Ảnh gif"><br>
    <?php
    if (isset($result)) {
        echo $result;
    } else {
        echo "Không có dữ liệu được gửi.";
    }
    ?>
    <br>
    </div>
    
</body>
</html>
