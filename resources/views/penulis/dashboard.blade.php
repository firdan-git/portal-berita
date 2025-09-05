@extends('layouts.penulis')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ms-2">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Selamat Datang, {{Auth::user()->name}}</li>
            </ol>
              <div class="row mt-4">

        <div class="col-md-8">
            <div class="card text-bg-secondary mb-3">

                <div class="card-body">
                      <p>Selamat datang di dashboard . Di sini Anda dapat mengelola konten, dan pengaturan
                        lainnya.</p>

                </div>

            </div>

        </div>

    </div>
        </div>
    </main>
@endsection