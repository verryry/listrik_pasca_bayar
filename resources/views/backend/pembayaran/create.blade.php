@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Penggunaan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Penggunaan</a></li>
                <li class="breadcrumb-item active">Create</li>
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
                          <form action="{{ route('save') }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Pelanggan</label>
                                        <select class="form-control" name="id_pelanggan" oninvalid="this.setCustomValidity('Tolong Isi Nama')" oninput="setCustomValidity('')"  required>
                                            <option value="{{ $id_pelanggan->id }}">{{ $id_pelanggan->nama }}</option>
                                        </select>
                                    </div>
                                      <div class="form-group">
                                          <label>Tanggal</label>
                                          <input class="form-control" type="date" name="tanggal" oninvalid="this.setCustomValidity('Tolong Isi Tanggal')" oninput="setCustomValidity('')"  required>
                                      </div>
                                      <div class="form-group">
                                          <label>Biaya Admin</label>
                                          <div class="input-group input-group-default">
                                            <span class="input-group-btn">
                                              <button style="cursor:default !important;height:43px;" class="btn btn-default" disabled>Rp.</button>
                                            </span>
                                          <input type="number" name="biayaadmin" class="form-control" oninvalid="this.setCustomValidity('Tolong Isi Biaya Admin')" oninput="setCustomValidity('')"  required>
                                        </div>
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
