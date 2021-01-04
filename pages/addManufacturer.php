<?
include_once("pages/function.php");
if(isset($_POST['name'])){
    if (addManufacturer($name)){
        echo "<span style='color:blue;'>Производитель добавлен</span>";
    }
    else echo "Error!";
}
?>
<h2>Добавить производителя</h2>
<form method="POST">
    <p>Производитель: <br>
        <input type="text" name="name" /></p>
    <input type="submit" value="Добавить">
</form>