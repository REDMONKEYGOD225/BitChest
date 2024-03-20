<form action="{{ route('admin.user.index') }}" method="POST" style="font-family: 'Célias', sans-serif;">
    @csrf
    <!-- Champ pour le nom -->
    <input type="text" name="name" placeholder="Nom" style="background-color: #FFFFFF; color: #38618C;" required>
    
    <!-- Champ pour le prénom -->
    <input type="text" name="surname" placeholder="Prénom" style="background-color: #FFFFFF; color: #38618C;" required>

    <!-- Champ pour le nom d'utilisateur -->
    <input type="text" name="username" placeholder="Nom d'utilisateur" style="background-color: #FFFFFF; color: #38618C;" required>

    <!-- Champ pour le mot de passe -->
    <input type="password" name="password" placeholder="Mot de passe" style="background-color: #FFFFFF; color: #38618C;" required>

    <!-- Bouton pour soumettre le formulaire -->
    <button type="submit" style="background-color: #01FF19; color: #FFFFFF;">Ajouter l'utilisateur</button>
</form>