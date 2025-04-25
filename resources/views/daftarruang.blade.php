@extends('layouts.main')
@section('content')

    <h1 class="mt" style="font-family: 'Cal Sans'; color: #3e3f5b !important;">Daftar Ruangan</h1>
    <h6 style="width: 35%; color: #3e3f5b;" >Temukan ruangan yang sempurna 
        untuk kebutuhan Anda, mulai dari ruang rapat yang nyaman hingga 
        ruang acara yang luas, dan pilih dari daftar yang tersedia untuk 
        pengalaman terbaik!</h6>

        <div class="container-fluid py-4">
            <div class="row">
              <div class="col-md-10">
            <div class="row g-4">

              <div class="col-md-3">
                <div class="card text-white rounded-4 p-2" style="background-color: #3e3f5b;">
                  <img src="/assets/images/exmpRUANGAN.jpg" class="card-img-top rounded-top-4" alt="Ruangan" style="width: 100%; height: 200px; object-fit: cover; overflow: hidden;">
                  <div class="card-body">
                <h5 class="card-title fw-bold" style="color: #f6f1de;">Laboratorium</h5>
                <p class="card-text text-white-50">Gedung galapagos - Ruang 07</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small><i class="bi bi-people"></i> 60 seats - AC</small>
                  <a href="#" class="btn btn-sm rounded-pill px-3" style="background-color: #66897e; color: #f6f1de;" onmouseover="this.style.color='#3e3f5b'" onmouseout="this.style.color='#f6f1de'">PINJAM</a>
                </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card  text-white rounded-4 p-2" style="background-color: #3e3f5b;">
                  <img src="/assets/images/exmpRUANGAN.jpg" class="card-img-top rounded-top-4" alt="Ruangan" style="width: 100%; height: 200px; object-fit: cover; overflow: hidden;">
                  <div class="card-body">
                <h5 class="card-title fw-bold" style="color: #f6f1de;">Laboratorium</h5>
                <p class="card-text text-white-50">Gedung galapagos - Ruang 07</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small><i class="bi bi-people"></i> 60 seats - AC</small>
                  <a href="#" class="btn btn-sm rounded-pill px-3" style="background-color: #66897e; color: #f6f1de;" onmouseover="this.style.color='#3e3f5b'" onmouseout="this.style.color='#f6f1de'">PINJAM</a>
                </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card  text-white rounded-4 p-2" style="background-color: #3e3f5b;">
                  <img src="/assets/images/exmpRUANGAN.jpg" class="card-img-top rounded-top-4" alt="Ruangan" style="width: 100%; height: 200px; object-fit: cover; overflow: hidden;">
                  <div class="card-body">
                <h5 class="card-title fw-bold" style="color: #f6f1de;">Laboratorium</h5>
                <p class="card-text text-white-50">Gedung galapagos - Ruang 07</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small><i class="bi bi-people"></i> 60 seats - AC</small>
                  <a href="#" class="btn btn-sm rounded-pill px-3" style="background-color: #66897e; color: #f6f1de;" onmouseover="this.style.color='#3e3f5b'" onmouseout="this.style.color='#f6f1de'">PINJAM</a>
                </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="card text-white rounded-4 p-2" style="background-color: #3e3f5b;">
                  <img src="/assets/images/exmpRUANGAN.jpg" class="card-img-top rounded-top-4" alt="Ruangan" style="width: 100%; height: 200px; object-fit: cover; overflow: hidden;">
                  <div class="card-body">
                <h5 class="card-title fw-bold" style="color: #f6f1de;">Laboratorium</h5>
                <p class="card-text text-white-50">Gedung galapagos - Ruang 07</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small><i class="bi bi-people"></i> 60 seats - AC</small>
                  <a href="#" class="btn btn-sm rounded-pill px-3" style="background-color: #66897e; color: #f6f1de;" onmouseover="this.style.color='#3e3f5b'" onmouseout="this.style.color='#f6f1de'">PINJAM</a>
                </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
              
              <div class="col-md-2 d-flex flex-column align-items-end justify-content-center gap-2">
            <button class="btn btn-outline-secondary p-2 fs-5" style="width: 50px;">↑</button>
            <button class="btn btn-outline-secondary p-2 fs-5" style="width: 50px;">1</button>
            <button class="btn btn-outline-secondary p-2 fs-5" style="width: 50px;">2</button>
            <button class="btn btn-outline-secondary p-2 fs-5" style="width: 50px;">3</button>
            <button class="btn btn-outline-secondary p-2 fs-5" style="width: 50px;">↓</button>
              </div>
            </div>
          </div>
          

@endsection