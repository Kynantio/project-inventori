@extends('layout.main')

@section('barang_keluar', 'active')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar Barang Keluar</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered" data-ordering="false">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Divisi</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang_keluar as $item)
                        <tr>
                            <td>{{ $item->kode_bk }}</td>
                            <td>{{ $item->divisi->nama_divisi }}</td>
                            <td>{{ $item->barang->nama }}</td>
                            <td>{{ $item->jumlah }} {{ $item->satuan }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <a href="/edtBarangKeluar/{{ $item->id_barang }}" class="btn btn-sm btn-success"><i
                                        class="fa fa-pencil-square-o"></i></a>
                                <a href="/hpsBarangKeluar/{{ $item->id_barang }}" class="btn btn-sm btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('table')
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table').DataTable(); // Perbaiki ID tabel jika diperlukan
    });
</script>
@endsection
