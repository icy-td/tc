@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>
    @if ($page->image)
        <img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">
    @endif

    <p>
        <strong>{{ date('F j, Y', $page->date) }}</strong><br>
    </p>
    
    @yield('postContent')

    <hr>
    
        @foreach ($page->tags as $tag)
            <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach | @include('_partials.share')

    @if ($page->comments)
        @include('_partials.comments')
    @else
        <p>Comments are not enabled for this post.</p>
    @endif
@endsection
