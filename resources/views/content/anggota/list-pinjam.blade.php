@extends('layout.private')

@section('content')

<div class="table-responsive border px-2 py-4">
    <table class="table table-bordered table-hover table-striped " id="data-table">
        <thead style="background-color: #4e73df;">
            <tr class="text-light">
                <th scope="col">No</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Buku</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>

            {{-- <?php $i=1; ?>
            @foreach  --}}
            <tr>
                    
                   
            </tr>
            {{-- @endforeach --}}
            
               

        </tbody>
    </table>
</div>


@endsection