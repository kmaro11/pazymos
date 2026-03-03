@props(['sections' => [], 'title' => null])

@if(!empty($sections))
<div class="pt-10 border-t border-black/10 mt-[60px]">
    <h2 class="text-[32px] font-medium text-black-100 leading-[42px] mb-10">
        {{ $title ?? 'Mokymų aprašymas' }}
    </h2>
    <div class="space-y-4" id="training-desc-accordion">
    @foreach ($sections as $index => $section)
    <div class="td-accordion-item">
        <button class="td-accordion-question flex justify-between items-center w-full py-3 pl-4 pr-[14px] text-left bg-green-100 rounded-[100px]">
            <span class="flex items-center gap-2.5">
                @if(!empty($section['icon']))
                    <img src="{{ asset('svg/' . $section['icon']) }}" alt="{{ $section['title'] }} icon" class="w-6 h-6 flex-shrink-0">
                @endif
                <span class="text-black-100 text-lg font-medium leading-6">{{ $section['title'] }}</span>
            </span>
            <span class="td-accordion-arrow transition-transform duration-300 w-6 h-6 flex items-center justify-center flex-shrink-0">
                <svg width="100%" height="100%" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35 17.5C35 7.83502 27.165 3.42479e-07 17.5 7.64949e-07C7.83501 1.18742e-06 -1.18742e-06 7.83502 -7.64949e-07 17.5C-3.42479e-07 27.165 7.83502 35 17.5 35C27.165 35 35 27.165 35 17.5ZM23.0027 18.426C21.8656 16.864 20.601 15.4089 19.2242 14.0761L19.2242 24.3964C19.2242 25.3486 18.4523 26.1205 17.5001 26.1205C16.5478 26.1205 15.7759 25.3486 15.7759 24.3964L15.7759 14.0761C14.3991 15.4089 13.1346 16.864 11.9974 18.426C11.437 19.1958 10.3586 19.3656 9.58877 18.8052C8.81894 18.2447 8.64919 17.1663 9.20961 16.3965C11.0845 13.821 13.2758 11.5065 15.7287 9.51059C16.241 9.09376 16.8679 8.87914 17.5001 8.87914C18.1322 8.87914 18.7591 9.09376 19.2714 9.51059C21.7243 11.5065 23.9156 13.821 25.7905 16.3965C26.3509 17.1663 26.1812 18.2447 25.4114 18.8052C24.6415 19.3656 23.5631 19.1958 23.0027 18.426Z" fill="#0E0126" />
                </svg>
            </span>
        </button>
        <div class="td-accordion-answer overflow-hidden transition-all duration-300 ease-in-out opacity-0 transform -translate-y-2" style="max-height: 0;">
            <div class="px-4 pt-4 pb-2">
                <div class="cms-content text-black-100 text-base font-normal leading-6 space-y-4">
                    {!! $section['html'] !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endif

<style>
    .td-accordion-item.active .td-accordion-arrow {
        transform: rotate(180deg);
    }

    .td-accordion-item.active .td-accordion-answer {
        opacity: 1;
        transform: translateY(0);
        max-height: 2000px;
    }
</style>
