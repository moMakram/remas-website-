<?php

session_start();
include ("connec.php");



echo('

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>اضافة الاعلانات</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> ');


if (isset($_SESSION['admin_session']) ) {

echo('
<div id="add_pictures_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body2">
<form method="POST" enctype="multipart/form-data">
<input name="file" type="file" style="background-color:#090; height:30px; border-radius:4px; margin-left:160px; margin-top:70px;" />
<select name="choose" style="width:130px; height:30px; border-radius:4px; border:groove 1px #000; position:absolute; margin-left:30px; margin-top:70px;">
<option>الجانب الايمن</option>
<option>الجانب الايسر</option>

</select>
<input name="submit" type="submit" value="upload"  style="width:100px; height:30px;  position:absolute; margin-left:-70px; margin-top:200px;" />
</form>
');

if(isset($_POST['submit'])){

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
	   if($choose=="الجانب الايمن"){
  $result = mysql_query("INSERT INTO advert (place,descr)
 values('$dir','$choose' )");
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


if($choose=="الجانب الايسر"){
  $result = mysql_query("INSERT INTO advert (place,descr)
 values('$dir','$choose' )");
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
<div id="fotter"></div> ');

}else{

header("location:login.php");
}

echo('
</body>
</html> ');

?>
