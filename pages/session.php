<?php

	include "index__data.php";
	
	$id = isset($_GET['id_product']) ? $_GET['id_product'] : '';
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '1';
	$size = isset($_GET['size']) ? $_GET['size'] : '40';
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	if($id!="")
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
			
			if(isset($_SESSION['cart'][$list__product_detail_rowsdata[0][0]]))
			{
				
				$_SESSION['cart'][$list__product_detail_rowsdata[0][0]]['quantity'] +=1;
			}
			else
			{
				
				$_SESSION['cart'][$list__product_detail_rowsdata[0][0]]= $item;
			}
		}
		if($action == 'update')
		{
			$_SESSION['cart'][$id]['quantity'] = $quantity;
			$_SESSION['cart'][$id]['size'] = $size;
		}
		if($action =='delete')
		{
			unset($_SESSION['cart'][$id]);
		}
		
	}

	
?>