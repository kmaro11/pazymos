@props([
'label' => null,
'name',
'options' => [],
'placeholder' => null,
'size' => 'default',
])

@php
$buttonClasses = $size === 'small'
? 'py-[7px] md:py-[17px] pl-3 md:pl-5 text-sm md:text-base'
: 'py-[17px] pl-5 text-base';
$optionTextClasses = $size === 'small'
? 'text-sm'
: 'text-base';
@endphp

<div class="w-full space-y-2">
    @if ($label)
    <label for="{{ $name }}" class="text-black-100 text-base font-normal leading-6">{{ $label }}</label>
    @endif

    <div class="relative custom-select-wrapper">
        <input type="hidden" name="{{ $name }}" class="custom-select-value">
        <button type="button" class="custom-select-trigger relative w-full bg-white border border-black/20 rounded-md shadow-sm {{ $buttonClasses }} text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <span class="block truncate text-black-100/50 font-normal leading-6 custom-select-text {{ $optionTextClasses }}" data-placeholder="{{ $placeholder ?? 'Select an option' }}">{{ $placeholder ?? 'Select an option' }}</span>
            <span class="absolute inset-y-0 right-0 flex items-center pr-[22px]">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.92496 5.67324C7.38786 4.4957 8.69272 3.12353 9.80553 1.5927C9.94252 1.40669 10.0161 1.17258 9.99716 0.924166C9.95526 0.373474 9.47486 -0.0389769 8.92417 0.00293134C6.31186 0.20173 3.68823 0.20173 1.07593 0.00293086C0.525237 -0.0389774 0.0448391 0.373474 0.00293086 0.924166C-0.0159734 1.17258 0.0575749 1.40668 0.194559 1.59269C1.30737 3.12353 2.61223 4.4957 4.07513 5.67324C4.61647 6.10898 5.38362 6.10898 5.92496 5.67324Z" fill="#111111" />
                </svg>
            </span>
        </button>

        <ul class="custom-select-options absolute z-10 mt-3 w-full bg-white shadow-lg max-h-60 rounded-[10px] py-1 overflow-auto focus:outline-none hidden" tabindex="-1" role="listbox">
            @foreach ($options as $option)
            <li class="custom-pointer select-none cursor-pointer relative py-2 pl-3 pr-9 hover:bg-black-100/10 transition-all duration-300" data-value="{{ $option['value'] }}">
                <span class="text-black-100 leading-6 block truncate {{ $optionTextClasses }}">{{ $option['label'] }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>