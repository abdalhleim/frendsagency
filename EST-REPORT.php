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
<form action="EST-REPORT.php" method="POST">
<b class="btn1">تقرير عن اسماءالمؤسسات</b>
	<input class="button" type="" name="search" placeholder="ابحث عن مؤسسة معينة">
	<button class="button" type="submit" name="submit-s">بحث...</button>
    <button class="button" type="submit" name="submitall">عرض جميع المؤسسات</button><br>
   
</form>
<form action="EST-REPORT.php" method="POST">
<input class="button" type="" name="deletest"required placeholder="احذق مؤسسة معينة">
<button class="button" type="submit" name="delet">حذف المؤسسة</button>

</form> 



 <table class="button"  style="border: inset; >
   <tr style="font-size: 30px;"> 
    <td style="border: inset;">رقم الموسسة</td>
    <td style="border: inset;">اسم الموسسة</td>
    <td style="border: inset;">عنوان الموسسة</td>
    <td style="border: inset;">هاتف الموسسة</td>
    <td style="border: inset;">فاكس الموسسة</td>
    <td style="border: inset;">بريد الموسسة</td>

  </tr> 
  </div>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM est_in WHERE EST_NAME LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_ADDRESS']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_FAX']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_EMAIL']; ?></td>
    <td><a href="">تعديل</a></td>

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
        $sql = "SELECT * from est_in";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {?>
           <tr>
     <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_ADDRESS']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_FAX']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_EMAIL']; ?></td>
    <td><a href="EST-IN edit.php">تعديل</a></td>

  </tr>	<?php
        }

      
    }   
}

?>
<?php
 if (isset($_POST['delet'])) {
    $searchValue = $_POST['deletest'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "DELETE FROM `est_in` WHERE EST_NUMBER LIKE '%" . $searchValue . "%'";

        $result = $con->query($sql);?>
<?php
        }
    }   
?>

</body>

</html>