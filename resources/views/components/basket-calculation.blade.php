<div class="bg-blue-100 px-4 py-8 md:pt-8 md:p-10 rounded-[30px] shadow-large-card">
    <h2 class="text-2xl font-medium text-black-100 mb-10">Krepšelio skaičiavimas</h2>
    <div class="bg-white rounded-[20px]">
        <div class="space-y-4 px-4 md:pl-7 md:pr-6 pt-5 pb-6">
            <div class="flex justify-between">
                <div>
                    <div class="text-lg font-medium text-black-100 leading-6 mb-0.5">Tarpinė suma</div>
                    <div class="text-sm text-black-100/60" data-basket-count>0 prekės</div>
                </div>
                <div class="text-lg font-medium text-black-100 leading-6 text-right" data-basket-price>
                    €0.00
                </div>
            </div>
            <div class="flex justify-between">
                <div>
                    <div class="text-lg font-medium text-black-100 leading-6 mb-0.5">Nuolaida</div>
                    <div class="text-sm text-black-100/60" data-basket-count>Pritaikyta nuolaida 15%</div>
                </div>
                <div class="text-lg font-medium text-black-100 leading-6 text-right" data-basket-price>
                    - €0.00
                </div>
            </div>
            <div class="flex justify-between">
                <div>
                    <div class="text-lg font-medium text-black-100 leading-6 mb-0.5">Kaina pritaikius nuolaidą</div>
                </div>
                <div class="text-lg font-medium text-black-100 leading-6 h-[25px] flex items-center justify-center bg-green-100 rounded-[100px] px-2"
                data-basket-price>
                    €0.00
                </div>
            </div>
        </div>
        <div class="flex items-end space-x-5 px-4 md:pl-7 md:pr-6 pt-4 pb-6 border-t border-b border-black/10">
            <x-input name="discount-code" label="Nuolaidos kodas" placeholder="Įveskite turimą nuolaidos kodą" />
            <x-button variant="dark" showIcon="false" class="mb-2.5">Taikyti</x-button>
        </div>
        <div class="flex justify-between items-center px-4 md:pl-7 md:pr-6 pb-8 pt-7">
            <span class="text-black-100 text-2xl font-medium leading-[34px]">Viso mokėti</span>
            <span class="text-2xl font-medium text-black-100 leading-[34px]" data-basket-price>€0.00</span>
        </div>
    </div>
</div>