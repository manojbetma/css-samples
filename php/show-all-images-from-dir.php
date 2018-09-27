<?php 
$b="website.url/folder/";
$directory = "";
$v=rand();
$images = glob($directory . "*.jpg");
echo "<ul>";
foreach($images as $image)
{
    echo "<li style='float:left;width:50%;text-align: center;list-style:none;'><img style='width:50%;' src='".$b."/".$image."?v=".$v."' /></li>";
}
echo "</ul>";
?>