<form action="{{ route('crypto.exchange') }}" method="POST">
    @csrf

    <!-- Sélection de la crypto-monnaie à échanger -->
    <div>
        <label for="crypto_to_sell">Choisir la crypto-monnaie à échanger :</label>
        <select name="crypto_to_sell" id="crypto_to_sell">
            @foreach($userCryptos as $crypto)
                <option value="{{ $crypto->name }}">{{ $crypto->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Champ pour entrer la quantité à échanger -->
    <div>
        <label for="quantity_to_sell">Quantité à échanger :</label>
        <input type="number" name="quantity_to_sell" id="quantity_to_sell" min="0" step="any">
    </div>

    <!-- Sélection de la crypto-monnaie à recevoir -->
    <div>
        <label for="crypto_to_receive">Choisir la crypto-monnaie à recevoir :</label>
        <select name="crypto_to_receive" id="crypto_to_receive">
            @foreach($availableCryptos as $crypto)
                <option value="{{ $crypto }}">{{ $crypto }}</option>
            @endforeach
        </select>
    </div>

    <!-- Bouton de soumission du formulaire -->
    <div>
        <button type="submit">Échanger</button>
    </div>
</form>
