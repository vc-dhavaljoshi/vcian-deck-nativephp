<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
<div
    class="bg-black relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-dots-lighter dark:bg-gray-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="text-center">
            <h1 class="mt-6 text-4xl font-semibold text-gray-900 text-white">NGINX Guide</h1>
        </div>
        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 text-white">
                <h2 class="text-2xl font-bold mb-2">Introduction</h2>
                <p class="mb-4">This guide will help you set up and configure Nginx as a web server...</p>

                <h2 class="text-2xl font-bold mb-2">Step 1: Installing Nginx</h2>
                <p class="mb-4">Before you start configuring Nginx, you need to install it on your system...</p>

                <h2 class="text-2xl font-bold mb-2">Step 2: Basic Configuration</h2>
                <p class="mb-4">In this step, we'll cover the basic Nginx configuration options...</p>
                <pre class="bg-gray-200 p-4 rounded-lg text-black"><code>user www-data;
worker_processes auto;
pid /run/nginx.pid;</code></pre>

                <h2 class="text-2xl font-bold mb-2">Step 3: Server Blocks</h2>
                <p class="mb-4">Server blocks, also known as virtual hosts, allow you to host multiple...</p>
                <pre class="bg-gray-200 p-4 rounded-lg text-black"><code>server {
    listen 80;
    server_name example.com;
    root /var/www/example;
    index index.html;
}</code></pre>
            </div>
        </div>
    </div>
</div>
</body>
</html>
