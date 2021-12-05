<?php
$file=$_GET['file'] .".pdf";
header("content-disposition: attachment; filename=" .urlencode($file));

$read=fopen($file,"r");
while(!feof($read))
{
    echo fread($read, 8193);
    flush();

}
fclose($read);
?>