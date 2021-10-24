<?php

include "DB/config.php"; // Using database connection file here
?>
<!DOCTYPE html>
<html lang="en">
<html dir="rtl">
<head>

    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>

<nav class="navbar">
    
    
    <div class="diva1"><a href="login_admin_report.php"><img class="diva" src="images/server.png"></a></div>
    <div class="diva2"><a href="av_jop.php"><img class="diva" src="images/work.png"></a></div>
    <div class="diva3"><a href="RESULT.php"><img class="diva" src="images/ex.png"></a></div>
    <div class="diva4"><a href="login.php"><img class="diva" src="images/co.png"></a></div>
    <div class="diva5"><a href="login_admin_report1.php"><img class="diva" src="images/about.png"></a></div>
    <div class="diva6"><a href="REG.php"><img class="diva" src="images/reg.png"></a></div>

        <a href="login_admin_report.php">الادارة</a>
        <a href="av_jop.php">الوظائف المتاحة</a>
        <a href="RESULT.php">نتيجة القبول</a>
        <a href="login.php">اعلان وظيفة</a>
        <a href="login_admin_report1.php">التقارير</a>
        <a href="REG.php">التسجيلات</a>
    
    </nav> 
    <a href="index.html" class="logo"><span>وكالة الاصدقاء</span> للتوظيف</a>

</header>
<div class="main">
<form action="av_jop.php" method="POST">
<b class="btn1">الوظائف المتاحة</b>
	<input class="button" type="" name="search" placeholder="ابحث عن وظيفة معينة">
	<button class="button" type="submit" name="submit-s">بحث...</button>
    <button class="button" type="submit" name="submitall">عرض جميع الوظائف</button><br>
   
<div>
 <table class="button"  style="border: inset; >
   <tr style="font-size: 30px;"> 
    <td style="border: inset;">اسم الوظيفة</td>
    <td style="border: inset;">اسم الموسسة</td>
    <td style="border: inset;">عنوان الموسسة</td>
    <td style="border: inset;"> المؤهل</td>
    <td style="border: inset;">اخر يوم للتقديم</td>

  </tr> 
  </div>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM jop_info WHERE JOP_NAME LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_EST_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_ADDRESS']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_QUL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['LAST_DAY']; ?></td>

  </tr>	<?php
        }

      
    }   
 }

  ?>

    <?php
 if (isset($_POST['submitall'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * from jop_info";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {?>
           <tr>
     <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_EST_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_ADDRESS']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['JOP_QUL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['LAST_DAY']; ?></td>

  </tr>	<?php
        }

      
    }   
}

?>
</form> 
</body>

</html>