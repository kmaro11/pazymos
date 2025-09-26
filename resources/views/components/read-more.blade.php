@props([
    'id',
    'height' => 280,
    'containerClass' => 'space-y-6',
    'toggleClass' => 'mt-8 inline-flex items-center gap-2 text-green text-base font-medium leading-6 underline underline-offset-4',
    'buttonWrapperClass' => 'flex justify-start',
    'moreLabel' => 'Skaityti daugiau',
    'lessLabel' => 'Skaityti mažiau',
])

<div id="{{ $id }}" data-collapsed-height="{{ $height }}" class="{{ $containerClass }} overflow-hidden" style="max-height:0;opacity:0;">
    {{ $slot }}
    {{-- Content container animated via JS (max-height/opacity) --}}
    {{-- Do not wrap externally; this div is the animated element. --}}
    
</div>
<div class="{{ $buttonWrapperClass }}">
    <button data-readmore-toggle="{{ $id }}" aria-expanded="false" class="{{ $toggleClass }}">
        <span data-toggle-text>{{ $moreLabel }}</span>
        <svg data-toggle-icon width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300">
            <path d="M5.92496 5.67324C7.38786 4.4957 8.69272 3.12353 9.80553 1.5927C9.94252 1.40669 10.0161 1.17258 9.99716 0.924166C9.95526 0.373474 9.47486 -0.0389769 8.92417 0.00293134C6.31186 0.20173 3.68823 0.20173 1.07593 0.00293086C0.525237 -0.0389774 0.0448391 0.373474 0.00293086 0.924166C-0.0159734 1.17258 0.0575749 1.40668 0.194559 1.59269C1.30737 3.12353 2.61223 4.4957 4.07513 5.67324C4.61647 6.10898 5.38362 6.10898 5.92496 5.67324Z" fill="currentColor"/>
        </svg>
    </button>
</div>


