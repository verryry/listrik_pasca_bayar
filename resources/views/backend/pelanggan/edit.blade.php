@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pelanggan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pelanggan</a></li>
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
                          <form action="{{ route('pelanggan.update',$pelanggan->id) }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label>Nometer</label>
                                          <input type="text" name="nometer" class="form-control" value="{{ $pelanggan->nometer }}" oninvalid="this.setCustomValidity('Tolong Isi Kode Nometer')" oninput="setCustomValidity('')"  required>
                                      </div>
                                      <div class="form-group">
                                          <label>Nama</label>
                                          <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}" oninvalid="this.setCustomValidity('Tolong Isi Nama Anda')" oninput="setCustomValidity('')"  required>
                                      </div>
                                      <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea style="height:auto !important;" class="form-control" rows="10" name="alamat" oninvalid="this.setCustomValidity('Tolong Isi Alamat Anda')" oninput="setCustomValidity('')"  required> {{ $pelanggan->alamat }} </textarea>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kode Tarif</label>
                                        <select class="form-control" name="id_tarif" oninvalid="this.setCustomValidity('Tolong Isi Kode Tarif')" oninput="setCustomValidity('')"  required>
                                            <option value="{{ $pelanggan->id }}">{{ $pelanggan->tarif->kodetarif }} - {{ $pelanggan->tarif->daya }} Watt</option>
                                            @foreach($tarif as $data)
                                            <option value="{{ $data->id }}">{{ $data->kodetarif }} - {{ $data->daya }} Watt</option>
                                            @endforeach
                                          </select>
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
