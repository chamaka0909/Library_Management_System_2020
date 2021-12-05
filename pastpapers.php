<?php
$pastpapers= $_GET['pastpapers'].".pdf";
header ("content-disposition:attachment; filename=" .urlencode($pastpapers));

$read = fopen ($pastpapers, "r");

while (!feof ($read))
{
	echo fread($read , 8193);
	flush();
}
fclose($read);
?>