<!DOCTYPE html>
<html amp lang="en">
 <head>
 <meta charset="utf-8">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJHJKTG');</script>
<!-- End Google Tag Manager -->
 <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"WebSite","name":"TESLACharts.net","logo":"https://teslacharts.net/tc.png","description":"Repository for all @TESLACharts charts about Tesla stock price, Tesla bonds, Tesla earnings, Tesla registrations, Model S and Model X sales, Tesla deliveries, etc.","url":"https://www.teslacharts.net"}
</script>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  </head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJHJKTG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <nav>
            <img src="/tc.png"><br>
            <strong>{{ $page->site->title }}</strong><br>
            <ul>
                <li><a href="/">About TESLACharts</a></li>
                <li><a href="/charts">The Charts</a></li>
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
