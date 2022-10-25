<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img class="logo" src="/img/logo_labusel.jpg">
        <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
        <!-- <i class="fas fa-laugh-wink"></i> -->
        <!-- <i class="fa-solid fa-code"></i>
    <i class="fa-regular fa-code"></i> -->
        <!-- <i class="fa-brands fa-codepen"></i> -->
        <!-- </div> -->
        <div class="sidebar-brand-text mx-3">
            RSUD Kotapinang
        </div>
        <!-- <small>Labuhanbatu Selatan</small> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('obat'); ?>">
            <!-- <i class="fa-regular fa-user"></i> -->
            <i class="fa-solid fa-tablets"></i>
            <span>Lihat Obat</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pasien'); ?>">
            <i class="fa-regular fa-user"></i>
            <span>Lihat Daftar Pasien</span>
        </a>
    </li>

    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            <div class="alert-danger p-1">
                <i class="fa-solid fa-lock"></i>
                Admin Management
            </div>

        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fa-regular fa-user"></i>
                <span>User/Member Management</span></a>
        </li>

    <?php endif; ?>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fa-regular fa-user"></i>
            <span>My Profile</span></a>
    </li>



    <!-- Nav Item - Tables -->
    <li class="nav-item min-margin">
        <a class="nav-link" href="<?= base_url('edit_profil/' . user()->username);    ?>">
            <i class="fas fa-fw fa-table"></i>
            <!-- <i class="fa-solid fa-user-pen"></i> -->
            <span>Edit Profile</span>
        </a>
    </li>


    <hr class="sidebar-divider">
    <li class="nav-item min-margin">
        <a class="nav-link" href="<?= base_url('about'); ?>">
            <!-- <i class="fa-solid fa-right-from-bracket"></i> -->
            <i class="fa-solid fa-address-card"></i>
            <span>About</span>
        </a>
    </li>
    <li class="nav-item min-margin">
        <a class="nav-link" href="<?= base_url('contact'); ?>">
            <!-- <i class="fa-solid fa-right-from-bracket"></i> -->
            <i class="fa-solid fa-address-book"></i>
            <span>Contact</span>
        </a>
    </li>

    <li class="nav-item min-margin">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>