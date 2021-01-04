<?
include_once("pages/function.php");
$link=  connect();
$db=mysqli_select_db($link, "ShopDb") or die("Данная БД отсуствует!");
$q=mysqli_query($link, "SELECT * FROM Goods");

echo "<ul>";
while($row=mysqli_fetch_array($q)){
    echo "<li>".$row[0].". ".$row["Title"].", Цена: ".$row["Price"]." грн.</li>";
}
echo "</ul>";

echo "В таблице  Товары содержиться ".mysqli_num_rows($q)." товара<br/>";