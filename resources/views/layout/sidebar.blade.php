<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-5" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            <p>Perpustakaan App</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class=" nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <?php

    if (session()->has('isPetugas')) { 
        ?>
    <li class="nav-item">
        <a class="nav-link" href="/petugas/list-rak">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Rak Buku</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        {{-- bikin if disini --}}
        <a class="nav-link" href="/petugas/list-buku">
            <i class="fas fa-fw fa-user"></i>
            <span>Buku</span></a>
    </li>


    <hr class="sidebar-divider my-0">
    
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=kelas">
            <i class="fas fa-fw fa-home"></i>
            <span>Kelas</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link" href="index.php?page=mapel">
            <i class="fas fa-fw fa-book"></i>
            <span>Mata Pelajaran</span></a>
    </li>
    <hr class="sidebar-divider my-0">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none ">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
<?php } ?>

</ul>