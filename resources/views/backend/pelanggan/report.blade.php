@extends('layouts.app')
@section('title')
Hasil dari pencarian
@endsection
@section('content')
<div class="container">
<div class="row">
  <h1>Selamat Datang , {{$pelanggan->nama}}</h1>
<br>
  <h3>Profile</h3>
  <table class="table">
  <thread>
  <tr style="text-align: center;">
  	<th>Nama Pelanggan</th>
    <th>No Meter</th>
  	<th>Alamat</th>
  	<th>KodeTarif</th>
      	</tr>
  </thread>
  <tbody>
  <tr>
    @foreach($data as $pelanggan)
  	<td>{{$pelanggan->nama}}</td>
    <td>{{$pelanggan->nometer}}</td>
  	<td>{{$pelanggan->alamat}}</td>
  	<td>{{$pelanggan->tarif->kodetarif}}</td>
    @endforeach
  	</tr>
  </tbody>
  </table>
</div>
</div>
@endsection
