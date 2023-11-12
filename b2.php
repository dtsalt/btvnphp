<?php
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $a=(float)$_POST['a'];
    $b=(float)$_POST['b'];
    $c=(float)$_POST['c'];
    if ($a ==0){
        if($b!=0){
            $x=$c/$b;
            $result= "Phương trình bậc 1 có nghiệm x= ".intval($x);// intval: loại bỏ số thập phân
        }else if ($b==0&&$c==0){
            $result= "Phương trình bậc 1 vô số nghiệm";
        }else if ($b==0&&$c!=0){
            $result= "Phương trình bậc 1 vô nghiệm";
        }
    }else if ($a !=0){
        $dt=$b*$b-4*$a*$c;
        if ($dt<0){
            $result= "Phương trình bậc 2 vô nghiệm";
        }else  if ($dt==0){
            $result= "Phương trình bậc 2 có nghiệm x= ".intval(-$b/$a);
        }else if ($dt>0) {
            $x1= (-$b+sqrt($dt))/2*$a;
            $x2= (-$b-sqrt($dt))/2*$a;
            $result= "Phương trình bậc 2 có 2 nghiệm phân biệt:\n x1=".intval($x1). "\n x2=".intval($x2);
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <link rel="stylesheet" href="kqb2.css">

</head>
<body>
    <h2>Kết quả giải phương trình</h2>
    <img class="anh" src="ảnh/bt2.gif" alt="anh gif">
    <br>
    <br>
    <?php
   if(isset($result)){
       echo $result;
   }else {
    echo "Không có dữ liệu";
   }
    ?>
</body>
</html>




   