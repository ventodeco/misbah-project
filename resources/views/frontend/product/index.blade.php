@extends('frontend.templates.default')

@section('title', 'Misbah Project')

@section('content')
  
   

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-5 text-center">
            <div class="featured-hero-product w-100">
              <h1 class="mb-2">MISBAH PROJECT</h1>
              <h4>Koleksi Terbaru</h4>
              <p><a href="{{ route('article.collection') }}" class="btn btn-outline-primary rounded-0">Catalogs</a> <a href="{{ route('article.collection') }}" class="btn btn-primary rounded-0">Catalogs</a></p>
            </div>  
          </div>
          <div class="col-lg-7 align-self-end text-center text-lg-right">
            <img src="{{ asset('assets/as/images/new/person_transparent.png') }}" alt="Image" class="img-fluid img-1">
          </div>
          
        </div>
      </div>
      
    </div>

  
    <div class="products-wrap border-top-0">
      <div class="container-fluid">
        <div class="row no-gutters products">

        	@foreach($articles as $article)
	        	<div class="col-6 col-md-6 col-lg-4">
		            <a href="{{ route('article.show', $article) }}" class="item">
		              <img src="{{ $article->cover }}" alt="Image" class="img-fluid">
		              <div class="item-info">
		                <h3>{{ Str::limit($article->title, 15) }}</h3>
		                <span class="collection d-block">Summer Collection</span>
		                <strong class="price">Rp{{ $article->price }}</strong>
		              </div>
		            </a>
		        </div>
        	@endforeach
          

        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Koleksi Fashion Terbaru 2020</h2>
            <h1>Jaket</h1>
            <p><a href="{{ route('article.collection') }}" class="btn btn-black rounded-0">Catalogs</a></p>
            </div>
          </div>
          <div class="col-lg-8 order-1 align-self-end">
            <img src="{{ asset('assets/as/images/model_5.png') }}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div id="collect"  class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Collections</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              

            	@foreach($articles as $article)
            		<div class="product">
		                <a href="{{ route('article.show', $article) }}" class="item">
		                  <img src="{{ $article->cover }}" alt="Image" class="img-fluid">
		                  <div class="item-info">
		                    <h3>{{ Str::limit($article->title, 15) }}</h3>
		                    <span class="collection d-block">Summer Collection</span>
		                    <strong class="price">{{ $article->price }}</strong>
		                  </div>
		                </a>
		              </div>
            	@endforeach

              

            </div>
          </div>
        </div>
      </div>
    </div>


    


  
@endsection
