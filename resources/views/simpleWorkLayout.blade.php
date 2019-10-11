<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simple Work</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/simplework">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li
                        class={{ Request::path() === "simplework" || Request::path() === "simplework/home" ? "current_page_item" : ''}}>
                        <a href="/simplework/home" accesskey="1" title="">Homepage</a>
                    </li>
                    <li class={{ Request::path() === "simplework/clients" ? "current_page_item" : ''}}><a
                            href="/simplework/client" accesskey="2" title="">Our Clients</a></li>
                    <li class={{ Request::is("simplework/about") ? "current_page_item" : ''}}><a
                            href="/simplework/about" accesskey="3" title="">About Us</a></li>
                    <li class={{ Request::path() === "simplework/careers" ? "current_page_item" : ''}}><a
                            href="/simplework/articles" accesskey="4" title="">Articles</a></li>
                    <li class={{ Request::path() === "simplework/contact" ? "current_page_item" : ''}}><a
                            href="/simplework/contact" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>
        @yield('headerFeatured')
    </div>
    @yield('content')
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a
                href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>
