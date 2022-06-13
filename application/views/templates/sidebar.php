<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion d-print-none" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">eStudent Pass</div>
        <!-- <a class="" href="#!"><img class="app-badge" src="assets/asset-homepage/img/studentpass_logo.png"
                alt="..." /></a> -->
    </a>

    <!-- Campus Name
    <div class="text-center d-none d-md-inline">
        <span class="badge badge-success text-uppercase"><?= $campus ?></span>
        <span class="badge badge-success text-uppercase">SS KUCHING</span>
    </div> -->

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- <hr class="sidebar-divider mb-0"> -->

    <li class="nav-item <?= $this->uri->segment(2) == '' && $this->uri->segment(1) == 'datalist' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Datalist</span></a>
    </li>

    <li class="nav-item <?= $this->uri->segment(2) == '' && $this->uri->segment(1) == 'applist' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin/applist') ?>">
            <i class="fas fa-fw fa-th-list"></i>
            <span>New Application</span></a>
    </li>

    <li class="nav-item <?= $this->uri->segment(2) == '' && $this->uri->segment(1) == 'renewlist' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin/renewlist') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Renew Application</span></a>
    </li>


</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">