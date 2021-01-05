<?
include_once("function.php");
$link=  connect();
$db=mysqli_select_db($link, "ShopDb") or die("Данная БД отсуствует!");
$query ="SELECT Goods.Title,  Manufacturers.ManufactName, Goods.Price from Manufacturers JOIN Goods ON Manufacturers.Id=Goods.ManufacturerId";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result)
{
    $rows = mysqli_num_rows($result);
echo "<table><tr><th>Модель</th><th>Производитель</th><th>Цена</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j){
                echo "<td>$row[$j]</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}
echo "</br>";
echo "Количество товара - ".$rows."<br/>";
?>

<!-- echo '<script>window.location="index.php";</script>';
echo `<td><input type='checkbox' name='cb".$row[0]."'></td>`; -->