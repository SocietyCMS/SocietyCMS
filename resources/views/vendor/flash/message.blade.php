@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="ui {{ Session::get('flash_notification.level') }} message">
            <i class="close icon"></i>
            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
@endif

@if (Session::has('success'))
    <div class="ui positive message">
        <i class="close icon"></i>
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="ui negative message">
        <i class="close icon"></i>
        {{ Session::get('error') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="ui warning message">
        <i class="close icon"></i>
        {{ Session::get('warning') }}
    </div>
@endif

@section('javascript')
    <script>
        $('.message .close')
                .on('click', function() {
                    $(this)
                            .closest('.message')
                            .transition('fade')
                    ;
                });
    </script>
@endsection