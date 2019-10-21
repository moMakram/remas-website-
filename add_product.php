<?php

session_start();

include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة قسم منتجات جديد</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');

if (isset($_SESSION['admin_session']) ) {

echo('

<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>


<form method="POST" lang="ar" accept-charset="UTF-8" >

<font size="7px"><center>  اضافة قسم جديد </center> </font>

<br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> اسم القسم </font>


<input type="text" name="name" />
</center>


<br><br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> الترتيب </font>


<input type="text" name="id2" />
</center>



<br><br>

<center>

<select name="option" id="option" style="width:130px; height:30px; border-radius:4px; border:groove 1px #000; position:absolute; margin-left:0px; margin-top:5px;">

<option>يظهر</option>
<option>لا يظهر</option>

</select>

</center>
<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة "/>


</center>

</form>


');

if(isset($_POST['submit'])){

$name = $_POST['name'];
$id2 = $_POST['id2'];
$show = $_POST['option'];

echo $show;

if($name!=''){
if($id2!=''){







    $result = mysql_query("INSERT INTO product (prodname,id2,optione)
 values('$name','$id2','$show' )");
  
  if($result){
  
  echo " inserted well ";
  }else{
  echo " error" ;
  }
 


}
}



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
