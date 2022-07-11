@extends('layout.private')

@section('content')


<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            {{-- <?php $i=1; ?>
            @foreach  --}}
            <tr>
                    
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatedataanggota" data-whatever="UpdateAnggota"><i class="fas fa-fw fa-pen"></i></button>
                <a href="" type="button" class="btn btn-danger  "><i class="fas fa-fw fa-trash"></i></a>    
                </td>    
            </tr>
            <div class="modal fade" id="updatedataanggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Anggota</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahwali.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal" class="col-form-label">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon" class="col-form-label">Telepon:</label>
                                    <input type="number" class="form-control" id="telepon" name="telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">Alamat:</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Status:</label>
                                    <select id="status" class="form-control" name="status" required>
                                        <option value="" selected>Pilih Status</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Nonaktif">Nonakif</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            
               

        </tbody>
    </table>
</div>
    

@endsection