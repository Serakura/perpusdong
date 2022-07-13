<div class="col-xl-7 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold text-primary">Edit Buku</h5>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="./content/admin/function/tambahwali.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kode_buku" class="col-form-label">Kode Buku:</label>
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku" required>
                </div>
                <div class="form-group">
                    <label for="status" class="col-form-label">Rak Buku:</label>
                    <select id="status" class="form-control" name="status" required>
                        <option value="" selected>Pilih Status</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="judul" class="col-form-label">Judul:</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="sinopsis" class="col-form-label">Sinopsis:</label>
                    <input type="text" class="form-control" id="sinopsis" name="sinopsis" required>
                </div>
                <div class="form-group">
                    <label for="penulis" class="col-form-label">Penulis:</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" required>
                </div>
                <div class="form-group">
                    <label for="denda" class="col-form-label">Denda:</label>
                    <input type="number" class="form-control" id="denda" name="denda" required>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-form-label">Foto:</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="status" class="col-form-label">Status:</label>
                    <select id="status" class="form-control" name="status" required>
                        <option value="" selected>Pilih Status</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Dipinjam">Dipinjam</option>
                    </select>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
            </form>

        </div>
    </div>
</div>

