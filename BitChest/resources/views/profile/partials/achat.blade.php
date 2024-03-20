<form action="{{ route('crypto.buy') }}" method="POST">
    @csrf

    <!-- Sélection de la crypto-monnaie à acheter -->
    <div>
        <label for="crypto">Choisir la crypto-monnaie :</label>
        <select name="crypto" id="crypto">
            <option value="Bitcoin">Bitcoin</option>
            <option value="Ethereum">Ethereum</option>
            <option value="Ripple">Ripple</option>
            <option value="Bitcoin Cash">Bitcoin Cash</option>
            <option value="Cardano">Cardano</option>
            <option value="Litecoin">Litecoin</option>
            <option value="NEM">NEM</option>
            <option value="Stellar">Stellar</option>
            <option value="IOTA">IOTA</option>
            <option value="Dash">Dash</option>
        </select>
    </div>

    <!-- Champ pour entrer la quantité à acheter -->
    <div>
        <label for="quantity">Quantité à acheter :</label>
        <input type="number" name="quantity" id="quantity" min="0" step="any">
    </div>

    <!-- Bouton de soumission du formulaire -->
    <div>
        <button type="submit">Acheter</button>
    </div>
</form>
