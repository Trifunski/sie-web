<!-- 
    Example: 

    <li data-aos="fade-down-right" data-aos-delay="300" class="mt-10 md:mt-0">
        <div class="flex flex-col items-center space-y-6">
            <img class="mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
            <div class="text-center space-y-2">
            <div class="space-y-1 text-lg font-medium leading-6">
                <h3>Nombre del Miembro</h3>
                <p class="text-yellow-600">Cargo/Posición</p>
            </div>
            <ul class="flex justify-center space-x-5">
                <li>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-4 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </li> 
-->

<li data-aos="{{ $aos }}" data-aos-delay="{{ $delay }}" class="mt-10 md:mt-0">
    <div class="flex flex-col items-center space-y-6">
        <img class="mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56" src="{{ $image }}" alt="" />
        <div class="text-center space-y-2">
        <div class="space-y-1 text-lg font-medium leading-6">
            <h3>{{ $name }}</h3>
            <p class="text-yellow-600">{{ $position }}</p>
        </div>
        <ul class="flex justify-center space-x-5">
            <li>
                <a href="{{ $linkedin }}" class="text-gray-400 hover:text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50" fill="orange">
                        <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                    </svg>
                </a>
            </li>
        </ul>
        </div>
    </div>
</li>