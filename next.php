<html leng="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PENDAFTARAN VAKSIN COVID-19</title>
          <link rel="stylesheet" href="css/stylee.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     <head>
     
     <body>
          <div class="wrapper">
            <div class="header">
                <img src="img/logo-kai.png" alt="">
                <p class="pt-4">Mau cari tiket kereta? Disini jawabannya!</p>
                <a href="index.php" class="btnn">< Beranda</a>
            </div>
               <div class="container bg-pink">
                    <h2 class="container-header text-center fw-bold text-white">Cari Tiket Kereta</h2>
                    <form class="form" action="hasil.php" method="post" id="form">
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="nama">Nama Anda</label>
                              <input type="text" id="title" name="nama" required>
                         </div>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="asal">Asal Anda</label>
                              <input type="text" id="title" name="asal" required>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="sa">Pilih Stasiun Asal</label>
                              <select class="form-select" aria-label="Default select example" name="sa" id="sa">
                                   <option selected>Stasiun Asal</option>
                                   <option value="smrg">Dari Semarang</option>
                                   <option value="notsmrg">Dari Luar Semarang</option>
                              </select>
                         </div>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="st">Pilih Stasiun Tujuan</label>
                              <select class="form-select" aria-label="Default select example" name="st" id="st">
                                   <option selected>Stasiun Tujuan</option>
                                   <option value="smrg">Ke Semarang</option>
                                   <option value="notsmrg">Ke Luar Semarang</option>
                              </select>
                         </div>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="pk">Pilih Kereta</label>
                              <select class="form-select" aria-label="Default select example" name="pk" id="pk">
                                   <option selected>Pilihan Kelas Kereta</option>
                                   <option value="ekn">Ekonomi / Rp 75.000</option>
                                   <option value="eks">Eksekutif / Rp 150.000</option>
                              </select>
                         </div>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="jml">Jumlah</label>
                              <input type="number" id="jml" name="jml" class="form-control" required min="1">
                              </select>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="vaksinasi">Metode Pembayaran</label>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check1" value="BRI" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        BRI
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check2" value="BNI" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        BNI
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check3" value="MANDIRI" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        MANDIRI
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check4" value="BCA" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        BCA
                                   </label>
                              </div>
                              <?php
                         $queue = new SplQueue();
                         $queue->enqueue('Ardo,');
                         $queue->enqueue('Budi,');
                         $queue->enqueue('Salman,');
                         $queue->enqueue('Khila,');
                         $queue->enqueue('Nanda');

                         print("Daftar Antrian[" . sizeof($queue) . "]: ");
                         for ($i = 0; $i < sizeof($queue); $i++) {
                         print($queue[$i] . " ");
                         } ?>
                         </div>
                         <input type="submit" value="Submit" name="Submit" class="btn-submit">
                    </form>
               </div>
          </div>
     </body>
</html>