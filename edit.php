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

    <h1 class="text-center p-5">MENGEDIT DATA</h1>

    <div class="container">
        <div class="card text-white bg-info mb-3" style="max-width: 100%;">
            <div class="card-header">EDIT DATA</div>
            <div class="card-body">
                <?php

                require_once('config.php');
                // $query = "SELECT * FROM costumer WHERE id_cust " . $_GET['id'];
                // $kirim = mysqli_query($koneksi,$query);
                // $cust_name = "";
                // $cust_gender = "";

                // if(mysqli_num_rows($kirim) > 0){
                //     $data = mysqli_fetch_assoc($kirim);
                //     $cust_name = ['id_cust'];
                //     $cust_gender = ['cust_gender'];
                // }
                $parameter = $_GET['id_cust'];
                $query = "SELECT * FROM costumer WHERE id_cust = " . $parameter;
                // $data  = mysqli_query($koneksi,$query);
                // $id = $_GET['id'];
                // echo $id;

                if ($query = mysqli_query($koneksi, $query)) {
                    // while($row = mysqli_fetch_assoc($data)){

                    //     $cust_name = $row['cust_name'];
                    //     $cust_gender = $row['cust_gender'];

                    // } 
                    $row = $query->fetch_assoc();
                } else {
                    echo "hehe gajelas Data $query";
                }

                ?>
                <!-- <h5 class="card-title">Info card title</h5> -->
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

                <form action="update.php?id_cust=<?php echo $parameter ?>" method="POST">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA :</label>
                        <div class="col-sm-10">
                            <input type="label" name="cust_name" class="form-control" id="nama" placeholder="Masukan nama anda ..." value="<?php echo $row['cust_name']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">UMUR :</label>
    <div class="col-sm-10">
      <input type="number" name="age" class="form-control" id="age" placeholder="Masukan umur anda ..." value="<?php echo $row['cust_age']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL :</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email anda ..." value="<?php echo $row['cust_email']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMOR TELEPON :</label>
    <div class="col-sm-10">
      <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Masukan nomor telepon anda ..." value="<?php echo $row['cust_contact']; ?>">
    </div>
  </div>


                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS KELAMIN :</label>
                        <div class="col-sm-10">
                            <!-- <label for="">JENIS KELAMIN</label> -->
                            <select class="form-control" name="cust_gender" value="<?php echo $row['cust_gender']; ?>">
                                <div>
                                    <option value="<?php echo $cust_gender ?>" id="jk">Pilih Jenis Kelamin ...</option>
                                    <option <?php
                                            if ($row['cust_gender'] == 'Laki-Laki') {
                                                echo "selected";
                                            }
                                            ?> value="Laki-Laki" id="jk">Laki-Laki</option>

                                    <option <?php
                                            if ($row['cust_gender'] == 'Perempuan') {
                                                echo "selected";
                                            }
                                            ?> value="Perempuan" id="jk">Perempuan</option>
                                </div>
                            </select>
                        </div>
                    </div>
            </div>



            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary btn-mg btn-block">UPDATE</button>
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