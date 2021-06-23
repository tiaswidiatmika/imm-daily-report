@extends('layouts.app')
@section('content')
<div class="m-2">
    {{-- ==========================header============================= --}}
    @include('post.includes.header')

    {{-- ========================kop surat============================== --}}
    @include('post.includes.kop-surat')

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
        Badung, {{ $post->tanggal_nesia }} <br />
        Kepala Seksi Pemeriksaan IV
    </div>
    
    <div class="flex justify-end mt-14 mr-16">
        Ahmad Ghazali <br />
        NIP. 19870303 200701 1 003
    </div>
    

    <div class="block">
        <p>Tembusan:</p>
        <p>1. Kepala Bidang Tempat Pemeriksaan Imigrasi (sebagai laporan);</p>
        <p>2. Kepala Bidang Intelijen dan Penindakan Keimigrasian;</p>
        <p>3. Kepala Bidang Teknologi Informasi dan Komunikasi Keimigrasian</p>
    </div>
</div>

    

@endsection