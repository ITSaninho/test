<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-12">

      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>

      <form action="{{ route('articlesQuantitySend') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="quantity">number of articles per page:</label>
          <input type="text" name="quantity" class="form-control" id="quantity">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </form>

      <!-- Blog Post -->
      @foreach($articles as $article)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">{{$article->title}}</h2>
          <p class="card-text">{{mb_strimwidth($article->text, 0, 500, "...")}}</p>
          <a href="{{ route('articleShow', ['id' => $article->id]) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          <span>data: {{$article->created_at}}</span>
          <span>author: {{$article->user->name}}</span>
        </div>
      </div>
      @endforeach

      <!-- Pagination -->
      {{ $articles->links('vendor.pagination.bootstrap-4') }}

    </div>

  </div>
  <!-- /.row -->

</div>