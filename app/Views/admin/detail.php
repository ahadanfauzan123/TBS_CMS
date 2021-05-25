<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?= base_url('/assets/img/' . $user->user_image); ?>" alt="<?= $user->username; ?>">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user->username; ?></li>
                    <?php if ($user->fullname) : ?>
                        <li class="list-group-item"><?= $user->fullname; ?></li>
                    <?php endif; ?>
                    <li class="list-group-item"><?= $user->email; ?></li>
                    <li class="list-group-item">
                        <span class="badge badge-<?= ($user->name == 'admin') ? 'success ' : 'warning'; ?>"><?= $user->name; ?></span>

                    </li>
                    <li class="list-group-item">
                        <small> <a href="<?= base_url('admin') ?>">&laquo; back to user list </a></small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>