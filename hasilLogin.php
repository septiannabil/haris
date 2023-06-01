<html leng="en">
<meta charset="UTF-8">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PENDAFTARAN VAKSIN COVID-19</title>
          <link rel="stylesheet" href="css/stylee.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">
            <div class="header">
                <img src="img/logo-kai.png" alt="">
                <p class="pt-4">Mau cari tiket kereta? Disini jawabannya!</p>
                <a href="index.php" class="btnn">< Beranda</a>
            </div>
            <div class="container text-white">
          <!-- MODUL 5 OOP LOGIN -->
            <?php
          include("userService.php");
          $user = new userService($_POST['email'], $_POST['password']);
               if($get_user = $user->login()) {
                    echo 'Selamat Datang';
                    echo ', Silahkan klik next untuk pemesanan kereta!';
                    echo '<form class="form" action="next.php" method="post" id="form">
                            <input type="submit" value="Next" name="Submit" class="btn-submit">
                          </form>';
                 } else {
                         echo 'Invalid Login';
                         }?>

<script>
    document.getElementById("form").addEventListener("submit", function(event) {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        // Lakukan validasi login di sini menggunakan PHP
        // Panggil skrip PHP yang memeriksa login (userService.php)

        // Jika login tidak valid, mencegah formulir disubmit
        if (!/* validasi login berhasil */) {
            event.preventDefault();
            alert("Invalid Login");
        }
    });
</script>
</div>
</body>
</html>
