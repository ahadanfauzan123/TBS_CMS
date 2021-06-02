<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<div class="card mx-5 my-5" style="max-width: 2000px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/img/gambar3.jpeg" alt="..." width="300px">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $view['MenuName']; ?></h5>
                <p class="card-text"><?= $view['description']; ?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                <a class="btn btn-primary px-3 py-1" href="<?= base_url('/'); ?>">Back</a>
                <button class="btn btn-success px-2 py-2"><i class="fas fa-check" onclick="alert('Done')"></i></button>
            </div>
        </div>
    </div>
</div>