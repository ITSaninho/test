<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="content table-responsive table-full-width">
                <!-- Title -->
                  <h1 class="mt-4">Title {{$article->title}}</h1>
                  <hr>
                  <!-- Author -->
                  <p class="lead">Author: {{$article->user->name}}</p>
                  <hr>

                  <p class="lead">Category: {{$article->category->title}}</p>
                  <hr>
                  <!-- Date/Time -->
                  <p class="lead">Date: {{$article->created_at}}</p>
                  <hr>
                  <!-- Post Content -->
                  <p class="lead">Text:</p>
                  <div class="text">
                    {!! $article->text !!}
                  </div>
                  <hr>
            </div>
        </div>
        <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->