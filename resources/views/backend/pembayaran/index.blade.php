
@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pembayaran</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Pembayaran</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <a href="{{ route('reportPembayaran') }}" class="btn btn-info btn-rounded" name="button">Report PDF</a>
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Nama Pelanggan</th>
                                      <th>Tanggal</th>
                                      <th>Biaya Admin</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $pembayaran)
                                  <tr>
                                      <td><a href="">{{ $pembayaran->pelanggan->nama }}</a></td>
                                      <td>{{ $pembayaran->tanggal }}</td>
                                      <td>{{ $pembayaran->biayaadmin }}</td>
                                      <td><a href="{{ route('destroy',$pembayaran->id) }}" class="btn btn-danger" name="button">Delete</a></td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
        <!-- End PAge Content -->
    </div>
</div>
@endsection
