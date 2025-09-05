@extends('layouts.admin')

@section('content')



<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-body">
                                  <h1>Tentang Akun</h1>

                                   @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama :</label>
                                    <input type="text" value="{{$user->name}}" disabled class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address :</label>
                                <input type="text" value="{{$user->email}}" disabled class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" value="........" disabled class="form-control">

                                </div>
                                <div class="d-flex">
                                    <a href="{{ route('profile.edit') }} " class="btn btn-primary me-2">Edit</a>
                                    <!-- Tombol untuk buka modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                            Hapus Akun
                                        </button>
                                        <!-- Modal -->

                                        <!-- Modal Konfirmasi Hapus Akun -->
                                                <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Header -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteAccountModalLabel">Konfirmasi Hapus Akun</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <!-- Body -->
                                                    <div class="modal-body">
                                                        <p class="text-danger">Ingin menghapus akun? Masukan password anda.</p>

                                                        <form id="deleteAccountForm" method="POST" action="{{ route('profile.destroy') }}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <input id="password" type="password" name="password" class="form-control" required>
                                                            </div>
                                                        </form>
                                                </div>

                                                <!-- Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger" form="deleteAccountForm">Hapus Akun</button>
                                                </div>

                                                </div>
                                            </div>
                                            </div>


                                    </div>
                                  
                            </div>
                        </div>
                    </div>
                </main>

@endsection