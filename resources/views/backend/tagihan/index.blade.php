
@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tagihan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tagihan</li>
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
                      <a href="{{ route('tagihan.create') }}" class="btn btn-info btn-rounded" name="button">Tambah Tagihan</a>
                      <a href="{{ route('reportTagihan') }}" class="btn btn-info btn-rounded" name="button">Report PDF</a>
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Nama Pelanggan</th>
                                      <th>Bulan</th>
                                      <th>Tahun</th>
                                      <th>Jumlah Meter</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $tagihan)
                                  <tr>
                                      <td><a href="">{{ $tagihan->pelanggan->nama }}</a></td>
                                      <td>{{ $tagihan->bulan }}</td>
                                      <td>{{ $tagihan->tahun }}</td>
                                      <td>{{ $tagihan->jumlahmeter }}</td>
                                      <td>
                                        @if( $tagihan->status == "belum_lunas")
                                          <button  name="button" class="btn btn-danger">Belum Lunas</button>
                                        @else
                                          <button name="button" class="btn btn-info">Lunas</button>
                                          @endif
                                      </td>
                                      <td>
                                        @if( $tagihan->status == "belum_lunas" )
                                        <a href="{{ route('pembayaran',[$tagihan->id]) }}" class="btn btn-warning" name="button"><i class="fas fa-money-bill-alt"></i></a>
                                        @else
                                        <i class="fas fa-check"></i>
                                        @endif
                                      </td>
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
