@extends('layout.private')

@section('content')

<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Buku</th>
                <th scope="col">Jatuh Tempo</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Jumlah Hari</th>
                <th scope="col">Total Denda</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            {{-- <?php $i=1; ?>
            @foreach  --}}
            <tr>
                    
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updatedatabalik" data-whatever="UpdateBuku"><i class="fas fa-fw fa-pen"></i></button>
                    <a href="" type="button" class="btn btn-danger  "><i class="fas fa-fw fa-trash"></i></a>    
                </td>    
            </tr>
            <div class="modal fade" id="updatedatabalik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Pengembalian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./content/admin/function/tambahwali.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Status:</label>
                                    <select id="status" class="form-control" name="status" required>
                                        <option value="" selected>Pilih Status</option>
                                        <option value="Denda">Denda</option>
                                        <option value="Terbayar">Terbayar</option>
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