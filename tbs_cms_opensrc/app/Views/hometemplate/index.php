<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu || menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-dark" style="display: flex; justify-content: space-between; align-items: center;">
        <form class="container-fluid justify-content-end">
            <!-- <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button> -->
            <div class="dropdown ">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/'); ?>">Back</a></li>
                </ul>
            </div>
        </form>
        <?php if (in_groups('admin')) : ?>
            <form class="container-fluid justify-content-start mb-4">
                <a href="<?= base_url('menu/add'); ?>" class="btn btn-success me-2" type="submit">Tambah Data</a>
            </form>
        <?php endif; ?>
    </nav>
    <br><br>
    <div class="container mx-10">
        <table class="table table-dark table-hover table-md-8">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IconMenu</th>
                    <th scope="col">Menuname</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $row) : ?>
                    <tr>
                        <th scope="row"><?= $row["IdMenu"]; ?></th>
                        <td><?= $row["IconMenu"]; ?></td>
                        <td><?= $row["MenuName"]; ?></td>
                        <td><?= $row["description"]; ?></td>
                        <td>
                            <div class="btn-group">
                                <?php if (in_groups('admin')) : ?>
                                    <a href="<?= site_url('role/edit/' . $row["IdMenu"]); ?>" class="btn btn-info">edit</a>
                                    <a href="<?= site_url('role/delete/' . $row["IdMenu"]); ?>" class="btn btn-danger" onclick="alert('yakin anda ingin menghapus pesan??')">delete</a>
                                <?php endif; ?>
                                <a href="<?= base_url('role/view/' . $row["UrlMenu"]); ?>" class="btn btn-warning">View</a>
                                <a href="#" class="btn btn-success">Approve</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>