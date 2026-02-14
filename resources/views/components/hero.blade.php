<div>
    <section class="pt-4 lg:pt-14">
        <div class="px-4 lg:px-14">
            <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row lg:items-start mb-[60px] md:mb-[100px] justify-between">
                <h1 class="max-w-[645px] text-[40px] lg:text-[74px] font-medium text-black-100 leading-[50px] lg:leading-[84px]  mb-6 lg:mb-0">
                    Pagrindinis pavadinimas apie mokymus
                </h1>
                <div class="max-w-[644px] w-full lg:pt-[192px]">
                    <div class="space-y-6 mb-6 text-black-100  text-base font-normal leading-6">
                        <p>Cras a morbi id duis volutpat porta hendrerit ultrices. In sit blandit nunc lacus
                            ipsum est eget proin in. Nunc fringilla cras quis imperdiet in urna enim erat. Diam nullam amet
                            suspendisse elit ultrices tincidunt.</p>
                        <p>Diam sapien ut arcu tortor erat sed eu cras. Quam eu diam fermentum at. Magna a eget pellentesque
                            tristique est volutpat. Augue turpis pellentesque in tortor porttitor risus scelerisque.</p>
                    </div>
                    <x-button variant="dark">
                        Rinktis mokymus
                    </x-button>
                </div>
            </div>
        </div>
        <div class="relative w-full h-[536px] md:h-[548px] px-4 lg:px-5">
            <div class="w-full h-full max-w-[1440px] mx-auto rounded-[30px] overflow-hidden">
                <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/Rbm6GXllBiw?si=-Q3-GYLCldQJjJVw&amp;controls=0&amp;autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=Rbm6GXllBiw"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    {{-- Training Categories Section --}}
    <section class="lg:px-14 px-4 py-10 lg:pb-[100px] lg:pt-[110px]">
        <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row justify-between gap-10 lg:gap-12">
            <h2 class="text-[32px] lg:text-[48px] font-medium text-black-100 leading-[42px] lg:leading-[58px] text-center lg:text-left">
                Mokymų kategorijos
            </h2>
            <div class="flex flex-col gap-6">
                <a href="{{ route('trainings') }}" class="flex items-center bg-white hover:bg-green-100 transition-all duration-300 shadow-soft rounded-[100px] pl-2.5 lg:pl-4 pr-4 lg:pr-5 py-2 lg:py-4 gap-4 lg:w-max">
                    <div class="flex-shrink-0 rounded-full w-10 lg:w-[58px] h-10 lg:h-[58px] flex items-center justify-center bg-green-200">
                        <div class="w-4 h-4 lg:w-6 lg:h-6">
                            <!-- Jei reikes prideti nauja icona, tai tiesiog exportuoti img su geltonu backgroundu. -->
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="29" cy="29" r="29" fill="#F5FA9B"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0069 21.0821C28.3312 20.9258 29.6693 20.9258 30.9936 21.0821C32.131 21.2164 33.249 21.4942 34.3613 21.7706C34.5958 21.8289 34.8301 21.8871 35.0642 21.9438C35.6714 22.0906 36.202 22.2189 36.6353 22.5006C37.1907 22.8616 37.611 23.3963 37.8306 24.0213C37.8846 24.175 37.9215 24.3346 37.9467 24.5006C38.1817 24.5048 38.3955 24.518 38.5934 24.5579C39.7771 24.7967 40.7022 25.7218 40.941 26.9055C41.0009 27.2022 41.0006 27.5346 41.0003 27.9205C41.0002 28.2698 41.0115 28.6222 40.9654 28.9692C40.8269 30.0113 40.2837 30.957 39.4533 31.6017C39.2432 31.7649 39.0059 31.9032 38.6902 32.0873L37.8986 32.549C37.7273 33.2945 37.3456 33.9762 36.7977 34.5123C36.4852 34.8181 36.1137 35.0563 35.7455 35.2923C35.6728 35.339 35.6001 35.3856 35.5281 35.4326C33.977 36.445 33.0544 37.0472 32.0823 37.4016C30.0916 38.1271 27.9088 38.1271 25.9182 37.4016C24.946 37.0472 24.0235 36.445 22.4724 35.4326C22.4004 35.3856 22.3277 35.339 22.2549 35.2923C21.8868 35.0563 21.5153 34.8181 21.2028 34.5123C20.6548 33.9762 20.2731 33.2945 20.1018 32.549L19.3103 32.0873C18.9945 31.9032 18.7573 31.7649 18.5471 31.6017C17.7168 30.957 17.1736 30.0113 17.0351 28.9692C16.989 28.6222 17.0003 28.2698 17.0002 27.9205C16.9999 27.5346 16.9996 27.2022 17.0595 26.9055C17.2982 25.7218 18.2234 24.7967 19.407 24.5579C19.6048 24.518 19.8184 24.5048 20.0531 24.5006C20.078 24.3373 20.1149 24.1776 20.1699 24.0213C20.3895 23.3963 20.8098 22.8616 21.3652 22.5006C21.7985 22.2189 22.3291 22.0906 22.9363 21.9438C23.1704 21.8871 23.4046 21.8289 23.6391 21.7706C24.7515 21.4942 25.8695 21.2164 27.0069 21.0821ZM20.0002 26.5026C19.8892 26.5057 19.8406 26.5107 19.8025 26.5184C19.4079 26.598 19.0996 26.9064 19.02 27.3009C19.0052 27.3742 19.0002 27.4859 19.0002 28.0055C19.0002 28.4567 19.0023 28.5901 19.0177 28.7057C19.0869 29.2268 19.3585 29.6996 19.7737 30.022C19.8263 30.0628 19.8861 30.1028 20.0002 30.172V26.5026ZM38.0002 26.5026V30.172C38.5288 29.8518 38.9003 29.3267 38.9828 28.7057C38.9982 28.5901 39.0002 28.4567 39.0002 28.0055C39.0002 27.4859 38.9953 27.3742 38.9805 27.3009C38.9009 26.9064 38.5925 26.598 38.198 26.5184C38.1599 26.5107 38.1113 26.5057 38.0002 26.5026ZM24.7998 26.5C24.2475 26.5 23.7998 26.9477 23.7998 27.5C23.7998 28.0523 24.2475 28.5 24.7998 28.5H33.1998C33.7521 28.5 34.1998 28.0523 34.1998 27.5C34.1998 26.9477 33.7521 26.5 33.1998 26.5H24.7998ZM26.1882 30.5C25.6359 30.5 25.1882 30.9477 25.1882 31.5C25.1882 32.0523 25.6359 32.5 26.1882 32.5H31.7882C32.3405 32.5 32.7882 32.0523 32.7882 31.5C32.7882 30.9477 32.3405 30.5 31.7882 30.5H26.1882Z" fill="#204D51"/>
                            </svg>
                        </div>
                    </div>
                    <span class="text-black-100 font-medium text-base lg:text-2xl leading-6 lg:leading-normal ">
                        Higienos privatieji mokymai
                    </span>
                </a>
                <a href="{{ route('trainings') }}" class="relative flex items-center bg-white hover:bg-green-100 transition-all duration-300 shadow-soft rounded-[100px] pl-2.5 lg:pl-4 pr-4 lg:pr-5 py-2 lg:py-4 gap-4 lg:w-max">
                    <div class="flex-shrink-0 rounded-full w-10 lg:w-[58px] h-10 lg:h-[58px] flex items-center justify-center bg-green-200">
                        <div class="w-4 h-4 lg:w-6 lg:h-6">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="29" cy="29" r="29" fill="#F5FA9B"/>
                                <path d="M19.2284 27.352C19.0934 27.6779 19.0439 28.0078 19.0214 28.3376C19 28.6509 19 29.0293 19 29.468V29.532C19 29.9706 19 30.3491 19.0214 30.6624C19.0439 30.9922 19.0934 31.3221 19.2284 31.6481C19.5328 32.3831 20.1169 32.9672 20.852 33.2716C21.1779 33.4066 21.5078 33.4561 21.8376 33.4787C22.1509 33.5 22.5293 33.5 22.968 33.5H25L25 35.532C25 35.9706 25 36.3491 25.0214 36.6624C25.0439 36.9922 25.0934 37.3221 25.2284 37.6481C25.5328 38.3831 26.1169 38.9672 26.852 39.2716C27.1779 39.4066 27.5078 39.4561 27.8376 39.4787C28.1509 39.5 28.5294 39.5 28.968 39.5H29.032C29.4706 39.5 29.8491 39.5 30.1624 39.4787C30.4922 39.4561 30.8221 39.4066 31.1481 39.2716C31.8831 38.9672 32.4672 38.3831 32.7716 37.6481C32.9066 37.3221 32.9561 36.9922 32.9787 36.6624C33 36.3491 33 35.9707 33 35.532V33.5H35.032C35.4706 33.5 35.8491 33.5 36.1624 33.4787C36.4922 33.4561 36.8221 33.4066 37.1481 33.2716C37.8831 32.9672 38.4672 32.3831 38.7716 31.6481C38.9066 31.3221 38.9561 30.9922 38.9787 30.6624C39 30.3491 39 29.9706 39 29.532V29.468C39 29.0294 39 28.6509 38.9787 28.3376C38.9561 28.0078 38.9066 27.6779 38.7716 27.352C38.4672 26.6169 37.8831 26.0328 37.1481 25.7284C36.8221 25.5934 36.4922 25.5439 36.1624 25.5214C35.8491 25.5 35.4706 25.5 35.032 25.5L33 25.5V23.468C33 23.0294 33 22.6509 32.9787 22.3376C32.9561 22.0078 32.9066 21.6779 32.7716 21.352C32.4672 20.6169 31.8831 20.0328 31.1481 19.7284C30.8221 19.5934 30.4922 19.5439 30.1624 19.5214C29.8491 19.5 29.4707 19.5 29.032 19.5H28.968C28.5294 19.5 28.1509 19.5 27.8376 19.5214C27.5078 19.5439 27.1779 19.5934 26.852 19.7284C26.1169 20.0328 25.5328 20.6169 25.2284 21.352C25.0934 21.6779 25.0439 22.0078 25.0214 22.3376C25 22.6509 25 23.0294 25 23.468L25 25.5L22.968 25.5C22.5294 25.5 22.1509 25.5 21.8376 25.5214C21.5078 25.5439 21.1779 25.5934 20.852 25.7284C20.1169 26.0328 19.5328 26.6169 19.2284 27.352Z" fill="#204D51"/>
                            </svg>
                        </div>
                    </div> 
                    <span class="text-black-100 font-medium text-base lg:text-2xl leading-6 lg:leading-normal ">
                        Pirmosios pagalbos privatieji mokymai
                    </span>
                </a>
                <a href="{{ route('trainings') }}" class="flex items-center bg-white hover:bg-green-100 transition-all duration-300 shadow-soft rounded-[100px] pl-2.5 lg:pl-4 pr-4 lg:pr-5 py-2 lg:py-4 gap-4 lg:w-max">
                    <div class="flex-shrink-0 rounded-full w-10 lg:w-[58px] h-10 lg:h-[58px] flex items-center justify-center bg-green-200">
                        <div class="w-4 h-4 lg:w-6 lg:h-6">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="29" cy="29" r="29" fill="#F5FA9B"/>
                                <path d="M36.2495 26.6465C35.6446 25.0405 34.7626 23.5531 33.6436 22.252C31.707 20.0103 29.1606 18.5625 27.1562 18.5625C27.0371 18.5626 26.9195 18.5899 26.8125 18.6425C26.7055 18.695 26.612 18.7713 26.539 18.8656C26.4661 18.9598 26.4157 19.0695 26.3916 19.1862C26.3676 19.303 26.3706 19.4237 26.4004 19.5391C27.0776 22.127 25.6738 24.2788 24.188 26.5566C22.957 28.4434 21.6875 30.3921 21.6875 32.625C21.6875 36.9326 25.1924 40.4375 29.5 40.4375C33.8076 40.4375 37.3125 36.9326 37.3125 32.625C37.3125 30.5107 36.9551 28.4995 36.2495 26.6465ZM31.0786 37.4438C30.5742 37.981 29.9419 38.0938 29.5 38.0938C29.0581 38.0938 28.4258 37.981 27.9214 37.4438C27.417 36.9067 27.1562 36.0547 27.1562 34.9688C27.1562 33.7412 27.5869 32.8066 28.0029 31.9033C28.2446 31.3789 28.4912 30.8452 28.6377 30.2739C28.6532 30.2118 28.6838 30.1544 28.7268 30.1069C28.7697 30.0594 28.8237 30.0231 28.884 30.0014C28.9442 29.9796 29.0089 29.973 29.0723 29.9821C29.1357 29.9913 29.1959 30.0158 29.2476 30.0537C29.6941 30.3992 30.0912 30.8044 30.4277 31.2578C31.3149 32.4297 31.8438 33.8174 31.8438 34.9688C31.8438 36.0547 31.5791 36.9106 31.0786 37.4438Z" fill="#204D51"/>
                            </svg>
                        </div>
                    </div>
                    <span class="text-black-100 font-medium text-base lg:text-2xl leading-6 lg:leading-normal ">
                        Gaisrinės ir civilinės saugos privalomieji mokymai
                    </span>
                </a>
                <a href="{{ route('trainings') }}" class="flex items-center bg-white hover:bg-green-100 transition-all duration-300 shadow-soft rounded-[100px] pl-2.5 lg:pl-4 pr-4 lg:pr-5 py-2 lg:py-4 gap-4 lg:w-max">
                    <div class="flex-shrink-0 rounded-full w-10 lg:w-[58px] h-10 lg:h-[58px] flex items-center justify-center bg-green-200">
                        <div class="w-4 h-4 lg:w-6 lg:h-6">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="29" cy="29" r="29" fill="#F5FA9B"/>
                                <path d="M29.5 19.3438C23.8999 19.3438 19.3438 23.8999 19.3438 29.5C19.3438 35.1001 23.8999 39.6562 29.5 39.6562C35.1001 39.6562 39.6562 35.1001 39.6562 29.5C39.6562 23.8999 35.1001 19.3438 29.5 19.3438ZM33.147 31.6885C32.689 32.2471 31.8579 33.1401 29.939 34.4429C29.8095 34.5315 29.6564 34.5789 29.4995 34.5789C29.3427 34.5789 29.1895 34.5315 29.0601 34.4429C27.1411 33.1401 26.3101 32.2456 25.8521 31.6885C24.8755 30.4985 24.4077 29.2764 24.4214 27.9531C24.4365 26.4365 25.6528 25.2026 27.1328 25.2026C28.1289 25.2026 28.8418 25.7217 29.2861 26.1992C29.3135 26.2282 29.3465 26.2513 29.3831 26.267C29.4197 26.2828 29.4592 26.2909 29.499 26.2909C29.5389 26.2909 29.5783 26.2828 29.6149 26.267C29.6515 26.2513 29.6845 26.2282 29.7119 26.1992C30.1567 25.7217 30.8691 25.2026 31.8652 25.2026C33.3452 25.2026 34.5615 26.4365 34.5767 27.9531C34.5913 29.2764 34.123 30.4985 33.147 31.6885Z" fill="#204D51"/>
                            </svg>
                        </div>
                    </div>
                    <span class="text-black-100 font-medium text-base lg:text-2xl leading-6 lg:leading-normal ">
                        Smurto prevenciniai mokymai
                    </span>
                </a>
            </div>
        </div>
    </section>
</div>