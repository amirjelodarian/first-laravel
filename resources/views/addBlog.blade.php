@extends('layout')
@section('main')
    <div class="new-blog">
        <h1>افزودن پست جدید</h1>
        <br />
        <form class="dropzone" id="addPhotosForm" method="POST" action="{{ route('add-post') }}">
            @csrf
            <div class="col-lg-4 col-md-4"></div>
            <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <label for="title">عنوان</label>
                <input type="text" placeholder="عنوان" class="form-control" name="title" id="blog-title" value="{{ old('title') }}" />
            </div>
            <div class="col-lg-4 col-md-4"></div>

            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-4"></div>
            <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <label for="body">متن</label>
                <textarea type="text" placeholder="متن" class="form-control" name="body" id="blog-body">{{ old('body') }}</textarea>
            </div>
            <div class="col-lg-4 col-md-4"></div>

            <div class="clearfix"></div>

            <div class="form-group col-md-12">
                <button type="button" id="submit-blog" class="btn btn-primary">ثبت</button>
            </div>

            <div class="clearfix"></div>
            <div id="msg" class="alert alert-info font-iransans-m" style="display: none!important;"></div>

            <div class="clearfix"></div>
        </form>
    </div>
    <script>
        $("#addPhotosForm").dropzone({
            parallelUploads : 10,
            uploadMultiple: true,
            autoProcessQueue: false,
            dictDefaultMessage: "انتخاب عکس",
            paramName: "blogPhoto",
            maxFilesize: 10, // MB
            maxFiles: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.bmp",
            addRemoveLinks: true,
            init: function() {
                var submitButton = document.querySelector("#submit-blog")
                myDropzone = this;
                submitButton.addEventListener("click", function() {
                    $('.dz-default ,.dz-message').show();
                    myDropzone.processQueue();
                });
                this.on("error", function(file,response) {
                    $('#msg').show();
                    $.each(response.errors,function (key,value){
                        $("#msg").append(value+"<br />");
                    });
                    if (response.indexOf('You can not upload') !== -1) {
                        var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
                        errorDisplay[errorDisplay.length - 1].innerHTML = 'تعداد عکس ها نباید بیشتر از 10 تا باشد';
                    }


                });
            },
            success: function (data){
                $('#msg').show();
                $('#msg').html(data);
            }
        });
    </script>
@stop
