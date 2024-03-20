<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une news</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #FFFFFF;
            color: #38618C;
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #38618C;
            border-radius: 5px;
            background-color: #FFFFFF;
        }
        input[type="file"], input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #38618C;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #01FF19;
            color: #FFFFFF;
            font-weight: bold;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #FF5964;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Ajouter une news</h1>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Champ pour l'image -->
        <input type="file" name="image" required>
        
        <!-- Champ pour le titre -->
        <input type="text" name="title" placeholder="Titre" required>

        <!-- Champ pour le contenu -->
        <textarea name="content" rows="4" placeholder="Contenu" required></textarea>

        <!-- Bouton pour soumettre le formulaire -->
        <button type="submit">Ajouter la news</button>
    </form>
</body>
</html>
