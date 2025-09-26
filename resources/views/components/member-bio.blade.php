@props([
    'id',
    'height' => 0,
    'title' => null,
])

<div class="text-[#F1F1D8] text-sm leading-6">
    @if($title)
        <p>{{ $title }}</p>
    @endif

    @isset($intro)
        {{ $intro }}
    @endisset
        <x-read-more :id="$id" :height="$height" :containerClass="''" :toggleClass="'mt-3 inline-flex gap-3 items-center text-white underline underline-offset-4'">
            {{ $slot }}
        </x-read-more>
</div>


