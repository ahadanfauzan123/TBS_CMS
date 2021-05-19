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
    <!-- Example split danger button -->
    <?php if (in_groups('admin')) : ?>
        <li class="nav-item btn-rotate dropdown" style="z-index: 1000; display: flex;">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p>Admin</p>
            </a>
            <div class="dropdown-menu dropdown-menu-left" style=" background-color: white; width: 100%;" aria-labelledby="navbarDropdownMenuLink">
                <ul style="width:100%;">
                    <li class="dropdown-item" style="width: 100%;">
                        <a href="<?= base_url('admin'); ?>">
                            <i class="fas fa-users"></i>
                            <p>User management</p>
                        </a>

                    </li>
                    <li class="dropdown-item" href="#">role management</li>
                    <li class="dropdown-item" href="#">User Table</li>
                </ul>
            </div>

        </li>
    <?php endif; ?>



    <div class="sidebar-wrapper">
        <ul class="nav">

            <hr>
            <li>
                <a href="<?= base_url('user'); ?>">
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
                <a href="<?= base_url('logout'); ?>">
                    <i class="nc-cloud-download-9"></i>
                    <p>Logout</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>