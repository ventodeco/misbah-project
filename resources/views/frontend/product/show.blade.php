@extends('frontend.templates.default')

@section('title')
{{ $article->title }}
@endsection

@section('content')

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="border">
              <img src="{{ $article->cover }}" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            <p><strong class="text-primary h4">Rp {{ $article->price }}</strong></p>
            <p><a href="{{ route('contact') }}" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Ingin Beli?</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 id="collect" class="text-uppercase">More Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              
              @foreach($articles as $art)
                <div class="product">
                    <a href="{{ route('article.show' , $art) }}" class="item">
                      <img src="{{ $art->cover }}" alt="Image" class="img-fluid">
                      <div class="item-info">
                        <h3>{{ $art->title }}</h3>
                        <span class="collection d-block">Summer Collection</span>
                        <strong class="price">Rp {{ $art->price }}</strong>
                      </div>
                    </a>
                  </div>
              @endforeach



        </div>
      </div>
    </div>


@endsection