<div class="form-group">
    <input name="title" type="text" class="form-control" required value="{{ old('title') ?? $post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea name="descr" rows="10" class="form-control" required>{{old('title') ?? $post->descr ?? ''}}</textarea>
</div>
<div class="form-group">
    <input name="img" type="file">
</div>