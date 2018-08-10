<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Article</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('adminArticleStore') }}" method="POST">
                    {{ csrf_field() }}           

                    <div class="form-group" id="modelTransactionCategory">
                        <label>Category:</label>
                        <select name="category_id"class="form-control">
                            <option value="0">select category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea id="editor1" name="text"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

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

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Create</button>

            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{mb_strimwidth($article->title, 0, 60, "...")}}</td>
                            <td>{{$article->category->title}}</td>
                            <td>{{$article->user->email}}</td>
                            <td>{{$article->created_at}}</td>
                            <td>
                                <a href="{{ route('adminArticleShow', [ 'id' =>  $article->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{ route('adminArticleEdit', [ 'id' =>  $article->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{ route('adminArticleDestroy', [ 'id' =>  $article->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                {{ $articles->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->