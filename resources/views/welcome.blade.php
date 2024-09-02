<!DOCTYPE html>
<html l lang="en">
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
                <div class="masthead-subheading">selamat datang dipengaduan sekolah</div>
                <div class="masthead-heading text-uppercase">Tzu Chi</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#pengaduan">Adukan</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="pengaduan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pengaduan</h2>
                    <h3 class="section-subheading text-muted">Silahkan isi pengaduan yang ingin anda sampaikan</h3>
                </div>
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang */
            color: #333; /* Warna teks */
            margin: 0;
            padding: 0;
        }
        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #555; /* Warna label */
        }
        input[type="text"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        button {
            padding: 12px 24px;
            background-color: rgb(0, 255, 21); /* Warna tombol */
            color: #fff; /* Warna teks tombol */
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background-color: #68f90e; /* Warna saat tombol dihover */
        }
    </style>
</head>
<body>
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
                
        <form action="{{ route('inputaspirasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nisn">NISN:</label>
            <input type="text" id="nisn" name="nisn" required>
                
            <label for="kategori_id">Kategori:</label>
            <select name="kategori_id" required>
                <option value="">Pilih Kategori</option>
                @foreach (App\Models\Kategori::all() as $kategori_id)
                <option value="{{ $kategori_id->id }}">{{ $kategori_id->keterangan }}</option>
                @endforeach
            </select>
            @error('kategori_id')
            <span style="color: red;">{{ $message }}</span>
            @enderror
                
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" required>
                
            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan" required></textarea>
             
            
            <label for="foto">Upload Foto:</label>
            <input type="file" id="foto" name="foto" required>
                
            <button type="submit">Tambahkan Laporan</button>
        </form>
    </div>
</body>
</html>

                
                
                
      
        <!-- Bootstrap core JS-->
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
