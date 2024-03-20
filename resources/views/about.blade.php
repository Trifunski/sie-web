<!DOCTYPE html>
<html lang="en">
  <x-head-component :title="'SIE - About Us'" />
  <body class="antialiased">
    <x-navbar-component title="SIE" />
    <div class="mx-auto flex max-w-screen-xl flex-col items-start px-8 lg:flex-row">
      <div class="mb-5 flex w-full flex-col items-start justify-center text-center md:mb-0 lg:w-6/12 lg:pt-24 lg:text-left">
        <h1 class="text-darken my-4 text-5xl font-bold leading-tight">Learn More <span class="text-yellow-500">About Us</span></h1>
        <p class="mb-8 text-2xl leading-normal">At SIE, we believe in the power of online education to transform lives.</p>
        <div class="w-full items-center justify-center md:flex md:space-x-5 lg:justify-start">
          <a href="/contact" class="transform rounded-full bg-yellow-500 px-9 py-4 text-xl font-bold text-white transition duration-300 ease-in-out hover:scale-110 focus:outline-none lg:mx-0">Contact Us</a>
        </div>
      </div>
      <div class="relative w-full lg:-mt-10 lg:w-6/12" id="team">
        <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20 mt-32 rounded-xl" src="https://plus.unsplash.com/premium_photo-1663134377392-50c34664d632?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Our Team" />
      </div>
    </div>

    <div class="my-40 container mx-auto max-w-screen-xl overflow-x-hidden px-4 text-gray-700 lg:px-8">
		<div>
			<div data-aos="flip-down" class="mx-auto max-w-screen-md text-center">
			<h1 class="mb-4 text-3xl font-bold">Our Mission at <span class="text-yellow-500"> SIE</span></h1>
			<p class="text-gray-500">To facilitate access to quality education through innovative and accessible platforms for everyone.</p>
			</div>
		</div>

		<div class="mt-24 flex flex-col items-center md:flex-row">
			<div data-aos="fade-right" class="md:w-1/2 lg:pl-16">
			<h1 class="text-darken text-3xl font-semibold lg:pr-56">Why <span class="text-yellow-500">Choose Us</span></h1>
			<p class="my-4 text-gray-500 lg:pr-32">We offer an intuitive platform, a wide range of courses, and a focus centered on the student.</p>
			</div>
			<img data-aos="fade-left" class="md:w-[400px] rounded-xl ml-8" src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Why Choose Us" />
		</div>
    </div>

	<div>
		<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
			<div class="lg:text-center">
				<h2 class="text-base font-semibold uppercase tracking-wide text-yellow-500">Our Values</h2>
				<p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">What Defines Us</p>
				<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">The foundation of our commitment to educational excellence.</p>
			</div>
			<div class="mt-10">
			<ul class="md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:gap-x-8 md:gap-y-10">
				<!-- Value: Integrity -->
				<x-value-card-component delay="300" aos="fade-up" title="Integrity" text="We act with honesty and transparency, maintaining coherence between what we say and do." />
				<!-- Value: Commitment -->
				<x-value-card-component delay="300" aos="fade-up" title="Commitment" text="We strive to fulfill our promises, always seeking the satisfaction of our students." />
				<!-- Value: Respect -->
				<x-value-card-component delay="300" aos="fade-up" title="Respect" text="We value diversity and promote an environment of mutual respect, where every person is heard and valued." />
				<!-- Value: Excellence -->
				<x-value-card-component delay="300" aos="fade-up" title="Excellence" text="We seek continuous improvement and quality in everything we do, aiming to exceed our students' expectations." />
			</ul>
		</div>
	</div>

    <div class="py-52">
      <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h2 class="text-base font-semibold uppercase tracking-wide text-yellow-500">Our Team</h2>
          <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">Meet the People Behind SIE</p>
          <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">A dedicated group of professionals passionate about education.</p>
        </div>

        <div class="mt-10">
			<ul class="md:grid md:grid-cols-3 md:gap-8">
				<x-team-member-card-component delay="300" aos="fade-down-right" name="Member Name" position="Role/Position" image="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" linkedin="#" />
				<x-team-member-card-component delay="300" aos="zoom-in-up" name="Member Name" position="Role/Position" image="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" linkedin="#" />
				<x-team-member-card-component delay="300" aos="fade-down-left" name="Member Name" position="Role/Position" image="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" linkedin="#" />
          	</ul>
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