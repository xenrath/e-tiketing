@include('back.admin')
@include('back.navbar')
@section('back.content')

          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-account.html"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a>
                    </li>
                  </ul>
                  <div class="card">
                    <!-- Notifications -->
                    <h5 class="card-header">Detail Produk</h5>
                    <div class="card-body">
                      <div class="error"></div>
                    </div>
                    <div class="table-responsive">
                   
                      <table class="table">                    
                    <thead>
                      
                      <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Jenis</th>
                        <th>Model</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                   <tbody>

                  @foreach($listproduk as $key => $data)
                    <tr>
                      <td>{{ $listproduk->firstItem() + $key }}</td>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->category }}</td>
                      <td>{{ $data->jenis }}</td>                  
                      <td>{{ $data->model }}</td>
                      <td>
                        <form method="post" action="{{ route('produk.destroy', $data->id) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                                @csrf
                                {{ method_field('DELETE') }}
                              {{-- <a type="button" class="btn btn-info float-right" href="{{ route('produk.create')}}"><i class="fas fa-plus"></i> Add item</a> --}}
                              <a type="button" class="btn btn-info float-right" href="{{ route('produk.edit', $data->id)}}"><i class="fas fa-plus"></i> Ubah</a>
                                <button class="btn btn-danger"> <i class ="fa fa-trash">Hapus</i></button>
                                <a type="button" class="btn btn-info float-right" href="{{ route('produk.show', $data->id)}}"><i class="fas fa-plus"></i> Detail</a>
                                </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  </table>
                    {{ $listproduk->appends(Request::all())->links('pagination::bootstrap-4') }}
                 <div class="modal-footer">
                  <a type="button" class="btn btn-info float-right" href="{{ route('produk.create')}}"><i class="fas fa-plus"></i> Tambah</a> 
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="content-backdrop fade"></div>
          </div>