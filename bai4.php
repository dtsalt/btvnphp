<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Hóa đơn tiề điện</title>
    <link rel="stylesheet" href="bai4.css">
</head>
<body>
    <div class="box">
    <h1>Thông tin tiền điện</h1>
    <img class="anh" src="ANh/gif.gif" alt="ảnh gì động">
    <form action="b4.php" method="post" >
    <label class="tenkh">Tên khách hàng:</label> <br>
    <input type ="text" name="ten" ><br>
    <label class="dau">Chỉ số đầu: </label><br>
    <input type="number" name="sodau" min="0"> <br>
    <label class="cuoi" >Chỉ số cuối: </label> <br>
    <input type="number" name="socuoi"><br>
    <br>
    <input  class="hoadon" type="submit" value="Hóa đơn">
    <input  type ="reset" value="Reset">
    </form>
    </div>
</body>
</html>