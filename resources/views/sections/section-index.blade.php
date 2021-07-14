<div class="medium-container mt-10 self-center relative">
    <div class="flex flex-col space-y-6">
        <p class="title">Pick a Section</p>
        <div class="single-section-container items-center space-x-2" id="arrival-section">
            <img 
                class="section-icon"
                src="{{ asset('media/arrival-icon.svg') }}" alt="arrival icon small" srcset="" id="arrival-icon">
            <div>
                <p class="sub-title">Arrival</p>
                <p class="summary">Report for ...</p>
            </div>
            <img
                src="{{ asset('media/chevron-left-solid.svg') }}"
                alt="chevron right arrival"
                srcset=""
                class="section-chevron-right section-icon"
                id="arrival-section-chevron-right">

        </div>

        <div class="single-section-container flex flex-row items-center space-x-2" id="departure-section">
            <img
                class="section-icon"
                src="{{ asset('media/departure-icon.svg') }}" alt="arrival icon small" srcset="">
            <div>
                <p class="sub-title">Departure</p>
                <p class="summary">Report for ...</p>
            </div>
            <img
                src="{{ asset('media/chevron-left-solid.svg') }}"
                alt="chevron left"
                srcset=""
                class="section-chevron-right section-icon">
        </div>

        <div class="single-section-container flex flex-row items-center space-x-2">
            <img
                class="section-icon"
                src="{{ asset('media/formation-icon.svg') }}" alt="arrival icon small" srcset="">
            <div>
                <p class="sub-title">Formation</p>
                <p class="summary">Arrange Personnel</p>
            </div>
            <img
                src="{{ asset('media/chevron-left-solid.svg') }}"
                alt="chevron left"
                srcset=""
                class="section-chevron-right section-icon">
        </div>
    </div>
    {{-- arrival option starts here --}}
    <section-option
        class="section-option space-y-1"
        style="top: 84px"
        id="arrival-option">
        <section-list style="padding-top: 4px">
            Create Template
        </section-list>
        <section-list>
            Create Post from<br>Existing Template
        </section-list>
        <section-list style="padding-bottom: 4px">
            Create Blank Post
        </section-list>
    </section-option>

    <section-option
        class="section-option space-y-1 bottom-44"
        id="departure-option"
    >
        <section-list style="padding-top: 4px">
            Create Template
        </section-list>
        <section-list>
            Create Post from<br>Existing Template
        </section-list>
        <section-list style="padding-bottom: 4px">
            Create Blank Post
        </section-list>
    </section-option>

    {{-- departure option starts here --}}
    {{-- <ul class="option-component flex flex-col space-y-1 justify-center absolute top-40">
        <li class="option-lettering">
            Create Template
            <hr class="option-lines">
        </li>
        <li class="option-lettering">
            Create Post from<br>Existing Template
            <hr class="option-lines">
        </li>
        <li class="option-lettering">
            Create Blank Post
        </li>
    </ul> --}}

    
    
</div>

{{-- old section --}}
{{-- <div class="flex-row space-y-2 text-center bg-green-100"> --}}

    {{--==================== arrival section start ===========================--}}
    {{-- <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center sections"
        id="arrival"
    >
        Arrival
    </a> --}}

    {{-- option for arrival --}}
    {{-- <div class="flex flex-col space-y-1 p-2 section-option"
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

    </div> --}}
    {{-- ============================================== --}}
    {{-- ===================== departure section start ======================--}}
    {{-- <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center sections"
        id="departure"
    >
        Departure
    </a> --}}
    {{-- option for departure --}}
    {{-- <div class="flex flex-col space-y-1 p-2 section-option"
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

    </div> --}}
    {{-- ========================================================== --}}
    {{-- ================================ selatan section start ======================= --}}
    {{-- <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center sections"
        id="selatan"
    >
        Terminal Selatan
    </a> --}}

    {{-- @include('post.create') --}}
    {{-- <a
        href="{{ route('create-laporan-absensi') }}"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
    >
        Group Presence
    </a> --}}


{{-- </div> --}}
{{-- @endsection --}}