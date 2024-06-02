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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles for Blog -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #cce7c9;
            color: #333;
            margin: 0;
            padding: 0;
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
       .main-content {
    display: grid;
    grid-template-columns: 2fr 1fr; /* 1/4 for sidebar, 3/4 for content */
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1rem;
    gap: 2rem; /* gap between content and sidebar */
}

.content {
    background-color: #8bca84;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.sidebar {
    background-color: #8bca84;
    padding: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

        
        .footer {
            background-color: #357a38;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
        .sidebar h2 {
            border-bottom: 2px solid #eee;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 0.5rem;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #007BFF;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        

        <!-- Page Heading -->
        @isset($header)
            <header>
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
                @include('layouts.navigation')
            </header>
        @endisset

        <!-- Page Content -->
        <div class="main-content">
            <!-- Main Blog Content -->
             <!-- Sidebar -->
            <aside class="sidebar">
            {{ $slot }}
                
           
                </aside>
           
           
            <div class="content">

            <h2>Blog</h2>
                
            <img src="/images/nature3.jpg" alt="" width='200px' length='200px';>
                <h3>Create your own posts that you want us to read, make it interesting!! </h3>
                <p>We are excited to hear from you</p>
             </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel Blog') }}. Tshepang Tsautse.</p>
        </footer>
    </div>
</body>
</html>
