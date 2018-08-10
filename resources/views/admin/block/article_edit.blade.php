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
            <div class="content table-responsive table-full-width">
                <form action="{{ route('adminArticleUpdate') }}" method="POST">
                    {{ csrf_field() }}           

                    <input type="hidden" name="id" value="{{$article->id}}">
                    <div class="form-group" id="modelTransactionCategory">
                        <label>Category:</label>
                        <select name="category_id"class="form-control">
                            <option value="{{$article->category_id}}">{{$article->category->title}}</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" value="{{ $article->title }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea id="editor1" name="text">{!! $article->text !!}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-8 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->