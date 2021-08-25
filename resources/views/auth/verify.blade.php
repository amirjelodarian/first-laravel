@auth
    @if(empty($phone_verified_at))
        @extends('layout')
            @section('main')
                <div class="container verify">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1>حساب خود را تایید کنید</h1>
                                    <h6>{{ $code->code }}</h6>
                                </div>
                                <div class="card-body">
                                    <div id ="msg" class="alert alert-danger"></div>

                                        <input name="code" id="code"  placeholder="کد را وارد کنید" type="text">
                                        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                        <button type="button" onclick="checkCode()" name="submit" id="submit" class="btn btn-primary">تایید</button>

                                        <br />

                                        <a type="button" onclick="getNewCode()" name="submit" id="getNewCode" class="text-info">ارسال کد جدید</a>
                                        <p id="getNewCodeCondition">در هر دقیقه 2 کد می توانید دریافت کنید</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function (){
                        $('#msg,#getNewCodeCondition').hide();
                        var count = 0 ;
                        $('#getNewCode').click(function(){
                            count += 1;
                            if (count == 3){
                                $('#getNewCodeCondition').show();
                                count = 0;
                            }
                        });
                    });
                    function checkCode() {
                        var _token = $('#token').val();
                        var code = $('#code').val();
                        $.ajax({
                            type:'POST',
                            url:'/verify',
                            data:{_token : _token  ,  code : code},
                            success:function(data) {
                                if (data.msg == 'true')
                                    window.location = "{{ route('home') }}";
                                $('#msg').show();
                                $("#msg").html(data.msg);
                            }

                        });
                    }
                    function getNewCode() {
                        var _token = $('#token').val();
                        $.ajax({
                            type:'POST',
                            url:'/getNewCode',
                            data:{_token : _token},
                            success:function(data) {
                                $('#msg').show();
                                $("#msg").html(data.msg);
                            }

                        });
                    }
                </script>
            @endsection
            @else
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h1>حساب شما تایید شده است .</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
@endauth
