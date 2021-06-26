{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}


<div class="flex-row space-y-2 text-center bg-green-100">
    {{-- <h1
        class="block"
    >
        user will pick which section to do
    </h1> --}}
    {{--==================== arrival section start ===========================--}}
    <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center sections"
        id="arrival"
    >
        Arrival
    </a>

    {{-- option for arrival --}}
    <div class="flex flex-col space-y-1 p-2 section-option"
        id="section-option-arrival"
        x-show="!isOpen"
    >
        <h1 class="text-gray-900 text-center">Option</h1>

        <a href="{{ route('create-template') }}"
            class="p-3 bg-blue-500 text-blue-50 text-center"
        >Create Template</a>

        <a href="{{ route('create-from-template', ['ref' => 'arrival']) }}"
            class="p-3 bg-blue-500 text-blue-50 text-center"
        >Create Post from Existing Template</a>

        <button
            class="p-3 bg-blue-500 text-blue-50"
            @click="isOpen = !isOpen"
        >Create Blank Post</button>

    </div>
    {{-- ============================================== --}}
    {{-- ===================== departure section start ======================--}}
    <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center sections"
        id="departure"
    >
        Departure
    </a>
    {{-- option for departure --}}
    <div class="flex flex-col space-y-1 p-2 section-option"
        id="section-option-departure"
        x-show="!isOpen"
    >
        <h1 class="text-gray-900 text-center">Option</h1>

        <a href="{{ route('create-template') }}"
            class="p-3 bg-blue-500 text-blue-50 text-center"
        >Create Template</a>

        <a href="{{ route('create-from-template', ['ref' => 'departure']) }}"
            class="p-3 bg-blue-500 text-blue-50 text-center"
        >Create Post from Existing Template</a>

        <button
            class="p-3 bg-blue-500 text-blue-50"
            @click="isOpen = !isOpen"
        >Create Blank Post</button>

    </div>
    {{-- ========================================================== --}}
    {{-- ================================ selatan section start ======================= --}}
    <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center sections"
        id="selatan"
    >
        Terminal Selatan
    </a>

    {{-- @include('post.create') --}}
    <a
        href="{{ route('create-laporan-absensi') }}"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
    >
        Group Presence
    </a>


</div>
{{-- @endsection --}}