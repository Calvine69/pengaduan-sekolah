@extends('layouts.backend.master')

@section('content')
<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="card border-0 shadow-lg my-5">
        <div class="card-body">
            <div class="card">
                <div class="card-header bg-primary text-white"><b>Detail Pengaduan</b></div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row" class="col-sm-3">NISN</th>
                                <td class="col-sm-9"><b>{{ $inputaspirasi->nisn }}</b></td>
                            </tr>

                            <tr>
                                <th scope="row" class="col-sm-3">Kategori</th>
                                <td class="col-sm-9"><b>{{ $inputaspirasi->kategori->keterangan }}</b></td>
                            </tr>

                            <tr>
                                <th scope="row" class="col-sm-3">Lokasi:</th>
                                <td class="col-sm-9"><b>{{ $inputaspirasi->lokasi }}</b></td>
                            </tr>

                            <tr>
                                <th scope="row" class="col-sm-3">Keterangan:</th>
                                <td class="col-sm-9"><b>{{ $inputaspirasi->keterangan }}</b></td>
                            </tr>

                            <tr>
                                <th scope="row" class="col-sm-3">Foto:</th>
                                <td class="col-sm-9">
                                    <img src="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" class="detail-img" alt="Foto Pengaduan">
                                </td>
                            </tr>
                        </tbody>
                       
                      
                    </table>

                    <div class="form-group">
                        <a href="{{ route('aspirasi.show', [$inputaspirasi->id]) }}" class="btn btn-primary">Beri Tanggapan</a>
                    </div> 
                    <div class="form-group">
                        <h5>History Aspirasi:</h5>
                        <ul class="list-group">
                            @foreach (App\Models\Aspirasi::where('input_aspirasi_id', $inputaspirasi->id)->get() as $aspirasi)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <b>{{ $aspirasi->created_at }}</b>
                                    </div>
                                    <div class="col-md-9">
                                        {{ $aspirasi->feedback }} 
                                        <span class="badge badge-info">{{ $aspirasi->status }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
