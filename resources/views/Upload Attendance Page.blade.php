<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Attendance</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: #fff;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 1.1em;
            margin-bottom: 5px;
        }
        input[type="file"] {
            padding: 10px;
            font-size: 1em;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
        }
        button {
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            list-style: none;
        }
        footer {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Upload Attendance</h1>
    </header>
    <div class="container">
        @if(session('success'))
            <div class="success-message">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if($errors->any())
            <ul class="error-message">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('upload.table2') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ppt_file">Choose a file to upload:</label>
                <input type="file" id="ppt_file" name="ppt_file" accept="csv,xls,xlsx" required>
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 PPT File Manager</p>
    </footer>
</body>
</html>
