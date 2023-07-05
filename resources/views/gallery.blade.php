@extends('layouts.app')

@section('content')
   
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="/images/page-titles/12.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('strings.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('why_us') }}">{{ __('strings.company') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.our_gallery') }}</li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading">{{ __('strings.our_gallery') }}</h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- =========================== 
  projects Gallery 
============================= -->
<section id="projectsGallery" class="projects projects-gallery">
  <div class="container">
    <div class="row">

        @if (count($galleries) >0)
              @foreach ($galleries as $item)
                  @if(file_exists($item->image)) 
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <div class="project-item">
                        <div class="project__img">
                          <img src="{{$item->image}}" alt="project img">
                          <a href="{{$item->image}}" data-lightbox="lightbox" class="zoom__icon"></a>
                        </div><!-- /.project-img -->
                      </div><!-- /.project-item -->
                    </div><!-- /.col-lg-4 -->
                  
                  @endif
              
              @endforeach
              
          {{-- {{$galleries->links("pagination")}} --}}
          {{-- {{$posts->links("pagination::bootstrap-4")}} --}}
          @else
          <h1>No results found</h1> 
      @endif
    </div>
      
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        {{$galleries->links("pagination")}}
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.projects Gallery -->

@endsection