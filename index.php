
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Toko</title>
  </head>
  <body>
<div class="container mt-5">
<a href="formInput.php">[+ Add +]</a>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama produk</th>
        <th scope="col">Foto produk</th>
        <th scope="col">Deskripsi produk</th>
        <th scope="col">Harga produk</th>
        <th scope="col">Jenis produk</th>
        <th scope="col">Ukuran produk</th>
        <th scope="col">Jumlah Pembelian</th>
        <th scope="col">Catatan pembelian</th>
        <th scope="col">Gambar</th>
        <th scope="col">Ulasan</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include('koneksi.php');
        $koneksi = new database();
        $no = 1;
        $sqldata = "select a.nama_produk,a.foto_produk,a.deskripsi_produk,a.harga_produk,b.jenis_produk,b.ukuran_produk,b.jumlah_pembelian,b.catatan_pembelian,c.foto_barang,c.isi_ulasan 
        from produk a ,jenis_produk b,ulasan_customer c
         where a.id_produk=b.id_jenisproduk and c.id_customer=a.id_produk";
        $data_produk = $koneksi->view($sqldata);// var_dump(json_encode($data_produk));
        if(empty($data_produk)) { return false;}
        else {
		    foreach($data_produk as $row){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_produk']; ?></td>
				<td><?php echo $row['foto_produk']; ?></td>
				<td><?php echo $row['deskripsi_produk']; ?></td>    
				<td><?php echo $row['harga_produk']; ?></td>
        <td><?php echo $row['jenis_produk']; ?></td>
        <td><?php echo $row['ukuran_produk']; ?></td>
				<td><?php echo $row['jumlah_pembelian']; ?></td>
				<td><?php echo $row['catatan_pembelian']; ?></td>    
				<td><?php echo $row['foto_barang']; ?></td>
        <td><?php echo $row['isi_ulasan']; ?></td>
				<td>
					<a href="ubah.php?id=<?php echo $row['id_produk']; ?>">Update</a>
					<a href="hapus.php?id=<?php echo $row['id_produk']; ?>">Delete</a>
				</td>
			</tr>
	<?php
		    }
        }
	?>
    </tbody>
  </table>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>