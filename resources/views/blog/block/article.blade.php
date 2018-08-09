<div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

          <!-- Title -->
          <h1 class="mt-4">{{$article->title}}</h1>

          <!-- Author -->
          <p class="lead">Author: {{$article->user->name}}</p>
          <hr>

          <!-- Date/Time -->
          <p>Posted on {{$article->created_at}}</p>
          <hr>

          <!-- Post Content -->
          <p class="lead">{{$article->text}}</p>
          <hr>

          <p class="font-weight-bold">Other articles like this category:</p>
          @foreach($article->category->articles as $index => $article)
            @if($index < 5)
            <p><a href="{{ route('articleShow', ['id' => $article->id]) }}">{{$article->title}}</a></p>
            <hr>
            @endif
          @endforeach

          <p class="font-weight-bold">Other articles like this articles tags:</p>
          @foreach($article->tags as $tag)
            @foreach($tag->articles as $index => $article)
              @if ($loop->first)
                <p><a href="{{ route('articleShow', ['id' => $article->id]) }}">{{$article->title}}</a></p>
                <hr>
              @endif
            @endforeach
          @endforeach

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          @foreach($article->comments as $comment)
          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">{{$comment->user->email}}</h5>
              <p>{{$comment->message}}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
      <!-- /.row -->

    </div>