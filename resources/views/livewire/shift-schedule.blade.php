<div class="flex-row px-10 py-5">
    {{-- =================== kop absensi ===================== --}}
    <div class="m-auto transform scale-x-110 scale-y-110 border-b-4 border-black">
    <p class="text-center font-bold">
        LAPORAN ABSENSI <br />
        SEKSI PEMERIKSAAN IV - GRUP 1 <br />
        RABU, 25 MARET 2021 PUKUL 13.00 - 22.00 WITA, TERMINAL KEDATANGAN <br />
    </p>
    </div>
{{-- =============akhir kop======================================= --}}
<p class="text-md text-center m-3">
    Supervisor: {{ $numbering++ }}. {{ $spv }} <br />
    @foreach ($opises as $opis)
        Asst. Supervisor: {{ $numbering++ }} {{ $opis->name }} <br />
    @endforeach

    sip skarang: {{ $currentShift }}
    ( {{ $shiftTime }} WITA )
    terminal: {{ $terminal }}
</p>

</div>