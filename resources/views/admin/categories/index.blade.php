@extends("layouts.master")

@section("css")

@endsection

@section("content_header")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section("content")

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <div class="row">
                                <div class="col-5">
                                    <input type="text" class="form-control" placeholder="Tên loại">
                                </div>
                                <div class="col-4">
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Trạng thái</option>
                                        <option>Đã duyệt</option>
                                        <option>Chưa duyệt</option>
                                        <option>Chờ duyệt lại</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-block btn-outline-info"> search</button>
                                </div>
                            </div>
                        </h3>
                        <div class="card-tools">
                            <a href="{{ route("categories.create") }}" class="btn btn-info"> Thêm mới </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Tên loại</th>
                                <th>Icon</th>
                                <th style="width: 40px">Trạng thái</th>
                                <th style="width: 100px"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @include("admin.categories.tables")
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix" id="pagination">
                        {!! isset($links) ? $links : ''!!}
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </section>

@endsection

@section("script")

    <script>

    </script>
@endsection
