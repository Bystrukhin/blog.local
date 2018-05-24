@extends('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">
        <h2>Create Post</h2>
        <form method="post" action="{{route('posts.store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" placeholder="Enter body" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('partials.errors')
        </form>
    </div>

@endsection