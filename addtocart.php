<?php
session_start();
ob_start();
$id = $_GET['id'];
if ($id!= "") 
{
        if (isset($_SESSION['cart'][$id])) 
		{
            $_SESSION['cart'][$id]++;//neu session nay da ton tai thi tang len 1 
        } 
		else 
		{
            $_SESSION['cart'][$id] = 1;
        }
        header("location:cart.php");
}
else 
{
       
} 
?> 