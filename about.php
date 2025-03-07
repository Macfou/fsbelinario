<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Your Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
    .carousel-track {
      transition: transform 0.5s ease-in-out;
    }
  </style>

</head>
<body class="bg-white">

    <?php include 'navbar.php'; ?>


    <!----------banne--------->

    <div class="relative w-full min-h-[400px] md:h-[350px] text-white">
  
        <!-- Background Image with Purple Overlay -->
        <div class="absolute inset-0">
          <img src="Images/aboutus.png" alt="Background" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-purple-800 opacity-70"></div>
        </div>
      
        <!-- Content -->
        <div class="relative z-10 flex flex-col md:flex-row items-center md:items-stretch max-w-7xl mx-auto px-6 py-10 md:py-8 h-full space-y-6 md:space-y-0">
      
          <!-- About Us Text -->
          <div class="w-full md:w-1/2 flex flex-col justify-center space-y-4 text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-bold">About Us</h2>
            <p class="text-base md:text-xl leading-relaxed text-justify">
              Felomino S. Belinario &amp; Associates is a distinguished accounting and consulting firm based in the Philippines, established on April 15, 1982. Located at 920 Remedios St., Malate, Manila, our firm has built a solid reputation for delivering exceptional accounting, auditing, and consulting services to a diverse clientele across various industries.
            </p>
          </div>
      
          <!-- Features -->
          <div class="w-full md:w-1/2 grid grid-cols-2 gap-4">
            
            <!-- Feature 1 -->
            <div class="flex flex-col items-center text-center space-y-2">
              <img src="Images/icon/expreriencedicon.png" alt="Experienced Professionals" class="w-14 h-14">
              <span class="text-sm md:text-lg font-medium">Experienced Professionals</span>
            </div>
      
            <!-- Feature 2 -->
            <div class="flex flex-col items-center text-center space-y-2">
              <img src="Images/icon/yearsicon.png" alt="37+ Years Experience" class="w-14 h-14">
              <span class="text-sm md:text-lg font-medium">37+ Years Experience</span>
            </div>
      
            <!-- Feature 3 -->
            <div class="flex flex-col items-center text-center space-y-2">
              <img src="Images/icon/accountingicon.png" alt="Accounting Solutions" class="w-14 h-14">
              <span class="text-sm md:text-lg font-medium">Accounting Solutions</span>
            </div>
      
            <!-- Feature 4 -->
            <div class="flex flex-col items-center text-center space-y-2">
              <img src="Images/icon/valuableicon.png" alt="Valuable Services" class="w-14 h-14">
              <span class="text-sm md:text-lg font-medium">Valuable Services</span>
            </div>
      
          </div>
        </div>
      </div>
      
      
      

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

    <!--------------mission visionnnnnnnnnn-->

    <section class="bg-purple-800 text-white py-12">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 text-center md:text-left">
      
          <!-- Mission -->
          <div>
            <h2 class="text-4xl font-bold mb-4">Mission</h2>
            <p class="text-xl text-justify leading-relaxed">
              We aim to provide high-quality, client-focused services that exceed expectations. Our goal is to deliver accurate, timely, and insightful solutions while upholding the highest standards of professionalism and ethics. We are dedicated to continuous improvement and contributing positively to the communities we serve.
            </p>
          </div>
      
          <!-- Vision -->
          <div>
            <h2 class="text-4xl font-bold mb-4">Vision</h2>
            <p class="text-xl text-justify leading-relaxed">
              To be the leading accounting and consulting firm in the Philippines, renowned for our unwavering commitment to excellence, integrity, and innovation, and to empower businesses to achieve sustainable growth and success.
            </p>
          </div>
      
        </div>
      </section>

      <!--------senior partner and founder------>

      <section class="bg-white py-16 px-6">
        <div class="max-w-5xl mx-auto">
      
          <!-- Title -->
          <h2 class="text-2xl md:text-3xl font-bold text-center text-purple-800 mb-10">
            Senior Partner And Founder
          </h2>
      
          <!-- Image and First Paragraph -->
          <div class="flex flex-col md:flex-row items-end gap-8 mb-8">
      
            <!-- Image -->
            <div class="flex-shrink-0">
              <img src="Images/fsbelinario.jpg" alt="Founder Photo" class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-4 border-purple-800">
            </div>
      
            <!-- First Paragraph -->
            <div class="text-sm leading-relaxed text-gray-700 text-justify">
              <p>
                Dr. Felomino S. Belinario is a highly respected academician with over 25 years of distinguished service in the field of accountancy education. A seasoned lecturer, CPA reviewer, and former department head of the BS Accountancy Department, Dr. Belinario currently serves as the head of the Accounting Department at the University of Makati (UMAK).
              </p>
            </div>
      
          </div>
      
          <!-- Remaining Paragraphs -->
          <div class="text-sm leading-relaxed text-gray-700 space-y-4 text-justify">
            <p>
              Belinario holds both a Master’s in Business Administration and a Doctor of Philosophy in Business Management from Manuel L. Quezon University (MLQU). His academic journey also includes teaching stints at esteemed institutions such as Sta. Isabel College and Concordia College. From 1998 to 2000, he served as the director of the Association of Certified Public Accountants in Education, further solidifying his leadership within the academe. Today, he remains an active and influential member of the Philippine Institute of Certified Public Accountants (PICPA).
            </p>
            <p>
              Throughout his tenure at UMAK, Dr. Belinario has been recognized for his excellence in teaching and contributions to the academic community. Notably, he was named Outstanding Professor of the College of Business Administration for the academic year 2010-2011. His scholarly achievements include being a recipient of the prestigious Book Author Award during the “Pagpupugay sa Mga Manunulat ng Unibersidad” at the 110th and 111th Civil Service Celebrations.
            </p>
            <p>
              Additionally, his contributions to the field have been acknowledged with the “Golden Wheel Consumers’ Choice Award” at the CBA Awards Night. Driven by his passion for equipping the next generation of accountants, Dr. Belinario authored the book “Introductory Accounting Part 1: Partnership and Corporation Accounting” and co-authored “Cost Accounting and Cost Management: Concepts, Principles, and Applications,” both of which have become invaluable resources for students preparing for the CPA Board Exams.
            </p>
            <p>
              Beyond his academic accomplishments, Dr. Belinario is a seasoned public practitioner with over 28 years of experience. His expertise extends to consulting, accounting, and auditing for various private companies and accounting firms across Metro Manila. He is accredited by the Securities and Exchange Commission as an external auditor, the Board of Accountancy, the Bureau of Internal Revenue as a tax practitioner, and the Cooperative Development Authority as a cooperative external auditor.
            </p>
            <p>
              Dr. Belinario’s career is a testament to his unwavering commitment to the accountancy profession, both as an educator and as a practitioner. His contributions continue to shape the future of accountancy in the Philippines.
            </p>
          </div>
      
        </div>
      </section>
      
      <!----------------partner-------->

      <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto bg-purple-100 rounded-xl shadow-md p-6 md:p-10 flex flex-col md:flex-row md:items-center md:gap-10">
      
          <!-- Text Content -->
          <div class="w-full md:w-[60%] text-gray-800 text-sm md:text-base leading-relaxed text-justify px-10">
            <h2 class="text-2xl font-bold text-purple-800 mb-4">Partner</h2>
            <p>
              Ellen Bello-De Guzman is a distinguished Certified Public Accountant with over four decades of experience, recognized for her significant contributions to the accounting profession and non-profit sector. She earned her Bachelor of Science in Commerce, majoring in Accountancy, from the Polytechnic University of the Philippines and is currently completing her MBA at the University of Makati. Ellen's academic foundation also includes an Associate in Commercial Science from the same institution.
            </p>
            <p class="mt-4">
              Her professional journey is marked by extensive affiliations and leadership roles. Ellen has been a pivotal figure in the Philippine Institute of Certified Public Accountants (PICPA), where she has held various positions, including Assistant Secretary, Secretary, and Chair of critical committees such as the NGO Development Summit and the PCNC Accreditation Committee. Her involvement extends to the Philippine Management Association of the Philippines (PMAP) and her role as an evaluator for the Philippine Council for NGO Certification (PCNC). She has previously been a member of the Association of Certified Public Accountants in Commerce and Industry (ACPACI), the Association of Certified Public Accountants in the Philippines (ACAPPI), and the Institute of Internal Auditors – Philippines (IIA-Phi).
            </p>
          </div>
      
          <!-- Image -->
          <div class="w-full md:w-[40%] mt-8 md:mt-0 flex justify-center px-10">
            <img src="Images/partner.png" alt="Partner Photo" class="w-95 h-60 ">
          </div>
      
        </div>
      </section>

      <!-----------out team--------->
      
      <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-6">
          
          <!-- Section Title -->
          <div class="pl-1 mb-2">
            <h2 class="text-3xl text-left font-bold text-purple-800">Our Team</h2>
          </div>
          
          <div class="mt-2 pl-1 px-10">
            <hr class="border-t-4 border-purple-800">
          </div>
      
          <!-- Section Description -->
          <p class="text-left pt-5 text-gray-600 mb-10 text-xl md:text-base leading-relaxed">
            Led by Dr. Felomino S. Belinario, a seasoned professional with extensive experience in academia and public practice, and supported by a team of skilled associates, we are dedicated to delivering outstanding results and providing exceptional client service.
          </p>
      
          <!-- Team Grid -->
          <div class="grid grid-cols-1 pt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/fsbelinario.jpg" alt="Dr Felomino Belinario" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Dr Felomino Belinario</h3>
              <p class="text-sm  font-bold text-gray-600">Senior Auditor</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/gabrillo.jpg" alt="Reyvelyn Gabrillo" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Reyvelyn Gabrillo</h3>
              <p class="text-sm font-bold text-gray-600">Audit Manager</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/ore.jpg" alt="Vladimir B. Ore MBA, CPA" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Vladimir B. Ore MBA, CPA</h3>
              <p class="text-sm font-bold text-gray-600">Field Audit Consultant</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/soguilon.jpg" alt="Mary Ann Sougilion" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Mary Ann Sougilion</h3>
              <p class="text-sm font-bold text-gray-600">Audit Supervisor</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/marco.jpg" alt="Shirlyn Marco" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Shirlyn Marco</h3>
              <p class="text-sm font-bold text-gray-600">Audit Staff</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/leonardo.jpg" alt="Jantzen Leonardo" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Jantzen Leonardo</h3>
              <p class="text-sm font-bold text-gray-600">Audit Staff</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/arlos.jpg" alt="Anna Marie G. Arlos" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Anna Marie G. Arlos</h3>
              <p class="text-sm font-bold text-gray-600">Logistic Staff</p>
            </div>
      
            <!-- Team Member -->
            <div class="text-center">
              <img src="Images/team/accad.jpg" alt="Francis Accad" class="w-full h-60 object-cover rounded-lg shadow-md mb-4">
              <h3 class="font-bold text-purple-800">Francis Accad</h3>
              <p class="text-sm font-bold text-gray-600">Audit Staff</p>
            </div>
      
          </div>
        </div>
      </section>

      <!-------organizational chart------>

        
  
  
<!-- Title -->
<h2 class="text-2xl md:text-3xl font-bold  bg-white text-purple-800 text-left pl-10 mb-5">
    Organizational Chart
  </h2>
  
  <!-- Horizontal Line -->
  <hr class="border-t-2 bg-white border-purple-800 mx-10 mb-10">
  
  <!-- Full Screen Image without cutoff -->
  <section class="w-full  flex justify-center items-center bg-white px-10">
    <img src="Images/orgchart.png" 
         alt="Organizational Chart" 
         class="max-h-full max-w-full object-contain">
  </section>
  
      
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
