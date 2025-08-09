@props(['avatar', 'name', 'text', 'logo'])

<div class="shadow-large-card w-[420px] rounded-3xl pt-5 pr-4 pb-8 pl-5 h-full">
    <div class="flex justify-between mb-5">
        <div class="w-14 h-14 rounded-full flex-shrink-0 flex overflow-hidden">
            <img src="{{ $avatar }}" alt="{{ $name }} avatar">
        </div>
        <img src="{{ $logo }}" alt="Google logo" />
    </div>
    <p class="text-black-100 text-base font-normal leading-6 mb-3">{{ $name }}</p>
    <p class="text-black-100 text-xl font-medium leading-[30px]">
        "{{ $text }}"
    </p>
</div>