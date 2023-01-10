<link rel="canonical" href="https://isnaadgroup.com/"/>
<meta name="author" content="{{ config("settings.site_". app()->getLocale() . "_title") }}"/>
<meta name="keywords" content="{{ $keywords ?? config("settings.site_". app()->getLocale() . "_keywords") }}"/>
<meta name="description" content="{{$description}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#0000ff">
<meta name="mobile-web-app-capable" content="yes">

<meta property="og:url" content="{{ $pageUrl }}"/>
<meta property="og:title" content="{{ config("settings.site_". app()->getLocale() . "_title") .'-'. $title ?? '' }}"/>
<meta property="og:description" content="{{ $description }}"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="{{ asset($image) }}"/>
<meta property="og:locale" content="{{app()->getLocale()}}" />

<meta name="twitter:card" content="summary"/>
{{--<meta name="twitter:title" content="{{ config("settings.site_". app()->getLocale() . "_title") .'-'. $title ?? '' }}">--}}
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:creator" content="@isnaad"/>
<meta name="twitter:image" content="{{asset( $image )}}">
<meta property='twitter:url' content='{{ $pageUrl }}'/>
<meta name="twitter:site" content="{{ $pageUrl }}"/>
<meta property="twitter:image:src" content="{{asset( $image )}}">
<meta property="twitter:domain" content="{{ $pageUrl }}">

<meta name="facebook:card" content="summary"/>
<meta name="facebook:title" content="{{ config("settings.site_". app()->getLocale() .'-'. "_title") . $title ?? '' }}">
<meta name="facebook:description" content="{{ $description }}">
<meta name="facebook:creator" content="@isnaad"/>
<meta name="facebook:image" content="{{asset( $image )}}">
<meta property='facebook:url' content='{{ $pageUrl }}'/>
<meta name="facebook:site" content="{{ $pageUrl }}"/>
<meta property="facebook:image:src" content="{{asset( $image )}}">
<meta property="facebook:domain" content="{{ $pageUrl }}">


{{--<meta name="google:card" content="summary"/>--}}
{{--<meta name="google:title" content="{{ config("settings.site_". app()->getLocale().'-' . "_title") . $title ?? '' }}">--}}
{{--<meta name="google:description" content="{{ $description }}">--}}
{{--<meta name="google:creator" content="@isnaad"/>--}}
{{--<meta name="google:image" content="{{asset( $image )}}">--}}
{{--<meta property='google:url' content='{{ $pageUrl }}'/>--}}
{{--<meta name="google:site" content="{{ $pageUrl }}"/>--}}
{{--<meta property="google:image:src" content="{{asset( $image )}}">--}}
{{--<meta property="google:domain" content="{{ $pageUrl }}">--}}
