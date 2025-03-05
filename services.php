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
  
    <!-- Content Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 max-w-7xl mx-auto mt-10">
  
      <!-- Item 1 -->
      <div class="flex flex-col items-center text-center">
        <img src="Images/icon/start up.png" alt="Start-ups Icon" class="w-20 h-20 mb-4">
        <h3 class="text-2xl font-bold text-purple-700 mb-3">Start-ups</h3>
        <p class="text-base text-gray-600 leading-relaxed text-justify">
          Salvador & Salvatica & Associates supports start-ups with comprehensive accounting, auditing, and consulting services tailored to the unique challenges faced by new businesses. From initial setup and compliance to ongoing financial management and strategic planning, we provide the expertise and guidance needed to help start-ups establish a solid foundation and achieve sustainable growth.
        </p>
      </div>
  
      <!-- Item 2 -->
      <div class="flex flex-col items-center text-center">
        <img src="Images/icon/ngo.png" alt="Manufacturing Icon" class="w-20 h-20 mb-4">
        <h3 class="text-2xl font-bold text-purple-700 mb-3">Manufacturing</h3>
        <p class="text-base text-gray-600 leading-relaxed text-justify">
          We assist manufacturing companies with cost accounting, inventory valuation, and regulatory compliance. Our services support manufacturers in managing production costs, analyzing financial performance, and ensuring they operate within professional standards and regulations, helping them improve operational efficiency and financial performance.
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
  </div>
  
  <!---------what sets as apart------>

  <div class="bg-purple-800 py-16 px-6">
    <!-- Heading -->
    <h2 class="text-4xl font-bold text-white mb-6 text-left">What Sets Us Apart</h2>
    <div class="h-1 bg-white mx-20 mb-12"></div>
  
    <!-- Cards Container -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
  
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
  
    <!-- Dots Indicator -->
    <div class="flex justify-center mt-10 space-x-2">
      <span class="w-4 h-4 bg-purple-900 rounded-full"></span>
      <span class="w-4 h-4 bg-gray-300 rounded-full"></span>
      <span class="w-4 h-4 bg-gray-300 rounded-full"></span>
    </div>
  </div>

  
  <!---------slide show-------->

  <div class="relative w-full h-[70vh] overflow-hidden">

    <!-- Four Images in Each Quarter with Text at Bottom Left -->
    <div class="absolute inset-0 flex">

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

    <!-- Vertical Dividing Lines -->
    <div class="absolute inset-y-0 left-1/4 w-[3px] bg-black"></div>
    <div class="absolute inset-y-0 left-1/2 w-[3px] bg-black"></div>
    <div class="absolute inset-y-0 left-3/4 w-[3px] bg-black"></div>

    <!-- Navigation Arrows -->
    <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white text-4xl hover:scale-110 transition">
        &#10094;
    </button>
    <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-4xl hover:scale-110 transition">
        &#10095;
    </button>

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
