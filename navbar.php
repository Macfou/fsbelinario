<nav class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">

        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <a href="index.php">
                <img src="Images/fsblogo.png" alt="Logo" class="h-16">
            </a>
            <div class="flex flex-col">
                <span class="text-lg font-bold text-[#4F2D7F]">FELOMINO S. BELINARIO</span>
                <span class="text-lg font-bold text-[#4F2D7F]">& ASSOCIATES</span>
            </div>
        </div>

        <!-- Desktop Navigation centered -->
        <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6">
            <a href="index.php" class="text-[#4F2D7F] hover:underline hover:text-red-600 font-semibold">Home</a>
            <a href="services.php" class="text-[#4F2D7F] hover:underline hover:text-red-600 font-semibold">Services</a>
            <a href="about.php" class="text-[#4F2D7F] hover:underline hover:text-red-600 font-semibold">About Us</a>
            <a href="gallery.php" class="text-[#4F2D7F] hover:underline hover:text-red-600 font-semibold">Picture Gallery</a>
            <a href="contact.php" class="text-[#4F2D7F] hover:underline hover:text-red-600 font-semibold">Contact Us</a>
        </div>

        <!-- Hamburger Button -->
        <button id="menu-btn" class="block md:hidden text-[#4F2D7F] text-3xl">
            <i class="fas fa-bars"></i>
        </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <a href="index.php" class="block px-6 py-2 text-[#4F2D7F] hover:bg-gray-100">Home</a>
        <a href="services.php" class="block px-6 py-2 text-[#4F2D7F] hover:bg-gray-100">Services</a>
        <a href="about.php" class="block px-6 py-2 text-[#4F2D7F] hover:bg-gray-100">About Us</a>
        <a href="gallery.php" class="block px-6 py-2 text-[#4F2D7F] hover:bg-gray-100">Picture Gallery</a>
        <a href="contact.php" class="block px-6 py-2 text-[#4F2D7F] hover:bg-gray-100">Contact Us</a>
    </div>
</nav>
