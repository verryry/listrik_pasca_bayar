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
                          <form action="{{ route('penggunaan.update',$penggunaan->id) }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                      <label>Nama Pelanggan</label>
                                      <select class="form-control" name="id_pelanggan" oninvalid="this.setCustomValidity('Tolong Isi Bulan')" oninput="setCustomValidity('')"  required>
                                        <option value="{{ $penggunaan->pelanggan->id }}">{{ $penggunaan->pelanggan->nama }}</option>
                                        @foreach($pelanggan as $data)
                                          <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select class="form-control" name="bulan" oninvalid="this.setCustomValidity('Tolong Isi Bulan')" oninput="setCustomValidity('')"  required>
                                        <option value="{{ $penggunaan->bulan }}">{{ $penggunaan->bulan }}</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="number" name="tahun" class="form-control" value="{{ $penggunaan->tahun }}" oninvalid="this.setCustomValidity('Tolong Isi Tahun')" oninput="setCustomValidity('')"  required>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>Meter Awal</label>
                                      <input type="number" name="meterawal" class="form-control" value="{{ $penggunaan->meterawal }}" oninvalid="this.setCustomValidity('Tolong Isi Tahun')" oninput="setCustomValidity('')"  required>
                                    </div>
                                    <div class="form-group">
                                      <label>Meter Akhir</label>
                                      <input type="number" name="meterakhir" class="form-control" value="{{ $penggunaan->meterakhir }}" oninvalid="this.setCustomValidity('Tolong Isi Tahun')" oninput="setCustomValidity('')"  required>
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
