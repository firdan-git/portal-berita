@extends('layouts.web')

@section('content') 

 <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="storage/{{ $viral->gambar }}" alt="">
                                <div class="trend-top-cap">
                                    <span>{{$viral->kategori->nama}}</span>
                                    <h2><a class="trend-title" href="{{route('web.show', $viral->slug)}}">{{Str::limit(strip_tags($viral->isi, 50))}}</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @foreach($berita as $b)
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="storage/{{ $b->gambar }}" alt="">
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
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="right-content">
                            @php
                            $kategoriList = \App\Models\Kategori::all();
                             @endphp
                            <ul class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Kategori
                        </a>
                        @foreach ($kategoriList as $kat)
                           <a href="{{ route('web.kategori', $kat->id) }}" class="list-group-item list-group-item-action" >{{ $kat->nama }}</a>
                        @endforeach
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
   <!-- Whats New Start --> 
                       
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Whats New</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                                                                                                 
                                <div class="nav-button">
                                     @php
                                    $kategoriList = \App\Models\Kategori::all();
                                @endphp
                                @foreach ($kategoriList as $kat)
                                    <a class="btn-sm btn-danger" href="{{ route('web.kategori', $kat->id) }}">{{ $kat->nama }}</a>
                                @endforeach
                                </div>
            
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Follow Us</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>8,045</span>
                                <p>Fans</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <!--  Recent Articles start -->
    <div class="recent-articles mt-2">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Recent Articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent1.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent2.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent3.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent2.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->
    
    </main>

@endsection