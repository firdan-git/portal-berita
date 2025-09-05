@extends('layouts.penulis')

@section('content')

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 mb-4">Tambah Berita</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('penulis.berita.store') }}">

                                    @csrf
                                    <div class="mb-3">
                                        <label>Judul</label>
                                        <input type="text" name="judul" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kategori</label>
                                        <select name="kategori_id" class="form-control">
                                            @foreach ($kategori as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Isi</label>
                                        <div id=""></div>
                                        <textarea name="isi" class="form-control" rows="5" id="summernote"></textarea>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label>Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                    <button class="btn btn-success">Simpan</button>
                                </form>
                                </div>
                            </div>
                    </div>
                </main>

        <script>
            $('#summernote').summernote({
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]  
            ]
            });
        </script>

@endsection