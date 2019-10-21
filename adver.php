<?php
include('connec.php');
?>
<div id="advertisment">
<?php

 $sele = mysql_query("select * from advert where descr='الجانب الايسر'");
 
 $rows = mysql_fetch_array($sele);
 
 echo('
 
 <img src="'.$rows['place'].'" width="180px" height="880px" /> ');

?>


</div>
<div id="advertisment1">

<?php

 $sele = mysql_query("select * from advert where descr='الجانب الايمن'");
 
 $rows = mysql_fetch_array($sele);
 
 echo('
 
 <img src="'.$rows['place'].'" width="180px" height="880px" /> ');

?>



</div>