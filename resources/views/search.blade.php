
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pengaduan Sekolah</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('profil') }}">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('search') }}">Search</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">selamat datang dipen</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pengaduan</h2>
                    <h3 class="section-subheading text-muted">Silahkan isi pengaduan yang ingin anda sampaikan</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ url('search') }}" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
                                        <th>Status</th> <!-- Mengubah kolom Action menjadi Status -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($inputaspirasis as $key => $inputaspirasi)
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
                                        <!-- Inside the <td> element for Status -->
                                        <td class="status-column">
                                         @if (empty(App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)->latest()->first()->status))
                                        <span class="badge bg-warning text-dark">Menunggu</span>
                                         @else
                                            <span class="badge bg-success">{{ App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)->latest()->first()->status }}</span>
                                        @endif
                                        </td>

                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">Tidak ada pengaduan yang dapat ditampilkan</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
