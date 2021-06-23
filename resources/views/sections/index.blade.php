@extends('layouts.app')
@section('content')
<div class="flex-row space-y-2 text-center w-1/4 bg-green-100">
    <h1
        class="block"
    >
        user will pick which section to do
    </h1>
    
    <a
        href="{{ url('reports/arrival') }}"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
    >
        terminal kedatangan
    </a>

    <a
        href="{{ url('reports/departure') }}"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
    >
        terminal keberangkatan
    </a>

    <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
    >
        terminal selatan
    </a>


</div>
@endsection