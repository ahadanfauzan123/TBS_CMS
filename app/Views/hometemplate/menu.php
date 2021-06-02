<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <?php if (in_groups('admin')) : ?>
        <form class="container-fluid justify-content-start mb-4">
            <a class="btn btn-warning bg-gradient px-5" href="<?= base_url('role/add'); ?>"><i class="fas fa-plus"></i></a>
        </form>

        <hr>
    <?php endif; ?>

    <div class='d-flex flex-column justify-content-center mt-5'>
        <?php foreach ($menu as $m) : ?>
            <div class="card mb-3 align-self-center" style="max-width: 850px;">

                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/iconmenu_image/<?= $m["IconMenu"]; ?>" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $m['MenuName']; ?></h5>
                            <div class="bd">
                                <p class="card-text"><?= $m['description']; ?></p>
                            </div>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer text-right">
                            <?php if (in_groups('admin')) : ?>
                                <a href="<?= site_url('role/edit/' . $m['IdMenu']); ?>" class="btn btn-info px-2"><i class="far fa-edit"></i></a>
                                <a href="<?= site_url('role/delete/' . $m['IdMenu']); ?>" onclick="alert('yakin anda ingin menghapus menu <?= $m['MenuName']; ?>');" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            <?php endif; ?>
                            <a class="btn btn-warning bg-gradient px-2" href="<?= base_url('role/view/' . $m['IdMenu']); ?>"><i class="fas fa-eye"></i></a>
                            <button class="btn btn-success"><i class="fas fa-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</body>
<style>
    .bd {
        font-size: small;
        overflow-x: hidden;
        overflow-y: scroll;
        height: 60px;
    }

    .bd::-webkit-scrollbar {
        display: none;
    }

    form {
        color: white;
    }

    button>i,
    a>i {
        color: white;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>