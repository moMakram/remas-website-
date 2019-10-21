<?php
session_start();

include('connec.php');


echo(' 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة التحكم الرئيسية</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body background="Images/background-freebg-web-abstract-blue-light-array-wallwuzz-hd-wallpaper-2659.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
');
if (isset($_SESSION['admin_session']) ) {

echo('

<div id="header"></div>

<div id="body6">
<a href="Add pictures.php"><div id="button1"></div></a> 
<a href="delete or update pictures.php"><div id="button2"></div></a>
<a href="About_control.php"><div id="button3"></div></a>
<a href="add videos.php"><div id="button4"></div></a>
<a href="delete videos.php"><div id="button5"></div></a>
<a href="Reservation_control.php"><div id="button6"></div></a>
<a href="updatehelp_form.php"><div id="button7"></div></a>
<a href="add_proditem.php"><div id="button8"></div></a>
<a href="updateproditem.php"><div id="button9"></div></a>
<a href="add_client.php"><div id="button10"></div></a>
<a href="updateclient.php"><div id="button11"></div></a>
<a href="add_emp.php"><div id="button12"></div></a>
<a href="updateemp.php"><div id="button13"></div></a>
<a href="Add advert.php"><div id="button14"></div></a>
<a href="updateproduct.php"><div id="button15"></div></a>
<a href="add_product.php "><div id="button16"></div></a>
<a href="update_adver.php"><div id="button17"></div></a>
<a href="logout.php"><div id="button18"></div></a>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--<center>
 <font size="6" color="#993300"><a href="logout.php"> تسجـيـل الخــروج</a>  </font>
</center> -->
<br><br><br>
<marquee dir="rtl"  ><font size="5px;" color="white">  تنبيه هام : من فضلك تأكد من تسجيل الخروج حفاظا على أمن وسلامة الموقع وشكرا.</font></marquee>

<div id="control_word"></div>

</div>
<div id="fotter5"></div> ');

}else{

header("location:login.php");
}
echo('
</body>
</html> ');
?>
