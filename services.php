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

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

       <!--------banner-------->
       <div class="relative h-72">
        <img src="Images/services.png" alt="Our Expertise Background" class="absolute inset-0 w-full h-full object-cover">
        
        <!-- Remove h-72 here to match the parent's height -->
        <div class="absolute inset-0 bg-[#AD0AFF] bg-opacity-60  flex items-center justify-center">
          <div class="text-center text-white px-6">
            <h2 class="text-4xl font-extrabold text-left">Our Expertise</h2>
            <p class="mt-4 text-xl sm:text-xl text-left font-medium leading-relaxed">
              With over four decades of experience, our firm specializes in <br>
              providing a comprehensive range of services including:
            </p>
          </div>
        </div>
      </div>
      
  
          
   

    <!-- Main Content -->
   <!-- Main container -->
<div class="flex flex-col items-center bg-white py-12 px-6">

    <!-- Grid for the first 6 cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-7xl">
  
      <!-- Card 1 -->
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2">Government Compliance</h3>
        <p class="text-base leading-relaxed">
          We provide certainty and clarity to the local government sector and the public by expertly managing and guiding contracts and compliance issues. Our team ensures that your organization meets all government regulations and standards, reducing risks and enhancing transparency.
        </p>
      </div>
  
      <!-- Card 2 -->
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2">Taxation</h3>
        <p class="text-base leading-relaxed">
          Tax compliance can be daunting, but we make it easier. Our team provides comprehensive assistance to business owners in meeting their tax obligations, ensuring timely submissions and reducing the risk of penalties.
        </p>
      </div>
  
      <!-- Card 3 -->
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2">Bookkeeping</h3>
        <p class="text-base leading-relaxed">
          With over half a decade of experience, we specialize in providing outsourced accounting and bookkeeping services. Our meticulous approach ensures that your financial records are accurate, up-to-date, and compliant with current regulations.
        </p>
      </div>
  
      <!-- Card 4 -->
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2">Accounting And Auditing</h3>
        <p class="text-base text-lg leading-relaxed">
          Whether your company is newly registered or established, we offer complete accounting and auditing services. From preparing and submitting financial reports and tax returns to conducting mandatory audits, we’ve got you covered.
        </p>
      </div>
  
      <!-- Card 5 -->
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2">Business Services</h3>
        <p class="text-base leading-relaxed">
          Starting a new business can be overwhelming, especially when it comes to navigating the complex landscape of permits and regulatory requirements. We assist new business owners every step of the way, ensuring smooth operations.
        </p>
      </div>
  
      <!-- Card 6 -->
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2">Management Advisory Services</h3>
        <p class="text-base leading-relaxed">
          Our management advisory services are designed to provide strategic advice and solutions that enhance your organization’s operations and financial performance. As trusted consultants, we deliver results-driven insights.
        </p>
      </div>
  
    </div>
  
    <!-- Centered Due Diligence card -->
    <div class="mt-10 w-full max-w-md">
      <div class="bg-purple-700 text-white p-6 rounded-2xl shadow-md min-h-[220px]">
        <h3 class="text-xl font-bold mb-2 text-center">Due Diligence</h3>
        <p class="text-base leading-relaxed text-center">
          We conduct thorough due diligence to help you make informed decisions. Our comprehensive assessments cover financial, operational, and regulatory aspects, providing you with critical insights and risk evaluations.
        </p>
      </div>
    </div>
  
  </div>


  <!------------>

  <div class="bg-white py-12 px-6">
    <!-- Heading with line -->
    <h2 class="text-3xl font-bold ml-20 text-[#AD0AFF] mb-2 text-left">Fields We Serve</h2>
    <hr class="border-t-2 border-[#AD0AFF] my-4 ml-20 mr-20">

    <!-- First Section -->
    <div id="section1" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 max-w-7xl mx-auto mt-10">
        <!-- Item 1 -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/start up.png" alt="Start-ups Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">Start-ups</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
                SFelomino S. Belinario & Associates supports start-ups with comprehensive accounting, auditing, and consulting services tailored to the unique challenges faced by new businesses. From initial setup and compliance to ongoing financial management and strategic planning, we provide the expertise and guidance needed to help start-ups establish a solid foundation and achieve sustainable growth.
            </p>
        </div>

        <!-- Item 2 -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/ngo.png" alt="Manufacturing Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">Manufacturing</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
            We assist manufacturing companies with cost accounting, inventory valuation, and regulatory compliance. Our services support manufacturers in managing production costs, analyzing financial performance, and ensuring adherence to industry standards and regulations, helping them improve operational efficiency and financial performance.
            </p>
        </div>

        <!-- Item 3 -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/retail.png" alt="Retail Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">Retail</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
            Our firm offers specialized services for retail businesses, including inventory management, sales tax compliance, and financial reporting. We help retail clients optimize their financial operations, manage cash flow, and adhere to industry regulations, enabling them to enhance profitability and streamline their business processes.
            </p>
        </div>

        <!-- Item 4 -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/school.png" alt="Schools Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">Schools</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
            Educational institutions benefit from our expertise in managing budgets, financial reporting, and regulatory compliance. We assist schools in maintaining accurate financial records, managing tuition and funding, and ensuring adherence to educational regulations, supporting their mission to provide quality education.
            </p>
        </div>
    </div>

    <!-- Second Section -->
    <div id="section2" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 max-w-7xl mx-auto mt-10">
        <!-- NGOs -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/ngo.png" alt="NGOs Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">NGOs</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
            We offer specialized support to NGOs, including compliance with regulatory requirements, financial reporting, and grant management. Our services are designed to help NGOs manage their finances effectively, ensure transparency, and achieve their mission-driven goals while adhering to relevant laws and standards.
            </p>
        </div>

        <!-- Cooperatives -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/coopicon.jpg" alt="Cooperatives Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">Cooperatives</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
            <span class="font-bold">Felomino S. Belinario & Associates </span>offers specialized services to cooperatives, including financial management, compliance with cooperative regulations, and member reporting. We assist cooperatives in managing their finances, ensuring regulatory compliance, and supporting their cooperative principles and goals.
            </p>
        </div>

        <!-- Exporter-Importer -->
        <div class="flex flex-col items-center text-center">
            <img src="Images/icon/importicon.png" alt="Exporter-Importer Icon" class="w-20 h-20 mb-4">
            <h3 class="text-2xl font-bold text-purple-700 mb-3">Exporter-Importer</h3>
            <p class="text-base text-gray-600 leading-relaxed text-justify">
            For businesses engaged in international trade, <span class="font-bold"> Felomino S. Belinario & Associates </span> provides expertise in customs compliance, import-export regulations, and foreign currency transactions. We help exporters and importers navigate the complexities of international trade, manage trade-related risks, and ensure accurate financial reporting.
            </p>
        </div>

        <!-- Add another if needed -->
    </div>

    <!-- Navigation Dots -->
    <div class="flex space-x-3 mt-10 pb-10 justify-center w-full">
        <button id="dot1" class="w-4 h-4 rounded-full bg-blue-600"></button>
        <button id="dot2" class="w-4 h-4 rounded-full bg-gray-400 hover:bg-blue-600"></button>
    </div>
</div>

<script>
    const dot1 = document.getElementById('dot1');
    const dot2 = document.getElementById('dot2');
    const section1 = document.getElementById('section1');
    const section2 = document.getElementById('section2');

    dot1.addEventListener('click', () => {
        section1.classList.remove('hidden');
        section2.classList.add('hidden');
        dot1.classList.add('bg-blue-600');
        dot2.classList.remove('bg-blue-600');
        dot2.classList.add('bg-gray-400');
    });

    dot2.addEventListener('click', () => {
        section1.classList.add('hidden');
        section2.classList.remove('hidden');
        dot2.classList.add('bg-blue-600');
        dot1.classList.remove('bg-blue-600');
        dot1.classList.add('bg-gray-400');
    });
</script>

  <!---------what sets as apart------>

  <div class="bg-purple-800 py-16 px-6">
  <!-- Heading -->
  <h2 class="text-4xl font-bold text-white mb-6 text-left">What Sets Us Apart</h2>
  <div class="h-1 bg-white mx-20 mb-12"></div>

  <!-- Slider Container -->
  <div id="whatSetsUsApartSlider" class="overflow-hidden relative max-w-7xl mx-auto">
    <div id="whatSetsUsApartWrapper" class="flex transition-transform duration-500">

      <!-- Section 1 -->
      <div class="min-w-full grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/expertise.png" alt="Expertise and Experience" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Expertise and Experience</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            With over four decades in the industry, Felomino S. Belinario & Associates offers unparalleled expertise in accounting, auditing, and consulting. Our team, led by industry veteran Dr. Felomino S. Belinario, brings a wealth of experience and deep knowledge to every client engagement.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/professionak.png" alt="Strong Professional Network" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Strong Professional Network</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            Our firm has established valuable relationships with regulatory bodies and industry associations, including the Philippine Institute of Certified Public Accountants (PICPA) and the Philippine Council for NGO Certification (PCNC). These connections enable us to provide informed and effective guidance.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/community.png" alt="Community Involvement" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Community Involvement</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            We are committed to making a positive impact through active community engagement and social responsibility initiatives. Our involvement in local and national organizations reflects our dedication to contributing to societal development.
            </p>
          </div>
        </div>
      </div>

      <!-- Section 2 -->
      <div class="min-w-full grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/compre.jpg" alt="Comprehensive Service Offering" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Comprehensive Service Offering</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            We provide a full spectrum of services, including government compliance, bookkeeping, business services, taxation, accounting, auditing, and management advisory. This broad range ensures that all your financial and compliance needs are met under one roof.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/commit.jpg" alt="Commitment to Excellence" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Commitment to Excellence</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            Our firm is dedicated to delivering high-quality, client-focused services. We adhere to the highest standards of professionalism and ethics, ensuring that our solutions are accurate, timely, and insightful.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/tailored.jpg" alt="Tailored Solutions" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Tailored Solutions</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            We recognize that each client is unique. Our personalized approach ensures that we address specific challenges and opportunities, delivering customized solutions that align with your goals and objectives.
            </p>
          </div>
        </div>
      </div>

      <!-- Section 3 -->
      <div class="min-w-full grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/client.jpg" alt="Client-Centric Approach" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Client-Centric Approach</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            At Felomino S. Belinario & Associates, our clients are at the heart of everything we do. We take the time to understand your unique needs and tailor our services to provide solutions that drive your success.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/track.jpg" alt="Track Record of Success" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Track Record of Success</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            Our longstanding reputation and numerous successful engagements speak to our ability to consistently deliver results. Our clients trust us for our reliability, professionalism, and dedication to their success.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[600px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/innovative.jpg" alt="Innovative Solutions" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Innovative Solutions</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            We embrace technological advancements and innovative practices to enhance our service delivery and operational efficiency. Our proactive approach helps clients stay ahead in a rapidly evolving business environment.
            </p>
          </div>
        </div>
      </div>

      <!-- Section 4 -->
      <div class="min-w-[400px] flex justify-center">
      <div class="bg-white rounded-2xl shadow-md flex flex-col min-h-[200px] overflow-hidden">
          <div class="w-full h-52">
            <img src="Images/wsa/hollistic.jpg" alt="Holistic Approach" class="w-full h-full object-cover">
          </div>
          <div class="p-8 flex flex-col flex-1">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 text-center">Holistic Approach</h3>
            <p class="text-lg text-gray-600 leading-relaxed text-justify">
            We don’t just provide services; we build partnerships. Our holistic approach means we work alongside you to understand your broader business context and deliver solutions that support your overall strategy and growth.
  </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Navigation Dots -->
  <div class="flex justify-center mt-10 space-x-2">
    <button class="dot bg-purple-900 w-4 h-4 rounded-full" onclick="goToSlide(0)"></button>
    <button class="dot bg-gray-300 w-4 h-4 rounded-full" onclick="goToSlide(1)"></button>
    <button class="dot bg-gray-300 w-4 h-4 rounded-full" onclick="goToSlide(2)"></button>
    <button class="dot bg-gray-300 w-4 h-4 rounded-full" onclick="goToSlide(3)"></button>
  </div>
</div>
<script>
function goToSlide(slideIndex) {
  const wrapper = document.getElementById('whatSetsUsApartWrapper');
  wrapper.style.transform = `translateX(-${slideIndex * 100}%)`;
}
</script>

  
   <!--------------------  slider-- -->

   <div class="relative w-full h-[70vh] overflow-hidden">

  <!-- Carousel Wrapper -->
  <div id="carousel" class="flex h-full carousel-track">

    <!-- Slide 1 -->
    <div class="flex w-full h-full flex-shrink-0">

      <!-- Integrity -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/integrity.png" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Integrity</span>
          <span class="text-xs">→</span>
        </div>
      </div>

      <!-- Excellence -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/excellence.png" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Excellence</span>
          <span class="text-xs">→</span>
        </div>
      </div>

      <!-- Client Focus -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/clientfocus.png" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Client Focus</span>
          <span class="text-xs">→</span>
        </div>
      </div>

      <!-- Accountability -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/accountablity.png" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Accountability</span>
          <span class="text-xs">→</span>
        </div>
      </div>

    </div>

    <!-- Slide 2 -->
    <div class="flex w-full h-full flex-shrink-0">

      <!-- Collaboration -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/collaboration.jpg" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Collaboration</span>
          <span class="text-xs">→</span>
        </div>
      </div>

      <!-- Respect -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/respect.jpeg" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Respect</span>
          <span class="text-xs">→</span>
        </div>
      </div>

      <!-- Community Engagement -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/communityengagement.jpg" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Community Engagement</span>
          <span class="text-xs">→</span>
        </div>
      </div>

      <!-- Innovation -->
      <div class="group w-1/4 h-full relative">
        <img src="Images/innovation.jpg" class="w-full h-full object-cover">
        <div class="absolute bottom-4 left-4 flex items-center space-x-2 text-white">
          <span class="text-base font-semibold">Innovation</span>
          <span class="text-xs">→</span>
        </div>
      </div>

    </div>

  </div>

  <!-- Navigation Arrows -->
  <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-purple-800 text-4xl hover:scale-110 transition">
    &#10094;
  </button>
  <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-purple-800 text-4xl hover:scale-110 transition">
    &#10095;
  </button>

</div>

<script>
  const carousel = document.getElementById('carousel');
  const totalSlides = 2;
  let currentSlide = 0;

  function updateSlidePosition() {
    carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlidePosition();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlidePosition();
  }
</script>

  

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
