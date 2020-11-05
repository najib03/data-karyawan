<?php

require 'function.php';
$karyawan = query("SELECT * FROM sql_karyawan");

if (isset($_POST["cari"])) {
    $karyawan = cari(($_POST["keyword"]));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Data Karyawan</title>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">CRD Karyawan</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Input Data <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="add.php" class=" btn btn-primary">Add Data</a>


                <form action="" method="post" class="form-inline my-4">
                    <div class=" form-group">
                        <input class="form-control mr-sm-2" type="text" name="keyword" size="40" autofocus
                            placeholder="Inpput Your Keyword Searching" autocomplete="off">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari">Cari!</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr class='text-center'>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Alamat</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Telp</th>
                        <th scope='col'>Option</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($karyawan as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['telpon'] ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="badge badge-success"><i
                                    class="fa fa-pencil"></i><span>Edit</span></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="badge badge-danger"><i
                                    class="fas fa-trash-alt"></i>Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/0e17f1f0a4.js" crossorigin="anonymous"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>