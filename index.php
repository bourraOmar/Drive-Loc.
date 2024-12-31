<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive & Loc - Expérience Automobile Premium</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .floating { animation: float 6s ease-in-out infinite; }
        
        .gradient-text {
            background: linear-gradient(to right, #FF6B6B, #4ECDC4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradient 8s ease infinite;
            background-size: 200% auto;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .card-shine {
            position: relative;
            overflow: hidden;
        }
        
        .card-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.1) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }
    </style>
</head>
<body class="bg-[#0A0A0A]">
    <!-- Navigation Ultra-Moderne -->
    <nav class="fixed w-full z-50 transition-all duration-500 backdrop-blur-xl bg-black/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center gap-4">
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] rounded-lg blur opacity-60 group-hover:opacity-100 transition duration-1000"></div>
                        <div class="relative px-4 py-2 bg-black rounded-lg">
                            <span class="gradient-text text-2xl font-bold">D&L</span>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Accueil</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Collection</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Services</a>
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] rounded-full blur opacity-75 group-hover:opacity-100 transition duration-1000"></div>
                        <button class="relative px-6 py-2 bg-black text-white rounded-full group-hover:bg-gray-900 transition duration-300">
                            Réserver maintenant
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section Ultra-Moderne -->
    <div class="relative min-h-screen flex items-center">
        <!-- Fond animé -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-[#0A0A0A] via-[#1A1A1A] to-[#0A0A0A]"></div>
            <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_50%_50%,rgba(255,107,107,0.3),transparent_50%)]"></div>
            <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_80%_20%,rgba(78,205,196,0.3),transparent_50%)]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <h1 class="text-6xl font-bold text-white leading-tight">
                        <span class="gradient-text">L'Excellence</span>
                        <br/>Automobile
                    </h1>
                    <p class="text-xl text-gray-300 leading-relaxed">
                        Découvrez notre collection exclusive de véhicules d'exception. Une expérience de luxe personnalisée pour les passionnés d'automobile.
                    </p>
                    
                    <!-- Formulaire de recherche ultra-moderne -->
                    <div class="card-shine bg-gradient-to-r from-gray-900 to-black p-8 rounded-2xl border border-gray-800">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm">Date de début</label>
                                <input 
                                    type="date" 
                                    class="w-full bg-black/50 border border-gray-800 rounded-xl p-3 text-white focus:border-[#FF6B6B] focus:ring-[#FF6B6B] transition-all duration-300"
                                >
                            </div>
                            <div class="space-y-2">
                                <label class="text-gray-400 text-sm">Date de fin</label>
                                <input 
                                    type="date" 
                                    class="w-full bg-black/50 border border-gray-800 rounded-xl p-3 text-white focus:border-[#4ECDC4] focus:ring-[#4ECDC4] transition-all duration-300"
                                >
                            </div>
                            <div class="md:col-span-2 space-y-2">
                                <label class="text-gray-400 text-sm">Type de véhicule</label>
                                <select 
                                    class="w-full bg-black/50 border border-gray-800 rounded-xl p-3 text-white focus:border-[#FF6B6B] focus:ring-[#FF6B6B] transition-all duration-300"
                                >
                                    <option value="sports">Voitures de sport</option>
                                    <option value="luxury">Berlines de luxe</option>
                                    <option value="suv">SUV Premium</option>
                                    <option value="electric">Véhicules électriques</option>
                                </select>
                            </div>
                        </div>
                        <button class="w-full mt-6 relative group">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000"></div>
                            <div class="relative px-6 py-3 bg-black rounded-xl group-hover:bg-gray-900 transition duration-300">
                                <span class="text-white font-medium">Découvrir notre collection</span>
                            </div>
                        </button>
                    </div>
                </div>
                
                <div class="hidden lg:block relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#FF6B6B]/20 to-[#4ECDC4]/20 rounded-3xl blur-3xl"></div>
                    <img 
                        src="supra.png" 
                        alt="Voiture de luxe" 
                        class="floating relative rounded-3xl shadow-2xl transform hover:scale-105 transition-all duration-700"
                    >
                </div>
            </div>
        </div>
    </div>

    <!-- Section Collection -->
    <div class="relative py-32">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_80%,rgba(255,107,107,0.15),transparent_50%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(78,205,196,0.15),transparent_50%)]"></div>
        
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Notre Collection</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Découvrez nos véhicules d'exception sélectionnés pour leur performance et leur raffinement.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte Véhicule 1 -->
                <div class="group">
                    <div class="card-shine relative bg-gradient-to-br from-gray-900 to-black rounded-2xl overflow-hidden border border-gray-800 transition-all duration-500 hover:border-[#FF6B6B]/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#FF6B6B]/10 to-[#4ECDC4]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <img 
                            src="https://images.pexels.com/photos/13954137/pexels-photo-13954137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                            alt="Ferrari F8 Tributo" 
                            class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-700"
                        >
                        <div class="p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold text-white">Ferrari F8 Tributo</h3>
                                <span class="px-3 py-1 bg-[#FF6B6B]/10 text-[#FF6B6B] rounded-full text-sm">Sport</span>
                            </div>
                            <p class="text-gray-400">720 CV - 0 à 100 km/h en 2.9s</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-3xl font-bold gradient-text">1500€</span>
                                    <span class="text-gray-400">/jour</span>
                                </div>
                                <button class="relative group">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] rounded-full blur opacity-75 group-hover:opacity-100 transition duration-1000"></div>
                                    <div class="relative px-6 py-2 bg-black text-white rounded-full group-hover:bg-gray-900 transition duration-300">
                                        Réserver
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte Véhicule 2 -->
                <div class="group">
                    <div class="card-shine relative bg-gradient-to-br from-gray-900 to-black rounded-2xl overflow-hidden border border-gray-800 transition-all duration-500 hover:border-[#4ECDC4]/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4ECDC4]/10 to-[#FF6B6B]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <img 
                            src="https://images.pexels.com/photos/27985145/pexels-photo-27985145/free-photo-of-promenade-de-la-liberte-a-carrosserie-large-mc-laren-650.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                            alt="Rolls-Royce Phantom" 
                            class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-700"
                        >
                        <div class="p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold text-white">Rolls-Royce Phantom</h3>
                                <span class="px-3 py-1 bg-[#4ECDC4]/10 text-[#4ECDC4] rounded-full text-sm">Luxe</span>
                            </div>
                            <p class="text-gray-400">571 CV - Luxe absolu</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-3xl font-bold gradient-text">2000€</span>
                                    <span class="text-gray-400">/jour</span>
                                </div>
                                <button class="relative group">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#4ECDC4] to-[#FF6B6B] rounded-full blur opacity-75 group-hover:opacity-100 transition duration-1000"></div>
                                    <div class="relative px-6 py-2 bg-black text-white rounded-full group-hover:bg-gray-900 transition duration-300">
                                        Réserver
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte Véhicule 3 -->
                <div class="group">
                    <div class="card-shine relative bg-gradient-to-br from-gray-900 to-black rounded-2xl overflow-hidden border border-gray-800 transition-all duration-500 hover:border-[#FF6B6B]/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#FF6B6B]/10 to-[#4ECDC4]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <img 
                            src="/api/placeholder/600/400" 
                            alt="Tesla Model S Plaid" 
                            class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-700"
                        >
                        <div class="p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold text-white">Tesla Model S Plaid</h3>
                                <span class="px-3 py-1 bg-[#FF6B6B]/10 text-[#FF6B6B] rounded-full text-sm">Électrique</span>
                            </div>
                            <p class="text-gray-400">1020 CV - 0 à 100 km/h en 2.1s</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-3xl font-bold gradient-text">1200€</span>
                                    <span class="text-gray-400">/jour</span>
                                </div>
                                <button class="relative group">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] rounded-full blur opacity-75 group-hover:opacity-100 transition duration-1000"></div>
                                    <div class="relative px-6 py-2 bg-black text-white rounded-full group-hover:bg-gray-900 transition duration-300">
                                        Réserver
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Services -->
    <div class="relative py-32">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_80%,rgba(78,205,196,0.15),transparent_50%)]"></div>
        
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Nos Services Premium</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Une expérience sur mesure pour répondre à toutes vos exigences.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="card-shine group bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl border border-gray-800 transition-all duration-500 hover:border-[#FF6B6B]/50">
                    <div class="w-16 h-16 mb-6 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] p-[1px] rounded-xl">
                        <div class="w-full h-full bg-black rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Livraison & Reprise</h3>
                    <p class="text-gray-400">Service personnalisé de livraison et reprise de votre véhicule à l'adresse de votre choix.</p>
                </div>

                <!-- Service 2 -->
                <div class="card-shine group bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl border border-gray-800 transition-all duration-500 hover:border-[#4ECDC4]/50">
                    <div class="w-16 h-16 mb-6 bg-gradient-to-r from-[#4ECDC4] to-[#FF6B6B] p-[1px] rounded-xl">
                        <div class="w-full h-full bg-black rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Conciergerie 24/7</h3>
                    <p class="text-gray-400">Une équipe dédiée à votre disposition 24h/24 et 7j/7 pour répondre à toutes vos demandes.</p>
                </div>

                <!-- Service 3 -->
                <div class="card-shine group bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl border border-gray-800 transition-all duration-500 hover:border-[#FF6B6B]/50">
                    <div class="w-16 h-16 mb-6 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] p-[1px] rounded-xl">
                        <div class="w-full h-full bg-black rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Expérience Sur Mesure</h3>
                    <p class="text-gray-400">Des services personnalisés pour une expérience unique adaptée à vos besoins.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="relative py-16 bg-black/50 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="space-y-4">
                    <div class="relative group inline-block">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] rounded-lg blur opacity-60"></div>
                        <div class="relative px-4 py-2 bg-black rounded-lg">
                            <span class="gradient-text text-2xl font-bold">D&L</span>
                        </div>
                    </div>
                    <p class="text-gray-400">L'excellence automobile à votre service.</p>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Collection</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Location</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Conciergerie</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Événements</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Sur Mesure</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400">+33 1 23 45 67 89</li>
                        <li class="text-gray-400">contact@drive-loc.fr</li>
                        <li class="text-gray-400">75008 Paris, France</li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-gray-800">
                <p class="text-center text-gray-400">&copy; 2024 Drive & Loc. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>