<div class="flex-row p-1">
    <form action="{{ route('create-laporan-absensi') }}" method="post">
        @csrf
        @include('livewire.in-duty.konter-foreigner')
        @include('livewire.in-duty.konter-indonesia')
        {{-- @include('livewire.in-duty.sakit') --}}
        <input type="hidden" name="foreigner" wire:model="usersKonterForeigner">
        <input type="hidden" name="paspor_indonesia" wire:model="usersKonterIndonesia">
        <button class="p-2 bg-blue-600 text-white" type="submit">submit</button>
    </form>
</div>