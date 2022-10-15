@extends('back.layout.main')

@section('title', 'Tambah User')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">
      <a href="{{ url('user') }}">Role</a> /
    </span> Tambah User
  </h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Tambah Data</h5>
        </div>
        <div class="card-body">
          <form action="{{ url('user') }}" method="post">
            @csrf
           <div class="form-group">
            <label for="role_id">Role</label>
            <select class="form-control @error('role_id') is-invalid @enderror" id="role_id" name="role_id">
              <option value="">- Pilih -</option>
              @foreach ($roles as $k)
                <option value="{{ $k->id }}" {{ old('role_id') == $k->id ? 'selected' : null }}>{{ $k->role }}</option>
              @endforeach
            </select>
            @error('role_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div>
              <label class="form-label" for="role">Nama</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Masukan nama" required />
            </div>
            <div class="mb-3">
              <label class="form-label" for="phone">Nomor Telepon</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">+62</span>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Masukan No Telpone" required/>
              </div>
             {{-- <div class="mb-3">
              <label class="form-label" for="role">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password" required />
            </div> --}}
             <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="{{ url('user') }}">Tutup</a>
            <button type="submit" class="btn btn-primary float-end">
              <span class="tf-icons bx bx-send"></span>&nbsp; Kirim</a>
            </button>
             </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection