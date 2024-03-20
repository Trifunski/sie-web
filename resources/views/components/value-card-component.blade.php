<!-- 
    Example: 

    <li data-aos="fade-up" data-aos-delay="300">
	<div class="flex">
		<div class="flex-shrink-0">
			<div class="flex h-12 w-12 items-center justify-center rounded-md bg-yellow-500 text-white">
				<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
			</div>
		</div>
		<div class="ml-4">
			<h4 class="text-lg font-medium leading-6 text-gray-900">Integridad</h4>
			<p class="mt-2 text-base text-gray-500">Actuamos con honestidad y honor sin comprometer la verdad.</p>
		</div>
	</div>
    
</li> -->

<li data-aos="{{ $aos }}" data-aos-delay="300">
	<div class="flex">
		<div class="flex-shrink-0">
			<div class="flex h-12 w-12 items-center justify-center rounded-md bg-yellow-500 text-white">
				<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
			</div>
		</div>
		<div class="ml-4">
			<h4 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h4>
			<p class="mt-2 text-base text-gray-500">{{ $text }}</p>
		</div>
	</div>
</li>