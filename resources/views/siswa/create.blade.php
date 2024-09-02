<!-- resources/views/siswas/create.blade.php -->

@extends('layouts.backend.master') {{-- Assuming you have a master layout --}}

@section('content')
<div class="container">
    <h1>Create Siswa</h1>
    

    {{-- Your create form goes here --}}
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        {{-- Add your form fields here --}}
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" required>
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
