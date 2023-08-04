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
            <h1 class="mt-6 text-4xl font-semibold text-gray-900 text-white">PHP Guide</h1>
        </div>
        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 text-white">
                <h1 class="text-3xl font-bold mb-4">Installation:</h1>
                <p class="mb-4">
                    Before you can start coding in PHP, you need to install it on your computer or server. PHP is often
                    included in web hosting packages, but for local development, you can use tools like XAMPP, WAMP, or
                    MAMP, which provide a pre-packaged server environment with PHP, Apache, and MySQL.
                </p>

                <h1 class="text-3xl font-bold mb-4">Variables and Data Types:</h1>
                <p class="mb-4">
                    In PHP, you can declare variables using the <span class="text-green-500">$</span> sign followed by
                    the variable name. PHP has various data types, such as strings, integers, floats, arrays, and more.
                </p>

                <h1 class="text-3xl font-bold mb-4">Control Structures:</h1>
                <p class="mb-4">
                    PHP supports common control structures like if-else, switch, for loop, while loop, and foreach loop.
                    These are used to control the flow of your program.
                </p>

                <h1 class="text-3xl font-bold mb-4">Functions:</h1>
                <p class="mb-4">
                    You can create functions in PHP to encapsulate reusable blocks of code. Functions can take
                    parameters and return values.
                </p>

                <h1 class="text-3xl font-bold mb-4">Arrays:</h1>
                <p class="mb-4">
                    PHP supports both indexed arrays and associative arrays. Indexed arrays are numeric, while
                    associative arrays use named keys.
                </p>

                <h1 class="text-3xl font-bold mb-4">Super Globals:</h1>
                <p class="mb-4">
                    PHP provides various super global variables, such as <span class="text-green-500">$_GET</span>,
                    <span class="text-green-500">$_POST</span>, <span class="text-green-500">$_SESSION</span>, and <span
                        class="text-green-500">$_COOKIE</span>, which allow you to access data sent through HTTP
                    requests or store information across sessions.
                </p>

                <h1 class="text-3xl font-bold mb-4">Handling Forms:</h1>
                <p class="mb-4">
                    PHP is commonly used to handle form submissions. You can access form data using <span
                        class="text-green-500">$_POST</span> or <span class="text-green-500">$_GET</span> depending on
                    the HTTP method used.
                </p>

                <h1 class="text-3xl font-bold mb-4">File Handling:</h1>
                <p class="mb-4">
                    PHP can be used for file handling operations like reading from files, writing to files, deleting
                    files, and more.
                </p>

                <h1 class="text-3xl font-bold mb-4">Database Interaction:</h1>
                <p class="mb-4">
                    PHP works well with databases. You can use the built-in MySQL functions or work with higher-level
                    database libraries like PDO or mysqli.
                </p>

                <h1 class="text-3xl font-bold mb-4">Object-Oriented Programming (OOP):</h1>
                <p class="mb-4">
                    PHP supports OOP concepts like classes, objects, inheritance, and encapsulation.
                </p>

                <h1 class="text-3xl font-bold mb-4">Error Handling:</h1>
                <p class="mb-4">
                    Learn about PHP error reporting and exception handling to catch and handle errors in your code.
                </p>

                <h1 class="text-3xl font-bold mb-4">Security Considerations:</h1>
                <p class="mb-4">
                    Make sure to sanitize and validate user inputs to prevent common security vulnerabilities like SQL
                    injection and cross-site scripting (XSS).
                </p>

                <h1 class="text-3xl font-bold mb-4">Online Resources:</h1>
                <p class="mb-4">
                    There are plenty of online resources, tutorials, and documentation available to learn PHP. Some
                    popular websites include PHP.net, W3Schools, and Stack Overflow.
                </p>

                <p class="text-xl font-bold">Remember to keep practicing and experimenting to improve your PHP skills.
                    Happy coding!</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
