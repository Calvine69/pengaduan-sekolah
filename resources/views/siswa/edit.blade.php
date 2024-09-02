@extends ('layouts.backend.master')
@section ('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    <div class="card o-hidden border-0 shadow-1g my-5">
        <div class="card-body p-0">
            <form action=" {{route ('siswa.update', [$siswa->nisn])}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="card">
                    <div class="card-header"><b>Edit Data Siswa</b></div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control @error ('nisn') is-invalid @enderror" value=" {{$siswa->nisn}}" >
                            @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" value=" {{$siswa->kelas}}" >
                            @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                     
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection