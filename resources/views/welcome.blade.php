<!DOCTYPE html>
<html lang="en">
<x-head-component :title="'SIE'" />
<body class="antialiased">
	<x-navbar-component title="SIE" />

	<!-- Hero -->
	<section>
		<div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
			<!--Left Col-->
			<div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
				<h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-quaternary">
				@php
					$titleWords = explode(' ', $sections[0]['title']);
					$firstWord = array_shift($titleWords);
					$remainingWords = implode(' ', $titleWords);
				@endphp
				<span class="text-secondary">{{ $firstWord }}</span> {{ $remainingWords }}
				</h1>
				<p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-quinary text-2xl mb-8">{{ $sections[0]['description'] }}</p>
				<div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
					<a href="{{$sections[0]['button_url']}}" class="lg:mx-0 bg-quinary text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
						{{ $sections[0]['button_text'] }}
					</a>
				</div>
			</div>
			<!--Right Col-->
			<div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
				<img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="img/girl.png" />
				<!-- calendar -->
				<div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
					<img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/banderaEspaña.svg">
				</div>
				<!-- red -->
				<div data-aos="fade-up" data-aos-delay="400" data-aos-once="true" class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
				<img class="bg-opacity-80 h-20 sm:h-20" src="img/python.svg">
				</div>
				<!-- ux class -->
				<div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
					<img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="img/ux-class.svg" alt="">
				</div>
				<!-- congrats -->
				<div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
					<img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/congrat.svg" alt="">
				</div>
			</div>
		</div>
		<div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
			<svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="currentColor"></path>
			</svg>
			<div class="bg-white w-full h-20 -mt-px"></div>
		</div>
	</section>

	<!-- container -->
	<div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

		<!-- Empowering Future Generations -->
		<section class="max-w-4xl mx-auto">
			<h1 class="text-center mb-3 text-quaternary font-bold text-2xl">
				@php
					$titleWords = explode(' ', $sections[1]['title']);
					$firstWord = array_shift($titleWords);
					$remainingWords = implode(' ', $titleWords);
				@endphp
				<span class="text-secondary">{{ $firstWord }}</span> {{ $remainingWords }}
			</h1>
			<p class="text-center text-quinary">{{ $sections[1]['description'] }}</p>
			<div class="grid grid-cols-2 mt-14 lg:grid-cols-2 gap-4 justify-items-center">
				<a href="https://es.alg.academy/" target="_blank"><img class="h-7 filter grayscale opacity-70" src="img/company/logoAlgorithmics.svg" alt="Algorithmics Logo"></a>
				<a href="https://palabras-languageschool.com/" target="_blank"><img class="h-12 filter grayscale opacity-70" src="img/company/logoPalabras.png" alt="Palabras Logo"></a>
			</div>
		</section>

		<!-- Blending Languages and Tech -->
		<section class="sm:flex items-center sm:space-x-8 my-40">
			<div data-aos="fade-right" class="sm:w-1/2 relative">
				<div class="bg-primary rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"></div>
				<h1 class="font-semibold text-2xl relative z-50 text-quaternary lg:pr-10">
				@php
					$titleParts = explode(':', $sections[2]['title'], 2);
					$firstPart = $titleParts[0] . ':';
					$secondPart = count($titleParts) > 1 ? $titleParts[1] : '';
				@endphp

				<h1 class="font-semibold text-2xl relative z-50 text-quaternary lg:pr-10">
					{{ $firstPart }} <span class="text-secondary">{{ $secondPart }}</span>
				</h1>
				<p class="py-5 text-quinary lg:pr-32">{{ $sections[2]['description'] }}</p>
			</div>
			<div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
				<div class="floating w-24 h-24 absolute rounded-lg z-0 -top-3 -left-3 bg-quaternary"></div>
				<img class="rounded-xl z-40 relative" src="img/algorithmics-class.webp" alt="">
				<div class="bg-quaternary w-40 h-40 floating absolute rounded-lg z-10 -bottom-3 -right-3"></div>
			</div>
		</section>

		<!-- Coding Languages -->
		<section class="md:flex my-40 md:space-x-10 items-start">
			<div data-aos="fade-down" class="md:w-7/12 relative">
				<img class="relative z-50 floating" src="img/kv-test.png" alt="">
				<div style="background: #71c4ef;" class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
				<div style="background: #00668c;" class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
			</div>
			<div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-quinary">
				<h1 class="text-2xl font-semibold text-quaternary lg:pr-40"><span class="text-secondary">
				@php
					$titleParts = explode(':', $sections[3]['title'], 2);
					$firstPart = $titleParts[0] . ':';
					$secondPart = count($titleParts) > 1 ? $titleParts[1] : '';
				@endphp
				{{ $firstPart }}</span> {{ $secondPart }}</h1>
				<div class="flex items-center space-x-5 my-5">
					<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
						<x-icon class="text-quaternary" name="document" solid mini/>
					</div>
					<p>Python and JavaScript become foundational pillars in our curriculum.</p>
				</div>
				<div class="flex items-center space-x-5 my-5">
					<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
						<x-icon class="text-quaternary" name="briefcase" solid mini />
					</div>
					<p>HTML & CSS integrate to enhance web development skills.</p>
				</div>
				<div class="flex items-center space-x-5 my-5">
					<div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
						<x-icon class="text-quaternary" name="users" solid mini />
					</div>
					<p>Our platform ensures students excel in full-stack development.</p>
				</div>
			</div>
		</section>

		<!-- Palabras -->
		<section class="flex flex-col md:flex-row items-center md:space-x-10 my-40">
			<div data-aos="fade-right" class="md:w-1/2">
				<h1 class="text-quaternary font-semibold text-3xl lg:pr-56">
					@php
						$titleWords = explode(' ', $sections[4]['title']);
						$firstWord = array_shift($titleWords);
						$remainingWords = implode(' ', $titleWords);
					@endphp
					<span class="text-secondary">{{ $firstWord }}</span> {{ $remainingWords }}
				</h1>
        		<p class="text-quinary my-4 lg:pr-32">{{ $sections[4]['description'] }}</p>
				<a href="{{$sections[4]['button_url']}}">
					<button class="bg-quinary text-white text-sm font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out mt-5">
						{{ $sections[4]['button_text'] }}
					</button>
				</a>
			</div>
			<img data-aos="fade-left" class="md:w-1/2" src="img/hero_books.png">
		</section>

		<!-- Algorithmics -->
		<section class="my-40 flex flex-col-reverse md:flex-row items-center md:space-x-10">
			<div data-aos="fade-right" class="md:w-1/2">
				<img class="md:w-11/12" src="img/diseno.png">
			</div>
			<div data-aos="fade-left" class="md:w-6/12 md:transform md:-translate-y-20">
				<h1 class="font-semibold text-quaternary text-3xl">
				@php
						$titleWords = explode(' ', $sections[5]['title']);
						$firstWord = array_shift($titleWords);
						$remainingWords = implode(' ', $titleWords);
					@endphp
					<span class="text-secondary">{{ $firstWord }}</span> {{ $remainingWords }}
				</h1>
        		<p class="text-quinary my-5">{{ $sections[5]['description'] }}</p>
			</div>
		</section>

		<!-- Educational Innovation -->
		<section class="flex flex-col md:flex-row items-center my-40">
			<div data-aos="fade-right" class="md:w-5/12">
				<h1 class="text-quaternary font-semibold text-3xl leading-tight lg:pr-32">
					@php
						$titleWords = explode(' ', $sections[6]['title']);
						$firstWord = array_shift($titleWords);
						$remainingWords = implode(' ', $titleWords);
					@endphp
					<span class="text-secondary">{{ $firstWord }}</span> {{ $remainingWords }}
				</h1>
        		<p class="my-5 lg:pr-14">{{ $sections[6]['description'] }}</p>
			</div>
			<img data-aos="fade-left" class="md:w-7/12" src="img/gradebook.png">
		</section>

		<!-- Programming Languages -->
		<section class="my-40 flex flex-col md:flex-row items-center md:space-x-10">
			<div data-aos="zoom-in-right" class="md:w-6/12">
				<img class="md:w-8/12 mx-auto floating" src="img/integrations2.png">
			</div>
			<div data-aos="zoom-in-left" class="md:w-6/12">
				<div class="flex items-center space-x-20 mb-5">
					<span class="border border-gray-300 w-14 absolute"></span>
					<h1 class="text-gray-400 tracking-widest text-sm">PROGRAMMING LANGUAGES</h1>
				</div>
				@php
				$titleParts = explode(':', $sections[7]['title'], 2); // Divide en 2 partes usando ':'
				$firstPart = trim($titleParts[0]) . ':'; // Primer parte (antes de ':') + añadir ':' al final
				$secondPart = trim($titleParts[1] ?? ''); // Segunda parte (después de ':'), usa '??' para manejar casos sin ':'
				@endphp

				<h1 class="font-semibold text-quaternary text-2xl lg:pr-40">
				{{ $firstPart }} <span class="text-secondary">{{ $secondPart }}</span>
				</h1>

				<p class="text-quinary my-5 lg:pr-20">{{ $sections[7]['description'] }}</p>
			</div>
		</section>

		<!-- FAQ -->
		<section class="max-w-screen-xl mx-auto px-5 my-40 bg-white min-h-sceen">
			<div class="flex flex-col items-center">
				<h2 class="font-bold text-5xl mt-5 tracking-tight text-quaternary">
					{{ $sections[8]['title'] }}
				</h2>
				<p class="text-neutral-500 text-xl mt-3">
					{{ $sections[8]['description'] }}
				</p>
			</div>
			<div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
				<div class="py-5">
					<details class="group">
						<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
							<span> What is Algorithmics?</span>
							<span class="transition group-open:rotate-180">
						<svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
					</span>
						</summary>
						<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
							Algorithmics is a global platform that offers coding courses for students of all ages.
							We offer a wide range of courses in Python, JavaScript, HTML, and CSS to help students develop the skills they need to succeed in school, work, and life.
						</p>
					</details>
				</div>
				<div class="py-5">
					<details class="group">
						<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
							<span> What is Palabras?</span>
							<span class="transition group-open:rotate-180">
						<svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
					</span>
						</summary>
						<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
							Palabras is a language school that offers Spanish courses for students of all ages.
							We provide a wide range of courses to help students develop their language skills and achieve fluency in Spanish.
						</p>
					</details>
				</div>
				<div class="py-5">
					<details class="group">
						<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
							<span> How do I sign up for a course?</span>
							<span class="transition group-open:rotate-180">
						<svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
					</span>
						</summary>
						<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
							To sign up for a course, simply visit our website and select the course you're interested in.
							You can then create an account and enroll in the course of your choice.
						</p>
					</details>
				</div>
				<div class="py-5">
					<details class="group">
						<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
							<span> How do I access my course materials?</span>
							<span class="transition group-open:rotate-180">
						<svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
					</span>
						</summary>
						<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
							Once you've enrolled in a course, you can access your course materials by logging into your account on our website.
							From there, you'll be able to view and download all of the materials for your course.
						</p>
					</details>
				</div>
			</div>
		</section>

		<!-- Call to Action -->
		<section class="flex my-40 gap-10 py-10 rounded-2xl items-center justify-center bg-quinary">
			<div class="flex-col">
				<h1 class="text-quaternary font-semibold text-3xl">Ready to <span class="text-white">Get Started?</span></h1>
			</div>
			<a href="/contact">
				<button class=" bg-quaternary text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
					Contact us
				</button>
			</a>
		</section>

	</div>

	<!-- Footer -->
	<x-footer-component />

	<!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    	AOS.init();
    </script>

</body>
</html>