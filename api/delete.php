<?php

include "../config/koneksi.php";

$id = @$_POST['Id'];

$data = [];

$query = mysqli_query($kon, "DELETE FROM 'barang' WHERE 'Id'='". $Id ."'");

if($query){
	$status = true;
	$pesan = "request succes";
	$data[] = $query;
}else{
	$status = false;
	$pesan = "request failed";
}

$json = [
	"status" => $status,
	"pesan" => $pesan,
	"data" => $data	
];

header("Content-Type: application/json");
echo json_encode($json);

?>