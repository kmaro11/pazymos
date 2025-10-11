@props(['items' => null, 'sections' => null, 'title' => null])

<div class="pt-10 pb-[60px] md:pt-24 border-t border-black/10 md:border-t-0 mt-[60px] md:mt-0">
     <h2 class="text-[32px] font-medium text-black-100  leading-[42px] mb-10 md:mb-[60px]">
        {{ $title ?? 'Mokymų aprašymas' }}
    </h2>

    @if(!empty($sections))
        <div class="space-y-14">
            @foreach ($sections as $section)
                <div>
                    <div class="flex items-center gap-2.5">
                        @if(!empty($section['icon']))
                            <img src="{{ asset('svg/' . $section['icon']) }}" alt="{{ $section['title'] }} icon" class="w-6 h-6">
                        @endif
                        <h3 class="text-black-100  text-[24px] md:text-[28px] font-medium leading-7 md:leading-8">{{ $section['title'] }}</h3>
                    </div>
                    <x-read-more 
                        :id="'training-desc-'.$loop->index" 
                        :height="312" 
                        :containerClass="'text-black-100  text-base font-normal leading-6 space-y-4'" 
                        :toggleClass="'mt-4 inline-flex items-center gap-2 text-green underline underline-offset-4'"
                        :buttonWrapperClass="'flex justify-start'"
                        >
                        <div class="cms-content">
                            {!! $section['html'] !!}
                        </div>
                    </x-read-more>
                </div>
            @endforeach
        </div>
    @endif
</div>