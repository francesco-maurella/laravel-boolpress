Post <i><b>{{ $post->title }}</b></i> has been created, today ,
{{ $post->created_at }}, by <i>{{ $post->author->username }}</i>.
<br><br>
<a href="{{route('posts.show', compact('post'))}}">View Post</a>
