<?php

include('connec.php');


$id=$_GET['id'];

$result = mysql_query("select * from emplye where id ='$id'");

$rows=mysql_fetch_array($result);
echo('

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






<form method="POST" lang="ar" accept-charset="UTF-8" >

<font size="7px"><center>  اضافة الموظفين </center> </font>

<br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> اسم الموظف </font>


<input name="name" id="name" cols="28" rows="10" placeholder=" '); echo $rows['name']; echo('" />
</center>


<br><br>

<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> الوظيفة </font>


<input name="job" id="job" cols="28" rows="10" placeholder=" '); echo $rows['job']; echo('" />
</center>



<br><br>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="5px"> معلومات </font>







<center>


<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : "Bold text", inline : "b"},
			{title : "Red text", inline : "span", styles : {color : "#ff0000"}},
			{title : "Red header", block : "h1", styles : {color : "#ff0000"}},
			{title : "Example 1", inline : "span", classes : "example1"},
			{title : "Example 2", inline : "span", classes : "example2"},
			{title : "Table styles"},
			{title : "Table row 1", selector : "tr", classes : "tablerow1"}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

</head>
<body role="application">


	<div>
		

		

		<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
		<div>
			<textarea id="elm1" name="descr" rows="15" cols="80" style="width: 80%">
				');
				echo $rows['descr'];
				echo('
			</textarea>
		</div>

		<!-- Some integration calls -->
		
		<a href="javascript:;" onclick= alert(tinyMCE.get("elm1").getContent());return false;>[Get contents]</a>
		
		 

</script>
</body>

		<br />
		
		
		
	</div>


<script type="text/javascript">
if (document.location.protocol == /"file:/") {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>








</center>








<br>










<center>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="5px"> الترتيب </font>


<input name="id2" id="id2" cols="28" rows="10" placeholder=" '); echo $rows['id2']; echo('" />

</center>
<br><br><br>
<center>
<input name="id" type="hidden" id="id" value="'); echo $rows['id']; echo(' "  /> 

</center>
<br><br><br>
<center>
<input type="submit" name="submit" value="تنفيذ الاضافة "/>


</center>

</form>














  </center> ');
  
  
  
  
  
  if(isset($_POST['submit'])){




	 
  
    if($_POST['name']!='' && $_POST['descr']!='' && $_POST['id2']!='' && $_POST['job']!='' ){
	
	
	 
	   


$result2 = mysql_query(" update emplye set  name='$_POST[name]',descr='$_POST[descr]',id2='$_POST[id2]' ,job='$_POST[job]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}








  elseif($_POST['name']!='' && $_POST['descr']!='' && $_POST['id2']!=''  ){
	
	


$result2 = mysql_query(" update emplye set  name='$_POST[name]',descr='$_POST[descr]' ,id2='$_POST[id2]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






   elseif($_POST['name']!='' &&  $_POST['descr']!='' && $_POST['job']!=''  ){
	
	


$result2 = mysql_query(" update emplye set  name='$_POST[name]',descr='$_POST[descr]' ,job='$_POST[job]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}







   elseif($_POST['name']!='' && $_POST['job']!='' && $_POST['descr']!=''  ){
	
	


$result2 = mysql_query(" update emplye set  name='$_POST[name]',job='$_POST[job]' ,descr='$_POST[descr]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






  

  
  
  
  
elseif($_POST['descr']!='' && $_POST['job']!='' && $_POST['id2']!='' ){

$result2 = mysql_query(" update emplye set  id2='$_POST[id2]',job='$_POST[job]',descr='$_POST[descr]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  



elseif($_POST['name']!='' && $_POST['descr']!='' ){

$result2 = mysql_query(" update emplye set  name='$_POST[name]',descr='$_POST[descr]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}


elseif($_POST['name']!='' && $_POST['id2']!='' ){

$result2 = mysql_query(" update emplye set  name='$_POST[name]',id2='$_POST[id2]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}


elseif($_POST['name']!='' && $_POST['job']!='' ){

$result2 = mysql_query(" update emplye set  name='$_POST[name]',job='$_POST[job]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}






   elseif($_POST['descr']!='' && $_POST['id2']!=''  ){
	
	


$result2 = mysql_query(" update emplye set  descr='$_POST[descr]' ,id2='$_POST[id2]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}







   elseif( $_POST['descr']!='' &&  $_POST['job']!='' ){
	
	


$result2 = mysql_query(" update emplye set  descr='$_POST[descr]',job='$_POST[job]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}









    elseif( $_POST['id2']!='' && $_POST['job']!='' ){
	
	


$result2 = mysql_query(" update emplye set id2='$_POST[id2]' ,job='$_POST[job]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}








   elseif( $_POST['id2']!='' ){
	
	

$result2 = mysql_query(" update emplye set id2='$_POST[id2]' where id='$_POST[id]' " );

echo (' ');
if($result2)
{
echo('<center>');
echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}











 elseif($_POST['name']!=''){

$result2 = mysql_query(" update emplye set  name='$_POST[name]' where id='$_POST[id]' " );



if($result2)
{
echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

///echo (' <a href=" update_form.php " > view result </a> ');


echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');

}

else
{

echo("error");
}
}


 elseif($_POST['descr']!=''){

$result2 = mysql_query(" update emplye set  descr='$_POST[descr]' where id='$_POST[id]' " );


if($result2)
{

echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');
}

else
{

echo("error");
}
}


 elseif($_POST['job']!=''){

$result2 = mysql_query(" update emplye set  job='$_POST[job]' where id='$_POST[id]' " );


if($result2)
{

echo('<center>');

echo("<font size='3px'> تمت العمليه بنجاح  </font>");

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

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

echo " <font size='3px' >اذا لم يتم نقلك تلقائيا  </font> <a href='updateemp.php'><font size='4px'> اضغط هنا </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"1;URL=updateemp.php\">";

echo('</center>');

}






}


  
  
  echo('
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>
<div id="fotter4"></div>
</body>
</html> ');
?>

