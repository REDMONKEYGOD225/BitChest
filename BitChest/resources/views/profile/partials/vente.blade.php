<form action="{{ route('crypto.sell') }}" method="POST">
    @csrf

    <!-- Sélection de la crypto-monnaie à vendre -->
    <div>
        <label for="crypto">Choisir la crypto-monnaie :</label>
        <select name="crypto" id="crypto">
            @foreach($userCryptos as $crypto)
                <option value="{{ $crypto->name }}">{{ $crypto->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Champ pour entrer la quantité à vendre -->
    <div>
        <label for="quantity">Quantité à vendre :</label>
        <input type="number" name="quantity" id="quantity" min="0" step="any">
    </div>

    <!-- Bouton de soumission du formulaire -->
    <div>
        <button type="submit">Vendre</button>
    </div>
</form>
