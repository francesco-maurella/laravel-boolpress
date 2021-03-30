@php
if ($edit) {
    $method = 'PATCH';
    $url = route('posts.update', ['post' => $post->id]);
    $submit = 'Edit';
} else {
    $method = 'POST';
    $url = route('posts.store');
    $submit = 'Create';
}
@endphp

<form action="{{ $url }}" method="post">
    @csrf
    @method( $method )

    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
        type="text" name="title" value="{{ isset($post) ? $post->title : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('title') }}
        </div>
    </div>
    <div class="form-group">
        <label for="author_id">Author</label>
        <select class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}"
        type="text" name="author_id">
        <option value="{{ isset($post) ? $post->author->id : '' }}">
          @if (isset($post))
            {{ $post->author->username }}
            @else
              Select an Author
          @endif
          @foreach ($authors as $author)
            <option value="{{ $author->id }}">
              {{ $author->username }}
            </option>
          @endforeach
        </option>
      </select>
        <div class="invalid-feedback">
            {{ $errors->first('author') }}
        </div>
    </div>
    <div class="form-group">
      <label for="tags">Tags</label>
      <select multiple name="tags[]" class="form-control">
        @foreach ($tags as $tag)
          <option value="{{ $tag->id }}" >
            {{ $tag->content }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="name">Content</label>
        <textarea class="form-control" name="content" rows="3">
          {{ isset($post) ? $post->content : '' }}
        </textarea>
        <div class="invalid-feedback">
            {{ $errors->first('content') }}
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        {{ $submit }} Post
    </button>
</form>
