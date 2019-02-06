@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cek Tagihan Pelanggan</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="get" action="{{ url('search/pelanggan') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('pelanggan') ? ' has-error' : '' }}">
                            <label for="pelanggan" class="col-md-4 control-label">Cari ID Pelanggan</label>

                            <div class="col-md-6">
                                <input id="pelanggan" type="pelanggan" class="form-control" name="pelanggan" value="{{ old('pelanggan') }}" required autofocus>

                                @if ($errors->has('pelanggan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pelanggan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Check
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
