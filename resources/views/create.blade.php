@extends('layouts.default')

@section('content')
 
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mt-3">
            <h2>TAMBAH DATA</h2>
        </div>
        <div class="col-lg-8 mt-3">
            <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="judul">Judul*</label>
                    <input class="form-control" type="text" name="judul" id="judul">
                </div>
                <div class="form-group mt-3">
                    <label for="pengarang">Pengarang*</label>
                    <input class="form-control" type="text" name="pengarang" id="pengarang">
                </div>
                <div class="form-group mt-3">
                    <label for="penerbit">Penerbit*</label>
                    <input class="form-control" type="text" name="penerbit" id="penerbit">
                </div>
                <div class="form-group mt-3">
                    <label for="isbn">ISBN*</label>
                    <input class="form-control" type="number" name="isbn" id="isbn">
                </div>
                <div class="form-group mt-3">
                    <label for="thterbit">Tahun Terbit*</label>
                    <select type="text" class="custom-select form-control" name="thterbit" id="thterbit">
                        <option value="">Pilih Tahun Terbit</option>
                        @for ($i = 2013; $i <= 2022; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-outline-light">Masukkan</button>
                </div>
                
            </form>
        </div>
    </div>
</div>




@endsection