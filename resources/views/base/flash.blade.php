@if (session()->has('flash_notification.message'))
    {{--<div class="container alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {!! session('flash_notification.message') !!}
    </div>--}}
    <script>
        //        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        $(document).ready(function(){
            bootbox.dialog({
                message: "{!! session('flash_notification.message') !!}",
                closeButton: false
            }).fadeOut(400);
        })

        window.setTimeout(function(){
            bootbox.hideAll();
        }, 1000);
    </script>
@endif