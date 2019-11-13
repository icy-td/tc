@extends('_layouts.master')

@section('title', 'Charts')

@section('content')
    <h1>Charts</h1>

    <ul>
        @forelse ($posts->sortBy('date') as $post)
            <li>
                <a href="{{ $post->getPath() }}/">{{ $post->title }}</a>
                <small>{{ date('M j, Y', $post->date) }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
       @endforelse
@endsection
