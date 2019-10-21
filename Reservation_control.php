<?php

session_start();
include('connec.php');

$result = mysql_query("select * from register");

echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة الحجز</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

?>

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>
<?php
$count=mysql_num_rows($result);

echo ("<h2><center> عدد العملاء =  $count  </h2></center>"); 

 
 ?>

  <table width="980" height="100" border="0">
    <tr style="background:#999; height:35px;">
       <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">ID</td>
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">Full name</td>
      <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Phone</td>
      
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Address</td>
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">E-mail</td>
	  <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">gender</td>
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Delete</td>
    </tr> 
	
	
	<?php
	$result = mysql_query("select * from register");
	
	while($row= mysql_fetch_array($result) )

{
?>

    <tr style="text-align:center;">
      <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo $row['id']; ?> </td>
      <td style="width:160px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['name']; ?></td>
      <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['phone']; ?></td>
      
      <td style="width:130px; background-color:#03C; height:140px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['addr']; ?></td>
      <td style="width:130px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['email']; ?></td>
	    <td style="width:130px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['gender']; ?></td>
      <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="delete_reserv.php?id= '); echo $row['id']; ?>"> <font color="white"> delete </font></a> </td>
    </tr> 
	<?php
	
	}
	
	
echo('
	
  </table>
</div>
<div id="fotter4"></div> ');

}else{

header("location:login.php");
}
echo('
</body>
</html> 
');
?>
