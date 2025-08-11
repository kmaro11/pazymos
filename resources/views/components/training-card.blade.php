@props([
'training' => [],
'type' => 'list'
])

@php
$image = $training['image'] ?? '';
$title = $training['title'] ?? '';
$price = $training['price'] ?? '';
$labels = $training['labels'] ?? [];
$filters = $training['filters'] ?? [];
$features = $training['features'] ?? [];
$link = $training['link'] ?? '#';
$alt = $training['alt'] ?? $title ?? 'Mokymo paveikslėlis';
@endphp

<div class="bg-white rounded-[20px] md:rounded-3xl shadow-card flex flex-col p-2 md:p-2.5 pb-6 md:pb-8 h-full" data-training-title="{{ $title }}" data-training-filters="{{ implode(',', $filters) }}">
    <div class="relative w-full h-[206px] md:h-[250px] flex items-center justify-center mb-6 md:mb-[30px]">
        <img src="{{ $image }}" alt="{{ $alt }}" class="rounded-3xl w-full h-full object-cover object-center" />
        <div class="absolute top-2 md:top-2.5 left-2 md:left-2.5 flex gap-1.5 md:gap-2">
            @foreach($labels as $label)
            <div class="bg-white rounded-[100px] flex items-center justify-center h-6 md:h-[30px] text-[14px] font-medium leading-[14px] text-black-100 px-3 w-max text-center" data-training-tag>{{ $label }}</div>
            @endforeach
        </div>
    </div>

    <div class="px-2.5 flex flex-col flex-1">
        <div class="flex items-center justify-between mb-6 gap-x-2">
            <span class="text-black-100  text-lg md:text-2xl font-medium leading-6 md:leading-[34px]" data-training-title>{{ $title }}</span>
            <span class="text-black-100  text-lg md:text-2xl font-medium leading-6 md:leading-[34px]">{{ $price }}</span>
        </div>

        @if($type === 'text')
        <div class="mb-[30px] md:mb-5">
            <div class="text-black-100 text-base font-normal leading-6">Privalomojo higienos įgūdžių specialioji mokymo programa darbuotojams, kurių veikla susijusi su medicininių atliekų tvarkymu sveikatos priežiūros įstaigose</div>
        </div>
        @else
        <div class="text-black-100 text-base font-medium leading-6 mb-5">Į komplektą įeinantys mokymai:</div>
        <ul class="mb-[30px] md:mb-5 list-disc pl-5">
            @foreach($features as $feature)
            <li class="text-black-100 text-base font-normal leading-6">{{ $feature }}</li>
            @endforeach
        </ul>
        @endif

        <x-button variant="dark" url="{{ $link }}" class="mt-auto">Peržiūrėti</x-button>
    </div>
</div>