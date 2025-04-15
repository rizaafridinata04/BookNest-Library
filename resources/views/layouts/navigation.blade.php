<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        body {
            background-color: #F8FAFC;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #F8FAFC;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .menu a, .logout-btn {
            text-decoration: none;
            color:rgb(113, 149, 183);
            padding: 8px 12px;
            border-radius: 5px;
        }
        .menu a:hover, .logout-btn:hover {
            background-color: #D9EAFD;
        }
        .logout-btn {
            background-color: #D9EAFD;
            border: none;
            cursor: pointer;
        }
        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 10px;
            padding-top: 10px;
        }
        .mobile-menu a, .mobile-menu button {
            text-align: left;
            width: 100%;
        }
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .menu {
                display: none;
            }
            .menu-toggle {
                display: block;
            }
            .mobile-menu {
                display: none;
                background-color:rgb(90, 133, 176);
                padding: 10px;
                border-top: 1px solid #ccc;
            }
            .mobile-menu.show {
                display: flex;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="#" class="logo" style="font-weight: bold; font-size: 1.2rem; color:rgb(96, 139, 183);">MyApp</a>
        
        <!-- Desktop Menu -->
        <div class="menu">
            <a href="#">Dashboard</a>
            <a href="#">Profile</a>
            <button class="logout-btn">Logout</button>
        </div>

        <!-- Mobile Menu Button -->
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <button class="logout-btn">Logout</button>
    </div>
</nav>

<script>
    function toggleMenu() {
        document.getElementById('mobileMenu').classList.toggle('show');
    }
</script>

</body>
</html>
