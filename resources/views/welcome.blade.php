<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPT Uploader</title>
</head>
<body>
    <h1>Upload PPT File</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="ppt_file" required>
        <button type="submit">Upload</button>
    </form>

    <h2>Uploaded Files</h2>
    <ul>
        @foreach(\App\Models\PptFile::all() as $ppt)
            <li>
                {{ $ppt->original_name }}
                <a href="{{ route('download', $ppt->id) }}">Download</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
