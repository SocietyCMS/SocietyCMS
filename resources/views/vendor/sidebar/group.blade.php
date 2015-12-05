<div class="item">
    @if($group->shouldShowHeading())
        <div class=" header">{{ $group->getName() }}</div>
    @endif

    <div class="menu">
        @foreach($items as $item)
            {!! $item !!}
        @endforeach
    </div>
</div>