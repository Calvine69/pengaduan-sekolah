@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="card shadow mb-4 my-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Pengaduan</h6>
            <!-- Tambahkan tombol untuk ekspor ke PDF -->
            <div class="float-right">
                <a href="{{ ('laporan/cetak') }}" class="btn btn-primary">Export PDF</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="bg-info">No</th>
                            <th class="bg-warning">NISN</th>
                            <th class="bg-warning">Kategori</th>
                            <th class="bg-warning">Lokasi</th>
                            <th class="bg-warning">Keterangan</th>
                            <th class="bg-warning">Foto</th>
                            <th class="bg-warning">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($inputaspirasis) > 0)
                        @foreach($inputaspirasis as $key => $inputaspirasi)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $inputaspirasi->nisn }}</td>
                            <td>{{ $inputaspirasi->kategori->keterangan }}</td>
                            <td>{{ $inputaspirasi->lokasi }}</td>
                            <td>{{ Str::limit($inputaspirasi->keterangan, 30) }}</td>
                            <td>
                                <a href="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" target="_blank">
                                    <img src="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" width="100">
                                </a>
                            </td>
                            <td class="status-column">
                                @if (empty(App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)->latest()->first()->status))
                                <span class="badge bg-warning text-dark">Menunggu</span>
                            @else
                                <span class="badge bg-success">{{ App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)->latest()->first()->status }}</span>
                            @endif
                               </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7">Tidak ada pengaduan yang dapat ditampilkan</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
