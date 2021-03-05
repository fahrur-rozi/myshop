
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Input</title>
  </head>
  <body>
<div class="container mt-5">
    <form method="POST" action="createData.php?action=add">
   

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputNama">Nama</label>
        <input type="text" class="form-control" id="inputNama" name="Nama" placeholder="Nama">
        </div>        
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputFoto">Foto</label>
        <input type="text" class="form-control" id="inputFoto" name="Foto" placeholder="Foto">
        </div>
        <div class="form-group col-md-6">
        <label for="inputDesrkipsi">Deskripsi</label>
        <input type="text" class="form-control" id="inputDeskripsi" name="Deskripsi" placeholder="Deskripsi">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputHarga">Harga</label>
        <input type="text" class="form-control" id="inputHarga" name="Harga" placeholder="Harga">
        </div>        
    </div>    
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputGambar">Gambar</label>
        <input type="text" class="form-control" id="inputGambar" name="Gambar" placeholder="Gambar">
        </div>        
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputJenis">Jenis</label>
        <input type="text" class="form-control" id="inputJenis" name="Jenis" placeholder="Jenis">
        </div>
        <div class="form-group col-md-6">
        <label for="inputUkuran">Ukuran</label>
        <input type="text" class="form-control" id="inputUkuran" name="Ukuran" placeholder="Ukuran">
        </div>
        <div class="form-group col-md-6">
        <label for="inputJumlah">Jumlah</label>
        <input type="number" class="form-control" id="inputJumlah" name="Jumlah" placeholder="Jumlah">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCatatan">Catatan</label>
        <input type="text" class="form-control" id="inputCatatan" name="Catatan" placeholder="Catatan">
        </div>
    </div>

    <div class="form-row ">
        <div class="form-group col-md-12">
        <label for="inputUlasan">Ulasan</label>
        <input type="text" class="form-control" id="inputUlasan" name="Ulasan" placeholder="Ulasan">
        </div>        
    </div>

    
    <button onclick="history.back()" class="btn btn-primary">Back</button>
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>