
@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tarif</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tarif</li>
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
                      <a href="{{ route('tarif.create') }}" class="btn btn-info btn-rounded" name="button">Tambah Tarif</a>
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Kode Tarif</th>
                                      <th>Daya Listrik</th>
                                      <th>Tarif per KWH</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($data as $tarif)
                                  <tr>
                                      <td><a href="">{{ $tarif->kodetarif }}</a></td>
                                      <td>{{ $tarif->daya }} Watt</td>
                                      <td>Rp. {{ $tarif->tarifperkwh }}</td>
                                      <td>
                                        <a href="{{ route('tarif.edit', $tarif->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                                        <form action="{{ route('tarif.destroy', $tarif->id) }}" method="POST" style="display:inline-block !important;">
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
