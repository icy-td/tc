<!-- search/social -->
<meta name="referrer" content="always">
<meta name="description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<link rel="canonical" href="{{ $page->getUrl() }}">

<meta property="og:title" content="{{ $page->title ?: $page->site->title }}">
<meta property="og:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta property="og:image" content="https://teslacharts.net/tc.png">
<meta property="og:type" content="{{ $page->isPost ? 'article' : 'website' }}">
<meta property="og:url" content="{{ $page->getUrl() }}">

<meta name="twitter:title" content="{{ $page->title ?: $page->site->title }}">
<meta name="twitter:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta name="twitter:image" content="https://teslacharts.net/tc.png">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="{{ "@{$page->owner->twitter}" }}">
<meta name="twitter:creator" content="{{ "@{$page->owner->twitter}" }}">
<!-- end search/social -->
