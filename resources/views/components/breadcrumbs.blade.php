<nav aria-label="Breadcrumb">
    <ol class="flex flex-wrap items-center gap-x-2">
        @foreach ($breadcrumbs as $breadcrumb)
        <li class="group flex items-center gap-x-2">
            <a href="{{ $breadcrumb['url'] }}"
                class="text-black-100/50 font-['Helvetica_Neue'] text-sm font-normal leading-6 group-last:text-black-100 group-last:font-medium">
                {{ $breadcrumb['label'] }}
            </a>
            <span class="block group-last:hidden">
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.67324 4.07504C4.4957 2.61214 3.12353 1.30728 1.5927 0.194469C1.40669 0.0574817 1.17258 -0.0160695 0.924166 0.00283523C0.373474 0.0447435 -0.0389773 0.525142 0.00293095 1.07583C0.20173 3.68814 0.20173 6.31177 0.00293082 8.92407C-0.0389774 9.47476 0.373474 9.95516 0.924166 9.99707C1.17258 10.016 1.40668 9.94243 1.59269 9.80544C3.12353 8.69263 4.4957 7.38777 5.67324 5.92487C6.10898 5.38353 6.10898 4.61638 5.67324 4.07504Z" fill="#111111" />
                </svg>
            </span>
        </li>
        @endforeach
    </ol>
</nav>