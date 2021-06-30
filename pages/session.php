<?php

	include "database.php";
	$cart = (isset($_SESSION['cart']) ? $_SESSION['cart'] : [] );
	$id_card=isset($_COOKIE["id_card"]) ? $_COOKIE["id_card"] : '';


	
	$id = isset($_GET['id_product']) ? $_GET['id_product'] : '';
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '1';
	$address = isset($_GET['address']) ? $_GET['address'] : '';
	$quantityselect = isset($_GET['quantityselect']) ? $_GET['quantityselect'] : '1';
	$sizeselect = isset($_GET['sizeselect']) ? $_GET['sizeselect'] : '40';
	$size = isset($_GET['size']) ? $_GET['size'] : '40';
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$totalprice = isset($_GET['totalprice']) ? $_GET['totalprice'] : '';
	$discount = isset($_GET['discount']) ? $_GET['discount'] : '0';
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
			'size' =>  $sizeselect,
			'color' =>  $list__product_detail_rowsdata[0][7],
			'quantity' => $quantityselect,
			'discount' =>  $list__product_detail_rowsdata[0][6]-($list__product_detail_rowsdata[0][6] * $list__product_detail_rowsdata[0][9]),		
			'discountnum' =>$list__product_detail_rowsdata[0][9]
		];
		if($action == 'add')
		{	
			if(isset($_SESSION['cart'][$id]))
			{
				
				$_SESSION['cart'][$list__product_detail_rowsdata[0][0]]['quantity'] +=$quantityselect;
				$_SESSION['cart'][$list__product_detail_rowsdata[0][0]]['size'] = $sizeselect;
				
			}
			else if(!isset($_SESSION['cart'][$id]))
			{
				$_SESSION['cart'][$list__product_detail_rowsdata[0][0]]= $item;
			}
		}
		if($action == 'update')
		{
			$_SESSION['cart'][$id]['quantity'] = $quantity;

		}
		if($action == 'buynow')
		{
			if($id_card=="")
			{ header("location:login.php");}
			else
			{

				$bill_code = rand(0,9999);
				$today = date("Y-m-d");		
				
						
				if($address!="")
				{
					$inputaddress = $address;
				}
				else
				{
					
					$addresscus = $connect->prepare("select address from customer_account where id_card = $id_card");
					$addresscus -> execute();
					$addresscus_row = $addresscus ->fetchAll();
					$inputaddress = $addresscus_row[0][0];
				}
				$query = "INSERT INTO bill (bill_code,date, id_customer, totalprice,address, status) VALUES ('$bill_code','$today',$id_card,'$totalprice',N'$inputaddress','1')";		
				$query1 = "INSERT INTO bill_detail (bill_code,id_product, number, price,discount,total, status) VALUES ('$bill_code','$id','$quantity','$price','$discount','$totalprice','1')";
				$query2= "UPDATE product SET total = total-$quantity WHERE id_product = '$id'";					
				$bill = $connect->prepare($query);
				$bill -> execute();
				$billdetail = $connect->prepare($query1);
				$billdetail -> execute();
				$updateproduct = $connect->prepare($query2);
				$updateproduct -> execute();
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
	if($action == 'buyall' && count($cart)>0 )
	{
		if($id_card=="")
		{
			header("location:login.php");
		}
		else 
		{

			$bill_code = rand(0,9999);
			$today = date("Y-m-d");
			$address =  $connect->prepare("select address from customer_account where id_card = $id_card") -> execute();
			$query = "INSERT INTO bill (bill_code,date, id_customer, totalprice, discount,address,status) VALUES ('$bill_code','$today',$id_card,'$totalprice','$address','1')";		
			$bill = $connect->prepare($query);
			$bill -> execute();
			foreach ($_SESSION['cart'] as $row => $value )
			{
				$id_product = $value['id_product'];
				$quantity = $value['quantity'];
				$price = $value['price'];
				$totalprice = $price*$quantity;
				$query1 = "INSERT INTO bill_detail (bill_code,id_product, number, price,total, status) VALUES ('$bill_code','$id_product','$quantity','$price','0','$totalprice','1')";	
				$query2= "UPDATE product SET total = total-$quantity WHERE id_product = '$id'";	
				$billdetail = $connect->prepare($query1);
				$billdetail -> execute();
				$updateproduct = $connect->prepare($query2);
				$updateproduct -> execute();
				unset($_SESSION['cart']);
			}
			include "notification.php"	;
		}
	}

	

	
?>