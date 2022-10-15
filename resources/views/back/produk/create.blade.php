@include('back.admin')
@include('back.navbar')
@section('back.content')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tambah Produk</h5>

            <form method="POST" action="{{ route('produk.store') }}" role="form" enctype="multipart/form-data">
                @csrf
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            {{-- id --}}
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <input type="text" name="id" placeholder="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}" autofocus>
               @error('id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror   
              </div>
            </div>
            {{-- id --}}
          </div>
        </nav>

         <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            {{-- nama produk --}}
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                 <input type="text" name="category" placeholder="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" autofocus>
               @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror   
              </div>
            </div>
            {{-- nama produk --}}
          </div>
        </nav>

         <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            {{-- nama produk --}}
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <div class="nav-item d-flex align-items-center">
                 <input type="text" name="jenis" placeholder="jenis" class="form-control @error('category') is-invalid @enderror" value="{{ old('jenis') }}" autofocus>
               @error('jenis')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror   
              </div>
            </div>
            {{-- nama produk --}}
          </div>
        </nav>


           <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            {{-- nama produk --}}
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <div class="nav-item d-flex align-items-center">
                 <input type="text" name="model" placeholder="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}" autofocus>
               @error('model')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror   
              </div>
            </div>
            {{-- nama produk --}}
          </div>
        </nav>

         <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="{{ route('back.produk.index') }}">Tutup</a>
              <button type="submite" class="btn btn-primary">Tambah</button>
            </div>
      </div>
    </div>    