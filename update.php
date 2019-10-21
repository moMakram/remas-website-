<?php

include('connec.php');


$id=$_GET['id'];

$result = mysql_query("select * from contact where id ='$id'");

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
<a href="control.php"><div id="nav1"></div></a>
</div>
<div id="body8">
<br><br>
<?php
$count=mysql_num_rows($result);

///echo ("<h2><center> عدد الاستفسارات => $count  </h2></center>"); 

///echo $rows['query'];

 
 ?>

  <table width="380" height="100" border="0">
    <tr style="background:#999; height:35px;">
       <td style="width:70px; height:46px; font-size:16px; font-family:'Comic Sans MS'  , cursive; color:#000; text-align:center;">ques</td>
      <td style="width:70px; height:46px; font-size:16px; font-family: 'Comic Sans MS' , cursive; color:#000; text-align:center;">answer</td>
    <!--  <td style="width:90px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">email</td>
      
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Address</td>
      <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">question</td>
	  <td style="width:130px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">answer</td>
	  <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">update</td>
      <td style="width:50px; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#000; text-align:center;">Delete</td> -->
    </tr> 
	

	
<form name="form1"  method="POST" >
    <tr style="text-align:center;">
	
	<td  style="width:70px; background-color:#03C; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <textarea name="query" id="query" cols="58" rows="10" placeholder="<?php echo $rows['query']; ?>" ></textarea></td> 
    <td  style="width:70px; background-color:#03C; height:46px; font-size:16px; font-family:'Comic Sans MS', cursive; color:#FFF; text-align:center;"> <textarea name="ans" id="ans" cols="58" rows="10" placeholder="<?php echo $rows['ans']; ?>" ></textarea></td> 
	
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
<input name="submit" id="submit3" type="submit" value="save in database and publish" />
</td> 

</tr>

<tr>
<td> &nbsp; </td>


<td>

<input name="submit2" id="submit4"  type="submit" value="just save" />
 
</td>
</tr>
</form>
	
	

	
  </table>
  
  
  
  
  
  
  <?php
  
  if(isset($_POST['submit'])){




if($_POST['query']!='' && $_POST['ans']!='' ){

$result2 = mysql_query(" update contact set  query='$_POST[query]',ans='$_POST[ans]', permis=1 where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";

echo('</center>');
}

else
{

echo("error");
}
}







else if($_POST['query']!=''){

$result2 = mysql_query(" update contact set  query='$_POST[query]', permis=1 where id='$_POST[id]' " );



if($result2)
{
echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";

echo('</center>');

}

else
{

echo("error");
}
}


else if($_POST['ans']!=''){

$result2 = mysql_query(" update contact set  ans='$_POST[ans]', permis=1 where id='$_POST[id]' " );


if($result2)
{

echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";

echo('</center>');
}

else
{

echo("error");
}
}else{


$result2 = mysql_query(" update contact set  permis=1 where id='$_POST[id]' " );
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");
echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";
echo('</center>');
}
}






if(isset($_POST['submit2'])){





if($_POST['query']!='' && $_POST['ans']!=''){

$result2 = mysql_query(" update contact set  query='$_POST[query]',ans='$_POST[ans]', permis=0 where id='$_POST[id]' " );


if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






else if($_POST['query']!=''){

$result2 = mysql_query(" update contact set  query='$_POST[query]', permis=0 where id='$_POST[id]' " );


if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";
echo('</center>');

}

else
{

echo("error");
}
}


else if($_POST['ans']!=''){


$result2 = mysql_query(" update contact set  ans='$_POST[ans]', permis=0 where id='$_POST[id]' " );


if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";


}

else
{

echo("error");
}
}else{

$result3 = mysql_query(" update contact set permis=0 where id='$_POST[id]' " );
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح </font>");
echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updatehelp_form.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updatehelp_form.php\">";
echo('</center>');
}
}
  
  
  
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>
<div id="fotter4"></div>
</body>
</html> 

