<form action="{{ $actionRoute }}" method="POST">
    @csrf
    @method($method)

    <label for="title">Post title</label>
    <input type="text" name="title" value="{{ $post->title }}">

    <label for="content">Post content</label>
    <textarea name="content" cols="30" rows="10">
        {{ $post->content }}
    </textarea>

    <label for="post_image_url">Post image</label>
    <input type="text" name="post_image_url" value="{{ $post->post_image_url }}">

    <button type="submit">{{ $submitMessage }}</button>

</form>