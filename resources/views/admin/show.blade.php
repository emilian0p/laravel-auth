extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 post-card d-flex flex-column p-2">
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->date }}</h5>
                <img src="{{ $post->post_image_url }}" class="w-75 align-self-center" alt="Post Image">
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection