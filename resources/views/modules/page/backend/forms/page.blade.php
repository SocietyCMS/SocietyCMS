<div class="form-group">
    <label>Title</label>
    <input type="text"
           class="form-control{{ $errors->has('title') ? ' has-error' : '' }}"
           id="title"
           name="title"
           @if(isset($page)) value="{{$page->title}}" @endif
           value="{{ old('title') }}"
           placeholder="Enter title">
    {!! $errors->first('title', '<span class="text-red">:message</span>') !!}
</div>

<h4>Content</h4>
<textarea name="body"
          class="textarea{{ $errors->has('body') ? ' has-error' : '' }}"
          placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
    @if(isset($page)){!!$page->body  !!}@endif {{ old('content') }}
</textarea>
{!! $errors->first('body', '<span class="text-red">:message</span>') !!}

<h4>Publishing</h4>
<div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default @if(isset($page) && $page->published || old('published')) active @endif">
        <input type="radio"
               name="published"
               id="radio_published"
               value="1"
               autocomplete="off"
               @if(isset($page) && $page->published) checked @endif >
        Published
    </label>
    <label class="btn btn-default @if(isset($page) && !$page->published || !isset($page) && !old('published')) active @endif">
        <input type="radio"
               name="published"
               id="radio_draft"
               value="0"
               autocomplete="off"
               @if(isset($page) && !$page->published || !isset($page)) checked @endif>
        Draft
    </label>
</div>