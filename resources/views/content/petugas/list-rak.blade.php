@extends('layout.private')

@section('content')


<div class="container-fluid p-1">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary mb-2" style="float:right;" data-bs-toggle="modal" data-bs-target="#tambahdatarak" data-whatever="Guru">Tambah Rak Buku</button>
    </div>
</div>

<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Kode Rak</th>
                <th scope="col">Nama Rak</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            {{-- <?php $i=1; ?>
            @foreach  --}}
            <tr>
                    
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatedatarak" data-whatever="UpdateBuku"><i class="fas fa-fw fa-pen"></i></button>
                <a href="" type="button" class="btn btn-danger  "><i class="fas fa-fw fa-trash"></i></a>    
                </td>    
            </tr>
            <div class="modal fade" id="updatedatarak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Rak Buku</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahwali.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="kode_rak" class="col-form-label">Kode Rak:</label>
                                    <input type="text" class="form-control" id="kode_rak" name="kode_rak" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_rak" class="col-form-label">Nama Rak:</label>
                                    <input type="text" class="form-control" id="nama_rak" name="nama_rak" required>
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
<div class="modal fade" id="tambahdatarak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rak Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./content/admin/function/tambahwali.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="kode_rak" class="col-form-label">Kode Rak:</label>
                        <input type="text" class="form-control" id="kode_rak" name="kode_rak" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_rak" class="col-form-label">Nama Rak:</label>
                        <input type="text" class="form-control" id="nama_rak" name="nama_rak" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" style="float: right;" class="btn btn-primary" onclick="">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection