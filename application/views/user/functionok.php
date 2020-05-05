<?php 

$conn = mysqli_connect("localhost","root","","phpdasar5");

function query($query) {
	global $conn;
	$result = mysql_query($conn,$query);
	$rows = [];
	while ($row = mysali_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;
	$nim = $data["nim"];
	$nama = $data["nama"];
	$email = $data["email"];
	$jurusan = $data["jurusan"];
	$gambar = $data["gambar"];

	$query = "INSERT INTO mahasiswa VALUES('','$nama','$email','$jurusan','$gambar')";

	mysqli_query($conn,$mysqli_query);
}




















if (isset($_POST["submit"])) {
	

	$query = "INSERT INTO mahasiswa VALUES('','$nim','$nama','$email','$jurusan','$gambar')";

	mysqli_query($conn,$query);
}



?>