@extends('back.layout.main')

@section('title', 'Ubah Role')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">
      <a href="{{ url('role') }}">Role</a> /
    </span> Ubah Role
  </h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Ubah Data</h5>
        </div>
        <div class="card-body">
          <form action="{{ url('role/' . $role->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label" for="role">Nama Role</label>
              <input type="text" class="form-control @error('role') is-invalid @enderror" name="role" id="role"
                placeholder="Masukan nama role" value="{{ old('role', $role->role) }}" autofocus />
              @error('role')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary float-end">
              <span class="tf-icons bx bx-send"></span>&nbsp; Kirim</a>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection