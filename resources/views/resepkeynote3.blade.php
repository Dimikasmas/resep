<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Recipe Menu - Snacks</title>
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
<body class="min-h-screen p-5">
    <div class="max-w-md mx-auto">
        <!-- SNACKS CATEGORY -->
        <div class="category-card rounded-2xl p-6 shadow-2xl">
            <div class="text-center mb-6">
                <h2 class="text-white text-3xl font-bold mb-4">Snacks</h2>
                
                <div class="search-bar rounded-full px-5 py-3 flex items-center gap-3 mb-5">
                    <input 
                        type="text" 
                        placeholder="Search..." 
                        class="flex-1 bg-transparent outline-none text-gray-700 text-sm"
                        id="searchInput"
                    >
                    <span class="text-gray-600">🔍</span>
                </div>
                
                <div class="flex justify-center gap-4 mb-6">
                    <div class="filter-icon w-12 h-12 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/soup.png') }}" alt="Food" class="w-6 h-6 object-contain">
                    </div>
                    <div class="filter-icon w-12 h-12 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/dessert.png') }}" alt="Dessert" class="w-6 h-6 object-contain">
                    </div>
                    <div class="filter-icon active w-12 h-12 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/cookies.png') }}" alt="Snacks" class="w-6 h-6 object-contain">
                    </div>
                    <div class="filter-icon w-12 h-12 rounded-full flex items-center justify-center cursor-pointer">
                        <img src="{{ asset('icon/drinks.png') }}" alt="Drinks" class="w-6 h-6 object-contain">
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4" id="menuGrid">
                <div class="menu-item rounded-xl p-4 cursor-pointer" data-name="mummy sosis">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('snacks/mummy-sosis.webp') }}" alt="Mummy Sosis" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm font-medium text-center">Mummy Sosis</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 cursor-pointer" data-name="corndog roti tawar">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('snacks/corndog-roti tawar.webp') }}" alt="Corndog Roti Tawar" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm font-medium text-center">Corndog Roti Tawar</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 cursor-pointer" data-name="garlic bread toast">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('snacks/garlicbread-toast.jpg') }}" alt="Garlic Bread Toast" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm font-medium text-center">Garlic Bread Toast</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 cursor-pointer" data-name="hotang hotdog kentang">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('snacks/hotdog-kentang.jpg') }}" alt="Hotang" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm font-medium text-center">Hotang (Hotdog Kentang)</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 cursor-pointer" data-name="sate pisang ovomaltine">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg">
                        <img src="{{ asset('snacks/sate_pisang.png') }}" alt="Sate Pisang" class="w-full h-full object-cover">
                    </div>
                    <p class="text-white text-sm font-medium text-center">Sate Pisang Ovomaltine</p>
                </div>
                
                <div class="menu-item rounded-xl p-4 cursor-pointer relative overflow-hidden">
                    <div class="aspect-square mb-3 overflow-hidden rounded-lg bg-gray-800">
                        <img src="{{ asset('logokeynotes.png') }}" alt="Coming Soon" class="w-full h-full object-contain opacity-30">
                    </div>
                    <div class="absolute inset-0 coming-soon-overlay rounded-xl flex flex-col items-center justify-center gap-2">
                        <span class="text-5xl">🔒</span>
                        <p class="text-yellow-400 text-sm font-bold uppercase tracking-wide">Coming Soon</p>
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