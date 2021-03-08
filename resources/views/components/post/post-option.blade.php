{{-- @extends('layouts.app')
@section('content') --}}
    <div class="flex flex-col space-y-1 p-2"
        x-show="!isOpen"
    >
        <h1 class="text-gray-900 text-center">Option</h1>

        <a href="{{ route('create-template') }}"
            class="p-3 bg-blue-500 text-blue-50 text-center"
        >Create Template</a>

        <a href="{{ route('create-from-template') }}"
            class="p-3 bg-blue-500 text-blue-50 text-center"
        >Create Post from Existing Template</a>

        <button
            class="p-3 bg-blue-500 text-blue-50"
            @click="isOpen = !isOpen"
        >Create Blank Post</button>

    </div>
{{-- @endsection --}}