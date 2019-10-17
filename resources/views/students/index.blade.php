@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <a href="{{ url('/students/create') }}" class="btn btn-primary mb-3">Create New Student</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <ul class="list-group">
                @foreach ($students as $std)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $std->nama }}
                    <a href="{{ url('/students/'.$std->id) }}" class="badge badge-info">Details</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection