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
<form action="ch.php" method="POST">
<b class="btn1">للتاكيد من صحةالمعلومات...</b>
	<input class="button" type="" name="search" placeholder="ادخل رقم الجامعي للتاكيد">
	<button class="button" type="submit" name="submitID">بحث...</button>
    <button class="button" type="submit" name="submitall">عرض كل المقدمين</button>
<div>
 <table class="button"  style="border: inset;">
   <tr style="font-size: 30px;"> 
    <td style="border: inset;">اسم المقدم</td>
    <td style="border: inset;">الرقم الجامعي</td>
    <td style="border: inset;">الجامعة</td>
    <td style="border: inset;">المؤهل</td>
    <td style="border: inset;">تاريخ الشهادة</td>
  </tr> 
  </div>
</form>

<form action="ch.php" method="POST">
<b class="btn1">لصدار قرار التقديم</b>
	<input class="button" type=""required name="search" placeholder=" ادخل رقم الجامعي لصدار القرار">
	<button class="button" type="submit" name="exc">مقبول</button>
    <button class="button" type="submit" name="rej">مرفوض</button>
</form>

<?php
  if (isset($_POST['submitID'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM mang WHERE STUDANT_ID LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
    <td style="border: inset; font-size: 20px;"><?php echo $row['STUDANT_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['STUDANT_ID']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['QLU']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['CER_DATE']; ?></td>
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
        $sql = "SELECT * FROM jop_ask";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
   <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVER_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVERCITY']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_QUL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['CERT_DATE']; ?></td>
  </tr>	<?php
        } 
    }   
 }
  ?>

     <?php
   if(isset($_POST['exc']))
{    
include_once 'DB/config.php';
{    
    $searchValue = $_POST['search'];
$sql = "UPDATE `jop_ask` SET `comment`='الف مبروك',`des`='مقبول'WHERE UNVER_NUMBER LIKE '%" . $searchValue . "%'";
     if (mysqli_query($conn, $sql)) {
        echo "تم ارسال التقرير";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
    }
}
?>

   <?php
   if(isset($_POST['rej']))
{    
include_once 'DB/config.php';
{    
    $searchValue = $_POST['search'];
$sql = "UPDATE `jop_ask` SET `comment`='حظا اوفر',`des`='مرفوض'WHERE UNVER_NUMBER LIKE '%" . $searchValue . "%'";
     if (mysqli_query($conn, $sql)) {
        echo "تم ارسال التقرير";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
    }
}
?>
</div>
</body>
</html>