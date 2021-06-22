@extends('layouts.app')
@section('content')
    
<div class="m-2 p-5">
    @include('post.includes.header')
    {{-- @include('livewire.absensi.shift-schedule') --}}
    @livewire('shift-schedule')
    @livewire('show-formations')

</div>
@endsection
