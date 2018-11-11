<?php
session_start();
echo '<pre>';
//var_dump($_SESSION);
echo '</pre>';
echo '<pre>';
"Письмо отправленно";
echo '</pre>';
//phpinfo();
$reg=$_SESSION['login'];
$name = mb_convert_encoding($_POST['name'], "cp1251","UTF-8");
//$name = mb_convert_encoding($name, "UTF-8");
$phone = $_POST['phone'];
//$product =implode($_POST['product'],$_POST['quantity']);

$quantity = $_POST['quantity'];
//echo $_POST['quantity'][0];


for ($i=0;$i<count($_POST['quantity']);$i++){
   $mal[$i]= $_POST['product'][$i] .' '. $_POST['quantity'][$i];
//    echo ;
}


//for ($i=0;$i<((count($_POST['product']))*2);$i+2){
//    for ($j=1;$j<((count($_POST['quantity']))*2);$j+2) {
//        $qwer[$i][$j] = $_POST['product'][$i];
//        $qwer[$i][$j] = $_POST['quantity'][$j];
//    }

//    if ($i % 2 === 0) {
//        $qwer[$i] = $_POST['product'][$i];
//    }else{
//        $qwer[$i] = $_POST['quantity'][$i];}

//$quantity[$i] = $_POST["quantity_".$i];
//    $amount[$i] = $_POST["amount_".$i];
//    $googles_item[$i] = $_POST["googles_item_".$i];
//}
//for ($i=1;$i<(count($_POST['product']))*2;($i++)+1){
//    $qwer[$i]=$_POST['quantity'][$i];
//}

//$product=array_merge_recursive($qwer,$qwer2);
//$product =implode("",$qwer);
//echo '<pre>';
//var_dump($product);
//echo '<pre>';
$quantity =implode('',$mal);
    mail("winipyh1@i.ua", "My Subject", "$quantity\n, $name,$reg, $phone , Line 1\nLine 2\nLine 3");
?>