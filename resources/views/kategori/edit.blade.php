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
            <form action=" {{route ('kategori.update', [$kategori->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="card">
                    <div class="card-header"><b>Edit Data Kategori</b></div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="keterangan" class="form-control @error ('keterangan') is-invalid @enderror" value=" {{$kategori->keterangan}}" >
                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
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