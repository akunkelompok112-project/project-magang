@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container" style="margin-left:250px;">
        <h1 class="mb-4">Profile</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Pengguna</h5>
                <p class="card-text">Email: user@example.com</p>
                <p class="card-text">Role: Admin</p>
                <a href="#" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square"></i> Edit Profile
                </a>
            </div>
        </div>
    </div>
@endsection
