<html leng="en">
    <head>
    <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>KAI ACCESS</title>
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
            <div class="container shadow-lg">
                <div class="bg-covid text-center pb-4">
                </div>
                <h2 class="container-header text-center fw-bold text-white">Welcome to Pencari Cinta Access</h2>
                <form class="form" action="hasilLogin.php" method="post" id="form">
                    <div class="form-group form-book">
                        <label class="fw-normal text-white" for="nama">Email</label>
                        <input type="text" name="email" id="title" required>
                    </div>
                    <div class="form-group form-book">
                        <label class="fw-normal text-white" for="nama">Password</label>
                        <input type="text" name="password" id="title" required>
                    </div>
                    <input type="submit" value="Login" name="Submit" class="btn-submit m-4">
                </form>
            </div>
        </div>
    </body>
</html>