<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>

    <style>
        body {
            font-family: 'Célias', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            color: #38618C;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #35A7FF;
            color: #FFFFFF;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: inherit;
        }

        section {
            padding: 20px;
        }

        .section1 {
            background-image: url('images/barcharts-blue-forex-market.jpg');
            background-size: cover;
            text-align: center;
            padding: 100px 0;
            color: #FFFFFF;
        }

        .section2 {
            display: flex;
            justify-content: space-around;
            background-color: #38618C;
            color: #FFFFFF;
        }

        .section2 img {
            height: 300px;
            width: 300px;
        }

        .section3 {
            display: flex;
            justify-content: space-around;
            align-items: center;
            /* Centrer verticalement */
            text-align: center;
            /* Centrer horizontalement */
        }

        .section3 img {
            height: 200px;
            width: 200px;
            margin-top: 20px;
            /* Ajouter un espacement par rapport au texte au-dessus */
        }


        footer {
            text-align: center;
            background-color: #35A7FF;
            color: #FFFFFF;
        }

        #footer1 {
            display: flex;
            justify-content: space-around;
        }

        footer img {
            height: 50px;
            width: 50px;
        }

        #footer1 ul {
            list-style: none;
        }

        #footer1 h4 {
            text-align: center;
        }

        #footer1 ul {
            text-align: left;
        }

        #footer1 ul li {
            display: block;
            margin-bottom: 10px;
        }

        #footer1 ul.images {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #footer1 ul.images li {
            flex-basis: 30%;
        }
    </style>
</head>

<body>
    <header>
        <img src="images/bitchest_logo.png" alt="logo de bitchest" style="height: 75px; width: 150px">
        <nav>
            <ul>
                <li><a href="#">accueil</a></li>
                <li><a href="#">à propos de nous</a></li>
                <li><a href="#">marchés</a></li>
                <li><a href="#">contacts</a></li>
                <li><a href="#">actualités</a></li>
            </ul>
        </nav>
        <div>
            <input type="search" name="search" id="search">
            <button>recherche</button>
        </div>

        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" style="color: #FFFFFF; text-decoration: none;">
                Log in
            </a>
            @endauth
        </nav>
        @endif
    </header>

    <section class="section1">
        <h1>BIENVENU SUR L'UNE DES MEILLEURS PLATEFORMES DE TRADING AU MONDE</h1>
        <img src="images/bitchest_logo.png" alt="logo de bitchest">
    </section>

    <section class="section2">
        <img src="images/Icon-Decentralized.svg" alt="">
        <div>
            <h2>syteme de gestion décentralisé</h2>
            <p>notre système de gestion décentralisé offre plusieurs avantages</p>
            <ul>
                <li>
                    Transparence accrue : vos transactions sont enregistrées sur un registre distribué, accessible à
                    tout moment, ce qui garantit une transparence totale et empêche la manipulation de vos
                    données par un ou quelques acteurs.
                </li>
                <li>
                    Sécurité renforcée : La décentralisation réduit les risques de piratage et de fraude, car
                    les données ne sont pas stockées sur un serveur central vulnérable aux attaques.
                </li>
                <li>
                    Fiabilité et disponibilité : En éliminant le point de défaillance unique, les systèmes
                    décentralisés sont plus résilients et moins susceptibles de subir des temps d'arrêt prolongés.
                </li>
                <li>
                    Autonomie des utilisateurs : Chaque utilisateur a un contrôle direct sur ses actifs et
                    transactions, sans avoir besoin de passer par des intermédiaires ou des tiers de confiance.
                </li>
                <li>
                    Réduction des coûts : En éliminant les frais associés aux tiers de confiance et en automatisant
                    les processus, les plateformes de trading décentralisées peuvent réduire les coûts pour les
                    utilisateurs.
                </li>
            </ul>
        </div>
    </section>

    <section class="section3">
        <div>
            <h2>comme bon nombre de plateformes de trading nous sommes présents sur Discord</h2>
            <h3>
                nous vous invitons donc à rejoindre notre serveur quel que soit votre niveau de connaissance et d'expertise
                dans le trading nous allons y faire de vous un trader chevronné
            </h3>
            <a href="https://discord.com/"><img src="images/Discord_Logo_sans_texte.svg.png" alt="logo de discord"></a>
        </div>

        <img src="images/serveur discord.jpeg" alt="" style="height: 400px; width: 500px; margin-top: 20px;">
    </section>


    <footer>
        <div id="footer1">
            <div>
                <h4>communauté</h4>
                <ul class="images">
                    <li><a href="https://discord.com/"><img src="images/Discord_Logo_sans_texte.svg.png" alt="logo de discord"></a></li>
                    <li><a href="https://telegram.org/"><img src="images/Telegram_logo.svg.webp" alt=""></a></li>
                    <li><a href="https://twitter.com/"><img src="images/X_logo_2023.svg" alt=""></a></li>
                    <li><a href="https://www.youtube.com/"><img src="images/Youtube_logo.png" alt="" style="height: 50px; width: 90px;"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="images/Instagram_icon.png.webp" alt=""></a></li>
                    <li><a href="https://www.tiktok.com/"><img src="images/logo tiktok.png" alt=""></a></li>
                    <li><a href="https://www.facebook.com/"><img src="images/Facebook_f_logo_(2019).svg" alt=""></a></li>
                </ul>
            </div>
            <div>
                <h4>à propos de nous</h4>
                <ul>
                    <li><a href="#">qui sommes nous ?</a></li>
                    <li><a href="#">carrières</a></li>
                    <li><a href="#">juridique</a></li>
                    <li><a href="#">condition d'utilisation</a></li>
                    <li><a href="#">confidentialité</a></li>
                    <li><a href="#">avis</a></li>
                </ul>
            </div>
            <div>
                <h4>assistance technique</h4>
                <ul>
                    <li><a href="#">discuter avec le service client</a></li>
                    <li><a href="mailto:bitchest_client@gmail.com">contacter le service client</a></li>
                </ul>
            </div>
            <div>
                <h4>FAQ</h4>
            </div>
        </div>
        &copy; BITCHEST {{ now()->year }} - Tous droits réservés.
    </footer>
</body>

</html>