<?php 

function getProducts($pdo){
	$sql = "SELECT *  FROM produto WHERE tipo = 'BOLO' ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $cods) {
	$sql = "SELECT * FROM produto WHERE cod IN (".$cods.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}