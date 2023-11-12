<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tính tiền điện</title>
    <link rel="stylesheet" href="bai4kq.css">
</head>
<body>
<?php

if ($_SERVER['REQUEST_METHOD'] =="POST") {

     $ten = $_POST["ten"];
     $sodau = $_POST["sodau"];
     $socuoi = $_POST["socuoi"];
     $g100SoDau = 1250;
     $g50sotiep = 1550;
     $gia50st = 1850;
     $g200 = 2250;

     
     $sotieudung = $socuoi - $sodau;
     $sosd100 = min(100, $sotieudung);
     $tien100sd = $sosd100 * $g100SoDau;

     // 50 số tiếp theo
     $sosdtiep = max(0, $sotieudung - 100);
     $so50tiep = min(50, $sosdtiep);
     $tien50sotiep = $so50tiep * $g50sotiep;

     // 50 số tiếp tiếp theo
     $sosdtip = max(0, $sosdtiep - 50);
     $so50 = min(50, $sosdtip);
     $tien50 = $so50 * $gia50st;

     // Từ số 200 trở đi
     $conlai = max(0, $sosdtip - 50);
     $giatien = $conlai * $g200;

     $tongtiendien = $giatien + $tien100sd + $tien50sotiep + $tien50;
}

?>
<div class="Box">
    <h1 class="kq">Kết quả tính tiền điện</h1>
    <img class="anh" src="ANh/G.gif" alt="Anh gif">
    <p class="tenkh">Tên Khách Hàng: <?php echo $ten; ?><br></p>
    <p class="sodien">Số Sử Dụng: <?php echo $sotieudung; ?><br></p>
    <p class="tien">Giá Tiền: <?php echo $tongtiendien; ?> VND</p>
</div>
</body>
</html>
