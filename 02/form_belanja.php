<?php

if(isset($_POST['proses'])) {
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

$harga_tv = 4200000;
$harga_Kulkas = 3100000;
$harga_MesinCuci = 3800000;

$totalHarga = 0;
if($produk == "TV") {
    $totalHarga = $harga_tv * $jumlah;
} elseif($produk == "Kulkas") {
    $totalHarga = $harga_Kulkas * $jumlah;
} elseif($produk == "Mesin Cuci") {
    $totalHarga = $harga_MesinCuci * $jumlah;
}

$totalHargaFormatted = "Rp. " . number_format($totalHarga, 0, ',', '.'); //Menambahkan format mata uang menjadi Rupiah

    echo "<h4>Terima kasih telah berbelanja!</h4>";
    echo "<p>NAMA CUSTOMER: $customer</p>";
    echo "<p>Produk Pilihan: $produk</p>";
    echo "<p>Jumlah Beli: $jumlah</p>";
    echo "<p>Total Belanja: $totalHargaFormatted<p>";

}
?>