<!DOCTYPE html>
<html lang="en">
<x-head-component title="Contact" />
<body>
	<!-- NAVBAR -->
    <x-navbar-component :title="'SIE'" />

    <!-- CONTACT US -->
	<x-contact-component />

	<!-- FIND US -->
    <div class="flex items-center justify-center sm:my-20">
        <div class="w-full px-4 sm:max-w-md mx-auto lg:max-w-4xl">
            <div class="flex flex-wrap justify-center lg:justify-start">
                <div class="w-full lg:my-12 lg:w-6/12 lg:px-20">
                    <!-- Bloque de información #1 -->
                    <div class="mb-12 lg:mb-0 flex items-start">
                        <div class="shrink-0">
                            <!-- Ícono #1 -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <div class="ml-6 grow">
                            <!-- Texto #1 -->
                            <p class="text-lg font-semibold text-gray-700">Dirección</p>
                            <p class="mt-2 text-sm text-gray-500">Calle Antonio María Manrique, 3, 35011 Las Palmas de Gran Canaria, Las Palmas</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:my-12 lg:w-6/12 lg:px-20">
                    <!-- Bloque de información #2 -->
                    <div class="mb-12 lg:mb-0 flex items-start">
                        <div class="shrink-0">
                            <!-- Ícono #2 -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div class="ml-6 grow">
                            <!-- Texto #2 -->
                            <p class="text-lg font-semibold text-gray-700">Working Hours</p>
                            <p class="mt-2 text-sm text-gray-500">Monday - Friday: 9:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:my-12 lg:w-6/12 lg:px-20">
                    <!-- Bloque de información #3 -->
                    <div class="mb-12 lg:mb-0 flex items-start">
                        <div class="shrink-0">
                            <!-- Ícono #3 -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </div>
                        <div class="ml-6 grow">
                            <!-- Texto #3 -->
                            <p class="text-lg font-semibold text-gray-700">Call us</p>
                            <p class="mt-2 text-sm text-gray-500">+34 928 45 45 45</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:my-12 lg:w-6/12 lg:px-20">
                    <!-- Bloque de información #4 -->
                    <div class="mb-12 lg:mb-0 flex items-start">
                        <div class="shrink-0">
                            <!-- Ícono #4 -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div class="ml-6 grow">
                            <!-- Texto #4 -->
                            <p class="text-lg font-semibold text-gray-700">Write to us</p>
                            <p class="mt-2 text-sm text-gray-500">example@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAP -->
    <div class="relative w-full overflow-hidden" style="padding-top: 56.25%;">
        <iframe class="absolute top-0 left-0 w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1759.352339695414!2d-15.438616530384266!3d28.125028581245314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc40950e441745db%3A0xa21f99b41e7bb3ca!2sC.%20Antonio%20Mar%C3%ADa%20Manrique%2C%203%2C%2035011%20Las%20Palmas%20de%20Gran%20Canaria%2C%20Las%20Palmas!5e0!3m2!1ses!2ses!4v1712051638152!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

	<!-- FOOTER -->
	<x-footer-component />
</body>
</html>