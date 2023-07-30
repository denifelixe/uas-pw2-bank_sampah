@extends('layouts.app-bank-sampah')

@section('title-page', 'Bank Sampah - Ubah Data')

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            {{-- Error Message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Error!</h5>
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <div class="card card-primary">
                <form action="{{ route('bank-sampah.update', $bankSampah->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Sampah</label>
                            <input type="text" class="form-control" name="jenis_sampah" value="{{ $bankSampah->jenis_sampah }}" placeholder="Jenis Sampah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Harga per Kilo</label>
                            <input type="number" class="form-control" name="harga_per_kilo" value="{{ $bankSampah->harga_per_kilo }}" placeholder="Harga per Kilo">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection