<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #FFFFFF;
            color: #38618C;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #38618C;
            border-radius: 5px;
            background-color: #FFFFFF;
        }
        input[type="text"], input[type="password"] {
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
    <h1>Modifier un utilisateur</h1>
    <form action="{{ route('admin.user.index', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <!-- Champ pour le nom -->
        <input type="text" name="name" placeholder="Nom" value="{{ $user->name }}" required>
        
        <!-- Champ pour le prénom -->
        <input type="text" name="surname" placeholder="Prénom" value="{{ $user->surname }}" required>

        <!-- Champ pour le nom d'utilisateur -->
        <input type="text" name="username" placeholder="Nom d'utilisateur" value="{{ $user->username }}" required>

        <!-- Champ pour le mot de passe -->
        <input type="password" name="password" placeholder="Nouveau mot de passe" required>

        <!-- Bouton pour soumettre le formulaire -->
        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>
