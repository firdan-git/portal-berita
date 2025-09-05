@extends('layouts.penulis')
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">Data Berita</h1>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between">
                                <h5>Daftar Berita</h5>
                                <a href="{{ route('penulis.berita.create') }}" class="btn btn-sm btn-primary">+ Tambah Berita</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($berita as $b)
                                        <tr>
                                            <td>{{($loop->iteration)}}</td>
                                            <td>{{ $b->judul }}</td>
                                            <td>{{ $b->kategori->nama }}</td>
                                            <td>
                                                <a href="{{ route('penulis.berita.edit', $b) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('penulis.berita.destroy', $b) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Apakah anda yakin?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              
@endsection