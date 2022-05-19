<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['category'];
$d = $_POST['supplier'];
$e = $_POST['date_received'];
$f = $_POST['date_expiry'];
$g = $_POST['original_price'];
$h = $_POST['selling_price'];
$i = $_POST['profit'];
$j = $_POST['qty'];

// query
$sql = "INSERT INTO inventory (code,name,category,supplier,date_received,date_expiry,original_price,selling_price,profit,qty) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j));
header("location: inventory.php");


?>