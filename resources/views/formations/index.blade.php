@extends('layouts.app')
@section('content')
    <div
        class="flex-row space-y-2 mt-5 ml-7"
    >
        <h1 class="text-2xl">Daftar Kehadiran</h1>
        <hr class="border-solid border-2">
    
        @livewire('in-duty')
    </div>
@endsection