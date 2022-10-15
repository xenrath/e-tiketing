@extends('back.layout.main')

@section('title', 'Role')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<<<<<<< HEAD
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Master /</span> Role</h4>
=======
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Data Master /</span>
    Role
  </h4>
  @if (session('status'))
  <div class="alert alert-primary alert-dismissible" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header d-flex align-items-start justify-content-between">
      Data Role
      <a href="{{ url('role/create') }}" class="btn btn-sm rounded-pill btn-primary">
        <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Role</a>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Role</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($roles as $role)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $role->role }}</td>
            <td>
              <form method="post" action="{{ url('role/' . $role->id) }}"
                onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?')">
                @csrf
                @method('delete')
                {{-- <a href="{{ url('role/show') }}" class="btn rounded-pill btn-info btn-sm text-white">
                  <span class="tf-icons bx bx-show"></span>&nbsp; Detail
                </a> --}}
                <a href="{{ url('role/' . $role->id . '/edit') }}"
                  class="btn rounded-pill btn-warning btn-sm text-white">
                  <span class="tf-icons bx bxs-edit"></span>&nbsp; Ubah
                </a>
                <button type="submit" class="btn rounded-pill btn-danger btn-sm text-white">
                  <span class="tf-icons bx bx-trash-alt"></span>&nbsp; Hapus
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
<<<<<<< HEAD
    {{ $roles->appends(Request::all())->links('pagination::bootstrap-4') }}
=======
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
</div>
@endsection