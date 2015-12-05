<div class="ui modal {{ $modalClass }}">
    <i class="close icon"></i>
    <div class="header">
        {{ $title }}
    </div>
    <div class="content">
        {{ $body }}
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Close
        </div>
    </div>
</div>

@section('javascript')
    <script>
        $('.ui.modal.flash-modal')
                .modal('show')
        ;
    </script>
@endsection