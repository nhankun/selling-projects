<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thông tin cơ bản</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Project Name</label>
                    <input type="text" id="inputName" class="form-control" value="AdminLTE">
                </div>
                <div class="form-group">
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header text-white" style="background: url('{{asset("dist/img/photo1.png")}}') center center;">
                            <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                            <h5 class="widget-user-desc text-right">Web Designer</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{asset("dist/img/user3-128x128.jpg")}}" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">3,200</h5>
                                        <span class="description-text">SALES</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">13,000</h5>
                                        <span class="description-text">FOLLOWERS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">35</h5>
                                        <span class="description-text">PRODUCTS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Thuộc tính</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="col-12 properties">
                    @if(isset($category) && !is_null($category->properties))
                        @foreach(json_decode($category->properties) as $key => $value)
                            <div class="row general" id="{!! $key !!}">
                                <div class="col-1 text-center">
                                    <p><i class="fa fa-plus"></i></p>
                                </div>
                                <div class="col-5">
                                    <input name="properties[{!! $key !!}][name]" type="text" value="{!! $value->name !!}" class="form-control" id="name_{!! $key !!}}">
                                </div>
                                <div class="col-5">
                                    <input name="properties[{!! $key !!}][value]" type="text" value="{!! $value->value !!}" class="form-control" id="value_{!! $key !!}">
                                </div>
                                <div class="col-1">
                                    <p class="btn btn-danger" onclick="deleteProperty(this,null)"><i class="fa fa-trash-alt"></i></p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row general" id="1">
                            <div class="col-1 text-center">
                                <p><i class="fa fa-plus"></i></p>
                            </div>
                            <div class="col-5">
                                <input name="properties[1][name]" type="text" class="form-control" id="name_1">
                            </div>
                            <div class="col-5">
                                <input name="properties[1][value]" type="text" class="form-control" id="value_1">
                            </div>
                            <div class="col-1">
                                <p class="btn btn-danger" onclick="deleteProperty(this,null)"><i class="fa fa-trash-alt"></i></p>
                            </div>
                        </div>
                    @endif
                    {{--                <input type="hidden" name="tmp_id" value="">--}}
                </div>

                <div class="form-group">
                    <label for="inputEstimatedBudget">Estimated budget</label>
                    <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
                </div>
                <div class="form-group">
                    <label for="inputSpentBudget">Total amount spent</label>
                    <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
                </div>
                <div class="form-group">
                    <label for="inputEstimatedDuration">Estimated project duration</label>
                    <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <a href="#" class="btn btn-secondary" style="width: 100%;">Cancel</a>
    </div>

    <div class="col-6">
        <input type="submit" value="Save Changes" class="btn btn-success float-right" style="width: 100%;">
    </div>
</div>

@section("script")
    <!-- jquery-validation -->
    <script src="{{asset("plugins/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("plugins/jquery-validation/additional-methods.min.js")}}"></script>

    <script>
        $(function () {
            $.validator.setDefaults({
                submitHandler: function () {
                    alert( "Form successful submitted!" );
                }
            });
            $('#form-create').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
