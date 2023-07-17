<div>
    <x-modal form-action="update">
        <x-slot name="title">
            Input <strong>{{ $total }}</strong> serial number terkait
        </x-slot>

        <x-slot name="content">
            <div class="flex flex-col space-y-4">
                @foreach ($serials as $key => $input)
                    <x-input wire:model.lazy="serials.{{ $key }}.serial" placeholder="Serial Number"
                        :error="$errors->first('serials.{{ $key }}.serial')" required />
                @endforeach
                @if ($serials->count() < $total)
                    <x-button.secondary wire:click.prevent="addInput"
                        class="mt-2 flex items-center justify-center space-x-2 bg-gray-100" full>
                        <x-icon.plus class="h-5 w-5" />
                        <span>Tampilkan input lainnya</span>
                    </x-button.secondary>
                @endif
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-button.secondary link="{{ route('non-consumable.index') }}" wire:loading.remove wire:target="update">
                Tutup
            </x-button.secondary>
            <x-button.primary type="submit" wire:loading.remove wire:target="update" class="ml-2">
                Tambahkan
            </x-button.primary>
            <x-button.primary wire:loading.flex wire:target="update" class="inline-flex items-center" disabled>
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Processing..
            </x-button.primary>
        </x-slot>
    </x-modal>
</div>