<?php
require 'function.php';
if (isset($_POST["submit"])) {

    if (add($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
    }
}

?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Belajar Form PHP</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="card text-center">
                        <div class=" card-body">
                            <h1 class="card-title">Selamat Datang Admin</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-white rounded">

            <form method="POST" action="">
                <div class=" form-group">
                    <label for="nama">Nama Karyawan:</label>
                    <input type="nama" class="form-control" name="nama" placeholder="Nama">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Karyawan:</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">

                </div>

                <div class="form-group">
                    <label for="email">E-Mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="xxxxxx@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="telpon">No Telp</label>
                    <input type="number" class="form-control" name="telpon" placeholder="081XXXXXXXXXX">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Add Data</button>
            </form>
        </div>





        <footer>

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="www.harvasoft.com"> www.harvasoft.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <script src="https://kit.fontawesome.com/0e17f1f0a4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>