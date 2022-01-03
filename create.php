<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
      <?php

        require_once('config.php');

      ?>
    <h1 class="text-center p-5">MENAMBAH DATA</h1>
    
<div class="container">
<div class="card text-white bg-info mb-3" style="max-width: 100%;">
  <div class="card-header">Tambah Data</div>
  <div class="card-body">
    <!-- <h5 class="card-title">Info card title</h5> -->
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

    <form action='/heaventour/database/simpan.php' method="POST" >
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA :</label>
    <div class="col-sm-10">
      <input type="label" name="nama" class="form-control" id="nama" placeholder="Masukan nama anda ...">
    </div>
  </div>

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">UMUR :</label>
    <div class="col-sm-10">
      <input type="number" name="age" class="form-control" id="age" placeholder="Masukan umur anda ...">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL :</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email anda ...">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMOR TELEPON :</label>
    <div class="col-sm-10">
      <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Masukan nomor telepon anda ...">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS KELAMIN :</label>
    <div class="col-sm-10">
    <!-- <label for="">JENIS KELAMIN</label> -->
        <select class="form-control" name="gender">
        <div>
            <option value="" id="jk">Pilih Jenis Kelamin ...</option>
            <option value="Laki-Laki" id="jk">Laki-Laki</option>
            <option value="Perempuan" id="jk">Perempuan</option>
        </div>
        </select>
        </div>
    </div>
  </div>

  
  
  <div class="form-group row">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-primary btn-mg btn-block">Simpan</button>
    </div>
  </div>
</form>
  </div>
</div>
 
  

</div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>