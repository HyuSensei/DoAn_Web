<?php
    session_start();
    $id="";
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }
    if(empty($_SESSION['cart'][$id]))
    {
        require_once('../db/config.php');
        $sql="select * from products where id='$id'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($result);
        $_SESSION['cart'][$id]['product_name']=$row['product_name'];
        $_SESSION['cart'][$id]['img_main']=$row['img_main'];
        $_SESSION['cart'][$id]['price']=$row['price'];
        $_SESSION['cart'][$id]['quantity']=1;
    }else{
        $_SESSION['cart'][$id]['quantity']++;
    }
     echo json_encode($_SESSION['cart']);
 ?>