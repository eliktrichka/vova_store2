<?php
require_once "bd.php";
/*
$conn=new mysqli("mysql.zzz.com.ua","elbd","1Qazxsw23edc");
$sql = "select * from `users`";
$users = $conn->query($sql);
print_r($users);
$conn->close();
*/
session_start();
if (isset($_POST['exampleproduct_name'])) { $login = $_POST['exampleproduct_name']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} } //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

//mysqli_select_db ("eliktrichka",$db); exampleproduct_name  login_man

if (mysqli_connect_error())
{
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}else
{
//    echo '<pre>';var_dump($db);echo '</pre>';
    echo 'connection suxess <br>';
}
/*
    $sql = "select * from `users`";

$res = mysqli_query($db,$sql);

echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>login</th>';
echo '<th>pass</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// выводим в HTML-таблицу все данные клиентов из таблицы MySQL
while($data = mysqli_fetch_array($res)){
    echo '<tr>';
    echo '<td>' . $data['login'] . '</td>';
    echo '<td>' . $data['password'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

// закрываем соединение с сервером  базы данных
mysqli_close($db);
*/
//var_dump($users);
//echo '<pre>';var_dump($users);echo '</pre>';

$name = $_POST['exampleproduct_name'];
$password = $_POST['password'];

$sql  = mysqli_query($db,"UPDATE `users` SET `login` = '$name' WHERE `users`.`id` =".$_SESSION['id'] )or die(mysqli_error());
//или UPDATE `users` SET `login` = 'qwert' WHERE `users``login` = asdq3;
$sql7  = mysqli_query($db,"UPDATE `users` SET `password` = '$password' WHERE `users`.`id` =".$_SESSION['id'] )or die(mysqli_error());
if($sql){
    echo  "Вы изминили свои данные на";
    echo "<br>";
    echo  $password;
    echo  $name;
    echo "<br>";

}else {
    echo 'fail<br>';
}

//print_r($_POST);
//print_r($_SESSION);
//print_r($result_sql);
//UPDATE users SET name = $_SESSION['login'] WERE $name;
//UPDATE users SET name = $_SESSION['password'] WERE $password;
?>