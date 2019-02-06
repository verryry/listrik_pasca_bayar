
@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Penggunaan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Penggunaan</li>
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
                      <a href="{{ route('penggunaan.create') }}" class="btn btn-info btn-rounded" name="button">Tambah Penggunaan</a>
                      <a href="{{ route('reportPenggunaan') }}" class="btn btn-info btn-rounded" name="button">Report PDF</a>
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Nama Pelanggan</th>
                                      <th>Bulan</th>
                                      <th>Tahun</th>
                                      <th>Meter Awal</th>
                                      <th>Meter Akhir</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $penggunaan)
                                  <tr>
                                      <td><a href="">{{ $penggunaan->pelanggan->nama }}</a></td>
                                      <td>{{ $penggunaan->bulan }}</td>
                                      <td>{{ $penggunaan->tahun }}</td>
                                      <td>{{ $penggunaan->meterawal }}</td>
                                      <td>{{ $penggunaan->meterakhir }}</td>
                                      <td>
                                        <a href="{{ route('penggunaan.edit', $penggunaan->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                                        <form action="{{ route('penggunaan.destroy', $penggunaan->id) }}" method="POST" style="display:inline-block !important;">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                                        </form>
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
