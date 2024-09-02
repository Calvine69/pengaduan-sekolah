@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3>{{ __('Selamat Datang Di Pengaduan') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>

                    <!-- Add some additional content or features here -->

                    <div class="mt-4">
                        <a href="#" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> {{ __('Add Something') }}
                        </a>
                        <!-- You can replace 'fas fa-plus-circle' with the appropriate Font Awesome icon class -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
