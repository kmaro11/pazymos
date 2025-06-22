<section class="py-[60px] md:pt-[110px] md:pb-[100px] px-4 md:px-14">
    <div class="mb-[60px] md:mb-[100px]">
        <h2 class="text-black-100 text-[32px] font-medium leading-[42px] md:text-[48px] md:leading-[58px] text-center">
            {{ $title ?? 'Kaip tai veikia' }}
        </h2>
        @if($description)
        <p class="mt-4 md:mt-6 text-black-100 text-center font-normal text-base leading-6 md:text-base md:leading-6">
            {{ $description }}
        </p>
        @endif
    </div>
    <div class="max-w-[1200px] w-full mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($items as $index => $item)
            <div class="p-6 pb-8 {{ $index === 1 ? 'bg-green-100 -rotate-[3deg]' : 'bg-gray-300' }} rounded-3xl">
                <div class="text-black-100 text-[20px] md:text-2xl font-medium leading-[30px] md:leading-[34px] mb-5 md:mb-10 flex justify-between items-start">
                    {{ $item['title'] }}
                    <img src="{{ asset('svg/' . $item['icon']) }}" alt="{{ $item['title'] }} icon" width="24" height="24" class="ml-7">
                </div>
                <div class="text-gray-200 text-sm font-normal leading-[22px]">
                    {{ $item['description'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>