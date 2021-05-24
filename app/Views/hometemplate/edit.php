<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>FORM EDIT DATA</h1>
        <form action="<?= site_url('/role/update/' . $menu["IdMenu"]); ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Menu Name : </label>
                <input type="text" name="MenuName" value="<?= $menu['MenuName']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail3" class="form-label">Masukkan Gambar : </label>
                <input type="text" name="IconMenu" value="<?= $menu['IconMenu']; ?>" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description : </label><br>
                <textarea name="deskripsi" name="deskripsi" id="exampleInputPassword1" cols="60" rows="10"><?= $menu['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Masukkan Kembali Menu Name</label>
                <input type="text" name="UrlMenu" value="<?= $menu['UrlMenu']; ?>" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
            </div>

            <input type="hidden" value="<?= $menu['IdMenu']; ?>" class="form-control" name="id" aria-describedby="emailHelp">
            <button type="submit" class="btn btn-primary">Tambah</nutton>
        </form>
    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>