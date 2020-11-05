<?php
$conn = mysqli_connect("localhost", "root", "", "karyawan1");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function add($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $query = "INSERT INTO sql_karyawan VALUES('', '$nama','$alamat', '$email', '$telpon' ) ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function del($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM sql_karyawan WHERE id =$id");
    return mysqli_affected_rows($conn);
}

function edit($data)
{

    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $telpon = htmlspecialchars($data["telpon"]);
    $query = " UPDATE sql_karyawan SET
               nama = '$nama',
               alamat = '$alamat',
               email = '$email',
               telpon = '$telpon' 
               WHERE id =$id
    
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM sql_karyawan
				WHERE
			  nama LIKE '%$keyword%' OR
			  alamat LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  telpon LIKE '%$keyword%'
			";
    return query($query);
}