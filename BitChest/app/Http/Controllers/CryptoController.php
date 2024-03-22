<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CryptoController extends Controller
{
    // Fonction pour générer aléatoirement les cotations pour les 30 derniers jours
    public function generateCotations() {
        // Appel du fichier cotation.php
        require_once app_path('Helpers/cotations.php');

        // Liste des crypto-monnaies supportées
        $cryptos = [
            "Bitcoin",
            "Ethereum",
            "Ripple",
            "Bitcoin Cash",
            "Cardano",
            "Litecoin",
            "NEM",
            "Stellar",
            "IOTA",
            "Dash"
        ];

        // Générer les cotations pour chaque crypto-monnaie
        $cotationsData = array();
        foreach ($cryptos as $crypto) {
            $cotationsData[$crypto] = $this->generateRandomCotations($crypto);
        }

        // Envoyer les données au format JSON
        return response()->json($cotationsData);
    }

    // Fonction pour générer aléatoirement les cotations pour les 30 derniers jours
    private function generateRandomCotations($crypto) {
        $cotations = array();
        for ($i = 0; $i < 30; $i++) {
            $cotation = getCotationFor($crypto);
            // Assurez-vous que la cotation n'est pas négative
            $cotation = max(0, $cotation);
            $cotations[] = $cotation;
        }
        return $cotations;
    }
}
