@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-body">
                                  <h1>Settings</h1>

                           

                            <form action="{{route('profile.update')}}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama :</label>
                                    <input type="text" value="{{$user->name}}" name="name"  class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address :</label>
                                <input type="text" value="{{$user->email}}" name="email"  class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" value="........" name="password"  class="form-control">

                                </div>
                                <div class="">
                                  <button onclick="return confirm('Anda Yakin?')" class="btn btn-primary" type="submit">Ubah</button>
                                    </div>
                            </form>  
                            </div>
                        </div>
                    </div>
                </main>

@endsection