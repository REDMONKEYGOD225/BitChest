<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
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
                <li><a href="./welcome.blade.php">accueil</a></li>
                <li><a href="./website/about.blade.php">à propos de nous</a></li>
                <li><a href="./website/marche.blade.php">marchés</a></li>
                <li><a href="./website/contacts.blade.php">contacts</a></li>
                <li><a href="./website/news.blade.php">actualités</a></li>
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

    <section>
        <h1>qui sommes nous ?</h1>
        <p>BitChest a été créé par Jérôme, ancien trader et passionné par les cryptos depuis la première heure.</p>
    </section>
    <section>
        <h1>notre équipe</h1>

        <div>

            <figure>
                <img src="images/TaylorOtwell.jpg" alt="Description de l'image">
                <!-- Texte lié à l'image -->
                <figcaption>jérome (directeur)</figcaption>
            </figure>

            <figure>
                <img src="images/Lisa_Simpson.png" alt="Description de l'image">
                <!-- Texte lié à l'image -->
                <figcaption>lisa (commerciale)</figcaption>
            </figure>

            <figure>
                <img src="images/jean paul.jpg" alt="Description de l'image">
                <!-- Texte lié à l'image -->
                <figcaption>kouassi yao jean paul danick (developper full stack)</figcaption>
            </figure>

            <figure>
                <img src="images/pierre.jpg" alt="Description de l'image">
                <!-- Texte lié à l'image -->
                <figcaption>assalé pierre (developper full stack) </figcaption>
            </figure>

        </div>

    </section>

    <section>
        <p>Les exchanges de crypto-monnaies sont nombreux, mais Jérôme veut développer une
            application simple et opérationnelle pour la vendre en marque blanche à des entreprises
            financières. <br> Le modèle économique sera basé sur une redevance payée par ses clients, et le partage 
            des frais de transaction.</p>
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