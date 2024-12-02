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
    </style>
</head>
<body>
    <header>
        <h1>PPT File Manager</h1>
    </header>
    <div class="container">
        <h2 style="text-align: center; color: #343a40; margin-bottom: 20px;">Manage Your Files</h2>
        <div class="button-group">
            <button class="button-blue" onclick="window.location.href='/upload-slide'">Upload Slide</button>
            <button class="button-blue" onclick="window.location.href='/upload-attendance'">Upload Attendance</button>
        </div>
        <div class="button-group">
            <button class="button-gray" onclick="window.location.href='/show-slides'">Show Slides</button>
            <button class="button-gray" onclick="window.location.href='/show-attendance'">Show Attendance</button>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 PPT File Manager. All rights reserved. | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
