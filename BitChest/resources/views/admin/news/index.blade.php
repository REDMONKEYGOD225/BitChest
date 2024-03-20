<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des news</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #FFFFFF;
            color: #38618C;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #38618C;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #01FF19;
            color: #FFFFFF;
        }
        tr:nth-child(even) {
            background-color: #35A7FF;
            color: #FFFFFF;
        }
        tr:hover {
            background-color: #FF5964;
            color: #FFFFFF;
        }
        .edit-btn, .delete-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #01FF19;
            color: #FFFFFF;
        }
        .edit-btn:hover {
            background-color: #FF5964;
        }
        .delete-btn {
            background-color: #FF5964;
            color: #FFFFFF;
        }
        .delete-btn:hover {
            background-color: #01FF19;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Liste des news</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsList as $news)
            <tr>
                <td><img src="{{ $news->image }}" alt="Image" style="max-width: 100px;"></td>
                <td>{{ $news->title }}</td>
                <td>{{ $news->content }}</td>
                <td>{{ $news->author }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $news->id) }}" class="edit-btn">Modifier</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
