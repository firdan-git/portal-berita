@extends('layouts.admin')
@section('content')


<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4 mt-4">
                            <div class="card-header d-flex justify-content-between">
                                <h5>Tambah users</h5>
                            </div>
                            <div class="card-body">
                              <form method="POST" action="{{ route('user.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label>Role</label>
                                    <select name="role" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="penulis">Penulis</option>
                                    </select>
                                </div>

                                <button class="btn btn-primary">Simpan</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </main>
              
@endsection