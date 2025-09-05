@extends('layouts.admin')
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <h5>Tambah Kategori</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('kategori.store')}}"  method="post">
                                    @csrf
                                    <label>Nama Kategori</label>
                                    <input type="text" name="nama" class="form-control" value="{{old('nama', $kategori->nama ?? '')}}">
                                    <button class="btn btn-primary mt-2 " type="submit">Simpan</button>
                                </form>
                        </div>
                        </div>
                    </div>
                </main>
              
@endsection