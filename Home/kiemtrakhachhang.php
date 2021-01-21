<?php 
session_start();
//print_r($_SESSION);die();
if(empty($_SESSION['MaKH'])){
	header('location:trangchu.php');
}
