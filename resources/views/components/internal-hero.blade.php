<!-- TODO Change padding top when header will be completed -->
<section class="bg-gray-100 px-4 sm:px-14 pt-4 pb-[60px] md:pb-[100px]">
    <div class="relative max-w-[1440px] mx-auto flex flex-col lg:flex-row justify-between gap-y-[60px]">
        <div class="max-w-[644px] w-full">
            <x-breadcrumbs :breadcrumbs="$breadcrumbs" />
            <div class="w-10 md:w-[95px] h-10 md:h-[95px] mb-4 lg:mb-10 mt-6 lg:mt-12 ">
                <img src="{{ $avatar }}" alt="Avatar" class="rounded-full w-full h-full object-cover">
            </div>
            <h1 class="text-black-100  text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] mb-6">{{ $title }}</h1>
            <div class="space-y-6">
                @foreach($descriptions as $description)
                <p class="text-black-100  text-base font-normal leading-6">{{ $description }}</p>
                @endforeach
            </div>

            @if(!empty($sections))
            <div class="hidden md:block">
                <x-training-description :sections="$sections" />
            </div>
            @endif
        </div>

        <div class="flex flex-col-reverse md:flex-col lg:pt-6 max-w-[420px] w-full gap-4 md:gap-6">
            @if(!empty($sections))
                <div class="md:hidden">
                    <x-training-description :sections="$sections" />
                </div>
            @endif
            @isset($trainingInfo)
                <x-training-info :title="$trainingInfo['title'] ?? 'Kam skirta'" :description="$trainingInfo['description'] ?? null" :items="$trainingInfo['items'] ?? []" />
            @endisset
            <x-basket />
        </div>
    </div>
</section>