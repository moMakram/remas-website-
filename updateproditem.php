<?php

include('connec.php');

$result = mysql_query("select * from proditem");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التحكم فى الاقسام</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>
<?php
$count=mysql_num_rows($result);

echo ("<h2><center> عدد المنتجات  => $count  </h2></center>"); 

 
 ?>

  <table width="980" height="100" border="0">
  

    <tr style="background:#999; height:35px;">
       <td style="width:160px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">اسم المنتج</td>
      <td style="width:160px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">سعر المنتج</td>
	  <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">صورة المنتج</td>
      <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">مواصفات المنتج</td>
	  
     

	  <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">update</td>
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Delete</td>
    </tr> 
	
	
	<?php
	$result = mysql_query("select * from proditem");
	
	while($row= mysql_fetch_array($result) )

{
?>

    <tr style="text-align:center;">
      <td style="width:30px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo $row['name'];  ?> </td>
      <td style="width:160px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['price']; ?></td>
	  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo('<img src="'.$row['pic'].'" width="100px" height="100px"/> '); ?></td>
      <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php  echo $row['descr']; ?></td>
      

   
	    
      <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="update3.php?id= '); echo $row['id']; ?>"> <font color="white"> update </font></a> </td>
	  <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <?php echo (' <a href="delete_productitem.php?id= '); echo $row['id']; ?>"> <font color="white"> delete </font></a> </td>
    </tr> 
	<?php
	
	}
	
	?>

	
  </table>
</div>
<div id="fotter4"></div>
</body>
</html> 

