
@extends('layouts.front')
@section('title', 'Page Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 pt-5">
            <section class="header mb-70">
                <div class="container">
                    <h2>Tambah Catatan</h2>
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="day">Hari Ke</label>
                            <input type="number" class="form-control" id="day" name="day" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Isi Catatan</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="complaint">Keluhan</label>
                            <textarea class="form-control" id="complaint" name="complaint" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
