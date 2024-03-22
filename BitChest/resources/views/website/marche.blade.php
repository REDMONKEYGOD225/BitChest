<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <!-- Inclure la bibliothèque JavaScript pour les graphiques -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="cryptoChart" width="800" height="400"></canvas>

    <script>
        // Fonction pour récupérer les données des cotations depuis le fichier PHP
        async function fetchCryptoData() {
            try {
                const response = await fetch('app/helpers/cotations.php');
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Erreur lors de la récupération des données:', error);
            }
        }

        // Fonction pour créer un graphique à partir des données récupérées
        async function createChart() {
            const cryptoData = await fetchCryptoData();
            const ctx = document.getElementById('cryptoChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Array.from({ length: 30 }, (_, i) => i + 1), // Création d'un tableau de nombres de 1 à 30 pour les étiquettes sur l'axe des x
                    datasets: Object.keys(cryptoData).map(crypto => ({
                        label: crypto,
                        data: cryptoData[crypto],
                        borderColor: '#' + (Math.random() * 0xFFFFFF << 0).toString(16), // Génération d'une couleur de ligne aléatoire
                        borderWidth: 1,
                        fill: false
                    }))
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        // Appel de la fonction pour créer le graphique
        createChart();
    </script>
</body>
</html>
