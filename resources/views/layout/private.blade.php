<?php

    if (session()->has('login-sess')) { 
        ?>
        <!DOCTYPE html>
        <html lang="en">
        
            <head>
                @include('layout.head')
            </head>
        
        <body id="page-top">
           
                <div aria-live="polite" aria-atomic="true" class="position-relative" data-autohide="false">
                    <!-- Position it: -->
                    <!-- - `.toast-container` for spacing between toasts -->
                    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
                    <div class="toast-container position-absolute top-0 end-0 p-3" style="z-index: 10;">
        
                        <!-- Then put toasts within -->
                        <div id="toast-delayer" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" data-bs-delay="5000">
                            <div class="toast-header">
                                <strong class="me-auto">Bootstrap</strong>
                                <small class="text-muted">just now</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                               
                            </div>
                        </div>
        
                    </div>
                </div>
          
            <!-- Page Wrapper -->
            <div id="wrapper">
        
                <!-- Sidebar -->
                @include('layout.sidebar')
                <!-- End of Sidebar -->
        
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
        
                    <!-- Main Content -->
                    <div id="content">
        
                        <!-- Topbar -->
                        @include('layout.navbar')
                        <!-- End of Topbar -->
        
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
        
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                            </div>
        
                            <!-- konten ditampilkan disini -->
                            @yield('content')
                            <!-- ini batas penutup konten -->
        
                        </div>
                        <!-- /.container-fluid -->
        
                    </div>
                    <!-- End of Main Content -->
        
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; PERPUS DONG</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
        
                </div>
                <!-- End of Content Wrapper -->
        
            </div>
            <!-- End of Page Wrapper -->
        
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Tekan tombol "Logout" untuk keluar dari akunmu</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../function/funct_logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambah Data Guru -->
           
            <!-- Tambah Data Kelas -->
            <div class="modal fade" id="tambahdatakelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahkelas.php" method="POST">
                                <div class="form-group">
                                    <label for="kode" class="col-form-label">Kode Kelas:</label>
                                    <input type="text" class="form-control" id="kode" name="kode" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama Kelas:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahunajaran" class="col-form-label">Tahun Ajaran:</label>
                                    <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kelas" class="col-form-label">Wali Kelas:</label>
                                    <select id="kelas" class="form-control" name="wali" required>
                                        <option value="" selected>Pilih Wali Kelas</option>
                                       
                                    </select>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambah Data Siswa -->
            <div class="modal fade" id="tambahdatasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahsiswa.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="nip" class="col-form-label">NIS:</label>
                                    <input type="text" class="form-control" id="nis" name="nis" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="jeniskelamin" class="col-form-label">Jenis Kelamin:</label>
                                    <select id="jeniskelamin" class="form-control" name="jeniskelamin" required>
                                        <option value="" selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama" class="col-form-label">Agama:</label>
                                    <select id="agama" class="form-control" name="agama" required>
                                        <option value="" selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="katolik">Katolik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir" class="col-form-label">Tempat Lahir:</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon" class="col-form-label">Telepon:</label>
                                    <input type="number" class="form-control" id="telepon" name="telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">Alamat:</label>
                                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="angkatan" class="col-form-label">Angkatan:</label>
                                    <input type="number" class="form-control" id="angkatan" name="angkatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Foto:</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Tambah Data Mata Pelajaran -->
            <div class="modal fade" id="tambahdatamapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Pelajaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahmapel.php" method="POST">
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Kode Mata Pelajaran:</label>
                                    <input type="text" class="form-control" id="kode" name="kode" required>
                                </div>
                                <div class="form-group">
                                    <label for="nip" class="col-form-label">Nama Mata Pelajaran:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="hari" class="col-form-label">Hari:</label>
                                    <select id="hari" class="form-control" name="hari" required>
                                        <option value="" selected>Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jum'at">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mulai" class="col-form-label">Waktu Mulai:</label>
                                    <input type="time" class="form-control" id="mulai" name="mulai" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai" class="col-form-label">Waktu Selesai:</label>
                                    <input type="time" class="form-control" id="selesai" name="selesai" required>
                                </div>
                                <div class="form-group">
                                    <label for="kkm" class="col-form-label">KKM:</label>
                                    <input type="text" class="form-control" id="kkm" name="kkm" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kelas" class="col-form-label">Kelas:</label>
                                    <select id="kelas" class="form-control" name="kelas" required>
                                        <option value="" selected>Pilih Kelas</option>
                                        
                                    </select>
                                </div>
        
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="modal fade" id="tambahdatapengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengumuman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahpengumuman.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="judul" class="col-form-label">Judul:</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="subjudul" class="col-form-label">Sub Judul:</label>
                                    <input type="text" class="form-control" id="subjudul" name="subjudul" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal" class="col-form-label">Tanggal:</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan" class="col-form-label">Keterangan:</label>
                                    <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Status:</label>
                                    <select id="status" class="form-control" name="status" required>
                                        <option value="" selected>Pilih Status</option>
                                        <option value="draft">Draft</option>
                                        <option value="tampil">Tampil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Gambar:</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- @include('layout.script') --}}
            <script src="{{ asset('jquery.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
            <script>
                $(document).ready(function() {
                    var table = $('#data-table').DataTable({
                        select: false,
                        search: {
                            caseInsensitive: false,
                            regex: true
                        }
                    });
                });
            </script>
            <script>
                var editor = CKEDITOR.replace('editor1', {
                    extraPlugins: 'embed,autoembed,image2',
                    height: 500,
        
                    // Load the default contents.css file plus customizations for this sample.
                    contentsCss: [
                        'http://cdn.ckeditor.com/4.18.0/full-all/contents.css',
                        'https://ckeditor.com/docs/ckeditor4/4.18.0/examples/assets/css/widgetstyles.css'
                    ],
                    // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
                    embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
        
                    // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
                    // resizer (because image size is controlled by widget styles or the image takes maximum
                    // 100% of the editor width).
                    image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                    // image2_disableResizer: true,
                    removeButtons: 'PasteFromWord'
                });
                CKFinder.setupCKEditor(editor);
                var editor1 = CKEDITOR.replace('editor2', {
                    extraPlugins: 'embed,autoembed,image2',
                    height: 200,
        
                    // Load the default contents.css file plus customizations for this sample.
                    contentsCss: [
                        'http://cdn.ckeditor.com/4.18.0/full-all/contents.css',
                        'https://ckeditor.com/docs/ckeditor4/4.18.0/examples/assets/css/widgetstyles.css'
                    ],
                    // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
                    embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
        
                    // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
                    // resizer (because image size is controlled by widget styles or the image takes maximum
                    // 100% of the editor width).
                    image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                    // image2_disableResizer: true,
                    removeButtons: 'PasteFromWord'
                });
                CKFinder.setupCKEditor(editor1);
            </script>
            <script>
                $('.toast').toast('show');
            </script>
        
        </body>
        
        </html>
        <?php 
    } else  {
        echo "<script>window.location.replace('/login')</script>";
    }
?>
