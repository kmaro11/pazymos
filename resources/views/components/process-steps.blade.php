<section class="px-4 bg-gradient-custom rounded-t-[30px] md:px-14 py-14 md:py-[100px]">
    <div class="max-w-[1320px] mx-auto grid grid-cols-1 gap-y-[60px] md:gap-y-[100px]">
        @foreach ($steps as $step)

        <div class="flex flex-col-reverse lg:flex-row gap-[50px] lg:gap-12 items-center">
            <div class="max-w-[553px] w-full lg:pt-9">
                <span class="text-green font-['Helvetica_Neue'] text-sm font-medium leading-[22px] py-[5px] px-3 rounded-[10px] bg-green/10 mb-3">{{ $step['step_label'] }}</span>

                <h2 class="text-black-100 md:text-black-100 font-['Helvetica_Neue'] text-[24px] md:text-[36px] font-medium leading-[46px] mb-5">{{ $step['title'] }}</h2>

                <p class="text-black-100 font-['Helvetica_Neue'] text-base font-normal leading-6 md:leading-6 mb-10" style="color: var(--Narrative-Dark-Primary, #0E0126); font-family: 'Helvetica Neue'; font-size: 16px; font-style: normal; font-weight: 400; line-height: 24px;">
                    {{ $step['description'] }}
                </p>

                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach ($step['features'] as $feature)
                    <div class="lg:max-w-[225px] w-full">
                        <span class="mb-1.5 md:mb-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.84961 12.0001C1.84961 6.39441 6.39392 1.8501 11.9996 1.8501C17.6053 1.8501 22.1496 6.39441 22.1496 12.0001C22.1496 17.6058 17.6053 22.1501 11.9996 22.1501C6.39392 22.1501 1.84961 17.6058 1.84961 12.0001ZM16.0634 10.672C16.5195 10.3606 16.6368 9.73836 16.3253 9.28227C16.0139 8.82618 15.3917 8.70892 14.9356 9.02036L14.8343 9.08953C13.1934 10.21 11.779 11.6244 10.6605 13.2575L9.20624 11.8049C8.81551 11.4146 8.18234 11.4149 7.79203 11.8056C7.40171 12.1964 7.40205 12.8295 7.79278 13.2198L10.134 15.5585C10.3544 15.7787 10.6648 15.8836 10.9735 15.8422C11.2823 15.8008 11.5541 15.6179 11.7088 15.3475C12.7597 13.5099 14.214 11.9349 15.9621 10.7412L16.0634 10.672Z" fill="#204D51" />
                            </svg>

                        </span>
                        <h4 class="text-black-100 font-['Helvetica_Neue'] text-[18px] md:text-[20px] font-medium leading-[24px] md:leading-[30px] flex items-center mb-2" style="color: #0E0126; font-family: 'Helvetica Neue'; font-size: 18px; font-style: normal; font-weight: 500; line-height: 24px;">
                            {{ $feature['title'] }}
                        </h4>
                        <p class="text-black-100 font-['Helvetica_Neue'] text-base font-normal leading-6">{{ $feature['description'] }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="mt-6 md:mt-10">
                    <x-button :url="$step['button_url']" variant="dark">
                        {{ $step['button_text'] }}
                    </x-button>
                </div>
            </div>
            <div class="max-w-[645px] h-[290px] md:h-[548px] w-full">
                <img src="{{ $step['image_url'] }}" alt="{{ $step['title'] }}" class="rounded-2xl h-full w-full object-cover object-center">
            </div>
        </div>
        @endforeach
    </div>
</section>