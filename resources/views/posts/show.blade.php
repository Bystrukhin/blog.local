@extends('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">

        <h2>{{ $post->title }}</h2>

        @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <div>{{ $post->body }}</div>

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">

                        <strong>
                            {{  $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>

                        {{ $comment->body }}

                    </li>

                @endforeach
            </ul>
        </div>

        <hr>

        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/{{ $post->id }}/comments">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" cols="60" rows="3" placeholder="Your comment" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>

                </form>
                @include('partials.errors')
            </div>
        </div>

    </div>

@endsection