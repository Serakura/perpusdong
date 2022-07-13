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
    <?php
    if (session()->has('isAnggota')) { 
        ?>
        <li class="nav-item px-3 d-none d-md-block">
            
                <img src="https://cdn0-production-images-kly.akamaized.net/10pYJTQfy8oxHSgSGmvpgDCAGic=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2832638/original/037807400_1560947825-20190619-Anya-Geraldine-1.jpg" class="img-thumbnail profile rounded-circle" alt="">
                
           
        </li>
        <?php } ?>
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
        <a class="nav-link" href="/petugas/list-anggota">
            <i class="fas fa-fw fa-home"></i>
            <span>Anggota</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/petugas/list-pinjam">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Peminjaman</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        {{-- bikin if disini --}}
        <a class="nav-link" href="/petugas/list-balik">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengembalian</span></a>
    </li>


    <hr class="sidebar-divider my-0">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none ">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
<?php } ?>
<?php
    if (session()->has('isAnggota')) { 
        ?>
        
<li class="nav-item">
    {{-- bikin if disini --}}
    <a class="nav-link" href="/anggota/list-buku">
        <i class="fas fa-fw fa-user"></i>
        <span>Buku</span></a>
</li>
<hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/anggota/list-pinjam">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>List Pinjam</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/anggota/list-riwayat">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Riwayat</span></a>
    </li>
        <?php 
        } ?>
</ul>