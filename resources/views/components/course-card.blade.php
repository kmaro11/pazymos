@props([
'course' => []
])

@php
$image = $course['image'] ?? '';
$title = $course['title'] ?? '';
$price = $course['price'] ?? '';
$labels = $course['labels'] ?? [];
$features = $course['features'] ?? [];
$link = $course['link'] ?? '#';
$alt = $course['alt'] ?? $title ?? 'Kurso paveikslėlis';
@endphp

<div class="bg-white rounded-[20px] md:rounded-3xl shadow-card flex flex-col p-2 md:p-2.5 pb-6 md:pb-8 h-full">
    <div class="relative w-full h-[206px] md:h-[250px] flex items-center justify-center mb-6 md:mb-[30px]">
        <img src="{{ $image }}" alt="{{ $alt }}" class="rounded-3xl w-full h-full object-cover object-center" />
        <div class="absolute top-2 md:top-2.5 left-2 md:left-2.5 flex gap-1.5 md:gap-2">
            @foreach($labels as $label)
            <div class="bg-white rounded-[100px] flex items-center justify-center h-6 md:h-[30px] text-[14px] font-medium leading-[14px] text-black-100 px-3 w-max text-center font-['Helvetica_Neue']">{{ $label }}</div>
            @endforeach
        </div>
    </div>

    <div class="px-2.5 flex flex-col flex-1">
        <div class="flex items-center justify-between mb-6 gap-x-2">
            <span class="text-black-100 font-['Helvetica_Neue'] text-lg md:text-2xl font-medium leading-6 md:leading-[34px]">{{ $title }}</span>
            <span class="text-black-100 font-['Helvetica_Neue'] text-lg md:text-2xl font-medium leading-6 md:leading-[34px]">{{ $price }}</span>
        </div>

        <div class="text-black-100 font-['Helvetica_Neue'] text-base font-medium leading-6 mb-5">Į komplektą įeinantys mokymai:</div>

        <ul class="mb-[30px] md:mb-5">
            @foreach($features as $feature)
            <li class="flex items-center gap-2">
                <span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.64451 0.168854C9.02419 -0.180365 8.24216 0.0297923 7.87184 0.636034C7.43824 1.34619 6.52965 1.59071 5.79683 1.19149C5.39449 0.972734 4.90543 0.970394 4.50072 1.20399L4.49994 1.20321C3.50072 1.78367 4.15384 2.61805 3.38588 3.38601L3.38431 3.38445C2.61555 4.15321 1.77963 3.50164 1.2039 4.50007C0.625781 5.50241 1.61173 5.89069 1.32969 6.94467C1.04764 7.99935 0 7.84389 0 9.00007C0 10.1562 1.04766 10.0008 1.32969 11.0555C1.61173 12.1086 0.625783 12.4992 1.2039 13.5001L1.20312 13.5008C1.78281 14.4985 2.61953 13.8485 3.38593 14.6149C4.15312 15.3821 3.50156 16.2204 4.5 16.7961C5.50234 17.3742 5.89062 16.3883 6.94461 16.6703C7.9993 16.9531 7.84305 18 9.00002 18C10.157 18 10.0008 16.9523 11.0554 16.6703C12.1078 16.3883 12.5 17.3742 13.5022 16.7961C14.4952 16.2234 13.8483 15.382 14.6163 14.6149C15.3835 13.8477 16.2202 14.4985 16.7953 13.5008C17.3734 12.4985 16.3875 12.1102 16.6695 11.0562C16.9524 10.0008 18 10.157 18 9.00005C18 7.84381 16.9523 7.99927 16.6703 6.94465C16.3883 5.89153 17.3742 5.50169 16.7961 4.50005L16.7969 4.49927C16.2164 3.50005 15.3859 4.15473 14.6141 3.38287C13.8492 2.61803 14.4945 1.77663 13.5023 1.20387C12.5008 0.62575 12.1078 1.61169 11.0555 1.32965C10.1735 1.09371 10.2453 0.507134 9.64451 0.168854ZM12.2649 5.57745C12.772 4.97823 13.686 5.75167 13.179 6.35089L8.03436 12.4227C7.78436 12.718 7.34764 12.6969 7.1078 12.4078L4.82578 9.77264C4.31094 9.17733 5.21485 8.39453 5.73047 8.98983L7.57266 11.1164L12.2649 5.57745Z" fill="#275256" />
                    </svg>
                </span>
                <span class="text-black-100 font-['Helvetica_Neue'] text-base font-normal leading-6">{{ $feature }}</span>
            </li>
            @endforeach
        </ul>

        <x-button variant="dark" url="{{ $link }}" class="mt-auto">Peržiūrėti</x-button>
    </div>
</div>