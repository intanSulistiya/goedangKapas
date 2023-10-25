<!-- koneksi database -->
<?php 
// isi nama host, username mysql, dan password mysql anda
$koneksi = mysqli_connect("localhost","root","","goedang_kapas");

// Check connection
if($koneksi)
{
    echo "Koneksi dengan MySQL berhasil" ;
}
else
{
    echo "Koneksi dengan MySQL gagal" ;
}
// if (mysqli_connect_errno()){
//     echo "Koneksi database gagal : " . mysqli_connect_error();
// }

?>
