<!-- contoh penggunaan di views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container" style="margin-left:250px;">
        <h1 class="mb-4">Selamat Datang!</h1>
        <p>Ini adalah konten utama aplikasi Anda.</p>
        <div class="card">

            <div class="card-body">
                Contoh card untuk menampilkan data.
            </div>
        </div>
    </div>
@endsection
