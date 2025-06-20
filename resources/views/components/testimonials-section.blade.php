@php
$testimonials = [
[
'avatar' => 'https://i.pravatar.cc/150?img=32',
'name' => 'Vardas Pavardė',
'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=33',
'name' => 'Jonas Jonaitis',
'text' => 'Exceptional training experience with practical insights.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=34',
'name' => 'Marija Marijauskaitė',
'text' => 'Professional approach and valuable knowledge gained.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=35',
'name' => 'Petras Petrauskas',
'text' => 'Highly recommend these training programs.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=36',
'name' => 'Ona Onaitė',
'text' => 'Excellent content and engaging delivery.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=37',
'name' => 'Antanas Antanaitis',
'text' => 'Great learning experience with real-world applications.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=38',
'name' => 'Ieva Ievaitė',
'text' => 'Outstanding quality and professional instructors.',
'logo' => 'svg/google.svg'
],
[
'avatar' => 'https://i.pravatar.cc/150?img=39',
'name' => 'Vytautas Vytautaitis',
'text' => 'Comprehensive training that exceeded expectations.',
'logo' => 'svg/google.svg'
]
];
@endphp

<div class="w-full mx-auto">
    <div class="md:px-14 px-4">
        <h2
            class="text-black-100 text-center text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] md:mb-6 mb-4">
            Klientų atsiliepimai
        </h2>
        <p class="text-black-100 text-center text-base font-normal leading-6">Cras a morbi id duis
            volutpat porta hendrerit ultrices.</p>
    </div>

    <div class="animation-block">
        <div class="animation-container animation-container-logos md:pt-[87px] pt-[60px] pb-[15px]">
            <div class="animation-wrapper">
                @foreach ($testimonials as $testimonial)
                <div class="shadow-large-card w-[420px] rounded-3xl pt-5 pr-4 pb-8 pl-5 h-full">
                    <div class="flex justify-between mb-5">
                        <div class="w-14 h-14 rounded-full flex-shrink-0 flex overflow-hidden">
                            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }} avatar">
                        </div>
                        <img src="{{ $testimonial['logo'] }}" alt="Google logo" />
                    </div>
                    <p class="text-black-100 text-base font-normal leading-6 mb-3">{{ $testimonial['name'] }}</p>
                    <p class="text-black-100 text-xl font-medium leading-[30px]">
                        "{{ $testimonial['text'] }}"
                    </p>
                </div>
                @endforeach
            </div>
            <div class="animation-wrapper">
                @foreach ($testimonials as $testimonial)
                <div class="shadow-large-card w-[420px] rounded-3xl pt-5 pr-4 pb-8 pl-5 h-full">
                    <div class="flex justify-between mb-5">
                        <div class="w-14 h-14 rounded-full flex-shrink-0 flex overflow-hidden">
                            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }} avatar">
                        </div>
                        <img src="{{ $testimonial['logo'] }}" alt="Google logo" />
                    </div>
                    <p class="text-black-100 text-base font-normal leading-6 mb-3">{{ $testimonial['name'] }}</p>
                    <p class="text-black-100 text-xl font-medium leading-[30px]">
                        "{{ $testimonial['text'] }}"
                    </p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="animation-container animation-container-logos pb-[60px] md:pb-[100px] pt-[15px]">
            <div class="animation-wrapper animation-reverse">
                @foreach ($testimonials as $testimonial)
                <div class="shadow-large-card w-[420px] rounded-3xl pt-5 pr-4 pb-8 pl-5 h-full">
                    <div class="flex justify-between mb-5">
                        <div class="w-14 h-14 rounded-full flex-shrink-0 flex overflow-hidden">
                            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }} avatar">
                        </div>
                        <img src="{{ $testimonial['logo'] }}" alt="Google logo" />
                    </div>
                    <p class="text-black-100 text-base font-normal leading-6 mb-3">{{ $testimonial['name'] }}</p>
                    <p class="text-black-100 text-xl font-medium leading-[30px]">
                        "{{ $testimonial['text'] }}"
                    </p>
                </div>
                @endforeach
            </div>
            <div class="animation-wrapper animation-reverse">
                @foreach ($testimonials as $testimonial)
                <div class="shadow-large-card w-[420px] rounded-3xl pt-5 pr-4 pb-8 pl-5 h-full">
                    <div class="flex justify-between mb-5">
                        <div class="w-14 h-14 rounded-full flex-shrink-0 flex overflow-hidden">
                            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }} avatar">
                        </div>
                        <img src="{{ $testimonial['logo'] }}" alt="Google logo" />
                    </div>
                    <p class="text-black-100 text-base font-normal leading-6 mb-3">{{ $testimonial['name'] }}</p>
                    <p class="text-black-100 text-xl font-medium leading-[30px]">
                        "{{ $testimonial['text'] }}"
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>