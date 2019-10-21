<?php

session_start();
include('connec.php');



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة منتج جديد</title>
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


<form method="POST" enctype="multipart/form-data" >

<font size="7px"><center>  اضافة منتج </center> </font>
<br><br>

<center>
<font size="5px">  صورة المنتج  </font>
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:10px; margin-top:0px;" />
<select name="choose" style="width:130px; height:30px; border-radius:4px; border:groove 1px #000; position:absolute; margin-left:30px; margin-top:5px;">
<?php
$select = mysql_query("select * from product order by id2 ");

while($row = mysql_fetch_array($select)){


			
			echo('
<option>'); echo $row['prodname']; echo('</option>
');
}
?>
</select>

</center>

<br><br>




<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> اسم المنتج </font>


<input type="text" name="name" />
</center>

<br><br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> سعر المنتج </font>


<input type="text" name="price" />
</center>

<br><br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> مواصفات المنتج </font>


<textarea name="descr" id="descr" cols="58" rows="10" placeholder="مواصفات المنتج" ></textarea>
</center>


<br><br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> الترتيب </font>


<input type="text" name="id2" />
</center>

<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة "/>


</center>

</form>


<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$id2 = $_POST['id2'];
$price = $_POST['price'];
$descr = $_POST['descr'];

$choose = $_POST['choose'];

    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error Code: " . $_FILES["file"]["error"];
        echo "<br />";
    }
    else
    {
        echo "Uploaded File Name: " . $_FILES["file"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file"]["tmp_name"];
        echo "<br />";

        if (file_exists("photo/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "photo/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "photo/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	   $dir = "photo/".$_FILES['file']['name'];
	   








  $result = mysql_query("INSERT INTO proditem (pic,place,name,price,descr,id2)
 values('$dir','$choose','$name','$price','$descr','$id2' )");
 echo "<br />";
if ($result){
echo ("inserted");
echo("<br>");

}
else
{
echo "error";
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
