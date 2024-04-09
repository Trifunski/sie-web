<!-- navbar -->

<div class="w-full bg-quinary text-white">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto">
        <div class="flex items-center justify-between py-6">
            <div class="relative md:mt-2">
                <a href="/" class="relative z-50 font-bold tracking-widest -left-1 rounded-lg focus:outline-none focus:shadow-outline">
                    <x-logo />
                </a>
            </div>
            <nav class="flex items-center">
                @foreach($links as $link)
                    @if ($link['name'] == 'Contact')
                        <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-3xl md:mt-2 md:ml-4 hover:scale-110 font-semibold duration-300 ease-in-out focus:outline-none focus:shadow-outline bg-quaternary" href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    @else
                        <a class="px-4 py-2 mt-2 text-sm font-medium bg-transparen rounded-lg md:mt-2 md:ml-4  focus:outline-none focus:shadow-outline" href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    @endif
                @endforeach
            </nav>
        </div>
    </div>
</div>