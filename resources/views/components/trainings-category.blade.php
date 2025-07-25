@props(['trainings' => []])

<section class="pb-[60px] md:pb-[108px] pt-12 md:pt-[88px] px-4 md:px-14 bg-gradient-custom rounded-t-[30px]">
    <div class="max-w-[1440px] mx-auto pb-20">
        <h2 class="text-black-100 font-medium text-[36px] leading-[46px] mb-6 md:mb-12 text-center md:text-left">Rinktis pagal specializaciją</h2>

        <div class="hidden md:flex flex-wrap gap-4 mb-16">
            <x-pill-button>Visi mokymai</x-pill-button>
            <x-pill-button>Higiena</x-pill-button>
            <x-pill-button>Pirmosios pagalbos</x-pill-button>
            <x-pill-button>Gaisrinė ir civilinė sauga</x-pill-button>
            <x-pill-button>Sveikatos priežiūra</x-pill-button>
        </div>

        <div class="md:hidden mb-8 md:mb-16">
            <x-select
                size="small"
                name="trainings-category"
                :options="[
                    ['label' => 'Higiena', 'value' => 'Higiena'],
                    ['label' => 'Pirmosios pagalbos', 'value' => 'Pirmosios pagalbos'],
                    ['label' => 'Gaisrinė ir civilinė sauga', 'value' => 'Gaisrinė ir civilinė sauga'],
                    ['label' => 'Sveikatos priežiūra', 'value' => 'Sveikatos priežiūra'],
                ]" />
        </div>

        <div class="w-full sm:max-w-[277px] mb-[30px] md:mb-[60px]">
            <x-search-input placeholder="Ieškoti mokymų..." />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($trainings as $training)
            <x-training-card :training="$training" />
            @endforeach
        </div>

        <x-button variant="dark" class="mt-[88px] mx-auto" showIcon="false">
            <span class="block">Išskleisti daugiau</span>
            <span class="block">
                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8008 11.0001C20.8008 16.6058 16.2565 21.1501 10.6508 21.1501C5.04509 21.1501 0.500781 16.6058 0.500782 11.0001C0.500782 5.39441 5.04509 0.850097 10.6508 0.850097C16.2565 0.850098 20.8008 5.39441 20.8008 11.0001ZM13.8424 10.463C13.1828 11.369 12.4494 12.2129 11.6508 12.986L11.6508 7.00019C11.6508 6.44791 11.2031 6.00019 10.6508 6.00019C10.0985 6.00019 9.65081 6.44791 9.65081 7.0002L9.65082 12.986C8.85228 12.2129 8.11883 11.369 7.45928 10.463C7.13423 10.0165 6.50877 9.91806 6.06227 10.2431C5.61577 10.5682 5.51731 11.1936 5.84236 11.6401C6.92981 13.1339 8.20077 14.4763 9.62345 15.634C9.92057 15.8757 10.2842 16.0002 10.6508 16.0002C11.0174 16.0002 11.3811 15.8757 11.6782 15.634C13.1009 14.4763 14.3718 13.1339 15.4593 11.6401C15.7843 11.1936 15.6859 10.5682 15.2394 10.2431C14.7929 9.91806 14.1674 10.0165 13.8424 10.463Z" fill="white" />
                </svg>
            </span>
        </x-button>
    </div>
</section>