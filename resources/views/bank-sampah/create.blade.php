@extends('layouts.app-bank-sampah')

@section('title-page', 'Bank Sampah - Tambah Data')

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
                <form action="{{ route('bank-sampah.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenis-sampah">Jenis Sampah</label>
                            <input type="text" class="form-control" id="jenis-sampah" name="jenis_sampah" placeholder="Jenis Sampah" required>
                        </div>
                        <div class="form-group">
                            <label for="harga-per-kilo">Harga per Kilo</label>
                            <input type="number" class="form-control" name="harga_per_kilo" placeholder="Harga per Kilo" required>
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