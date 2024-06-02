<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Blog') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #357a38;
            color: #fff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-weight: 500;
        }
        header a:hover {
            text-decoration: underline;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background-color: #8bca84;
        }
        .footer {
            background-color: #357a38;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .button-group {
            margin-top: 2rem;
        }
        .button-group a {
            text-decoration: none;
            color: #fff;
            background-color: #173518;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin: 0 0.5rem;
            transition: background-color 0.3s;
        }
        .button-group a:hover {
            background-color: #4caf50;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
           <h1>Insight BLOG</h1>
        </div>
        <nav>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <div class="content">
        <h1>Welcome to Insight Blog</h1>
        <p>Your go-to platform for insightful articles and engaging discussions. 
        At InsightBlog, we believe in the power of sharing knowledge and ideas. Our platform provides a space for authors to share their thoughts, experiences, and expertise on a variety of topics. Whether you're here to read, write, or comment, we hope you find inspiration and community.
        </p><img src="/images/nature2.jpg" alt="" width='300px' length='300px';>
        <div class="button-group">
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" > Log in </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" > Register </a>
            @endif
        </div>
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Insight Blog') }}. Tshepang Tsautse.</p>
    </footer>
</body>
</html>

