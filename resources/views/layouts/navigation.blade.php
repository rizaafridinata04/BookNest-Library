<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        function menuHandler() {
            return { open: false };
        }
    </script>
    <title>Navbar</title>
</head>
<body class="bg-[#F8FAFC]">
<nav class="bg-[#D9EAFD] shadow-md"> 
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="text-[#9AA6B2] font-bold text-lg">MyApp</a>
                <div class="hidden md:flex space-x-8 ml-10">
                    <a href="#" class="text-[#9AA6B2] hover:text-[#F8FAFC]">Dashboard</a>
                    <a href="#" class="text-[#9AA6B2] hover:text-[#F8FAFC]">Profile</a>
                </div>
            </div>
            <div class="hidden md:flex items-center">
                <button class="px-4 py-2 bg-[#BCCCDE] text-[#9AA6B2] rounded-md hover:bg-[#9AA6B2] hover:text-white">Logout</button>
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-[#9AA6B2]" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

</body>
</html>
