<?php 

include('koneksi.php');
$jalur = new database();
$action = $_GET['action'];
if($action == "add")
{


   //die($_POST['Jenis']);
                    
   $nama=$_POST["Nama"];
   $foto=$_POST["Foto"];
   $deskripsi=$_POST["Deskripsi"];
   $harga=$_POST["Harga"];
   $jenis=$_POST["Jenis"];
   $ukuran=$_POST["Ukuran"];
   $jumlah=$_POST["Jumlah"];
   $catatan=$_POST["Catatan"];
   $gambar=$_POST["Gambar"];
   $ulasan=$_POST["Ulasan"];


 
    //$id = 'Cust-'.hash('crc32', $_POST['inputNama']);
    //insert produk
    $sqlproduk = "insert into produk (nama_produk,foto_produk,deskripsi_produk,harga_produk)
    values ('$nama','$foto','$deskripsi','$harga')";
    $hasil = $jalur->insert($sqlproduk);


     //insert jenis produk
     $sqljenis = "insert into jenis_produk (jenis_produk,ukuran_produk,jumlah_pembelian,catatan_pembelian)
     values (' $jenis','$ukuran','$jumlah','$catatan')";
     $hasil = $jalur->insert($sqljenis);
     
    
    //insert ulasan
    $sqlulasan = "insert into ulasan_customer (foto_barang,isi_ulasan)
    values (' $gambar','$ulasan')";
	$hasil = $jalur->insert($sqlulasan);

    if ($hasil) {
        echo "  Berhasil insert data    ";
      exit;
     }
         else {
            echo "  Gagal insert data   ";
            exit;
        }  

    }
?>

