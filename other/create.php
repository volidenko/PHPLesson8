<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
</head>

<body>
	<?
//require_once 'connection.php';
include_once("function.php");

if(isset($_POST['title']) && isset($_POST['price']) && isset($_POST['manId'])){

	$link = connect();
	// экранирования символов для mysql
	$title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
	$price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
	$manId = htmlentities(mysqli_real_escape_string($link, $_POST['manId']));

    $query = "INSERT INTO `goods`(`Id`, `Title`, `Price`, `ManufacturerId`) VALUES (DEFAULT, '".$title."', ".$price.", ".$manId.")";

	// выполняем запрос
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
		echo "<span style='color:blue;'>Товар добавлен</span>";
	}
	else echo "Error while good adding";
	// закрываем подключение
	mysqli_close($link);
}
?>
	<h2>Добавить новый товар</h2>
	<form method="POST">
		<p>Название товара:<br>
			<input type="text" name="title" />
		</p>
		<p>Цена товара:<br>
			<input type="number" name="price" step="0.01" />
		</p>
		<p>Производитель: <br>
			<input type="number" name="manId" />
		</p>
		<input type="submit" value="Добавить">
	</form>
</body>

</html>