@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <div class="container" style="margin-left:250px;">
        <h1 class="mb-4">Settings</h1>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="theme" class="form-label">Theme</label>
                        <select class="form-select" id="theme">
                            <option selected>Light</option>
                            <option>Dark</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="language" class="form-label">Language</label>
                        <select class="form-select" id="language">
                            <option selected>Bahasa Indonesia</option>
                            <option>English</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
