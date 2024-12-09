<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPT File Manager</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            flex: 1;
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .button-group {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        .button-group button {
            padding: 15px 25px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            transition: all 0.3s ease;
        }
        .button-group button:hover {
            transform: scale(1.05);
        }
        .button-blue {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
        }
        .button-blue:hover {
            background: linear-gradient(90deg, #0056b3, #003f91);
        }
        .button-gray {
            background: linear-gradient(90deg, #6c757d, #5a6268);
            color: white;
        }
        .button-gray:hover {
            background: linear-gradient(90deg, #5a6268, #495057);
        }
        footer {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: relative;
        }
        footer a {
            color: #ffeeba;
            text-decoration: none;
            font-weight: bold;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .comment-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
        .comment-section h3 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #343a40;
        }
        .comment-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 10px;
            resize: vertical;
        }
        .comment-form button {
            padding: 10px 20px;
            font-size: 14px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .comment-form button:hover {
            background-color: #0056b3;
        }
        .comment-list {
            margin-top: 20px;
        }
        .comment-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .comment-item .comment-author {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .comment-item .comment-text {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>PPT File Manager</h1>
        <div>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-red-600 dark:text-red-400 hover:underline ml-4">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <div class="container">
        <h2 style="text-align: center; color: #343a40; margin-bottom: 20px;">Manage Your Files</h2>
        <div class="button-group">
            <button class="button-gray" onclick="window.location.href='/show-slides'">Show Slides</button>
            <button class="button-gray" onclick="window.location.href='/show-attendance'">Show Attendance</button>
        </div>
        
        <!-- Comment Section -->
        <div class="comment-section">
            <h3>Comments</h3>
            
                <div class="comment-form">
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <textarea name="content" rows="4" placeholder="Write your comment..." required></textarea>
                        <button type="submit">Post Comment</button>
                    </form>
                </div>
           
            

            
            
        </div>
    </div>

    <footer>
        <p>&copy; 2024 PPT File Manager. All rights reserved. | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
