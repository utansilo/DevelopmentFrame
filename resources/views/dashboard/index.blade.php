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
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1 class="jumbo-header mb-30">
                                Selamat Datang,<br>
                                <h2>{{ Auth::user()->name }}</h2>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
