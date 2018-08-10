<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Articles</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
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
                  <h1 class="mt-4">{{$article->title}}</h1>

                  <!-- Author -->
                  <p class="lead">Author: {{$article->user->name}}</p>
                  <hr>

                  <!-- Date/Time -->
                  <p>Posted on {{$article->created_at}}</p>
                  <hr>

                  <!-- Post Content -->
                  <p class="lead">{!! $article->text !!}</p>
                  <hr>
            </div>
        </div>
        <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->