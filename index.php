<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | FS.Belinario</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-white home-page">

<?php include 'navbar.php'; ?>

<!-------------image slider---------------->

<div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="Images/integritycv.jpeg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Integrity</div>
                    
                </div>
            </div>
            <div class="item">
                <img src="Images/expertisecv.jpg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Excellence</div>
                </div>
            </div>
            <div class="item">
                <img src="Images/clientfocuscv.jpg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Client Focus</div>
                </div>
            </div>
            <div class="item">
                <img src="Images/accountabilitycv.jpg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Accountability</div>
                </div>
            </div>
            <div class="item">
                <img src="Images/collaboration.jpg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Collaboration</div>
                </div>
            </div>
            <div class="item">
                <img src="Images/respect.jpeg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Respect</div>
                </div>
            </div>
            <div class="item">
                <img src="Images/communityengagement.jpg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Community Engagement</div>
                </div>
            </div>
            <div class="item">
                <img src="Images/innovation.jpg">
                <div class="content">
                    <div class="author">Core Values</div>
                    <div class="title">Innovation</div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="Images/integritycv.jpeg">
                <div class="content">
                    <div class="title">
                        Integrity
                    </div>
                    <div class="description">
                        Core Values
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Images/expertisecv.jpg">
                <div class="content">
                    <div class="title">
                        Excellence
                    </div>
                    <div class="description">
                        Core Values
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Images/clientfocuscv.jpg">
                <div class="content">
                    <div class="title">
                        Client Focus
                    </div>
                    <div class="description">
                       Core Values
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Images/accountabilitycv.jpg">
                <div class="content">
                    <div class="title">
                        Accountability
                    </div>
                    <div class="description">
                       Core Values
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Images/collaboration.jpg">
                <div class="content">
                    <div class="title">
                        Collaboration
                    </div>
                    <div class="description">
                       Core Values
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Images/respect.jpeg">
                <div class="content">
                    <div class="title">
                        Respect
                    </div>
                    <div class="description">
                       Core Values
                    </div>
                </div>
             </div>
                <div class="item">
                <img src="Images/communityengagement.jpg">
                <div class="content">
                    <div class="title">
                        Community Engagement
                    </div>
                    <div class="description">
                       Core Values
                    </div>
                </div>
           </div>
                <div class="item">
                <img src="Images/innovation.jpg">
                <div class="content">
                    <div class="title">
                        Innovation
                    </div>
                    <div class="description">
                       Core Values
                    </div>
                </div>
            </div>

        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>


<!------------------end image slider------------------>

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

    <div class=" bg-white relative overflow-hidden">
  <!-- Services Heading -->
  <h4 class="text-3xl font-bold text-purple-900 text-center md:text-left px-6 md:px-10">
    Services
  </h4>

  <!-- Slider Wrapper -->
  <div id="services-slider" class="w-full pt-10 flex flex-col items-center md:items-start px-6 md:px-8 relative overflow-hidden">
    
    <!-- Slide Container -->
    <div id="slides" class="flex  transition-transform duration-500 ease-in-out w-full"
      style="transform: translateX(0%);">

      <!-- Section 1 -->
      <div class="grid grid-cols-1 pl-10 pr-10 sm:grid-cols-2 gap-8 w-full flex-shrink-0">
        <!-- Box 1 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Government Compliance</h3>
          <p class="text-justify text-base mt-4">
            Expert guidance on managing compliance and regulatory issues for local government sectors and public organizations.
          </p>
        </div>
        <!-- Box 2 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Taxation</h3>
          <p class="text-justify text-base mt-4">
            Support in meeting tax obligations, ensuring timely and compliant submissions.
          </p>
        </div>
        <!-- Box 3 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Bookkeeping</h3>
          <p class="text-justify text-base mt-4">
            Accurate and reliable outsourced accounting and bookkeeping services tailored to the needs of different industries.
          </p>
        </div>
        <!-- Box 4 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Accounting And Auditing</h3>
          <p class="text-justify text-base mt-4">
            Complete accounting and auditing services, including financial reporting, internal controls, and compliance with local and international standards.
          </p>
        </div>
      </div>

      <!-- Section 2 -->
      <div class="grid grid-cols-1 pl-10 pr-10 sm:grid-cols-2 gap-8 w-full flex-shrink-0 ">
        <!-- Box 5 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Business</h3>
          <p class="text-justify text-base mt-4">
          Assistance with securing permits and licenses, enabling new business owners to focus on their core operations.
          </p>
        </div>
        <!-- Box 6 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Due Dilligence</h3>
          <p class="text-justify text-base mt-4">
          Performing meticulous due diligence investigations, particularly in mergers, acquisitions, and other significant business transactions, ensuring clients are well-informed and protected against potential risks.
          </p>
        </div>
        <!-- Box 7 -->
        <div class="bg-[#4F2D7F] text-white px-8 py-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold">Management and Advisory Services</h3>
          <p class="text-justify text-base mt-4">
          Strategic consulting to enhance operational efficiency and financial performance.
          </p>
        </div>
     
      </div>

    </div>

    <!-- Pagination Dots -->
    <div class="flex space-x-3 mt-10 pb-10 justify-center w-full">
      <button id="dot1" class="w-4 h-4 rounded-full bg-blue-600"></button>
      <button id="dot2" class="w-4 h-4 rounded-full bg-gray-400 hover:bg-blue-600"></button>
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
  // Services Slider (dots navigation)
  const servicesSlider = document.getElementById('slides');
  const dot1 = document.getElementById('dot1');
  const dot2 = document.getElementById('dot2');

  dot1.addEventListener('click', () => {
    servicesSlider.style.transform = 'translateX(0%)';
    dot1.classList.add('bg-blue-600');
    dot1.classList.remove('bg-gray-400');
    dot2.classList.add('bg-gray-400');
    dot2.classList.remove('bg-blue-600');
  });

  dot2.addEventListener('click', () => {
    servicesSlider.style.transform = 'translateX(-100%)';
    dot2.classList.add('bg-blue-600');
    dot2.classList.remove('bg-gray-400');
    dot1.classList.add('bg-gray-400');
    dot1.classList.remove('bg-blue-600');
  });
</script>
<script src="app.js"></script>
</body>
</html>
