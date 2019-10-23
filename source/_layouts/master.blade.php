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
                <li><a href="https://twitter.com/TESLAcharts" target="_blank"><img src="https://abs.twimg.com/favicons/twitter.ico" border="0"></a></li>
                <li><a href="https://twitter.com/search?q=%24tslaq" target="_blank">$TSLAQ</a></li>
            </ul>
        </nav>
    </header>

    <article>
        <section>
            @yield('content')
        </section>
    </article>
	<footer>
	 <!-- Start TSLAQ webring -->
      	  <script type="application/ld+json">
      	   {"@context":"https://schema.org","@type":"Organization","@id":"https://twitter.com/search?q=%24tslaq#organization","name":"TSLAQ","logo":"https://www.tesladeaths.com/tslaq.png","description":"Online anti-Tesla activist group.","url":"https://twitter.com/search?q=%24tslaq"}
		</script>
		<br><span style="display: block;text-align:center;background:white;"><span style="font-size:12px;">
		<a href="https://elonmusk.today" style="color: teal;"><span style="display:block;">&lt;&lt; Elon Musk Today</span></a><a href="https://twitter.com/search?q=%24tslaq&amp;src=recent_search_click&amp;f=live" target="_blank" style="color: black;"><span style="font-size:11px;"><img src="/tslaq.png" border="0" alt="TSLAQ logo - anti-tesla activism"><br>$TSLAQ</span><br></a><a href="https://www.tesladeaths.com" style="color: teal;">TeslaDeaths.com &gt;&gt;</a></span></span>
	 <!-- End TSLAQ webring -->
	  <p><small>Copyright (c) 2019 <a href="/">TeslaCharts.net</a></small></p>
	</footer>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
