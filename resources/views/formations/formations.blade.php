@extends('layouts.app')
@section('content')
    <div class="flex-row space-y-4 m-12">
        
        @livewire('presence')
        @livewire('report-content')

    </div>
    

@endsection