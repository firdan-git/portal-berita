@extends('layouts.admin')
@section('content')


<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4 mt-4">
                            <div class="card-header d-flex justify-content-between">
                                <h5>Edit users</h5>
                            </div>
                            <div class="card-body">
                              <form method="POST" action="{{ route('user.update', $user) }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>

                                </div>

                                <div class="mb-3">
                                    <label>Password(Optional)</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Role</label>
                                    <select name="role" class="form-control">
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="penulis" {{ $user->role == 'penulis' ? 'selected' : '' }}>Penulis</option>
                                    </select>
                                    </select>
                                </div>

                                <button class="btn btn-success">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </main>
              
@endsection