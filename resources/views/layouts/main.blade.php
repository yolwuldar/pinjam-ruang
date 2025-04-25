<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Universitas Sultan Ageng Tirtayasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&display=swap" rel="stylesheet">
</head>
<body style="background-color: #f6f1de;">
    <nav class="navbar navbar-expand-lg  px-3" style="background-color: #3e3f5b;">
        <div class="container-fluid">
          
          <a class="navbar-brand" href="#">
            <img src="/assets/images/logo_UNTIRTA.png" alt="Logo" width="50" height="50">
          </a>
      
          
          <div class="mx-auto d-flex gap-4">
            <a class="nav-link " href="{{ route('daftarruang') }}" style="color: #f6f1de">Daftar Ruangan</a>
            <a class="nav-link  fw-bold" href="#" style="color: #f6f1de">Beranda</a>
            <a class="nav-link " href="#" style="color: #f6f1de">Daftar Peminjaman</a>
          </div>
      
          
          <div class="d-flex align-items-center gap-4">
            <i class="bi bi-bell-fill  fs-5" style="color: #f6f1de"></i> 
            <a class="nav-link fw-bold" href="#" style="color: #f6f1de">Logout</a>
          </div>
        </div>
      </nav>
      <div class="container  mt-5">
             @yield('content')
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>