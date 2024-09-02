<section class="container-scroller">
@include('layouts.backend.navbar')
<section class="container-fluid page-body-wrapper">
        @include('layouts.backend.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('layouts.backend.footer')
        </div>
    </section>
</section>