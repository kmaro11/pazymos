@props([
    'name' => '',
    'value' => '',
    'checked' => false,
    'id' => null
])

@php
    $id = $id ?? $name;
@endphp

<div class="flex items-start">
    <div class="relative">
        <input 
            type="checkbox" 
            name="{{ $name }}" 
            value="{{ $value }}"
            id="{{ $id }}"
            {{ $checked ? 'checked' : '' }}
            class="peer sr-only"
            {{ $attributes }}
        >
        <span class="block w-6 h-6 rounded-md border transition-colors duration-200 ease-in-out border-green/40 peer-checked:border-green"></span>
        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="pointer-events-none hidden peer-checked:block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
            <path d="M14.25 2L5.5 12L1.75 8.25" stroke="#204D51" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <label for="{{ $id }}" class="absolute inset-0 cursor-pointer" aria-label="toggle"></label>
    </div>
    
    @if($slot->isNotEmpty())
        <label for="{{ $id }}" class="ml-4 text-base text-black/50 cursor-pointer leading-6">
            {{ $slot }}
        </label>
    @endif
</div>
