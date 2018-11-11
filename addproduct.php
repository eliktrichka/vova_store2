<?php
session_start();
//header("Location: index.php");  isset($_GET['logout'])
$let = $_SESSION['login'];
//echo '<pre>';
//var_dump($let);
//echo '</pre>';
if($let=="admin"){
include_once "bd.php";
if (isset($_POST['product_name'])) { $product_name = $_POST['product_name']; if ($product_name == '') { unset($product_name);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['product_price'])) { $product_price=$_POST['product_price']; if ($product_price =='') { unset($product_price);} }
//заносим введенный пользователем пароль в переменную $product_price, если он пустой, то уничтожаем переменную
if (empty($product_name) or empty($product_price)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

    //var_dump($_FILES);
//
    $uploaddir = '/img/';
    $uploadfile = $uploaddir . basename($_FILES['product_image']['name']);
//var_dump($_FILES["product_image"]["name"]);
//echo '<pre>';
    if(is_uploaded_file($_FILES['product_image']['tmp_name'])){
        @mkdir("img", 0777);
        copy($_FILES['product_image']['tmp_name'], "img/" . basename($_FILES['product_image']['name']));
    }
$product_image =  "img/" . $_FILES["product_image"]["name"];
    //$_POST['product_image'];
    var_dump($product_image);//die;
//$result = mysqli_query($db,"SELECT id_product FROM products WHERE 'name' ='$product_name'");
//$myrow = mysqli_fetch_array($result);//Обрабатывает ряд результата запроса, возвращая ассоциативный массив, численный массив или оба.
//if (!empty($myrow['id_product'])) {
//    exit ("Извините, введённый вами товар уже добавлен. Введите другой логин.");
//}
// если такого нет, то сохраняем данные  product_name
$result2=mysqli_query ($db,"INSERT INTO `products` (`name`, `description`, `price`, `picture`) 
                                    VALUES ('$product_name', 'description', '$product_price', '$product_image')") or die("error");
// Проверяем, есть ли ошибки
if ($result2=='TRUE') {
    echo "Вы успешно добавили товар! <a href='index.php'>Главная страница</a>";
} else {
    echo "Ошибка! Вы не добавили товар. Повторите попытку заново.<a href='index.php'>Главная страница</a>";
}


}else{echo "Эта страничка только для админа";}
?>

<?php
//$file=$_FILES['tmp_name']="/img/";


//    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadfile)) {
//        echo "Файл корректен и был успешно загружен.\n";
//    } else {
//        echo "Возможная атака с помощью файловой загрузки!\n";
//    }
//}else{echo 'file not exist';}



//if (is_uploaded_file($_FILES['product_image']['tmp_name']))
//{
//    $file = $_FILES;
//    if ($file == true)
//    {
//        @mkdir("img", 0777);
//        copy($_FILES['product_image']['tmp_name'], "img/" . basename($_FILES['product_image']['name']));
//        $comment[] = "img/" . $_FILES["product_image"]["name"];
//        echo "проверка прошла успешно";
////        add($comment);
//    }
//}


//if($_FILES["filename"]["size"] > 1024*3*1024) {
//    echo ("Размер файла превышает три мегабайта");
//    exit;
//}
//// Проверяем загружен ли файл
//if(is_uploaded_file($_FILES["filename"]["tmp_name"])) {
//    // Если файл загружен успешно, перемещаем его
//    // из временной директории в конечную
//    move_uploaded_file($_FILES["filename"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
//}else{
//    echo("Ошибка загрузки файла");
//}
//?>
