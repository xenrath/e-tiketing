@extends('back.layout.main')

@section('title', 'Tambah Role')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">
      <a href="{{ url('role') }}">Role</a> /
    </span> Tambah Role
  </h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Tambah Data</h5>
        </div>
        <div class="card-body">
          <form action="{{ url('role') }}" method="post">
            @csrf
            <div class="mb-3">
             <div class="form-group">
                  <label for="exampleInputFile">Role</label>
                    <select class="form-control" name="role">
                          <option value='Admin'>Admin</option>
                          <option value='Pembeli'>Pembeli</option>
                        </select>
                        </div>
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