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
          <form action="{{ url('user'.$user->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label" for="role">Role</label>
              <input type="text" class="form-control" name="role_id" value="{{ old('id', $user->id) }}" id="role_id" placeholder="Masukan nama role" required class="form-control @error('role_id') is-invalid @enderror" value="{{ old('role_id') }}" autofocus/>
               @error('role_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror   
            </div>
            <div class="mb-3">
              <label class="form-label" for="role">Nama</label>
              <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" id="role_id" placeholder="Masukan nama role" required class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus/>
               @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
               @enderror
              </div>
            <div class="mb-3">
              <label class="form-label" for="role">No Telpone</label>
              <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}" id="role_id" placeholder="Masukan nama role" required class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autofocus/>
               @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror                 
            </div>
             <div class="mb-3">
              <label class="form-label" for="role">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password" required />
            </div>
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