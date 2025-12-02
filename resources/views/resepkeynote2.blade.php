<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Recipe Menu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #000;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .category-card {
            background: linear-gradient(180deg, #8B7355 0%, #6B5644 100%);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
        }

        .card-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .category-title {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .search-bar {
            background: rgba(255,255,255,0.9);
            border-radius: 25px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            flex: 1;
            font-size: 14px;
        }

        .filter-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .filter-icon {
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    overflow: hidden;
}

.filter-icon img.filter-img {
    width: 24px;
    height: 24px;
    object-fit: contain;
}

        .filter-icon:hover {
            background: rgba(255,255,255,0.4);
            transform: scale(1.1);
        }

        .filter-icon.active {
            background: #FFD700;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .menu-item {
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
            padding: 10px;
            position: relative;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .menu-item-name {
            color: #fff;
            font-size: 12px;
            text-align: center;
            font-weight: 500;
        }

        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #FF6B6B;
            color: white;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 10px;
            font-weight: 600;
        }

        .coming-soon {
            background: rgba(0,0,0,0.7);
            color: #FFD700;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .coming-soon::before {
            content: '🔒';
            font-size: 20px;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
<!-- Desserts Category -->
        <div class="category-card">
            <div class="card-header">
                <h2 class="category-title">Desserts</h2>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <span>🔍</span>
                </div>
                <div class="filter-icons">
                    <div class="filter-icon"> <img src="{{ asset('icon/soup.png') }}" alt="eat" class="filter-img"> </div>
                    <div class="filter-icon"> <img src="{{ asset('icon/dessert.png') }}" alt="eat" class="filter-img"> </div>
                    <div class="filter-icon"> <img src="{{ asset('icon/cookies.png') }}" alt="eat" class="filter-img"> </div>
                    <div class="filter-icon"> <img src="{{ asset('icon/drinks.png') }}" alt="eat" class="filter-img"> </div>
                </div>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="{{ asset('desserts/rotibakar_pisangkeju.jpeg') }}" alt="eat" class="filter-img">
                    <p class="menu-item-name">Roti Bakar Pisang Keju</p>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('desserts/lavachoco_cake.jpeg') }}" alt="eat" class="filter-img">
                    <p class="menu-item-name">Lava Choco Cake</p>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('desserts/pudding_oreo.png') }}" alt="eat" class="filter-img">
                    <p class="menu-item-name">Puding Oreo Cheesecake</p>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('desserts/banana_brownies.jpeg') }}" alt="eat" class="filter-img">
                    <p class="menu-item-name">Banana Brownies</p>
                </div>
                <div class="menu-item">
                    <img src="{{ asset('desserts/brownies_pudding.png') }}" alt="eat" class="filter-img">
                    <p class="menu-item-name">Brownies Pudding</p>
                </div>
                <div class="menu-item">
                <img src="{{ asset('logokeynotes.png') }}" alt="Keynotes Logo">
                <p class="menu-item-name">Coming Soon</p>
                </div>
            </div>
        </div>