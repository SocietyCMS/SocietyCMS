<i class="fa fa-newspaper-o bg-green"></i>
<div class="timeline-item">
    <span class="time"><i class="fa fa-clock-o"></i> {{$activity->created_at->toTimeString()}}</span>
    <h3 class="timeline-header"><a href="#">{{$activity->user->present()->fullname}}</a> created an article, <a href="#">{{$activity->subject->title}}</a> </h3>
    <div class="timeline-footer">
        <a class="btn btn-primary btn-xs">Read more</a>
    </div>
</div>