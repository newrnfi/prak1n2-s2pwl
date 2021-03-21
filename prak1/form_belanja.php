<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .form-control {
            width: 400px;
        }
        .form-select {
            width: 400px;
        }
        .isi {
            margin-left: 40px;
            margin-top: 25px;
            width: 850px;
        }
        .harga {
            margin-left: 900px;
            margin-top: -200px;
        }
    </style>
</head>
<body>
    <div class="bg-dark p-4">
    <h4 class="mt-2 text-light bg-dark">Belanja Online</h4>
    </div>
    <hr class="mb-0 mt-0">
    
    <form class="form-horizontal" method="POST" action="form_belanja.php">
    <hr class="mb-2 mt-0">
    <div class="isi">
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Customer </label>
            <div class="col-sm-10">
            <input type="text" name="customer" class="form-control" id=""  placeholder="Nama Customer">
        </div>
        </div>
        <div class="form-group row mb-2">
        <label for="" class="col-sm-2 col-form-label">Pilih Produk </label>
        <div class="col-sm-10">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV">
        <label class="form-check-label" for="inlineRadio1">TV</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Kulkas">
        <label class="form-check-label" for="inlineRadio2">Kulkas</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Mesin Cuci">
        <label class="form-check-label" for="inlineRadio2">Mesin Cuci</label>
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
            <input type="text" name="jumlah" class="form-control" id=""  placeholder="Jumlah Produk">
        </div>
        </div>
        
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <input type="submit" value="Simpan" name="proses" class="btn btn-primary"/>
        </div>
    
        </div>
    </fieldset>
    </form>
    <br/>
    <div class="harga">
    <div>
        <div class="card" style="width: 18rem;">
            <div class="card-header bg-secondary text-white">
                Daftar Harga
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">TV : Rp 4.200.000</li>
                <li class="list-group-item">Kulkas : Rp 3.100.000</li>
                <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
            </ul>
            <div class="card-header bg-secondary text-white">
            Harga Dapat Berubah Setiap Saat
            </div>
        </div>
    </div>
    </div>
    <?php
    if (isset($_POST['proses'])) {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $harga = 0;
        if($produk == "TV"){
            $harga = 4200.000 * $jumlah; 
        } elseif($produk == "Kulkas"){
            $harga = 3100.000 * $jumlah;
        } elseif($produk == "Mesin Cuci"){
            $harga = 3800.000 * $jumlah;
        }
        echo 'Nama Customer : '.$customer.'<br/>';
        echo 'Produk Pilihan : '.$produk.'<br/>';
        echo 'Jumlah Beli : '.$jumlah.'<br/>';
        echo 'Total Belanja : '.$harga.".000";
    }
    ?>
</body>
</html>