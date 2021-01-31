<?
function connect($host="localhost", $login="root", $pasw="root", $dbName="StoreDb"){
    $link = mysqli_connect($host, $login, $pasw, $dbName);
    if(!$link)
    {
        echo "<h3 style='color: red'>Ошибка подключения к БД!</h3>";
        return false;
    }
    return $link;
}

function addGood($title, $price, $manId){
    $link=  connect();
    $title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
	$price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
	$manId = htmlentities(mysqli_real_escape_string($link, $_POST['manId']));
    $query = "INSERT INTO `goods`(`Id`, `Title`, `Price`, `ManufacturerId`) VALUES (DEFAULT, '".$title."', ".$price.", ".$manId.")";
    $q = mysqli_query($link, $query);
    $err = mysqli_errno($link);
    if($err)
    return false;
    else
    return true;
}

function addManufacturer($manName){
    $link=  connect();
    $manName = htmlentities(mysqli_real_escape_string($link, $_POST['manName']));
    $query = "INSERT INTO `manufacturers`(`Id`, `ManufactName`) VALUES (DEFAULT, '".$manName."')";
    $q = mysqli_query($link, $query);
    $err = mysqli_errno($link);
    if($err)
    return false;
    else
    return true;
}