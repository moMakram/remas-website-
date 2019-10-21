<?php

include('connec.php');


$id=$_GET['id'];

$result = mysql_query("select * from proditem where id ='$id'");

$rows=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة الحجز</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="reservate_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.html"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>

<center>
  <table width="380" height="100" border="0">
    <tr style="background:#999; height:35px;">
       <td style="width:70px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">اسم المنتج</td>
      <td style="width:70px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">سعر المنتج</td>
	  <td style="width:70px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">مواصفات المنتج</td>
	  
	  <td style="width:70px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">التعديل على الصورة الحالية</td>
    <!--  <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">email</td>
      
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Address</td>
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">question</td>
	  <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">answer</td>
	  <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">update</td>
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Delete</td> -->
    </tr> 
	

	
<form name="form1"  method="POST" enctype="multipart/form-data" >
    <tr style="text-align:center;">
	
	<td  style="width:70px; background-color:#03C; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <textarea name="name" id="name" cols="28" rows="10" placeholder="<?php echo $rows['name']; ?>" ></textarea></td> 
    <td  style="width:70px; background-color:#03C; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <textarea name="price" id="price" cols="18" rows="10" placeholder="<?php echo $rows['price']; ?>" ></textarea></td>
  <td  style="width:70px; background-color:#03C; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <textarea name="descr" id="descr" cols="28" rows="10" placeholder="<?php echo $rows['descr']; ?>" ></textarea></td> 	
	
	<td  style="width:70px; background-color:#03C; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"><input type="file" name="file" id="file" /></td>
<!--	<td> <textarea name="ans" id="ans" cols="55" rows="10" bgcolor="blue" placeholder="welcome makram" > </textarea></td> 
      
      
    <!--  <td style="width:90px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> </td>
      
      <td style="width:130px; background-color:#03C; height:140px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> </td>
      
	  <td style="width:130px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> </td>
	  <td style="width:130px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> </td>
	    
      <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> "> <font color="white"> update </font></a> </td>
	  <td style="width:50px; background-color:#03C; height:44px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> "> <font color="white"> delete </font></a> </td>-->
    </tr> 

	<tr>

<td>   

<input name="id" type="hidden" id="id" value=" <?php echo $rows['id']; ?> "  />      
</td>
<td align="left">
<input name="submit" id="submit3" type="submit" value="حفظ التعديلات" />
</td> 

</tr>

<tr>
<td> &nbsp; </td>



</tr>
</form>
	
	

	
  </table>
  
  
  </center>
  
  
  
  <?php
  
  if(isset($_POST['submit'])){

$type=$_FILES['file']['type'];


	 
  
    if($_POST['name']!='' && $_POST['price']!='' && $_POST['descr']!='' && $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set  name='$_POST[name]',price='$_POST[price]',descr='$_POST[descr]' ,pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}








  elseif($_POST['price']!='' && $_POST['descr']!='' && $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set  price='$_POST[price]',descr='$_POST[descr]' ,pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






   elseif($_POST['name']!='' &&  $_POST['descr']!='' && $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set  name='$_POST[name]',descr='$_POST[descr]' ,pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}







   elseif($_POST['name']!='' && $_POST['price']!='' &&  $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set  name='$_POST[name]',price='$_POST[price]' ,pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






  

  
  
  
  
elseif($_POST['name']!='' && $_POST['price']!='' && $_POST['descr']!='' ){

$result2 = mysql_query(" update proditem set  name='$_POST[name]',price='$_POST[price]',descr='$_POST[descr]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  



elseif($_POST['name']!='' && $_POST['price']!='' ){

$result2 = mysql_query(" update proditem set  name='$_POST[name]',price='$_POST[price]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}


elseif($_POST['name']!='' && $_POST['descr']!='' ){

$result2 = mysql_query(" update proditem set  name='$_POST[name]',descr='$_POST[descr]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}


elseif($_POST['descr']!='' && $_POST['price']!='' ){

$result2 = mysql_query(" update proditem set  descr='$_POST[descr]',price='$_POST[price]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






   elseif($_POST['name']!='' && $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set  name='$_POST[name]' ,pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}







   elseif( $_POST['price']!='' &&  $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set  price='$_POST[price]',pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}









    elseif( $_POST['descr']!='' && $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set descr='$_POST[descr]' ,pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}








   elseif( $type!='' ){
	
	
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
	   


$result2 = mysql_query(" update proditem set pic='$dir' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}











 elseif($_POST['name']!=''){

$result2 = mysql_query(" update proditem set  name='$_POST[name]' where id='$_POST[id]' " );



if($result2)
{
echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');

}

else
{

echo("error");
}
}


 elseif($_POST['descr']!=''){

$result2 = mysql_query(" update proditem set  descr='$_POST[descr]' where id='$_POST[id]' " );


if($result2)
{

echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}


 elseif($_POST['price']!=''){

$result2 = mysql_query(" update proditem set  price='$_POST[price]' where id='$_POST[id]' " );


if($result2)
{

echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');
}

else
{

echo("error");
}
}

else{


echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateproditem.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateproditem.php\">";

echo('</center>');

}






}


  
  
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>
<div id="fotter4"></div>
</body>
</html> 

