<div>
    {{-- ==========================header============================= --}}
    <div class="flex center">
        <img src="{{ asset('storage/logo kecil.jpg') }}" alt="logo kecil" srcset="" class="w-12 h-12 self-center" />
        <p class="p-4 ml-1 text-xs">
            <b>
                Kantor Imigrasi Kelas I Khusus TPI Ngurah Rai <br />
                Bidang Tempat Pemeriksaan Imigrasi <br />
                Seksi Pemeriksaan IV <br />
            </b>
        </p>
    </div>      

    {{-- ========================kop surat============================== --}}
    <div class="flex border-b-4 border-black self-start px-10 py-5">
        <img src="https://i.pinimg.com/564x/44/96/1c/44961c5aad3335279251473f987e1849.jpg" alt="logo pengayom kecil" srcset="" class="h-24 self-center" />
        <div class="m-auto susik  transform scale-x-125 scale-y-110">
        <p class="text-center">
            KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA <br />
            KANTOR WILAYAH BALI <br />
            KANTOR IMIGRASI KELAS I KHUSUS TPI NGURAH RAI <br />
        </p>
        <p class="text-xs text-center">
            Jalan Perum Taman Jimbaran No. 1 Jimbaran, Kuta Selatan, Badung, Bali <br />
            Telepon/Faksimili: 0361-9551038,0361-8568395/0361-9357011 <br />
            Laman: www.ngurahrai.imigrasi.go.id, Email: kanim_ngurahrai@imigrasi.go.id <br />
        </p>
        </div>
    </div>

    {{-- ========================kepada yth================================= --}}
    <div class="mt-5 mr-24 mb-5 flex justify-end">
        Kepada Yth. <br />
        Kepala Kantor Imigrasi <br />
        Kelas I Khusus TPI Ngurah Rai <br />
    </div>
    
    {{-- =============================report content=========================== --}}

    <h2 class="flex justify-center mb-4 text-lg"><u><b>LAPORAN KHUSUS / ATENSI PIMPINAN</b></u></h2>
    <table class="mt-2 table-auto">
        <tr class="border-black">
            <th class="p-1 border-black border-solid border-2">
                NO.
            </th>
            <th class="p-1 border-black border-solid border-2">
                UNIT PEMERIKSA / <br> PERISTIWA KEJADIAN
            </th>
            <th class="p-1 border-black border-solid border-2">
                URAIAN KEJADIAN
            </th>
        </tr>

        <tr>
            <td class="p-1 border-black border-solid border-2">
                1.
            </td>
            <td class="p-1 border-black border-solid border-2">
                {!! $post->case !!}
            </td>
            <td class="p-1 border-black border-solid border-2">
                {!! $post->title !!}
                <br />

                {!! $post->summary !!}
                <br />

                {!! $post->chronology !!}
                <br />

                {!! $post->measure !!}  
                <br />

                {!! $post->conclusion !!}
            </td>
        </tr>

    </table>

    <div class="flex justify-end mt-4 mr-16">
        Badung, 02 Februari 2021 <br />
        Kepala Seksi Pemeriksaan IV
    </div>
    
    <div class="flex justify-end mt-14 mr-16">
        Ahmad Ghazali <br />
        NIP. 19870303 200701 1 003
    </div>
    

    <div class="block">
        Tembusan: <br />
        1. Kepala Bidang Tempat Pemeriksaan Imigrasi (sebagai laporan); <br />
        2. Kepala Bidang Intelijen dan Penindakan Keimigrasian; <br />
        3. Kepala Bidang Teknologi Informasi dan Komunikasi Keimigrasian <br />
    </div>
</div>
