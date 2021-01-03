<?
$link=mysqli_connect("localhost", "root", "root") or die ("Не удалось подключиться к серверу");
$db=mysqli_select_db($link, "ShopDb") or die("Данная БД отсуствует!");
$q=mysqli_query($link, "SELECT * FROM Goods");
echo "В таблице  Товары содержиться ".mysqli_num_rows($q)." записей<br/>";
echo "В таблице  Товары содержиться ".mysqli_num_fields($q)." полей<br/>";
echo "<ul>";
while($row=mysqli_fetch_array($q)){
    echo "<li>".$row[0].". ".$row["Title"].", Цена: ".$row["Price"]." грн.</li>";
}
echo "</ul>";




// CREATE TABLE Goods(
//     Id int NOT null PRIMARY KEY AUTO_INCREMENT,
//     Title varchar(30) not null,
//     Price double not null,
//     ManufacturerId int not null,
//     FOREIGN KEY GoodsManufacturerFK (ManufacturerId) REFERENCES manufacturers(Id) ON DELETE No ACTION ON UPDATE CASCADE
//     )