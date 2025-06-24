@props([
'label' => null,
'title' => null,
'items' => [],
'button' => false,
])

<section
    class="mx-auto bg-gradient-custom lg:px-14 px-4 pt-14 md:pt-[110px] pb-[86px] md:pb-[263px] -mt-5 md:-mt-10 translate-y-5 md:translate-y-10 rounded-t-[30px]">
    <div class="max-w-[1440px] w-full mx-auto px-4 md:px-0">
        @if ($label)
        <div
            class="bg-white flex items-center justify-center rounded-[10px] px-3 py-[5px] text-sm font-medium leading-[22px] text-green w-max mx-auto mb-[30px]">
            Naujienos
        </div>
        @endif
        <h2
            class="text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] text-center mb-[60px] md:mb-[70px] mt-4 md:mt-10 text-black-100 text-black-100">
            {{ $title ?? 'Naujausi straipsniai' }}
        </h2>

        <div class="max-w-[1440px] w-full mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($items as $item)
                <x-article-card :article="$item" />
                @endforeach
            </div>
        </div>

        @if ($button)
        <x-button url="{{ route('news') }}" variant="dark" class="mt-16 mx-auto">
            Peržiūrėti visus
        </x-button>
        @endif
    </div>
</section>