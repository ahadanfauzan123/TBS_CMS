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
        <h1>FORM TAMBAH DATA</h1>
        <form action="<?= base_url('/role/save'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="id : " name="id">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Menu Name : </label>
                <input type="text" name="MenuName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="input-group mb-3">

                <div class="col-sm-2">
                    <img src="/img/iconmenu_image/default.png" class="img-thumbnail img-preview">
                </div>
                <input type="file" class="form-control <?= ($validation->hasError('IconMenu')) ? 'is-invalid' : ''; ?>" id="IconMenu" name="IconMenu" onchange="previewImg()">
                <label for="IconMenu" class="custom-file-label" style="visibility: hidden;"></label>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->listErrors(); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description : </label><br>
                <textarea name="deskripsi" id="exampleInputPassword1" cols="60" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Masukkan Kembali Menu Name</label>
                <input type="text" name="UrlMenu" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>










    <script>
        function previewImg() {
            const sampul = document.querySelector('#IconMenu');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            sampulLabel.textContent = sampul.files[0].name;
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
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