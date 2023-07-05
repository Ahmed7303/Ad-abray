@extends('layouts.app')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{env('APP_URL')}}/images/page-titles/1.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('strings.news_media') }}</li>
            </ol>
          </nav>
          <h1 class="pagetitle__heading">{{ __('strings.news_media') }}</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
    Blog classic
  ========================= -->
  <section id="blogClassic" class="blog blog-single  blog-classic  pb-90">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
          <aside class="sidebar mb-30">
            <div class="widget widget-categories">
              <h5 class="widget__title">{{ __('strings.news_media') }}</h5>
              <div class="widget-content">
                <ul class="list-unstyled">
                  @if(count($categories) > 0)
                    @foreach($categories as $category)
                      <li><a href="{{ route('news_by_category', ['id' => $category->id]) }}">{{$category->name}}</a></li>
                    @endforeach
                  @endif
                </ul>
              </div><!-- /.widget-content -->
            </div><!-- /.widget-categories -->
             {{--<div class="widget widget-posts">
              <div class="widget__content">
                <!-- post item #1 -->
                <div class="widget-post-item">
                  <div class="widget__post-img"><img src="{{env('APP_URL')}}/images/blog/thumbs/1.jpg" alt="product">
                  </div><!-- /.widget-post-img -->
                  <div class="widget__post-content">
                    <div class="d-flex flex-wrap align-items-center">
                      <div class="widget__post-cat"><a href="#">Management</a>
                      </div><!-- /.widget-post-cat -->
                      <span class="widget__post-date">Jan 20, 2019</span>
                    </div>
                    <h6 class="widget__post-title"><a href="#">Importers achieve cost savings through the First Sale
                        rule!</a></h6>
                  </div><!-- /.widget-post-content -->
                </div><!-- /.widget-post-item -->
                
              </div><!-- /.widget-content -->
            </div><!-- /.widget-posts --> --}}
          </aside><!-- /.sidebar -->
        </div><!-- /.col-lg-4 -->

        <div class="col-sm-12 col-md-12 col-lg-8">
          
          @if(count($news) > 0)
            @foreach($news as $item)
            <div class="blog-item text-center">
                <div class="blog__img">
                    <img src="{{env('APP_URL')}}/{{$item->image}}" alt="blog image">
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta-cat">
                    <a href="#">{{$item->category->name}}</a>
                  </div><!-- /.blog-meta-cat -->
                  <h4 class="blog__title">{{$item->title}}</h4>
                  <div class="blog__meta justify-content-center">
                    <span class="blog__meta-date">{{Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</span>
                  </div><!-- /.blog-meta -->
                  <div class="divider__line divider__theme divider__center"></div>
                  <p class="blog__desc mb-0">{{$item->description}}</p>
                  </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            @endforeach
          @endif
          {{$news->links("pagination")}}
         
          {{-- <nav class="pagination-area">
            <ul class="pagination">
              <li><a class="current" href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav><!-- .pagination-area -->
        </div><!-- /.col-lg-8 --> --}}
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.blog classic -->

@endsection