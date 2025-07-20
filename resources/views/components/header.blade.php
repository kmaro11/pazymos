<header class="w-full bg-gray-100 py-[22px] lg:py-[30px] px-4 lg:px-14">
    <div class="max-w-[1440px] mx-auto w-full flex items-center justify-between">
        <a href="/">
            <img src="{{ asset('svg/pazymos-logo.svg') }}" alt="pazymos-logo">
        </a>
        <nav class="flex-1 lg:flex justify-center hidden">
            <ul class="flex gap-x-[30px] list-none m-0 p-0">
                <li class="relative group cursor-pointer">
                    <a class="flex items-center gap-2">
                        <span class="text-black-100 text-base font-medium leading-6 text-right">Mokymai</span>
                        <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow-down">
                    </a>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="{{ route('how-it-works') }}" class="flex items-center gap-2">
                        <span class="text-black-100 text-base font-medium leading-6 text-right">Kaip tai veikia</span>
                    </a>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="{{ route('about') }}" class="flex items-center gap-2">
                        <span class="text-black-100 text-base font-medium leading-6 text-right">Apie mus</span>
                    </a>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="{{ route('news') }}" class="flex items-center gap-2">
                        <span class="text-black-100 text-base font-medium leading-6 text-right">Naujienos</span>
                    </a>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="{{ route('contact') }}" class="flex items-center gap-2">
                        <span class="text-black-100 text-base font-medium leading-6 text-right">Kontaktai</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex items-center gap-x-10">
            <a href="{{ route('basket') }}" class=" cursor-pointer flex items-center bg-green-100 rounded-[100px] py-[7px] px-2 lg:pr-3 gap-2">

                <div class="relative flex items-center justify-center w-6 h-6">
                    <div data-basket-count="0" class="hidden absolute -top-[5px] -right-1.5 flex items-center justify-center w-4 h-4 bg-yellow-100 rounded-full text-green text-xs font-medium">
                    </div>
                    <div class="bg-green-100 lg:bg-white rounded-full w-6 h-6 flex items-center justify-center">
                        <img src="{{ asset('svg/basket.svg') }}" alt="basket">
                    </div>
                </div>
                <span class="lg:block hidden text-green text-base font-medium leading-6">Krepšelis</span>
            </a>
            <button class="lg:hidden">
                <img src="{{ asset('svg/hamburger.svg') }}" alt="hamburger">
            </button>
        </div>
    </div>
</header>