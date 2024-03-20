<nav class="bg-gray-800" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-white">BitChest</a>
                </div>

                <!-- Liens de navigation -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <!-- Lien vers le profil de l'utilisateur -->
                    <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                        {{ __('Profil') }}
                    </x-nav-link>

                    <!-- Liens pour acheter, vendre et échanger des crypto-monnaies -->
                    <x-nav-link :href="route('achat')" :active="request()->routeIs('achat')">
                        {{ __('Achat') }}
                    </x-nav-link>
                    <x-nav-link :href="route('vente')" :active="request()->routeIs('vente')">
                        {{ __('Vente') }}
                    </x-nav-link>
                    <x-nav-link :href="route('echange')" :active="request()->routeIs('echange')">
                        {{ __('Échange') }}
                    </x-nav-link>

                    <!-- Lien pour consulter les actualités -->
                    <x-nav-link :href="route('news')" :active="request()->routeIs('news')">
                        {{ __('Actualités') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Bouton pour ouvrir la navbar sur les petits écrans -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-white focus:outline-none focus:text-white">
                    <svg class="h-6 w-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu déroulant pour les petits écrans -->
    <div x-show="open" class="sm:hidden" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Lien vers le profil de l'utilisateur -->
            <x-responsive-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                {{ __('Profil') }}
            </x-responsive-nav-link>

            <!-- Liens pour acheter, vendre et échanger des crypto-monnaies -->
            <x-responsive-nav-link :href="route('achat')" :active="request()->routeIs('achat')">
                {{ __('Achat') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('vente')" :active="request()->routeIs('vente')">
                {{ __('Vente') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('echange')" :active="request()->routeIs('echange')">
                {{ __('Échange') }}
            </x-responsive-nav-link>

            <!-- Lien pour consulter les actualités -->
            <x-responsive-nav-link :href="route('news')" :active="request()->routeIs('news')">
                {{ __('Actualités') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
