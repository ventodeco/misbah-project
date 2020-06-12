@extends('frontend.templates.default')

@section('title', 'Collections Misbah Project')

@section('content')
  

  
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

        <div class="container mt-4">
          <div class="row">
            <div class="col-5"></div>
            <div class="col-6">
            {{ $articles->links() }}
              
            </div>
 
          </div>           
        </div>
    

  
@endsection
