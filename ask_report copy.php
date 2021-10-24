<!DOCTYPE html>
<html lang="en">
<html dir="rtl">
<head>

    <meta charset="UTF-8">
    <title>friends-agency</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

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
<!-- header section ends -->



<div class="main">
<form action="Ask_report copy.php" method="POST">
<b class="btn1">تقرير عن مقدمين مؤسسةمعينة</b>
	<input class="button" type="" name="search" placeholder="ابحث عن متقدمين موسسة معينة">
	<button class="button" type="submit" name="submit-s">ابحث</button>
    <button class="button" type="submit" name="submitall">عرض الجميع</button>
    <input class="button" type="reset" name="" value="الغـاء">  
   
<div>
 <table class="button"style="border: inset; font-size: 30px;>
   <tr"> 
    <td style="border: inset; ">&nbsp;رقم </td>
    <td style="border: inset;">&nbsp;اسم المقدم </td>
    <td style="border: inset;">&nbsp;الرقم الجامعي</td>
    <td style="border: inset;">&nbsp;عنوان المقدم</td>
    <td style="border: inset;">&nbsp;الجامعة </td>
    <td style="border: inset;">&nbsp;الكلية</td>
    <td style="border: inset;">&nbsp;التخصص</td>
    <td style="border: inset;">&nbsp;تاريخ التقديم </td>
    <td style="border: inset;">&nbsp;البريد</td>
    <td style="border: inset;">&nbsp;المؤسسة </td>
  </tr> 
  </div>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM jop_ask WHERE EST_NAME LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
    <td style="border: inset; font-size: 20px;"><?php echo $row['STUDENT_NAMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVER_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_ADDRESS']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVERCITY']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['COLLOGE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_SPEC']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['DATE_ASKING']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_EMAIL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NAME']; ?></td>
 
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
        while ($row = $result->fetch_assoc()) {?>
           <tr>
           <td style="border: inset; font-size: 20px;"><?php echo $row['STUDENT_NAMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVER_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_ADDRESS']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['UNVERCITY']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['COLLOGE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_SPEC']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['DATE_ASKING']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['ASK_EMAIL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NAME']; ?></td>

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
        $sql = "DELETE FROM `users` WHERE USER_NUMBER LIKE '%" . $searchValue . "%'";

        $result = $con->query($sql);?>
<?php
        }
    }   
?>
</form>
</div>
  

</body>
</html>