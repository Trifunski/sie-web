<!DOCTYPE html>
<html lang="en">
  <x-head-component :title="'SIE - About Us'" />
  <body class="antialiased">
    <x-navbar-component title="SIE" />

	    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

			<!-- About Us -->
			<div class="my-24">
				<h1 class="text-center text-quaternary font-semibold text-3xl">About <span class="text-secondary">Us</span></h1>
				<p class="text-center text-quinary mt-3">Global platform with Spanish and coding courses for all. Unlock your digital potential with us!</p>
				<div class="flex justify-center mt-10">
					<img class="w-96" src="img/about-us.png" alt="">
				</div>
			</div>

			<!-- Our Purpose -->
			<div class="my-24 flex flex-col md:flex-row items-center md:space-x-10">
				<div data-aos="zoom-in-right" class="md:w-6/12">
					<img class="md:w-8/12 mx-auto" src="img/integrations.png">
				</div>
				<div data-aos="zoom-in-left" class="md:w-6/12">
					<div class="flex items-center space-x-20 mb-5">
						<span class="border border-gray-300 w-14 absolute"></span>
						<h1 class="text-gray-400 tracking-widest text-sm">Our Purpose</h1>
					</div>
					<h1 class="font-semibold text-quaternary text-2xl lg:pr-40">Empowering students to succeed <br>in the <span class="text-secondary">digital age</span></h1>
					<p class="text-quinary my-5 lg:pr-32">Our mission is to provide students with the tools and resources they need to thrive in today's digital world. We offer a wide range of courses in Spanish and coding to help students develop the skills they need to succeed in school, work, and life.</p>
				</div>
			</div>

			<!-- What We Offer -->
			<div class="md:flex my-25 md:space-x-10 items-start">
				<div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-quinary">
					<h1 class="text-2xl font-semibold text-quaternary lg:pr-40"><span class="text-secondary">Coding Languages:</span> The Core of Modern Education</h1>
					<div class="flex items-center space-x-5 my-5">
						<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
							<svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="11.8182" height="11.8182" rx="2" fill="#00668c"/>
								<rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#00668c"/>
								<rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#00668c"/>
								<rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#71c4ef"/>
							</svg>
						</div>
						<p>Python and JavaScript become foundational pillars in our curriculum.</p>
					</div>
					<div class="flex items-center space-x-5 my-5">
						<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
							<svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="8" y="6" width="20" height="20" rx="2" fill="#00668c"/>
								<rect width="21.2245" height="21.2245" rx="2" fill="#71c4ef"/>
							</svg>
						</div>
						<p>HTML & CSS integrate to enhance web development skills.</p>
					</div>
					<div class="flex items-center space-x-5 my-5">
						<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
							<svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z" fill="#00668c"/>
							</svg>
						</div>
						<p>Our platform ensures students excel in full-stack development.</p>
					</div>
				</div>
				<div data-aos="fade-down" class="md:w-7/12 relative">
					<img class="relative z-50 floating" src="img/kv-test.png" alt="">
					<div style="background: #71c4ef;" class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
					<div style="background: #00668c;" class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
				</div>
			</div>
			
			<!-- FAQ -->
			<div class="my-24">
				<h1 class="text-center text-quaternary font-semibold text-3xl">Frequently Asked <span class="text-secondary">Questions</span></h1>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
					<div data-aos="fade-right" class="bg-white shadow-lg rounded-lg p-5">
						<h1 class="text-quaternary font-semibold text-xl">What is the age range for your courses?</h1>
						<p class="text-quinary mt-3">Our courses are designed for students of all ages, from children to adults. We offer a wide range of classes tailored to different age groups and skill levels.</p>
					</div>
					<div data-aos="fade-left" class="bg-white shadow-lg rounded-lg p-5">
						<h1 class="text-quaternary font-semibold text-xl">How do I enroll in a course?</h1>
						<p class="text-quinary mt-3">Enrolling in a course is simple! Visit our website to browse our course offerings and select the class that best fits your interests and schedule. From there, you can register online and begin your learning journey with us.</p>
					</div>
					<div data-aos="fade-right" class="bg-white shadow-lg rounded-lg p-5">
						<h1 class="text-quaternary font-semibold text-xl">What sets your platform apart from others?</h1>
						<p class="text-quinary mt-3">Our platform offers a unique blend of language and tech education, combining the best of both worlds to provide students with a comprehensive learning experience. We prioritize innovation, engagement, and personalized support to help students succeed.</p>
					</div>
					<div data-aos="fade-left" class="bg-white shadow-lg rounded-lg p-5">
						<h1 class="text-quaternary font-semibold text-xl">Do you offer scholarships or financial aid?</h1>
						<p class="text-quinary mt-3">Yes, we offer scholarships and financial aid to eligible students. Our goal is to make education accessible to all learners, regardless of their financial circumstances. Please contact us for more information on available scholarships and aid programs.</p>
					</div>
				</div>
			</div>
		
		</div>

    <x-footer-component />

    <!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>