<?php
$conn = mysqli_connect("localhost", "root", "", "tranlate");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}
// function query($query) {
// 	global $conn;
// 	$result = mysqli_query($conn, "SELECT * FROM penerjemah ");
// 	$rows = [];
// 	while( $row = mysqli_fetch_assoc($result) ) {
// 		$rows[] = $row;
// 	}
// 	return $rows;
// }


function cari($keyword)
{
    $query = "SELECT * FROM penerjemah 
                WHERE
                id LIKE '%$keyword%' OR
                krama LIKE '%$keyword%' OR
                ngoko LIKE '%$keyword%'
                ";
    return query($query);
}

// function cari($keyword)
// {
//     $query = "SELECT * FROM penerjemah 
//                 WHERE
//                 id LIKE '%$keyword%' OR
//                 krama LIKE '%$keyword%' OR
//                 ngoko LIKE '%$keyword%'

//                 ";
//     return query($query);
// }
?>