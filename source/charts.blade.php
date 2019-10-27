@extends('_layouts.master')

@section('title', 'Charts')

@section('content')
    <h1>Charts</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ date('M j, Y', $post->date) }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
    <br>
    <h1>Tags</h1>

    <ul>
        @forelse ($tag->sortBy('title') as $tag)
            <li>
                <a href="{{ $tag->getPath() }}">{{ $tag }}</a>
           </li>
        @empty
            <p>No tags to show.</p>
        @endforelse
    </ul>
@endsection
