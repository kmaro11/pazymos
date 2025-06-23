@php
$baseClasses = 'py-[17px] px-5 border border-black/20 rounded-[10px] w-full placeholder:text-black-100/50 text-black-100 text-base font-normal leading-6';
@endphp
<div class="w-full space-y-2">
    @if ($label)
    <label for="{{ $name }}" class="text-black-100 text-base font-normal leading-6">{{ $label }}</label>
    @endif

    @if ($as === 'textarea')
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        rows="{{ $rows }}"
        {{ $attributes->merge(['class' => $baseClasses]) }}>{{ old($name, $value) }}</textarea>
    @else
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => $baseClasses]) }}>
    @endif
</div>