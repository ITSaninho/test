<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="content table-responsive table-full-width">
                <form action="{{ route('adminCategoryUpdate') }}" method="post">
                    {{ csrf_field() }}           

                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" value="{{ $category->title }}" class="form-control">
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