<section class="bg-gray-100 pt-10 pb-[60px] md:py-[100px] px-4 sm:px-14 border-t border-gray-400">
    <div class="max-w-[1320px] mx-auto">
        <h2 class="text-[32px] font-medium text-black-100 font-['Helvetica_Neue'] leading-[42px] mb-10 md:mb-[60px]">
            Mokymų aprašymas
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-8">
            @foreach ($items as $item)
            <div>
                <div class="flex items-center mb-6 space-x-2.5">
                    <img src="{{ asset('svg/' . $item['icon']) }}" alt="{{ $item['title'] }} icon" class="w-6 h-6">
                    <h3 class="text-lg font-medium text-black-100 font-['Helvetica_Neue'] leading-6 md:text-2xl md:leading-normal">{{ $item['title'] }}</h3>
                </div>
                <p class="text-black-100 font-['Helvetica_Neue'] text-base font-normal leading-6">
                    {{ $item['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>