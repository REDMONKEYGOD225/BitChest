<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une news</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #FFFFFF;
            color: #38618C;
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #38618C;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #38618C;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="file"] {
            margin-bottom: 20px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #01FF19;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #FF5964;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Modifier une news</h1>
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" required>
        
        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" value="{{ $news->title }}" required>

        <label for="content">Contenu:</label>
        <textarea name="content" id="content" rows="4" required>{{ $news->content }}</textarea>

        <label for="author">Auteur:</label>
        <input type="text" name="author" id="author" value="{{ $news->author }}" required>

        <button type="submit">Modifier la news</button>
    </form>
</body>
</html>
