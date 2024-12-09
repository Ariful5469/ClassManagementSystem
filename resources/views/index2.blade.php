<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Comments</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            letter-spacing: 1px;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            font-size: 1.8rem;
            color: #343a40;
            margin-bottom: 30px;
        }

        .comment-box {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .comment-user {
            font-weight: bold;
            color: #343a40;
            font-size: 1.1rem;
        }

        .comment-date {
            font-size: 0.9rem;
            color: #888;
            margin-top: 5px;
        }

        .comment-box p {
            font-size: 1rem;
            margin-top: 10px;
            color: #555;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 0.9rem;
        }

        footer a {
            color: #ddd;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Button styling */
        .logout-btn {
            background-color: transparent;
            border: none;
            color: #f87171;
            font-size: 1rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .logout-btn:hover {
            color: #f43f5e;
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            header h1 {
                font-size: 2rem;
            }

            .container h2 {
                font-size: 1.6rem;
            }

            .comment-box p {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Comments Section</h1>
    </header>

    <div class="container">
        <h2 style="text-align: center; color: #343a40; margin-bottom: 20px;">User Comments</h2>

        <!-- Comments displayed for chairman -->
        <!-- Display comments -->
        @foreach(\App\Models\Comment::all() as $comment)
        <div class="comment-box">
            <div class="comment-user">{{ $comment->user->name }}</div>
            <div class="comment-date">Posted {{ $comment->created_at->diffForHumans() }}</div>
            <p>{{ $comment->content }}</p>
        </div>
        @endforeach

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-red-600 dark:text-red-400 hover:underline ml-4">
                Logout
            </button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Comments Section. All rights reserved. | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
