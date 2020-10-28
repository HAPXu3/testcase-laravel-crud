<!-- Author Id Field -->
<div class="form-group">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $post->author_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $post->content }}</p>
</div>

