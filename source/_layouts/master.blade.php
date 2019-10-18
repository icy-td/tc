<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <header>
        <nav>
            <img src="/tc.png"><br>
            <strong>{{ $page->site->title }}</strong><br>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/charts">Charts</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="https://twitter.com/TESLAcharts"><img src="https://abs.twimg.com/favicons/twitter.ico" border="0"></a></li>
                <li><a href="https://twitter.com/search?q=%24tslaq">$TSLAQ</a></li>
            </ul>
        </nav>
    </header>

    <article>
        <section>
            @yield('content')
        </section>
    </article>

    <footer>
        <small>
            Copyright 2019 (c) <a href="/">TESLACharts.net</a>
        </small>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
