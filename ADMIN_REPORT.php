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
<form action="ADMIN_REPORT.php" method="POST">
<b class="btn1">تقرير عن الاداريين في الموقع</b>
	<input class="button" type="" name="search" placeholder="ابحث عن شخص او صلاحية معينة">
	<button class="button" type="submit" name="submit-s">  علي حسب اسم معين</button>
    <button class="button" type="submit" name="submitS">علي حسب الصلاحيات</button>
    <button class="button" type="submit" name="submitall">عرض جميع الاداريين</button><br>
</form>
<form action="ADMIN_REPORT.php" method="POST">
<input class="button" type="" name="search" required placeholder="ادخل رقم الاداري للحذف">
    <button class="button" type="submit" name="delet">حذف المستخدم</button>
</form>
<div>
 <table class="button"  style="border: inset; >
   <tr style="font-size: 30px;"> 
    <td style="border: inset;">رقم المستخدم</td>
    <td style="border: inset;">اسم المستخدم</td>
    <td style="border: inset;">هاتف المستخدم</td>
    <td style="border: inset;">بريدالمستخدم</td>
    <td style="border: inset;">الصلاحيات</td>

  </tr> 
  </div>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM admin WHERE ADMIN_NAME LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
   <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_NAMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_EMAIL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_SED']; ?></td>
    <td><a href="admin_report edit .php">تعديل</a></td>
  </tr>	<?php
        }

      
    }   
 }

  ?>
    <?php
  if (isset($_POST['submitS'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM admin WHERE ADMIN_SED LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
   <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_NAMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_EMAIL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_SED']; ?></td>
    <td><a href="admin_report edit .php">تعديل</a></td>
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
        $sql = "SELECT * from admin";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {?>
           <tr>
     <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_NAMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_EMAIL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ADMIN_SED']; ?></td>
    <td><a href="admin_report edit .php">تعديل</a></td>
  </tr>	<?php
        }     
    }   
}
?>
<?php
 if (isset($_POST['delet'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "DELETE FROM `admin` WHERE ADMIN_NAMBER LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);?>
<?php
        }
    }   
?>
</form> 
</body>

</html>