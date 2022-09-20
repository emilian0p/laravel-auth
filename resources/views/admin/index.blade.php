@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <td>ID</td>
                        <td>Username</td>
                        <td>Title</td>
                        <td>Date</td>
                        <td></td>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><a href="{{ route("admin.show", $post->id) }}">{{ $post->title }}</a></td>
                            <td>{{ $post->user }}</td>
                            <td>{{ $post->date }}</td>
                            <td>
                                <a href="{{ route("admin.edit", $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route("admin.destroy", $post->id) }}" class="btn btn-sm text-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <h2>There are no posts.</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection