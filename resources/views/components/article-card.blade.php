<div class="bg-white rounded-3xl shadow-card flex flex-col p-2 md:p-2.5 pb-6 md:pb-9">
    <div class="relative w-full h-[205px] md:h-[252px] flex items-center justify-center mb-6 md:mb-[30px]">
        @if (!empty($article['category']))
        <div class="absolute top-2.5 left-2.5 rounded-[100px] bg-white text-center font-['Helvetica_Neue'] text-sm font-medium leading-6 text-black-100 py-[3px] px-3">
            {{ $article['category'] }}
        </div>
        @endif
        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="rounded-[20px] w-full h-full object-cover object-center" />
    </div>
    <div class="px-2.5">
        <p class="leading-[22px] text-sm md:text-base md:leading-6 text-black-100 mb-4 md:mb-8">
            {{ $article['excerpt'] }}
        </p>
        <a href="{{ $article['url'] }}" class="group font-medium text-sm leading-5 md:text-base md:leading-6 underline text-green flex items-center gap-x-2.5">
            Skaityti daugiau
            <span class="group-hover:opacity-100 opacity-0 transition-opacity duration-200">
                <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5634 6.57917L9.2134 1.12671C9.04762 0.957763 8.79143 0.957763 8.62565 1.12671C8.45988 1.29566 8.45988 1.57212 8.62565 1.74107L12.9961 6.21056L1.42197 6.21056C1.19592 6.21056 1 6.36415 1 6.59453C1 6.82492 1.19592 6.97851 1.42197 6.97851L12.9358 6.97851L8.61058 11.4173C8.4448 11.5862 8.4448 11.8627 8.61058 12.0316C8.68593 12.1084 8.8065 12.1699 8.91199 12.1699C9.01748 12.1699 9.12298 12.1391 9.2134 12.047L14.5634 6.57917Z" stroke="#204D51" />
                </svg>
            </span>
        </a>
    </div>
</div>