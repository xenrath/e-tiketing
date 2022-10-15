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
                     <section class="content">
                  <div class="container-fluid">
                  <div class="card">
                    <div class="card-body">
                      <table class="table">
                      <thead>
                          <th colspan="3" class="border-top-0">
                            <h3>{{ $produk->id }}</h3>
                          </th>
                        </thead>
                        <tbody>

                    <tr>
                      <td class="w-25">Category Produk</td>
                      <td>:</td>
                      <td class="text-break">{{ $produk->category }}</td>
                    </tr>

                        <tr>
                        <td class="w-25">Jenis Produk</td>
                        <td>:</td>
                        <td class="text-break">{{ $produk->jenis }}</td>
                      </tr>

                        <tr>
                        <td class="w-25">Model Produk</td>
                        <td>:</td>
                        <td class="text-break">{{ $produk->model }}</td>
                      </tr>

                    </tbody>
                  </table>
                  <div class="row">
                  </div>
                </div>
              </div>
            </div>
          </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="content-backdrop fade"></div>
          </div>