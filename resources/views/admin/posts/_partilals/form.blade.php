@if ($errors->any())

    <div>
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger" role="alert">{{$error}}</p>
        @endforeach
    </div>

@endif

@csrf
<div class="form-group">
    <label for="">Blog Title</label>
    <input type="text" name="title" id="title" class="form-control"  value="{{ $post->title ?? old('title') }}">
</div>
<div class="form-group">
    <label for="">Article Content</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $post->content ?? old('content')}}</textarea>
</div>

<div class="form-group">
    <label for="">Photo</label>
    <input type="file" name="image" id="image">
</div>

<input class="btn btn-primary" type="submit" value="Insert Article">
