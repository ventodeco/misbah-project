 <div class="col s12 m6">
          <div class="card horizontal hoverable">
            <div class="card-image">
              <img src="{{ $article->getCover() }}" height="200px">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                  
                <h6><a href="{{ route('article.show', $article) }}">{{ Str::limit($article->title, 20) }}</a></h6>
                <p>{{ Str::limit($article->content ,100) }}</p>
              </div>
              <div class="card-action">
                <a href="{{ route('article.show', $article) }}">Read More</a>
            </div>
          </div>
        </div>
</div>	