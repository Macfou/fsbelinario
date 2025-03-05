<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | FS.Belinario</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-white">

<?php include 'navbar.php'; ?>



    <!------------------------Slide Show--------------------->

    <div class="relative w-full h-[70vh] overflow-hidden">

        <!-- Slideshow Container -->
        <div class="relative w-full h-full">
            <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out slide">
                <img src="https://fsbelinarioaccounting.ph//assets/images/banner_new1.jpg" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out slide">
                <img src="https://fsbelinarioaccounting.ph//assets/images/banner_new3.jpg" class="w-full h-full object-cover">
            </div>
        </div>
    
        <!-- Vertical Dividing Lines -->
        <div class="absolute inset-y-0 left-1/4 w-[3px] bg-black"></div>
        <div class="absolute inset-y-0 left-1/2 w-[3px] bg-black"></div>
        <div class="absolute inset-y-0 left-3/4 w-[3px] bg-black"></div>
    
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-center text-left px-16">
            <h1 class="text-white text-4xl md:text-6xl font-bold">GET STARTED WORK WITH US</h1>
            <button class="mt-6 px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg shadow-lg hover:bg-purple-700">
                GET STARTED
            </button>
        </div>
    
        <!-- Navigation Arrows -->
        <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white text-4xl hover:scale-110 transition">
            &#10094;
        </button>
        <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-4xl hover:scale-110 transition">
            &#10095;
        </button>
        
    
        <!-- Core Values Section -->
        <div class="absolute bottom-4 left-0 w-full flex">
    
            <!-- Integrity -->
            <div class="w-1/4 py-2 px-2 flex flex-col items-center justify-center text-white">
                <div class="w-10 h-10 bg-white text-black flex items-center justify-center rounded-full">
                    👤
                </div>
                <p class="mt-1 text-base font-semibold">Integrity</p>
                <span class="text-xs">→</span>
            </div>
    
            <!-- Excellence -->
            <div class="w-1/4 py-2 px-2 flex flex-col items-center justify-center text-white">
                <div class="w-10 h-10 bg-white text-black flex items-center justify-center rounded-full">
                    ⭐
                </div>
                <p class="mt-1 text-base font-semibold">Excellence</p>
                <span class="text-xs">→</span>
            </div>
    
            <!-- Client Focus -->
            <div class="w-1/4 py-2 px-2 flex flex-col items-center justify-center text-white">
                <div class="w-10 h-10 bg-white text-black flex items-center justify-center rounded-full">
                    💼
                </div>
                <p class="mt-1 text-base font-semibold">Client Focus</p>
                <span class="text-xs">→</span>
            </div>
    
            <!-- Accountability -->
            <div class="w-1/4 py-2 px-2 flex flex-col items-center justify-center text-white">
                <div class="w-10 h-10 bg-white text-black flex items-center justify-center rounded-full">
                    ✅
                </div>
                <p class="mt-1 text-base font-semibold">Accountability</p>
                <span class="text-xs">→</span>
            </div>
    
        </div>
    
    </div>
      
    
    <!------------------About Us content --------------->
    <div class="w-full bg-white py-16 px-5 md:px-20">
        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-12">
      
          <!-- About Us Text Section -->
          <div class="md:w-1/2">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">About Us</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-8 text-justify">
              Felomino S. Belinario & Associates is a distinguished accounting and consulting firm based in the Philippines, established on April 15, 1982. Located at 920 Remedios St., Malate, Manila, our firm has built a solid reputation for delivering exceptional accounting, auditing, and consulting services to a diverse clientele across various industries.
            </p>
            <button class="bg-purple-600 text-white text-lg font-semibold py-3 px-8 rounded-lg shadow-md hover:bg-purple-700 transition">
              Read More
            </button>
          </div>
      
          <!-- Feature Boxes -->
          <div class="grid grid-cols-2 gap-6 w-full md:w-1/2">
            <div class="bg-red-600 text-white text-center text-xl font-semibold py-10 px-4 rounded-xl shadow-md">
              37 YEARS<br>OF EXPERIENCE
            </div>
            <div class="bg-sky-500 text-white text-center text-xl font-semibold py-10 px-4 rounded-xl shadow-md">
              EXPERIENCED<br>PROFESSIONALS
            </div>
            <div class="bg-gray-800 text-white text-center text-xl font-semibold py-10 px-4 rounded-xl shadow-md">
              VALUABLE<br>SERVICES
            </div>
            <div class="bg-teal-500 text-white text-center text-xl font-semibold py-10 px-4 rounded-xl shadow-md">
              ACCOUNTING<br>SOLUTIONS
            </div>
          </div>
      
        </div>
      </div>
      
      
      
    <!-------------accreditation and qualification----------------->
    <div class="relative bg-cover bg-center h-64 w-full" style="background-image: url('https://fsbelinarioaccounting.ph/assets/images/banner_new1.jpg');">
   <div class="absolute inset-0 bg-purple-900 bg-opacity-70 flex justify-center items-center">
       <div class="grid grid-cols-4 gap-10 text-white text-center w-3/4">

                <!-- BIR -->
                
                <div>
                    <div class="text-4xl mb-2 fab fa-algolia text-[#17a2b8] "></div>
                    <h3 class="font-bold text-lg">BIR</h3>
                    <p class="text-sm">Bureau of Internal Revenue</p>
                </div>
                <!-- SEC -->
                <div>
                    <div class="text-4xl mb-2 fab fa-asymmetrik text-[#30c39e]"></div>
                    <h3 class="font-bold text-lg">SEC</h3>
                    <p class="text-sm">Securities and Exchange Commission</p>
                </div>
                <!-- BOA -->
                
                <div>
                    <div class="text-4xl mb-2 fab fas fa-bug text-[#fd5c63]" aria-hidden="true"></div>
                    <h3 class="font-bold text-lg">BOA</h3>
                    <p class="text-sm">PRC Board of Accountancy</p>
                </div>
                <!-- CDA -->
                <div>
                    <div class="text-4xl mb-2 fas fa-check-square text-[#ffc168] "></div>
                    <h3 class="font-bold text-lg">CDA</h3>
                    <p class="text-sm">Cooperative Development Authority</p>
                </div>
            </div>
        </div>
    </div>

    <!-----------------------------Audit Firms------------------------->

    <div class=" z-20  px-6 bg-white">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col lg:flex-row items-center justify-between w-full mb-10">
                <!-- Image beside the text, but outside of the box -->
                <div class="relative lg:mr-[-80px] z-10">
                    <img class="w-[600px] h-auto rounded-lg shadow-lg" 
                         alt="Audit Firms" 
                         src="https://fsbelinarioaccounting.ph//assets/images/top10auditfirms.jpg" />
                </div>
                

                <!-- Text content -->
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pl-5">
                    <!-- Circle Container -->
                    <div class="flex flex-col items-center space-y-10 mb-10 w-full">
                        <!-- Top Row (3 Circles) -->
                        <div class="flex justify-center space-x-20 w-full">
                            <div class="w-20 h-20 shadow-lg rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1I39ylvPMuaAUSyQRCzoO4sYq-u4Rqe54Pw&s" alt="Icon 1" class="w-full h-full object-cover">
                            </div>
                            <div class="w-20 h-20 shadow-lg rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqW5lCXxflY_ZOsSs11cRIOoOwTTYHjy0_8A&s">
                            </div>
                            <div class="w-20 h-20 shadow-lg rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3m972e8FEvBi7ETC03avlJcZDg8nT9dWLSw&s">
                            </div>
                        </div>
                
                        <!-- Bottom Row (2 Circles) -->
                        <div class="flex justify-center space-x-20 w-full">
                            <div class="w-20 h-20 shadow-lg rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5iB1zY-OM0aoh3RIhLR_j94LlzNEBtXynTA&s" alt="Icon 4" class="w-full h-full object-cover">
                            </div>
                            <div class="w-20 h-20 shadow-lg rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcJzLSglM_9W_xkeKzpVknCBpUzElrjb8CBQ&s">
                            </div>
                        </div>
                    </div>
                
                    <!-- Text Content -->
                    <div class="max-w-xl mx-auto text-center">
                        <p class="text-laravel text-base text-justify md:text-lg">
                            Lorem Ipsum is so cool and awesome to act and so cool to think. And very awesome to eat and talk. 
                            Lorem Ipsum is so cool and awesome to act and so cool to think. And very awesome to eat and talk. 
                            Lorem Ipsum is so cool and awesome to act and so cool to think. And very awesome to eat and talk. 
                            Lorem Ipsum is so cool and awesome to act and so cool to think. And very awesome to eat and talk.
                        </p>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>

    <!---------------services content-------------->

    <div class="pt-10 bg-white">
        <!-- Services Heading -->
        <h4 class="text-3xl font-bold text-purple-900 text-center md:text-left px-6 md:px-10">
            Services
        </h4>
    
        <div class="w-full flex pt-6 flex-col items-center md:items-start px-6 md:px-10">
            <!-- Box Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full">
                <!-- Box 1 -->
                <div class="bg-[#4F2D7F] text-white px-6 py-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Government Compliance</h3>
                    <p class="text-justify text-base mt-2">
                        Expert guidance on managing compliance and regulatory issues for local government sectors and public organizations.
                    </p>
                </div>
    
                <!-- Box 2 -->
                <div class="bg-[#4F2D7F] text-white px-6 py-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Taxation</h3>
                    <p class="text-justify text-base mt-2">
                        Support in meeting tax obligations, ensuring timely and compliant submissions.
                    </p>
                </div>
    
                <!-- Box 3 -->
                <div class="bg-[#4F2D7F] text-white px-6 py-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Bookkeeping</h3>
                    <p class="text-justify text-base mt-2">
                        Accurate and reliable outsourced accounting and bookkeeping services tailored to the needs of different industries.
                    </p>
                </div>
    
                <!-- Box 4 -->
                <div class="bg-[#4F2D7F] text-white px-6 py-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Accounting And Auditing</h3>
                    <p class="text-justify text-base mt-2">
                        Complete accounting and auditing services, including financial reporting, internal controls, and compliance with local and international standards.
                    </p>
                </div>
            </div>
    
            <!-- Pagination Dots -->
            <div class="flex space-x-3 mt-8 pb-10 justify-center w-full">
                <a href="page1.html" class="w-4 h-4 rounded-full bg-blue-600"></a>
                <a href="page2.html" class="w-4 h-4 rounded-full bg-gray-400 hover:bg-blue-600"></a>
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

    


    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? "1" : "0";
            });
        }

        function nextSlide() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }

        function prevSlide() {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        }

        function autoSlide() {
            nextSlide();
            setTimeout(autoSlide, 5000); // Change image every 5 seconds
        }

        showSlide(slideIndex);
        setTimeout(autoSlide, 5000);
    </script>

</body>
</html>
