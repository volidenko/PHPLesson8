<?
include_once("function.php");
$link=  connect();
$db=mysqli_select_db($link, "ShopDb") or die("Данная БД отсуствует!");
$q=mysqli_query($link, "SELECT Goods.Title,  Manufacturers.ManufactName, Goods.Price from Manufacturers JOIN Goods ON Manufacturers.Id=Goods.ManufacturerId");
echo "<ul>";
while($row=mysqli_fetch_array($q)){
    echo "<li>".$row[0]." ".$row["ManufactName"].", Цена: ".$row["Price"]." грн.</li>";
}
echo "</ul>";

echo "В таблице Товары содержиться ".mysqli_num_rows($q)." товара<br/>";


//echo '<script>window.location="index.php";</script>';

//<td><input type='checkbox' name='cb".$row[0]."'></td>