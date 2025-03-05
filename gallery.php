<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Your Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">

<?php include 'navbar.php'; ?>


    <div class="relative h-[250px] flex items-center justify-center overflow-hidden">
      <!-- Background image -->
      <img src="Images/gallery.png" alt="Gallery" class="absolute inset-0 w-full h-full object-cover brightness-110 contrast-110">
    
      <!-- Purple overlay -->
      <div class="absolute inset-0 bg-[#AD0AFF] bg-opacity-60"></div>  
    
      <!-- Text -->
      <h1 class="relative text-white text-4xl font-extrabold">Gallery</h1>
    </div>
    

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
          
          <!-- Item -->
          <div class="text-center">
            <img src="Images/78th.jpg" alt="78th PICPA Convention" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">78th PICPA Convention Sorsogon City</p>
          </div>
          
          <div class="text-center">
            <img src="Images/79th.jpg" alt="79th PICPA Convention" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">79th PICPA Convention Davao City</p>
          </div>
      
          <div class="text-center">
            <img src="Images/bauer.jpg" alt="BAUER Inventory" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">BAUER Year End Inventory 2024</p>
          </div>
      
          <div class="text-center">
            <img src="Images/field aufit.jpg" alt="Field Audit" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">Field Audit</p>
          </div>
      
          <div class="text-center">
            <img src="Images/office staff.jpeg" alt="Office Staff" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">Office Staff</p>
          </div>
      
          <div class="text-center">
            <img src="Images/picpa convention.jpeg" alt="Others" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">Others</p>
          </div>
      
          <div class="text-center">
            <img src="Images/picpa convention.jpeg" alt="PICPA 2022 Cebu" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">PICPA Convention 2022 Cebu City</p>
          </div>
      
          <div class="text-center">
            <img src="Images/picpa mmr ngo park.jpg" alt="PICPA Convention" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">PICPA Convention</p>
          </div>
      
          <div class="text-center">
            <img src="Images/picpa mmr ngo park.jpg" alt="PICPA MMR NGO Summit" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">PICPA MMR NGO Summit at Century Park Hotel</p>
          </div>
      
          <div class="text-center">
            <img src="Images/bauer.jpg" alt="Seminars" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">Seminars</p>
          </div>
      
          <div class="text-center">
            <img src="Images/testimonial dinner.jpg" alt="Testimonial Dinner" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">Testimonial Dinner CPA Board Passer November 2023</p>
          </div>
      
          <div class="text-center">
            <img src="Images/78th.jpg" alt="Year End Inventory" class="w-full h-80 object-cover rounded-xl">
            <p class="mt-3 text-2xl font-bold text-purple-700">Year End Inventory Count Bauer Phils</p>
          </div>
      
        </div>
      </div>
       
      <?php include 'footer.php'; ?>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
