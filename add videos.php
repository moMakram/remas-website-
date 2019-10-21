<?php
include('connec.php');
echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>إضافة الفيديوهات</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="add_videos_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">
  <form  method="POST" enctype="multipart/form-data">
  <br>
   <font size="5px" ><center> flv اعلم انه لابد ان يكون اسم ملف الفيديو بالانجليزيه ويفضل ان يكون بصيغه  </center></font>
  <font size="5px" > &nbsp; لرفع الفيديو من هنا&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
  <input name="file" id="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />
  <!--
<select name="choose" style="width:130px; height:30px; border-radius:4px; border:groove 1px #000; position:absolute; margin-left:30px; margin-top:70px;">

<option>الصفحة الرئيسية</option>
<option>من نحن</option>
<option>منتجاتنا</option>
</select>

-->

<br>

<font size="5px" > &nbsp; لرفع صوره للفيديو من هنا </font>
<input type="file" name="file2" id="file2" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />

<br><br><br>
<font size="5px" > &nbsp;  ادخل عنوان الفيديو&nbsp;</font>
<input type="text" name="title" id="title" id="title" size="80" />

<br/><br/><br/>
<font size="5px" >&nbsp; رقم التسلسل &nbsp;</font>
<input type="text" name="id2" id="id2"  /> 




<input name="submit" id="submit" type="submit" value="upload"  style="width:100px; height:30px;  position:absolute; margin-left:-70px; margin-top:250px;" />
</form>






');

?>


<?php

if(isset($_POST['submit'])){


		$title=$_POST['title'];
		
		$id2= $_POST['id2'];


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

        if (file_exists("video/" . $_FILES["file"]["name"]))
        {
            echo "A file with the name " . $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "index_videolb/video/" . $_FILES["file"]["name"]);
            echo "The file was stored in: " . "index_videolb/video/" . $_FILES["file"]["name"];
        }
    }
	   $imname =  $_FILES["file"]["name"];
	    $dir = "index_videolb/video/".$_FILES['file']['name'];
		
		$path = 'video/'.$_FILES['file']['name'];
		
		
		
		
		
		   if ($_FILES["file2"]["error"] > 0)
    {
        echo "Error Code: " . $_FILES["file2"]["error"];
        echo "<br />";
    }
    else
    {
        echo "Uploaded File Name: " . $_FILES["file2"]["name"];
        echo "<br />";
        echo "File Type: " . $_FILES["file2"]["type"];
        echo "<br />";
        echo "File Size: " . ($_FILES["file2"]["size"])." bytes";
        echo "<br />";
        echo "Temp file name: " . $_FILES["file2"]["tmp_name"];
        echo "<br />";

        if (file_exists("video/" . $_FILES["file2"]["name"]))
        {
            echo "A file with the name " . $_FILES["file2"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file2"]["tmp_name"], "index_videolb/video/" . $_FILES["file2"]["name"]);
            echo "The file was stored in: " . "index_videolb/video/" . $_FILES["file2"]["name"];
        }
    }
	   $imname2 =  $_FILES["file2"]["name"];
	    $dir2 = "index_videolb/video/".$_FILES['file2']['name'];
		
		$path2 = 'index_videolb/video/'.$_FILES['file2']['name'];
		
		if($id2==1){
		
		  $result1 = mysql_query("update videos set id2=2    where id2=1");
		  
		  if($result1){
		  
		  echo 'done';
		  }
		  
		    $result3 = mysql_query("INSERT INTO videos (descr,descr2,name,id2)
 values('$path','$path2','$title','$id2' )");
 echo "<br />";
if ($result3){
echo ("inserted");
echo("<br>");

}
else
{
echo "error";
}
		  
		  }
		  else{
		
		
	   
  $result = mysql_query("INSERT INTO videos (descr,descr2,name,id2)
 values('$path','$path2','$title','$id2' )");
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

}




echo('

</div>
<div id="fotter"></div>
</body>
</html> ');
?>
