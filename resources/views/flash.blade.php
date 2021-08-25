@if(session()->has('flash_message'))
    <div class="flash-alert {{ session('flash_message_level') }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        </button>
        {{ session()->get('flash_message') }}
        {{--        {{ session('flash_message') }}--}}
    </div>
@endif
