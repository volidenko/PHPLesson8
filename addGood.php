<?
include_once("function.php");
$title = "iPhone X11";
$price = 25999.9;
$manuf =1;
if (addGood($title, $price, $manuf)){
    echo "Good added";
}
else
echo "Error while good adding";