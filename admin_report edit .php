   
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
<form action="admin_report edit .php" method="POST">
	<input class="button" type="" name="search" placeholder="ابحث عن شخص او صلاحية معينة">
	<button class="button" type="submit" name="submit-s">  علي حسب اسم معين</button>
    <button class="button" type="submit" name="submitall"> عرض الكل</button>
    <button class="button" type="submit" name="delet">حذف المستخدم</button>
<div>
 <table class="button"  style="border: inset;" >
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




   <form class="" id="b-form" action="admin_report edit.php" method="POST">
   <div class="form1">
  
                <!-- <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>-->
               <span class="form__span" style="margin-right: 20px;"> للتعديل بيانات الاداريين...</span></br>
   <b class="button1">ادخل رقم المستخدم:<input class="form__input " type="number" name="EST_NUMBER" placeholder=""></input></b></br>
    <b class="button1">اسم المستخدم:<input class="form__input " type="text" name="ADMIN_NAME" placeholder=""></input></b></br>
    <b class="button1">هاتف المستخدم:<input class="form__input " type="number" name="ADMIN_PHONE" placeholder=""></input></b></br>
    <b class="button1">بريدالمستخدم:<input class="form__input " type="email" name="ADMIN_EMAIL" placeholder=""></input></b></br>
    <b class="button1">صلاحيات المستخدم:<input class="form__input " type="text" name="ADMIN_SED" placeholder=""></input></b></br>
    <b class="button1">كلمة المرور:<input class="form__input " type="password" name="ADMIN_PASSWORD" placeholder=""></input></b></br>
   
  
               <div class="form2">
                <input class="button" type="submit" name="GO" value="تعديل"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>
</div> 


   </form>
   <?php
   if(isset($_POST['GO']))
{    
include_once 'DB/config.php';
{     $searchValue = $_POST['EST_NUMBER'];
$ADMIN_NAME= $_POST['ADMIN_NAME'];
$ADMIN_PHONE= $_POST['ADMIN_PHONE'];
$ADMIN_EMAIL= $_POST['ADMIN_EMAIL'];
$ADMIN_SED= $_POST['ADMIN_SED'];
$ADMIN_PASSWORD= $_POST['ADMIN_PASSWORD'];

 
     $sql = "UPDATE `admin` SET `ADMIN_NAME`='$ADMIN_NAME ',`ADMIN_PHONE`='$ADMIN_PHONE' ,`ADMIN_EMAIL`='$ADMIN_EMAIL',`ADMIN_SED`='$ADMIN_SED',`ADMIN_PASSWORD`='$ADMIN_PASSWORD '  WHERE ADMIN_NAMBER LIKE '%" . $searchValue . "%'";
     if (mysqli_query($conn, $sql)) {
        echo " تم تعديل بيانات المؤسسة بنجاح";
     } else {
        echo "يوجد اسماء متطابقة الرجاء في احد البيانات ";
     }
     mysqli_close($conn);
    }
}
?>
</div>

</body>

</html>