@extends('layouts.web')
@section('content')

 <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @foreach($berita as $b)

                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ Storage::url($b->gambar) }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">{{ $b->kategori->nama }}</span>
                                        <h4><a href="{{route ('web.show', $b->slug)}}">{{Str::limit(strip_tags($b->isi, 20))}}</a></h4>
                                    </div>
                                </div>
                                </div>

                                @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Trending Bottom End -->

 <!--Start pagination -->
     <div class="text-center mt-4 mb-5">
        {{$berita->links('pagination::bootstrap-5')}}
    </div>
 <!-- End pagination  -->     

                           

@endsection