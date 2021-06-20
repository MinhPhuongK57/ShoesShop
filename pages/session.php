<?php

	include "database.php";
	$id = isset($_GET['id_product']) ? $_GET['id_product'] : '';

	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '1';
	$size = isset($_GET['size']) ? $_GET['size'] : '40';
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$id_card=isset($_COOKIE["id_card"]) ? $_COOKIE["id_card"] : '';
	$totalprice = isset($_GET['totalprice']) ? $_GET['totalprice'] : '';
	$price = isset($_GET['price']) ? $_GET['price'] : '';	 
    $SQL_product_detail = "SELECT * from product where id_product = '$id'";
    $list__product_detail = $connect->prepare($SQL_product_detail);
    $list__product_detail -> execute();
    $list__product_detail_rowsdata = $list__product_detail ->fetchAll();
	if($id!="" )
	{
		
		$item = [
			'id_product' =>  $list__product_detail_rowsdata[0][0],
			'productname' =>  $list__product_detail_rowsdata[0][1],
			'productimage' =>  $list__product_detail_rowsdata[0][4],
			'price' =>  $list__product_detail_rowsdata[0][6],
			'total' => $list__product_detail_rowsdata[0][5],
			'size' =>  $list__product_detail_rowsdata[0][8],
			'color' =>  $list__product_detail_rowsdata[0][7],
			'quantity' => 1
						
		];
		if($action == '')
		{	
			if(isset($_SESSION['cart'][$id]))
			{
				$s = $_SESSION['cart'][$list__product_detail_rowsdata[0][0]]['quantity'] +=1;

			}
			else if(!isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$list__product_detail_rowsdata[0][0]]= $item;
			}
		}
		if($action == 'update')
		{
			$_SESSION['cart'][$id]['quantity'] = $quantity;
			$_SESSION['cart'][$id]['size'] = $size;
		}
		if($action == 'buynow')
		{
			if($id_card=="")
			{ header("location:login.php");}
			else
			{

				$bill_code = rand(0,9999);
				$today = date("Y-m-d");
				$query = "INSERT INTO bill (bill_code,date, id_customer, totalprice, status) VALUES ('$bill_code','$today',$id_card,'$price','1')";		
				$query1 = "INSERT INTO bill_detail (bill_code,id_product, number, price,discount,total, status) VALUES ('$bill_code','$id','$quantity','$price','0','$totalprice','1')";	
				$bill = $connect->prepare($query);
					$bill -> execute();
				$billdetail = $connect->prepare($query1);
					$billdetail -> execute();
				unset($_SESSION['cart'][$id]);
				include "notification.php"	;		
			}
		}
		if($action =='delete')
		{
			unset($_SESSION['cart'][$id]);
		}
		
	}
	if($action == 'deleteall')
	{
		unset($_SESSION['cart']);
	}
	
		
		if($action == 'buyall' && count($_SESSION['cart']))
		{
			if($id_card=="")
			{
				header("location:login.php");
			}
			else
			{

				$bill_code = rand(0,9999);
				$today = date("Y-m-d");
				$query = "INSERT INTO bill (bill_code,date, id_customer, totalprice, status) VALUES ('$bill_code','$today',$id_card,'$totalprice','1')";		
				$bill = $connect->prepare($query);
				$bill -> execute();
				foreach ($_SESSION['cart'] as $row => $value )
				{
					$id_product = $value['id_product'];
					$quantity = $value['quantity'];
					$price = $value['price'];
					$totalprice = $price*$quantity;
					$query1 = "INSERT INTO bill_detail (bill_code,id_product, number, price,discount,total, status) VALUES ('$bill_code','$id_product','$quantity','$price','0','$totalprice','1')";	
					$billdetail = $connect->prepare($query1);
					$billdetail -> execute();
				}
				unset($_SESSION['cart']);
				include "notification.php"	;
			}
	}

	

	
?>