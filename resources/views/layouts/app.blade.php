<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Notepad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .note-container { max-width: 500px; margin: 2rem auto; padding: 1rem; font-family: sans-serif; }
        .note-form div { margin-bottom: 1rem; }
        .note-form label { display: block; margin-bottom: 0.25rem; font-weight: bold; }
        .note-form input, .note-form textarea { width: 100%; padding: 0.5rem; box-sizing: border-box; }
        .note-form textarea { height: 150px; resize: vertical; }
        .note-form button { padding: 0.5rem 1rem; cursor: pointer; }
    </style>
</head>
<body>
    
    <main>
    @yield('content')
    </main>
    
</body>
</html>