<?php
session_start();

include ("connec.php");



echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حذف أو تعديل الصور</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

echo('

<div id="remove_pictures_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">
<table width="700" border="0" style="text-align:center; margin-left:50px; margin-top:40px;">
  <tr style="background:#999; height:35px;">
    
    <td><font face="Comic Sans MS, cursive"  color="#000000">Photo name</font></td>
	<td><font face="Comic Sans MS, cursive"  color="#000000">photo</font></td>
	    <td><font face="Comic Sans MS, cursive"  color="#000000">place</font></td>
    <td><font face="Comic Sans MS, cursive"  color="#000000">Delete</font></td>
  </tr>
  
  ');
	 $sel = mysql_query("select * from pictures");
			  
			while($row = mysql_fetch_array($sel)){
			
			echo('
  <tr style="background:#03C;height:30px;">
    <td>'); echo $row['name']; echo('</td>
    <td><img src="'.$row['place'].'" width="100px" height="100px" ></td>
    <td>'); echo $row['descr']; echo('</td>
	<td>');  echo (' <a href="delete_pictures.php?id= '); echo $row['id']; echo('"> <font color="white"> delete </font></a></td>
  </tr> '); } 
  
  echo('
</table>

</div>
<div id="fotter"></div> ');

}else{

header("location:login.php");
}
echo('
</body>
</html> ');
?>

