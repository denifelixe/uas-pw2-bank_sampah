@extends('layouts.app-bank-sampah')

@section('title-page', 'Nasabah - Tambah Data')

@section('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
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
                <form action="{{ route('nasabah.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggal-transaksi">Tanggal Transaksi</label>
                            <div class="input-group date" id="tanggal-transaksi" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tanggal_transaksi" data-target="#tanggal-transaksi" placeholder="Tanggal Transaksi" required/>
                                <div class="input-group-append" data-target="#tanggal-transaksi" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama-nasabah">Nama Nasabah</label>
                            <input type="text" class="form-control" id="nama-nasabah" name="nama_nasabah" placeholder="Nama Nasabah" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis-sampah">Jenis Sampah</label>
                            <select class="custom-select" id="jenis-sampah" name="jenis_sampah_id" required>
                                <option selected disabled>Pilih Jenis Sampah</option>
                                @foreach ($jenisSampah as $item)
                                    <option value="{{ $item->id }}">{{ $item->jenis_sampah }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berat-sampah">Berat</label>
                            <input type="number" class="form-control" id="berat-sampah" name="berat_sampah" placeholder="Berat Sampah" required>
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
    <!-- Select2 -->
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <script>
        //Date picker
        $('#tanggal-transaksi').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    </script>
@endsection