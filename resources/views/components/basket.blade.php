<div class="max-w-[420px] w-full bg-gray-400 rounded-[30px] pt-5 px-[14px] md:px-[30px] pb-7 md:pb-[30px]" data-component="basket">
    <h2 class="text-black-100  text-2xl font-medium leading-8 mb-5">Mokymų tipas</h2>

    <div class="flex items-center bg-white rounded-[100px] p-2 max-w-[200px] mb-6">
        <button id="btn-individual" class="w-full rounded-full px-2 text-center  text-xs font-medium leading-6 tracking-[0.6px] uppercase transition-colors">INDIVIDUALIAI</button>
        <button id="btn-company" class="w-full rounded-full text-center  text-xs font-medium leading-6 tracking-[0.6px] uppercase transition-colors">ĮMONĖMS</button>
    </div>


    @if ($description)
    <p class="text-black-100  text-sm font-normal leading-[22px] mb-[30px] md:mb-6">
        {{ $description }}
    </p>
    @endif

    @if ($dates)
    <div class="space-y-2.5 mb-6">
        @foreach ($dates as $item)
        <div class="flex items-center bg-white gap-x-2 pl-[15px] pr-2.5 py-[7px] rounded-[100px]">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2131 9.16671C19.25 9.88887 19.25 10.7758 19.25 11.9167C19.25 14.4794 19.25 15.7607 18.8313 16.7715C18.2731 18.1191 17.2024 19.1898 15.8548 19.748C14.844 20.1667 13.5627 20.1667 11 20.1667C8.43732 20.1667 7.15598 20.1667 6.14524 19.748C4.79759 19.1898 3.72688 18.1191 3.16866 16.7715C2.75 15.7607 2.75 14.4794 2.75 11.9167C2.75 10.7758 2.75 9.88887 2.78694 9.16671M19.2131 9.16671C19.167 8.26676 19.0636 7.62271 18.8313 7.06195C18.2731 5.71429 17.2024 4.64359 15.8548 4.08537C15.5051 3.94052 15.123 3.84579 14.6667 3.78383M19.2131 9.16671L2.78694 9.16671M2.78694 9.16671C2.83298 8.26676 2.93639 7.62271 3.16866 7.06195C3.72688 5.71429 4.79759 4.64359 6.14524 4.08537C6.49493 3.94052 6.87701 3.84579 7.33333 3.78383M7.33333 1.83337V3.78383M7.33333 3.78383V5.50004M7.33333 3.78383C8.19597 3.66671 9.32394 3.66671 11 3.66671C12.6761 3.66671 13.804 3.66671 14.6667 3.78383M14.6667 1.83337V3.78383M14.6667 3.78383V5.50004M7.3425 12.8334H7.33333M7.3425 16.5H7.33333M11.0092 12.8334H11M11.0092 16.5H11M14.6758 12.8334H14.6667M14.6758 16.5H14.6667" stroke="#111111" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div>
                <p class="text-black-100  text-sm font-normal leading-5">{{ $item['date'] }}</p>
                <p class="text-black-100/60  text-[11px] font-medium leading-5">{{ $item['time'] }}</p>
            </div>
            @if ($item['available'] > 0)
            <span class="ml-auto bg-blue text-black-100 text-center  text-xs font-medium leading-6 tracking-[0.6px] uppercase max-w-[97px] w-full rounded-[100px] block">
                {{ $item['available'] }} / {{ $item['total'] }} VIETŲ
            </span>
            @else
            <span class="ml-auto bg-black-100/20 text-white text-center  text-xs font-medium leading-6 tracking-[0.6px] uppercase max-w-[97px] w-full rounded-[100px] block">
                {{ $item['available'] }} / {{ $item['total'] }} VIETŲ
            </span>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    <div class="flex justify-between items-center mb-3">
        <div class="text-black-100  text-base font-medium leading-6">Kaina:</div>
        <div class="flex items-center gap-x-1 text-black-100  text-2xl font-medium leading-8">
            <div>€</div>
            <div data-price-individual="{{ $individualPrice }}" data-price-company="{{ $companyPrice }}">
                {{ number_format($individualPrice, 2) }}
            </div>
        </div>
    </div>
    <x-button class="w-full" variant="dark">
        Dėti į krepšelį
    </x-button>
</div>