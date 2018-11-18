<?php 

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

/*Adiciona ao carrinho*/
function addCart($cod, $quantity) {
	if(!isset($_SESSION['carrinho'][$cod])){ 
		$_SESSION['carrinho'][$cod] = $quantity; 
	}
}
/*Fim*/

/*Remove do carrinho*/
function deleteCart($cod) {
	if(isset($_SESSION['carrinho'][$cod])){ 
		unset($_SESSION['carrinho'][$cod]); 
	} 
}
/*Fim*/

/*Atualiza o carrinho*/
function updateCart($cod, $quantity) {
	if(isset($_SESSION['carrinho'][$cod])){ 
		if($quantity > 0) {
			$_SESSION['carrinho'][$cod] = $quantity;
		} else {
		 	deleteCart($cod);
		}
	}
}
/*Fim*/

/*Inserir produtos no banco*/

/*Fim*/

/*Mostra os produtos adicionados no carrinho*/
function getContentCart($pdo) {
	
	$results = array();
	
	if($_SESSION['carrinho']) {

		$frete = 5; 

		$cart = $_SESSION['carrinho'];	

		$products =  getProductsByIds($pdo, implode(',', array_keys($cart)));

		foreach($products as $product) {

			$product['preco'] = (int) $product['preco'];

			$results[] = array(
							  'cod' => $product['cod'],
							  'name' => $product['nome'],
							  'quantity' => $cart[$product['cod']],
							  'price' => $product['preco'],
							  'subtotal' => $frete,
						);
		}
/*var_dump($results);*/
	}
	
	return $results;

}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['price'] + $product['subtotal'];
	} 
	return $total;
}