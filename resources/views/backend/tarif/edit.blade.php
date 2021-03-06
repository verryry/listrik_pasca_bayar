@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Users</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
      <!-- /# row -->
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-title">
                      <!-- <h4>Create Category</h4> -->

                  </div>
                  <div class="card-body">
                      <div class="basic-elements">
                          <form action="{{ route('tarif.update', $tarif->id) }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label>Kode Tarif</label>
                                          <input type="text" name="kodetarif" class="form-control" placeholder="Name User" value="{{ $tarif->kodetarif }}" oninvalid="this.setCustomValidity('Tolong Isi Kode Tarif')" oninput="setCustomValidity('')"  required>
                                      </div>
                                      <div class="form-group">
                                          <label>Daya Listrik</label>
                                          <input type="number" name="daya" class="form-control" placeholder="Name Email" value="{{ $tarif->daya }}" oninvalid="this.setCustomValidity('Tolong Isi Daya Listrik')" oninput="setCustomValidity('')" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Tarif per KWH</label>
                                          <input type="number" name="tarifperkwh" class="form-control" placeholder="Isi Jika ingin di ganti" value="{{ $tarif->tarifperkwh }}" oninvalid="this.setCustomValidity('Tolong Isi Tarif per KWH')" oninput="setCustomValidity('')">
                                      </div>
                                  </div>
                              </div>
                              <div class="dt-buttons">
                                <div class="sweetalert m-t-15">
                                  <!-- <input style="cursor:pointer;border-radius:5px;" type="submit" class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" name="submit" value="Submit"> -->
                                  <button class="btn btn-info btn sweet-success" type="submit">Submit</button>
                                </div>
                              </div>
                          </form>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>
@endsection
