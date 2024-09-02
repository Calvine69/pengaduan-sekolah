@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                    
                </div>
                @endif
            <form action="{{route('kategori.store')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">ManageCategory</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">

                        @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-outline-primary">Submit</button>
                    </div>
                    
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection