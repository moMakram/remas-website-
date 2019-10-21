<?php


include ("connec.php");

   $result = mysql_query(" update texteditor set descr='$_POST[elm1]' ");

if ($result){
echo ("inserted");
}
else
{
echo "error";
}

?>