<section class="mx-auto bg-green rounded-[30px] pt-[60px] md:pt-[110px] pb-14 md:pb-[120px] -mt-5 md:-mt-10 translate-y-5 md:translate-y-10">
    <div class="w-full mx-auto">
        <div class="lg:px-14 px-4">
            <div class="lg:pl-2.5">
                <div class="bg-white mx-auto md:mx-0 flex items-center justify-center rounded-[10px] px-3 py-[5px] text-sm font-medium leading-[22px] text-green w-max mb-4 md:mb-[30px] ">
                    Mokymų komplektai
                </div>
                <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-[60px] md:mb-12">
                    <div>
                        <h2 class="text-white text-center md:text-left font-['Helvetica_Neue'] text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] mb-4 md:mb-[30px]">
                            Populiariausi mokymų komplektai
                        </h2>
                        <p class="text-white text-center md:text-left font-['Helvetica_Neue'] text-base font-normal leading-6">
                            Cras a morbi id duis volutpat porta hendrerit ultrices.
                        </p>
                    </div>

                    <x-button variant="light" url="#" class="hidden md:flex"> Peržiūrėti visus</x-button>
                </div>
            </div>
        </div>

        <!-- Swiper container for desktop, stacked for mobile -->
        <div class="relative lg:pl-14 lg:pr-0 px-4 hidden md:block">
            <div class="swiper popular-courses-swiper hidden md:block overflow-hidden md:pb-[110px]">
                <div class="swiper-wrapper">
                    @foreach($courses as $course)
                    <div class="swiper-slide h-auto">
                        <x-course-card :course="$course" />
                    </div>
                    @endforeach
                </div>
                <!-- Navigation Arrows -->
                <div class="absolute flex bottom-0 left-1/2 -translate-x-1/2 z-10 items-center gap-4 h-[35px] ">
                    <button class="swiper-button-prev popular-courses-prev rotate-180">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 0C27.165 4.2247e-07 35 7.83502 35 17.5C35 27.165 27.165 35 17.5 35C7.83502 35 -4.2247e-07 27.165 0 17.5C4.2247e-07 7.83502 7.83502 -4.2247e-07 17.5 0ZM16.574 11.9973C18.136 13.1344 19.5911 14.399 20.9239 15.7758L10.6036 15.7758C9.6514 15.7758 8.87948 16.5477 8.87948 17.4999C8.87948 18.4522 9.6514 19.2241 10.6036 19.2241L20.9239 19.2241C19.5911 20.6009 18.136 21.8654 16.574 23.0026C15.8042 23.563 15.6344 24.6414 16.1948 25.4112C16.7553 26.1811 17.8337 26.3508 18.6035 25.7904C21.179 23.9155 23.4935 21.7241 25.4894 19.2713C25.9062 18.759 26.1209 18.1321 26.1209 17.4999C26.1209 16.8678 25.9062 16.2409 25.4894 15.7286C23.4935 13.2757 21.179 11.0844 18.6035 9.20949C17.8337 8.64906 16.7553 8.81881 16.1948 9.58864C15.6344 10.3585 15.8042 11.4369 16.574 11.9973Z" fill="white" />
                        </svg>
                    </button>
                    <button class="swiper-button-next popular-courses-next">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 0C27.165 4.2247e-07 35 7.83502 35 17.5C35 27.165 27.165 35 17.5 35C7.83502 35 -4.2247e-07 27.165 0 17.5C4.2247e-07 7.83502 7.83502 -4.2247e-07 17.5 0ZM16.574 11.9973C18.136 13.1344 19.5911 14.399 20.9239 15.7758L10.6036 15.7758C9.6514 15.7758 8.87948 16.5477 8.87948 17.4999C8.87948 18.4522 9.6514 19.2241 10.6036 19.2241L20.9239 19.2241C19.5911 20.6009 18.136 21.8654 16.574 23.0026C15.8042 23.563 15.6344 24.6414 16.1948 25.4112C16.7553 26.1811 17.8337 26.3508 18.6035 25.7904C21.179 23.9155 23.4935 21.7241 25.4894 19.2713C25.9062 18.759 26.1209 18.1321 26.1209 17.4999C26.1209 16.8678 25.9062 16.2409 25.4894 15.7286C23.4935 13.2757 21.179 11.0844 18.6035 9.20949C17.8337 8.64906 16.7553 8.81881 16.1948 9.58864C15.6344 10.3585 15.8042 11.4369 16.574 11.9973Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Stacked cards for mobile -->
        <div class="block md:hidden space-y-4 px-4">
            @foreach($courses as $course)
            <x-course-card :course="$course" />
            @endforeach
        </div>
    </div>
    <x-button variant="light" url="#" class="md:hidden mx-auto mt-[60px]">Peržiūrėti visus</x-button>
    </div>
</section>