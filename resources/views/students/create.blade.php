@extends('layout/main')

@section('title', 'Form Add Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
            <form method="POST" action="{{ url('/students') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input value="{{ old('nama') }}" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Enter nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input value="{{ old('nrp') }}" type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Enter NRP">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{ old('email') }}" type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input value="{{ old('jurusan') }}" type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter Jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>
        </div>
    </div>
</div>
@endsection