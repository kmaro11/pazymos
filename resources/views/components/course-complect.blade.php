<section class="bg-gray-100">
    <div class="bg-green rounded-[30px] pt-[60px] md:pt-20 pb-[72px] md:pb-16 px-4 md:px-14">
        <div class="max-w-[1440px] mx-auto">
            <h2 class="text-white  text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] text-center md:text-left mb-4 md:mb-6">{{ $complect['main_title'] }}</h2>
            <p class="text-white  text-base font-normal leading-6 text-center md:text-left mb-10 md:mb-20">{{ $complect['main_subtitle'] }}</p>

            <div class="bg-white rounded-2xl p-2.5 md:pt-11 md:px-10 md:pb-16">

                {{-- Course Items --}}
                <div class="">
                    @foreach ($complect['courses'] as $course)

                    @if ($course['type'] === 'complect')
                    <div class="bg-blue-100 first:mb-4 rounded-[20px] p-2.5 py-6 md:py-6 md:pr-7 md:pl-[22px] flex flex-col md:flex-row md:items-center mb-6 md:mb-0">
                        <div class="flex flex-col md:flex-row md:items-center mb-6 md:mb-0">
                            <div class="flex mb-4 md:mb-0">
                                <div class="bg-blue rounded-[12px] md:rounded-[20px] h-12 w-12 md:h-[68px] md:w-[68px] flex items-center justify-center mr-3 md:mr-6">
                                    <div class="w-4 h-4 md:w-6 md:h-6">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.92369 2.1081C9.56352 1.99872 9.18338 1.99942 8.8055 2.00011L8.71556 2.00022L8.35719 2.00022C7.27341 2.00021 6.39926 2.0002 5.69138 2.05804C4.96253 2.11759 4.32234 2.2434 3.73005 2.54519C2.78924 3.02455 2.02434 3.78946 1.54497 4.73027C1.24318 5.32256 1.11737 5.96275 1.05782 6.6916C0.999983 7.39947 0.99999 8.27363 1 9.35741V14.643C0.99999 15.7268 0.999982 16.601 1.05782 17.3088C1.11737 18.0377 1.24318 18.6779 1.54497 19.2702C2.02434 20.211 2.78924 20.9759 3.73005 21.4553C4.32234 21.757 4.96253 21.8829 5.69138 21.9424C6.39923 22.0002 7.27334 22.0002 8.35707 22.0002H15.6428C16.7266 22.0002 17.6008 22.0002 18.3086 21.9424C19.0375 21.8829 19.6777 21.757 20.27 21.4553C21.2108 20.9759 21.9757 20.211 22.455 19.2702C22.7568 18.6779 22.8826 18.0377 22.9422 17.3088C23 16.601 23 15.7269 23 14.6432V12.3574C23 11.2737 23 10.3994 22.9422 9.6916C22.8826 8.96275 22.7568 8.32256 22.455 7.73027C21.9757 6.78946 21.2108 6.02455 20.27 5.54519C19.6777 5.2434 19.0375 5.11759 18.3086 5.05804C17.6007 5.0002 16.7266 5.00021 15.6428 5.00022L13.2844 5.00022C12.7526 5.00022 12.695 4.99003 12.6575 4.97865C12.5946 4.95954 12.5361 4.92823 12.4853 4.88649C12.455 4.86161 12.4146 4.81934 12.1196 4.3768L11.5445 3.51424L11.4947 3.43934C11.2857 3.12454 11.0754 2.80786 10.7846 2.56886C10.5307 2.36017 10.2382 2.2036 9.92369 2.1081Z" fill="#0E0126" />
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="font-bold text-black-100 mb-3 block md:hidden">{{ $course['title'] }}</h3>
                            </div>
                            <div class="flex-grow">
                                <h3 class="font-bold text-black-100 mb-3 hidden md:block">{{ $course['title'] }}</h3>
                                <div class="flex flex-wrap items-center gap-2.5">
                                    @foreach ($course['tags'] as $tag)
                                    <div class="bg-white rounded-[100px] px-3 text-black-100  text-sm font-medium leading-6">
                                        {{ $tag }}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <x-button variant="dark" size="w-full md:w-max" class="md:ml-auto"
                            data-course="{{ json_encode($course) }}">Dėti į krepšelį</x-button>
                    </div>
                    @else
                    <div class="[&:nth-child(2)]:rounded-t-[20px] last:rounded-b-[20px] bg-gray-300 flex md:items-center border-b border-black-100/10 last:border-b-0 p-2.5 py-6 md:py-6 md:pr-7 md:pl-[22px] flex-col md:flex-row">
                        <div class="flex flex-col md:flex-row md:items-center mb-6 md:mb-0">
                            <div class="flex mb-4 md:mb-0">
                                <div class="flex-grow-1 flex-shrink-0 bg-[#E7E7E7] rounded-[12px] md:rounded-[20px] h-12 w-12 md:h-[68px] md:w-[68px] flex items-center justify-center mr-3 md:mr-6">
                                    <div class="w-4 h-4 md:w-6 md:h-6 shrink-0">
                                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.24136V1.00134C12.8323 0.999915 12.6543 0.999966 12.4633 1.00002L10.3572 1.00004C9.27341 1.00003 8.39926 1.00002 7.69138 1.05786C6.96253 1.11741 6.32234 1.24322 5.73005 1.54501C4.78924 2.02438 4.02434 2.78928 3.54497 3.73009C3.24318 4.32238 3.11737 4.96257 3.05782 5.69142C2.99998 6.39927 2.99999 7.2734 3 8.35711V15.6429C2.99999 16.7266 2.99998 17.6008 3.05782 18.3087C3.11737 19.0376 3.24318 19.6777 3.54497 20.27C4.02434 21.2108 4.78924 21.9757 5.73005 22.4551C6.32234 22.7569 6.96253 22.8827 7.69138 22.9423C8.39923 23.0001 9.27344 23.0001 10.3572 23.0001H13.6429C14.7267 23.0001 15.6008 23.0001 16.3086 22.9423C17.0375 22.8827 17.6777 22.7569 18.27 22.4551C19.2108 21.9757 19.9757 21.2108 20.455 20.27C20.7568 19.6777 20.8826 19.0376 20.9422 18.3087C21 17.6009 21 16.7266 21 15.6429V9.53707C21.0001 9.34599 21.0001 9.16785 20.9987 9.00006H18.7587C17.9537 9.00007 17.2894 9.00008 16.7482 8.95587C16.1861 8.90994 15.6694 8.81138 15.184 8.56409C14.4314 8.18059 13.8195 7.56867 13.436 6.81602C13.1887 6.33069 13.0901 5.81398 13.0442 5.25189C13 4.71069 13 4.04633 13 3.24136ZM8 12C7.44772 12 7 12.4477 7 13C7 13.5523 7.44772 14 8 14H16C16.5523 14 17 13.5523 17 13C17 12.4477 16.5523 12 16 12H8ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H8Z" fill="#0E0126" />
                                            <path d="M15 3.20006V1.28254C15.3333 1.39959 15.6537 1.55178 15.9556 1.73684C16.4615 2.04681 16.8862 2.47173 17.4997 3.08544L18.9132 4.49897C19.5277 5.11309 19.953 5.53818 20.2632 6.0444C20.4483 6.3464 20.6005 6.66679 20.7175 7.00006H18.8C17.9434 7.00006 17.3611 6.99928 16.911 6.96251C16.4726 6.92669 16.2484 6.86176 16.092 6.78207C15.7157 6.59033 15.4097 6.28436 15.218 5.90804C15.1383 5.75164 15.0734 5.52744 15.0376 5.08902C15.0008 4.63893 15 4.05664 15 3.20006Z" fill="#0E0126" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="font-bold text-black-100 block md:hidden">{{ $course['title'] }}</h3>
                            </div>
                            <div class="flex-grow">
                                <h3 class="font-bold text-black-100 hidden md:block md:mb-3">{{ $course['title'] }}</h3>
                                <div class="flex flex-wrap items-center gap-2.5">
                                    @foreach ($course['tags'] as $tag)
                                    <div class="bg-white rounded-[100px] px-3 text-black-100  text-sm font-medium leading-6">
                                        {{ $tag }}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-2 md:ml-auto">
                            <x-button variant="light" showIcon="false">Peržiūrėti</x-button>
                            <x-button variant="dark" size="w-full md:w-max" data-course="{{ json_encode($course) }}">Dėti į krepšelį</x-button>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>