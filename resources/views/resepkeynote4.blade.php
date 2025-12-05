<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Recipe Menu - Drinks</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(180deg, #1a1a1a 0%, #000000 100%);
        }
        
        .category-card {
            background: linear-gradient(180deg, #8B7355 0%, #6B5644 100%);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        
        .menu-item {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .menu-item:hover {
            transform: translateY(-8px);
            background: rgba(255,255,255,0.25);
        }
        
        .filter-icon {
            background: rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }
        
        .filter-icon:hover {
            background: rgba(255,255,255,0.4);
            transform: scale(1.1);
        }
        
        .filter-icon.active {
            background: #FFD700;
        }
        
        .search-bar {
            background: rgba(255,255,255,0.9);
        }
        
        .coming-soon-overlay {
            background: rgba(0,0,0,0.7);
        }
    </style>
</head>
<body class="min-h-screen">
    <div class="w-full min-h-screen flex items-center justify-center p-4 md:p-8 lg:p-12">
        <!-- DRINKS CATEGORY -->
        <div class="category-card rounded-2xl p-6 md:p-8 lg:p-10 shadow-2xl w-full h-full md:h-auto max-w-sm md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
            <div class="text-center mb-6 md:mb-8">
                <h2 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Drinks</h2>
                
                <div class="search-bar rounded-full px-5 md:px-6 py-3 md:py-4 flex items-center gap-3 mb-6 max-w-md mx-auto">
                    <input 
                        type="text" 
                        placeholder="Search..." 
                        class="flex-1 bg-transparent outline-none text-gray-700 text-sm md:text-base"
                        id="searchInput"
                    >
                    <span class="text-gray-600 text-xl">🔍</span>
                </div>
                
                <div class="flex justify-center gap-4 md:gap-6 mb-8">
                    <div class="filter-icon w-12 h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/soup.png') }}" alt="Food" class="w-6 h-6 md:w-7 md:h-7 lg:w-8 lg:h-8 object-contain">
                    </div>
                    <div class="filter-icon w-12 h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/dessert.png') }}" alt="Dessert" class="w-6 h-6 md:w-7 md:h-7 lg:w-8 lg:h-8 object-contain">
                    </div>
                    <div class="filter-icon w-12 h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/cookies.png') }}" alt="Snacks" class="w-6 h-6 md:w-7 md:h-7 lg:w-8 lg:h-8 object-contain">
                    </div>
                    <div class="filter-icon active w-12 h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/drinks.png') }}" alt="Drinks" class="w-6 h-6 md:w-7 md:h-7 lg:w-8 lg:h-8 object-contain">
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6 lg:gap-8" id="menuGrid">
                <div class="menu-item rounded-xl p-4 md:p-5 lg:p-6 cursor-pointer" data-name="pink lava">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('drinks/pink-lava.jpg') }}" alt="Pink Lava" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm md:text-base lg:text-lg font-medium text-center">Pink Lava</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 md:p-5 lg:p-6 cursor-pointer relative" data-name="thai tea">
                    <div class="absolute top-3 right-3 md:top-4 md:right-4 bg-red-500 text-white text-xs md:text-sm px-2 md:px-3 py-1 rounded-full font-semibold z-10">HOT</div>
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('drinks/thai-tea.jpeg') }}" alt="Thai Tea" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm md:text-base lg:text-lg font-medium text-center">Thai Tea</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 md:p-5 lg:p-6 cursor-pointer" data-name="ice banana latte">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('drinks/icedbanana-latte.jpg') }}" alt="Ice Banana Latte" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm md:text-base lg:text-lg font-medium text-center">Ice Banana Latte</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 md:p-5 lg:p-6 cursor-pointer" data-name="cherry mocktail">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('drinks/cerry_mocktail.png') }}" alt="Cherry Mocktail" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm md:text-base lg:text-lg font-medium text-center">Cherry Mocktail</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 md:p-5 lg:p-6 cursor-pointer" data-name="taro milk tea">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('drinks/taro_milktea.png') }}" alt="Taro Milk Tea" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm md:text-base lg:text-lg font-medium text-center">Taro Milk Tea</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 md:p-5 lg:p-6 cursor-pointer relative overflow-hidden">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg bg-gray-800">
                        <img src="{{ asset('logokeynotes.png') }}" alt="Coming Soon" class="w-full h-full object-contain opacity-30">
                    </div>
                    <div class="absolute inset-0 coming-soon-overlay rounded-xl flex flex-col items-center justify-center gap-2">
                        <span class="text-4xl md:text-5xl lg:text-6xl">🔒</span>
                        <p class="text-yellow-400 text-xs md:text-sm lg:text-base font-bold uppercase tracking-wide">Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const menuItems = document.querySelectorAll('.menu-item');

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            menuItems.forEach(item => {
                const itemName = item.getAttribute('data-name');
                if (itemName) {
                    if (itemName.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        });

        // Filter icon interaction
        const filterIcons = document.querySelectorAll('.filter-icon');
        
        filterIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                filterIcons.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>