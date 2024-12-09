<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Classroom</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('https://naeemur.github.io/mbstu/assets/a/23.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .bg-custom {
            background-color: rgba(248, 249, 250, 0.8); /* Slight transparent background to make content readable */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        .header {
            background-color: rgba(52, 58, 64, 0.8); /* Dark background with transparency */
            padding: 20px 40px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #495057;
        }

        .header a {
            color: #f8f9fa;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .header a:hover {
            background-color: #495057;
        }

        .content {
            text-align: center;
            margin-top: 1px;
            flex-grow: 1; /* Ensures content takes available space */
            padding: 15px;
        }

        .content h1 {
            font-size: 4rem;
            font-weight: 800;
            color:rgb(239, 79, 5); /* Blue color */
        }

        .content p {
            font-size: 1.2rem;
            color: green;
            margin: 20px 0;
        }

        .auth-buttons a {
            font-size: 1rem;
            color: #007bff;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .auth-buttons a:hover {
            background-color: #007bff;
            color: white;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(52, 58, 64, 0.8);
            color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-custom dark:bg-gray-900">
    <!-- Header Section -->
    <header class="header">
        <div class="logo">
            <h2>My Classroom</h2>
        </div>
        <div class="auth-links">
            @auth
                <a href="{{ url('/') }}" class="text-indigo-600 dark:text-indigo-400">Welcome</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 dark:text-red-400 hover:underline ml-4">
                        Logout
                    </button>
                </form>
            @else
            <a href="{{ url('/teachers-details') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                Teachers Details
            </a>
            <a href="{{ url('/routine') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                Routine
            </a>
            <span class="mx-2 text-gray-600 dark:text-gray-400">|</span>
                <a href="{{ route('login') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                    Login
                </a>
                <span class="mx-2 text-gray-600 dark:text-gray-400">|</span>
                <a href="{{ route('register') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                    Register
                </a>
            @endauth
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="content">
        <h1>Welcome to My Classroom</h1>
       
        
        <div class="auth-buttons mt-6">
            @auth
                <a href="{{ url('/') }}" class="bg-indigo-600 text-white rounded-lg">Go to Dashboard</a>
            @else
                <p>Please login or register to access the content.</p>
            @endauth
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My Classroom. All rights reserved. | <a href="#" class="text-gray-400">Privacy Policy</a></p>
    </footer>
</body>
</html>
