@vite('resources/css/app.css')

<div class="py-20">
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6 text-gray-700">{{ $contactData['subject'] }}</h2>
        </div>
        <div class="max-w-lg mx-auto border border-yellow-500 rounded-lg mt-7 shadow-lg">
            <div class="p-6">
                <div class="mb-4">
                    <strong class="block text-sm font-medium text-yellow-500">Nombre:</strong>
                    <p class="text-gray-600">{{ $contactData['name'] }}</p>
                </div>
                <div class="mb-4">
                    <strong class="block text-sm font-medium text-yellow-500">Email:</strong>
                    <p class="text-gray-600">{{ $contactData['email'] }}</p>
                </div>
                <div class="mb-4">
                    <strong class="block text-sm font-medium text-yellow-500">Mensaje:</strong>
                    <p class="text-gray-600">{{ $contactData['message'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>