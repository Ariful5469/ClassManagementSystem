<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Slides</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and main background */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #0056b3;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .ppt-list {
            list-style-type: none;
            padding: 0;
        }

        .ppt-item {
            padding: 12px;
            background-color: #fafafa;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ppt-item:hover {
            background-color: #f0f0f0;
        }

        .download-link {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .download-link:hover {
            color: #0056b3;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 1rem;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            header {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="header-container">
            <h1>Uploaded Slides</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
       
        <div class="ppt-list">
            @foreach(\App\Models\PptFile::all() as $ppt)
                <div class="ppt-item">
                    <span>{{ $ppt->original_name }}</span>
                    <a href="{{ route('download', $ppt->id) }}" class="download-link">Download</a>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <p>&copy; 2024 PPT File Manager | All rights reserved</p>
    </footer>

</body>
</html>
