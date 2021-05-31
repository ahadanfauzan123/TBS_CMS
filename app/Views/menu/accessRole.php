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
    <h1>Access Role</h1>
    <a href="/user/add" class="btn btn-info btn-lg my-4 mx-2">Tambah</a>
    <a href="<?= base_url('/'); ?>" class="btn btn-warning px-5 btn-lg">Kembali</a>
    <hr>


    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">type</th>
                <th scope="col">Group Id</th>
                <th scope="col">Add</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
                <th scope="col">View</th>
                <th scope="col">Approve</th>
                <th scope="col">simpan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $user['typeName']; ?></td>
                    <td><?= $user['groupId']; ?></td>
                    <td><input class="form-check-input mt-0" type="radio" value=""></td>
                    <td><input class="form-check-input mt-0" type="radio" value=""></td>
                    <td><input class="form-check-input mt-0" type="radio" value=""></td>
                    <td><input class="form-check-input mt-0" type="radio" value=""></td>
                    <td><input class="form-check-input mt-0" type="radio" value=""></td>
                    <td class="d-flex align-items-center">
                        <button class="btn btn-success btn-sm mx-2">Save!</button>
                        <div class="dropdown">
                            <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Lainnya
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item bg-warning" href="<?= site_url('user/edit/' . $user["id"]); ?>">Edit</a></li>
                                <li><a class="dropdown-item bg-danger" href="<?= site_url('user/delete/' . $user["id"]); ?>">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
<style>
    tr>td>input {
        margin-left: 12px;
    }
</style>

</html>