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
<form action="RESULT_M.php" method="POST">
<b class="btn1">تقرير نتيجة التقديم</b>
	<input class="button" type="" name="search" placeholder="ادخل للبحث مقبولين او مرفوضين">
	<button class="button" type="submit" name="submit-s">بحث...</button>
<div>
 <table class="button"  style="border: inset; >
   <tr style="font-size: 30px;"> 
    <td style="border: inset;">اسم المقدم</td>
    <td style="border: inset;">الرقم الجامعي</td>
    <td style="border: inset;">اسم المؤسسه</td>
    <td style="border: inset;">هاتف المقدم</td>
    <td style="border: inset;">بريد المقدم</td>
    <td style="border: inset;">نتيجة القبول</td>


  </tr> 
  </div>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM jop_ask WHERE des LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVER_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['des']; ?></td>
  </tr>
  	<?php
        }  
    }   
 }
  ?>

 
</form> 
</body>
</html>