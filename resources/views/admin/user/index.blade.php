@extends('layouts.admin')
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">Data Users</h1>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between">
                                <h5>Daftar users</h5>
                                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">+ Tambah Users</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $u)
                                        <tr>
                                            <td>{{($loop->iteration)}}</td>
                                            <td>{{ $u->nama }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td>
                                                <a href="{{ route('user.edit', $u) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('user.destroy', $u) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Hapus User?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
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