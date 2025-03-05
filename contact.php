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
      <img src="Images/contact us.png" alt="Contact Us Background" class="absolute inset-0 w-full h-full object-cover">
    
      <!-- Purple overlay -->
      <div class="absolute inset-0 bg-[#AD0AFF] bg-opacity-60"></div>
    
      <!-- Text -->
      <h1 class="relative text-white text-4xl font-extrabold">Contact Us</h1>
    </div>
    
      
     <!-- Contact Section -->
<div class="w-full bg-white py-12 px-4 md:px-16">

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
  
      <!-- Left Side: Contact Info and Map -->
      <div class="space-y-8">
  
        <!-- Contact Info Centered -->
        <div class="flex flex-col items-center space-y-6">
  
          <!-- Email -->
          <div class="flex flex-col items-center space-y-6 w-full">

            <!-- Email -->
            <div class="flex items-start space-x-4 w-full min-h-[100px]">
              <img src="Images/icon/emailicon.png" alt="Email Icon" class="w-12 h-12">
              <div class="w-full">
                <h3 class="font-bold text-lg">Email</h3>
                <p class="text-sm">fsbelinario072053@gmail.com</p>
                <p class="text-sm">jun_belinario@yahoo.com</p>
              </div>
            </div>
          
            <!-- Call Us -->
            <div class="flex items-start space-x-4 w-full min-h-[100px]">
              <img src="Images/icon/phoneicon.png" alt="Phone Icon" class="w-12 h-12">
              <div class="w-full">
                <h3 class="font-bold text-lg">Call Us</h3>
                <p class="text-sm">(02) 8536-8449 /</p>
                <p class="text-sm">+63 9173081434</p>
              </div>
            </div>
          
            <!-- Career -->
            <div class="flex items-start space-x-4 w-full min-h-[100px]">
              <img src="Images/icon/laptopicon.png" alt="Career Icon" class="w-12 h-12">
              <div class="w-full">
                <h3 class="font-bold text-lg">Career</h3>
                <p class="text-sm">fsbelinario072053@gmail.com</p>
                <p class="text-sm">jun_belinario@yahoo.com</p>
              </div>
            </div>
          
          </div>
          
  
        </div>
  
        <!-- Map -->
        <div>
          <h3 class="font-bold text-lg text-purple-700 mb-2 text-center">Our Location</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0058185727696!2d121.026842!3d14.555436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9a59f019b67%3A0xe7d41d6124ee198!2s920%20Remedios%20St!5e0!3m2!1sen!2sph!4v1234567890"
            width="100%"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="rounded-lg shadow-md">
          </iframe>
        </div>
  
      </div>
  
      <!-- Right Side: Contact Form -->
      <div class="space-y-6">
        <input type="text" placeholder="Name" class="w-full p-4 h-14 border border-purple-600 rounded focus:outline-purple-600">
        <input type="email" placeholder="Email" class="w-full p-4 h-14 border border-purple-600 rounded focus:outline-purple-600">
        <input type="text" placeholder="Subject" class="w-full p-4 h-14 border border-purple-600 rounded focus:outline-purple-600">
        <textarea placeholder="Message" class="w-full p-4 h-32 border border-purple-600 rounded resize-none focus:outline-purple-600"></textarea>
        <button class="w-full py-4 bg-purple-600 text-white text-lg rounded hover:bg-purple-700">Send Message</button>
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
