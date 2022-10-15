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
          <form action="{{ url('complaint') }}" method="post">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="user_id">Nama Client</label>
              <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                <option value="">- Pilih -</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id')==$user->id ? 'selected' : null }}>{{ $user->name }} -
                  {{ $user->phone }}</option>
                @endforeach
              </select>
              @error('user_id')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="product_id">Produk</label>
              <select class="form-select @error('product_id') is-invalid @enderror" id="product_id" name="product_id">
                <option value="">- Pilih -</option>
                @foreach ($products as $product)
                <option value="{{ $product->id }}" {{ old('product_id')==$user->id ? 'selected' : null }}>{{
                  $product->name }}</option>
                @endforeach
              </select>
              @error('product_id')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="description">Pengaduan</label>
              <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
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