<!-- resources/views/siswas/index.blade.php -->

@extends('layouts.backend.master')

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success mt-3 mb-3">
        {{Session::get('message')}}
    </div>
    @endif

    <div class="container">
        <h1>Kategori List</h1>

        <div class="mb-3">
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">Create Kategori</a>
        </div>

        @if(count($kategoris) > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="bg-info">No</th>
                        <th class="bg-warning">Keterangan</th>
                        <th class="bg-warning">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategoris as $key => $kategori)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kategori->keterangan }}</td>
                        <td>
                            <a href="{{ route('kategori.edit',[$kategori->id]) }}" class="btn btn-success">Edit</a>
                            <!-- Modal Trigger Button -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$kategori->id}}">Delete</button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{$kategori->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$kategori->id}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{$kategori->id}}">Delete Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this kategori?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <!-- Delete Form -->
                                            <form action="{{ route('kategori.destroy',[$kategori->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>No kategori found.</p>
        @endif
    </div>
</div>
@endsection
