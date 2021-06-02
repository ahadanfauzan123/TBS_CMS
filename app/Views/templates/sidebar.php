<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/<?= user()->user_image; ?>">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a class="simple-text logo-normal">
            TBS CMS
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <ul>
        <?php if (in_groups('admin')) : ?>
            <li>

                <div class="dropdown" style="z-index: 100; position: absolute; top:80px; left:52px;">
                    <button style="background: none; border: none; letter-spacing:2px;" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= base_url('admin'); ?>">
                            <i class="fas fa-users"></i>
                            <p>Role</p>
                        </a>
                        <a class="dropdown-item" href="<?= base_url('/accessrole'); ?>">users</a>
                        <a class="dropdown-item" href="<?= base_url('user/access'); ?>">Access Role</a>
                    </div>
                </div>

            </li>
            <hr>
        <?php endif; ?>
    </ul>
    <div class="sidebar-wrapper">
        <ul class="nav">



            <li>
                <a href="<?= base_url('user/profile'); ?>">
                    <i class="nc-icon nc-single-02"></i>
                    <p>My Profile</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('homepage/index'); ?>">
                    <i class="nc-icon nc-bank"></i>
                    <p>Home Page</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/menu'); ?>">
                    <i class="fas fa-bars"></i>
                    <p>Menu</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </div>
</div>
<style>
    button:hover {
        border: none;
    }

    button:active {
        border: none;
    }
</style>