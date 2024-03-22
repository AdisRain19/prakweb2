<?php include 'atas.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .list-group-item {
            border-color: #dee2e6;
            background-color: #dee2e6;
        }

        .custom-control-label {
            padding-top: 5px;
        }
    </style>
</head>

<body>
<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Form belanja</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 2</a></li>
                <li class="breadcrumb-item active">Form belanja</li>
    <div class="container">
        <h2>Belanja Online</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="jumlah.php" method="post">
                    <div class="form-group row">
                        <label for="customer" class="col-sm-4 col-form-label">Customer</label>
                        <div class="col-sm-8">
                            <input id="customer" name="customer" placeholder="Masukan nama anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4">Pilih Produk</label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-4 col-sm-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item active">Daftar Harga</li>
                    <li class="list-group-item">TV: 4.200.000</li>
                    <li class="list-group-item">Kulkas: 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci: 3.000.000</li>
                    <li class="list-group-item active">Harga dapat berubah setiap saat</li>
                </ul>
            </div>
        </div>
    </div>

    </div>
    <?php include 'bawah.php'; ?>
        </div>

    </main>

</body>

</html>
