<div id="modal" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/80 ">
    <div class="bg-white md:rounded-[30px] shadow-large-card max-w-[645px] w-full pb-9 pt-8 px-10 relative md:max-h-[calc(100vh-40px)] overflow-y-auto">
        <button id="modal-close" class="absolute top-0 right-0 p-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.84961 11.9999C1.84961 6.39416 6.39392 1.84985 11.9996 1.84985C17.6053 1.84985 22.1496 6.39416 22.1496 11.9999C22.1496 17.6055 17.6053 22.1499 11.9996 22.1499C6.39392 22.1499 1.84961 17.6055 1.84961 11.9999ZM9.60676 8.1928C9.21624 7.80227 8.58308 7.80227 8.19255 8.1928C7.80203 8.58332 7.80203 9.21649 8.19255 9.60701L10.5854 11.9999L8.19255 14.3928C7.80203 14.7833 7.80203 15.4165 8.19255 15.807C8.58308 16.1975 9.21624 16.1975 9.60676 15.807L11.9997 13.4141L14.3926 15.807C14.7831 16.1975 15.4162 16.1975 15.8068 15.807C16.1973 15.4165 16.1973 14.7833 15.8068 14.3928L13.4139 11.9999L15.8068 9.60701C16.1973 9.21649 16.1973 8.58332 15.8068 8.1928C15.4162 7.80227 14.7831 7.80227 14.3926 8.1928L11.9997 10.5857L9.60676 8.1928Z" fill="#0E0126" />
            </svg>

        </button>
        <div id="modal-form">
            <h2 class="text-black-100 text-2xl font-medium leading-normal mb-4">Susisiekite su mumis gauti pasiūlymui</h2>
            <p class="text-black-100 text-base font-normal leading-6 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
            <form action="">
                <div class="grid grid-cols-1 gap-y-4 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-[30px]">
                        <x-input name="name" label="Vardas" placeholder="Vardas" required />
                        <x-input name="name" label="Pavardė" placeholder="Pavardė" required />
                    </div>
                    <div class="grid grid-cols-1">
                        <x-input name="company" label="Įmonės pavadinimas" placeholder="Įmonės pavadinimas" required />
                    </div>
                    <div class="grid grid-cols-1">
                        <x-input name="email" type="email" label="El. paštas" placeholder="El. paštas" required />
                    </div>
                    <div class="grid grid-cols-1">
                        <x-input name="phone" type="tel" label="Telefonas" placeholder="Telefonas" required />
                    </div>
                    <div class="grid grid-cols-1">
                        <x-input name="message" label="Jūsų žinutė" placeholder="Parašykite savo pranešimą čia..." rows="5" />
                    </div>
                </div>
                <x-button type="submit" variant="dark" size="w-full" class="mt-10">
                    Siųsti užklausą
                </x-button>
            </form>
        </div>
        <div class="hidden" id="modal-success">
            <h2 class="text-black-100 text-2xl font-medium leading-normal mb-4">Ačiū už jūsų užklausą!</h2>
            <p class="text-black-100 text-base font-normal leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
        </div>
    </div>
</div>