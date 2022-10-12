@extends('back.layout.main')

@section('title', 'Tambah Pengaduan')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
    <a href="{{ url('complaint') }}">Pengaduan</a> /</span> Tambah Pengaduan</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Tambah Data</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label" for="client_id">Nama Client</label>
              <input type="text" class="form-control" id="client_id" placeholder="Masukan nama client" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="phone">Nomor Telepon</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">+62</span>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="complaint">Pengaduan</label>
              <textarea id="image" class="form-control"></textarea>
            </div>
            {{-- <div class="mb-3">
              <label class="form-label" for="image">Bukti</label>
              <input class="form-control" type="file" id="image" />
              <div class="form-text">Beri bukti foto untuk kelengkapan pengaduan.</div>
            </div> --}}
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