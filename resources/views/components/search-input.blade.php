@props(['placeholder' => '', 'dataSearchInput' => ''])

<div class="relative w-full">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.4">
                <path d="M21 21L14.9497 14.9497M14.9497 14.9497C16.2165 13.683 17 11.933 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17C11.933 17 13.683 16.2165 14.9497 14.9497Z" stroke="#111111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </g>
        </svg>
    </div>
    <input
        type="text"
        name="search"
        id="search"
        class="block w-full py-[11px] pl-11 pr-3 border border-black-100/10 rounded-[10px] leading-6 bg-white placeholder-black-100/40 focus:outline-none focus:placeholder-black-100/40 focus:border-black-100/10 text-base  font-medium text-black-100"
        placeholder="{{ $placeholder ?? '' }}"
        data-search-input="{{ $dataSearchInput ?? '' }}">
</div>