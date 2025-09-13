@props([
    'id',
    'height' => 0,
    'title' => null,
])

<div class="text-gray-100 text-base font-light leading-6">
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


