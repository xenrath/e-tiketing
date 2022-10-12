@extends('back.layout.main')

@section('title', 'Complaint')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Master /</span> Pengaduan</h4>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header d-flex align-items-start justify-content-between">
      Data Pengaduan
      <a href="{{ url('complaint/create') }}" class="btn btn-sm rounded-pill btn-primary">
        <span class="tf-icons bx bx-plus"></span>&nbsp; Buat Pengaduan</a>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Client</th>
            <th>Pengaduan</th>
            <th>Status</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>1</td>
            <td>Albert Cook</td>
            <td>Jaringan internet lemot</td>
            <td>
              <span class="badge bg-label-primary me-1">Menunggu</span>
            </td>
            <td>
              <button type="button" class="btn rounded-pill btn-info btn-sm">
                <span class="tf-icons bx bx-show"></span>&nbsp; Detail
              </button>
              <button type="button" class="btn rounded-pill btn-warning btn-sm">
                <span class="tf-icons bx bxs-edit"></span>&nbsp; Ubah
              </button>
              <button type="button" class="btn rounded-pill btn-danger btn-sm">
                <span class="tf-icons bx bx-trash-alt"></span>&nbsp; Hapus
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
</div>
@endsection