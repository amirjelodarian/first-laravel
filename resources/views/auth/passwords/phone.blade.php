@extends('layout')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <label for="phone" class="font-iransans-b">{{ __('شماره تلفن') }}</label>
                        <div class="form-group row">
                            <input id="reset-password-phone" name="phone" placeholder="09121234567" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autofocus>
                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                            <button id="reset-password-phone-btn" onclick="resetPassword()" type="button" class="btn btn-primary">
                                {{ __('تایید') }}
                            </button>
                            <br />
                            <p id="getNewCodeCondition">در هر دقیقه 2 کد می توانید دریافت کنید</p>
                        </div>
                        <div id="msg" class="alert alert-info font-iransans-m" style="display: none!important;"></div>
                        <hr />
                        <div id="code-msg" class="alert alert-info font-iransans-m" style="display: none!important;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#msg,#code-msg,#getNewCodeCondition').hide();
        var count = 0 ;
        $('#reset-password-phone-btn').click(function(){
            count += 1;
            if (count == 3){
                $('#getNewCodeCondition').show();
                count = 0;
            }
        });
    });
    function resetPassword() {
        var _token = $('#token').val();
        var phone = $('#reset-password-phone').val();
        $.ajax({
            type:'POST',
            url:'/forgetPassword',
            data:{_token : _token , phone : phone},
            success:function(data) {
                $('#msg').show();
                $("#msg").html(data);
            },
            error :function( data ) {
                if (data.status === 422) {
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        // console.log(key+ " " +value);

                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                $('#msg').show();
                                $("#msg").html(value+"<br />");
                            });
                        } else {
                            $('#msg').show();
                            $("#msg").html(value+"<br />");
                        }
                    });
                }
            }
        });
    }
    function resetPasswordCode() {
        var _token = $('#token').val();
        var code = $('#reset-password-confirm-code').val();
        var phone = $('#reset-password-phone').val();
        if (code.length == 5){
            $.ajax({
                type: 'POST',
                url: '/forgetPasswordConfirmCode',
                data: {_token: _token, code: code, phone: phone},
                success: function (data) {
                    $('#code-msg').show();
                    $("#code-msg").html(data.reponse);
                }
            });
        }
    }
</script>
@endsection
