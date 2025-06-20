<section
    class="mx-auto bg-gradient-custom lg:px-14 px-4 pt-14 md:pt-[110px] pb-[86px] md:pb-[263px] -mt-5 md:-mt-10 translate-y-5 md:translate-y-10 rounded-t-[30px]">
    <div class="max-w-[1440px] w-full mx-auto">
        <div
            class="bg-white flex items-center justify-center rounded-[10px] px-3 py-[5px] text-sm font-medium leading-[22px] text-green w-max mx-auto mb-[30px]">
            Naujienos
        </div>

        <h2
            class="text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] text-center mb-[60px] md:mb-[70px] mt-4 md:mt-10 text-black-100 text-black-100">
            Naujausi straipsniai
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
            <div class="bg-white rounded-3xl shadow-card flex flex-col p-2 md:p-2.5 pb-6 md:pb-9">
                <div
                    class="relative w-full h-[205px] md:h-[252px] flex items-center justify-center mb-6 md:mb-[30px]">
                    <img src="{{ $item['image'] }}"
                        alt="Straipsnio paveikslėlis"
                        class="rounded-[20px] w-full h-full object-cover object-center" />
                </div>
                <div class="px-2.5">
                    <p class="leading-[22px] text-sm md:text-base md:leading-6 text-black-100 mb-4 md:mb-8">
                        {{ $item['description'] }}
                    </p>
                    <a href="{{ $item['link'] }}"
                        class="group font-medium text-sm leading-5 md:text-base md:leading-6 underline text-green flex items-center gap-x-2.5">
                        Skaityti daugiau
                        <span class="group-hover:opacity-100 opacity-0 transition-opacity duration-200">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.5634 6.57917L9.2134 1.12671C9.04762 0.957763 8.79143 0.957763 8.62565 1.12671C8.45988 1.29566 8.45988 1.57212 8.62565 1.74107L12.9961 6.21056L1.42197 6.21056C1.19592 6.21056 1 6.36415 1 6.59453C1 6.82492 1.19592 6.97851 1.42197 6.97851L12.9358 6.97851L8.61058 11.4173C8.4448 11.5862 8.4448 11.8627 8.61058 12.0316C8.68593 12.1084 8.8065 12.1699 8.91199 12.1699C9.01748 12.1699 9.12298 12.1391 9.2134 12.047L14.5634 6.57917Z"
                                    stroke="#204D51" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>