<?
function connect($host="localhost", $login="root", $pasw="root", $dbName="ShopDb"){
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

function updateGood($title, $price, $manId){
    $link=  connect();
    $query = "INSERT INTO `goods`(`Id`, `Title`, `Price`, `ManufacturerId`) VALUES (DEFAULT, '".$title."', ".$price.", ".$manId.")";
    $q = mysqli_query($link, $query);
    $err = mysqli_errno($link);
    if($err)
    return false;
    else
    return true;
}

// UPDATE CLIENTS
// SET CITY = ‘Жашків'
// WHERE C_NO = 1;

// INSERT INTO CLIENTS
// VALUES (1, ‘Харламенко В.Ю.', ‘Уличная 3', ‘Кривой Рог', '09799911100');