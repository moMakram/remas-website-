<?php

session_start();

include('connec.php');


$id=$_GET['id'];


echo(' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>
updating with makram
</title>

<link href="css/style3.css" rel="stylesheet" type="text/css" />
</head>

<body> ');
if (isset($_SESSION['admin_session']) ) {

echo('






<div id="container">

<br/><br/><br/><br/><br/>');



$result = mysql_query(" delete from product  where id ='$id' " );


if($result)
{

echo('
<center> ');


echo("<font size='6px'> تمت العملية بنجاح </font>");

echo('
<br/><br/>
');

header("location:updateproduct.php");




  echo('</center> ');
}

else
{

echo("error");
}


echo('

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>
</div>'); 


}else{

header("location:login.php");
}

echo('

</body>
</html> ');

?>




