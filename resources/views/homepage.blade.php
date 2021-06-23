@extends('layouts.app')

@section('content')
<div class="flex-row space- text-center w-1/4 bg-green-100">
    <h1
        class="block"
    >
        this will be a profile page?
    </h1>
    
    <a
        href="{{ route('create-laporan-absensi') }}"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
    >
        create today's report
    </a>


</div>
@endsection