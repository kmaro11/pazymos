@props([
    'title' => $title ?? 'Kam skirta',
    'description' => $description ?? null,
    'items' => $items ?? [],
])

<div class="mb-4 md:mb-6">
    <div class="bg-blue-100 rounded-3xl py-5 pl-[18px] pr-2.5 md:pt-5 md:pl-[30px] md:pr-5 md:pb-6">
        <h2 class="text-black-100 text-3xl font-medium leading-[34px] mb-[14px] md:mb-3">{{ $title }}</h2>
        @if($description)
            <p class="text-black-100 text-sm md:text-base leading-[22px]">{{ $description }}</p>
        @endif
    </div>
    <div class="bg-[#EBF4FF] rounded-3xl pl-2.5 pr-5 md:pr-2 pb-2.5">
        <ul>
            @foreach($items as $item)
            <li class="py-5 md:pr-[22px] md:pl-5 border-b border-black/10 last:border-b-0">
                <div class="flex justify-between">
                    <h4 class="text-black-100 text-base leading-6">{{ $item['title'] }}</h4>
                    <div>
                        <div class="text-black-100 text-lg font-medium leading-6 text-right">{{ $item['name'] }}</div>
                        @if(!empty($item['info']))
                            <div class="text-black-100/50 text-xs leading-[23px] text-right">{{ $item['info'] }}</div>
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>


